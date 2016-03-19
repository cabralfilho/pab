<?php
	//arquivo de configuração do sistema
	require_once "_system/Config.inc.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	<!--// BOOTSTRAP //-->
	<link rel="stylesheet" href="<?= BASE; ?>/_css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?= BASE; ?>/_css/admin.css">
</head>
<body>
<?php
	include THEME.'/inc/header.inc.php';
		$app = new App;
		$app->run();
	include THEME.'/inc/footer.inc.php';
?>
</body>
	<script src="<?= BASE; ?>/_cdn/jquery.js"></script>
	<script src="<?= BASE; ?>/_cdn/bootstrap.min.js"></script>
	<script src="<?= BASE; ?>/_cdn/funcoes.js"></script>
</html>