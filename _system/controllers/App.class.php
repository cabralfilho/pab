<?php
	class App{
		//usado para retorna a url pelo metodo
		private $Url;
		private $Explode;
		private $System;

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

		public function createSystem(){
			$retorno = false;
			if(is_dir(THEME.DIRECTORY_SEPARATOR.$this->Explode[0]) && file_exists(THEME.DIRECTORY_SEPARATOR.$this->Explode[0].DIRECTORY_SEPARATOR.$this->Explode[1].'.php')){
				include THEME.DIRECTORY_SEPARATOR.$this->Explode[0].DIRECTORY_SEPARATOR.$this->Explode[1].'.php';
				$retorno = true;
			}
			if(!$retorno)
			{
				setErrors("erro ao carregar a pagina <b>{$this->Explode[1]}.php</b>", MSG_ERROR);
			}
			return $this->System = $retorno;
		}

		public function run()
		{
			return $this->System;
		}
	}