<?php
if(isset($_POST['botao']) && $_POST['botao']=="Adicionar"){
	include $_SERVER['DOCUMENT_ROOT']."/catalogoCds/controle/ControleGravadora.class.php";
	$Controle = new ControleGravadora();
	$Controle->inserir($_POST);
}
?>
<html lang='pt-br'>
	<head>
		<meta charset='utf-8'>
		<title>Catálogo de CDs</title>
	</head>
	<body>
		<form method='post' action='cadGravadora.php'>
			Nome da gravadora: <input type='text' name='nome'>
			<br>
			<input type='submit' name='botao' value='Adicionar'>
		</form>
		<a href='../index.html'>Voltar</a>
	</body>
</html>