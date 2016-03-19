<?php
	class Forms{
		public $Form;
		public $Textarea;
		public $Text;
		public $Files;
		public $Select;

		public function __construct(){
			$this->create();
		}

		public function textarea($atributo, $valor = false)
		{
			$valor = (!empty($valor) ? $valor : '');
			$this->Textarea .= '<textarea name="'.$atributo.'">'.$valor.'</textarea>';
		}

		public function text($atributo, $valor = false, $placeholder = false)
		{
			$valor = (!empty($valor) ? 'value="'.$valor.'"' : '');
			$this->Text .= '<input type="text" name="'.$atributo.' '.$valor.' '.$placeholder.'"/>';
		}

		public function select($atributo, array $options){
			$valor = (!empty($valor) ? 'value="'.$valor.'"' : '');
			$this->Select = '<select name="'.$valor.'">';
			$this->Select .= '<option '.$valor.'></option>';
		}

		public function Files(){
		}

		public function files(){}

		public function create(){
			$this->Form .= $this->Text."\n";
			$this->Form .= $this->Select."\n";
			$this->Form .= $this->Files."\n";
			$this->Form .= $this->Textarea;
			return $this->Form;
		}

		public function save(){
			echo self::create();
		}
	}