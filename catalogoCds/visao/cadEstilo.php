<?php
if(isset($_POST['botao']) && $_POST['botao']=="Adicionar"){
	include $_SERVER['DOCUMENT_ROOT']."/catalogoCds/controle/ControleEstilo.class.php";
	$Controle = new ControleEstilo();
	$Controle->inserir($_POST);
}
?>
<html lang='pt-br'>
	<head>
		<meta charset='utf-8'>
		<title>Catálogo de CDs</title>
	</head>
	<body>
		<form method='post' action='cadEstilo.php'>
			Estilo: <input type='text' Estilo='nome'>
			<br>
			<input type='submit' name='botao' value='Adicionar'>
		</form>
		<a href='../index.html'>Voltar</a>
	</body>
</html>