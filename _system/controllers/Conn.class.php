<?php
	class Conn{
		private static $conn;

		/**
		* @param String $conn;
		* classe responsavel por fazer a conexao com banco de dados
		*/
		private function conn(){
			if(is_null(self::$conn)){
				try {
					$dns = 'mysql:host='.DBHOST.';dbname='.DBNAME;
					self::$conn = new PDO($dns, DBUSER, DBPASS);
					self::$conn->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
				} catch (PDException $e) {
					setErrors("Erro na linha {$e->getLine()} mensagem :: $e->getMessage()", MSG_ERROR);
				}
			}
			return self::$conn;
		}

		//pattern singleton
		public function getConn(){
			return self::conn();
		}
	}