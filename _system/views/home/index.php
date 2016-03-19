<?php
	
	$forms = new Forms;

	$forms->textarea('nome');
	$forms->textarea('conteudo', 'meu nome é rafel');
	$forms->text('title',"titulo do campo");

	$forms->save();