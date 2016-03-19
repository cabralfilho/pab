<h1>Publicar categoria</h1>
<?php
	$form = new Forms;
	$form->acao('lalala.php');
	$form->metodo('post');
	$form->enctype = true;
	

	echo '<pre>';
	
	$form->criar('text','nome');
	$form->criar('password','senha');
	$form->criar('file','foto');
	$form->criar('hidden','acao');

	$form->save();

	print_r($form);
?>