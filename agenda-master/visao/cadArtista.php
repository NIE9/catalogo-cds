cadContato.php<?php
if(isset($_POST['botao']) && $_POST['botao']=="Adicionar"){
	include $_SERVER['DOCUMENT_ROOT']."/agenda/controle/ControleContato.class.php";
	$cControle = new ControleContato();
	$cControle->inserir($_POST);
}
?>
<html lang='pt-br'>
<head>
<meta charset='utf-8'>
<title>Catálogo de CDs</title>
</head>
<body>
<form method='post' action='cadEstilo.php'>
	Nome: <input type='text' name='nome'>
	<br>
	Numero: <input type='tel' name='numero'>
	<br>
	<input type='submit' name='botao' value='Adicionar'>
</form>
<a href='../index.html'>Voltar</a>
</body>
</html>