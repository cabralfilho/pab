<?php
	class App{
		//usado para retorna a url pelo metodo
		private $Url;
		private $Explode;
		private $System = [];

		public function __construct()
		{
			$this->Url = (isset($_GET['url']) ? $_GET['url'] : 'home');
			self::setUrl();
			self::createSystem();
		}

		//recupera a url do htaccess passado na url
		private function setUrl()
		{
			$this->Explode = explode('/', $this->Url);
			$this->Explode[1] = self::setSystem()['controller'];
			$this->Explode[2] = self::setSystem()['parametro'];
			if(count($this->Explode) >= 4):
				die('error system not found');
			endif;
 			return $this->Explode;
		}

		public function setSystem(){
			$d['action'] 		= $this->Explode[0];
			$d['controller'] 	= (isset($this->Explode[1]) ? $this->Explode[1] : 'index');
			$d['parametro'] 	= (isset($this->Explode[2]) && $this->Explode[1]!='index' ? (int) $this->Explode[2] : (string) 'page');
			return $d;
		}

		//monta a url e verifica arquivos nao existentes
		public function createSystem(){
			$this->System['verificacao'] 		= 'false';
			$this->System['arquivo'] 		= self::setSystem()['controller'];
			if(is_dir(THEME.DIRECTORY_SEPARATOR.$this->Explode[0]) && file_exists(THEME.DIRECTORY_SEPARATOR.$this->Explode[0].DIRECTORY_SEPARATOR.$this->Explode[1].'.php')){
				$this->System['pagina'] 		= THEME.DIRECTORY_SEPARATOR.$this->Explode[0].DIRECTORY_SEPARATOR.$this->Explode[1].'.php';
				$this->System['verificacao'] 	= 'true';
			}
			return $this->System;
		}

		//inicia a aplicacao
		public function run()
		{
			if($this->System['verificacao']=='false')
			{
				setErrors("O controller <b>{$this->System['arquivo']}.php</b> não foi encontrado", MSG_WARNING);
				exit();
			}
			include $this->System['pagina'];
		}
	}