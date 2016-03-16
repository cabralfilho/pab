<?php
	//configuraçoes do sistema
	define("BASE", "http://localhost/painel-admin-bootstrap");
	define("ADMIN", BASE.DIRECTORY_SEPARATOR.'admin');
	define("REQUIRE_PATH", "_system");
	define("THEME", REQUIRE_PATH.'/views');

	//Tipos de erro
	define("MSG_WARNING", "warning");
	define("MSG_SUCCESS","success");
	define("MSG_ALERT", "alert");
	define("MSG_ERROR", "error");

	/**
	*	@param String $Class;
	* 	Carrega de forma automatica a classe chamada no sistema
	**/
	function __autoload($Class)
	{
		$local_dirs = ['controllers', 'models'];
		$local_system = '_system';
		$verifica_dirs = false;
		
		foreach($local_dirs as $dirs)
		{
			if(is_dir("{$local_system}") && file_exists("{$local_system}/{$dirs}/{$Class}.class.php")):
				include "{$local_system}/{$dirs}/{$Class}.class.php";
				$verifica_dirs = true;
			endif;
		}

		if(!$verifica_dirs)
		{
			exit("A classe ::<b>{$Class}</b> não foi encontrada no sistema!");
		}
	}

	function setErrors($Mensagem, $TipoErro)
	{
		echo "<span class=\"mensagem {$TipoErro} radius\">{$Mensagem}</span>";
	}
?>