<?php
if(isset($_POST['botao']) && $_POST['botao']=="Adicionar"){
	include $_SERVER['DOCUMENT_ROOT']."catalogoCds\controle\ControleCatalogo.class.php";
	$cControle = new ControleCatalogo();
	$cControle->inserir($_POST);
}
?>
<html lang='pt-br'>
	<head>
		<meta charset='utf-8'>
		<title>Catálogo de CDs</title>
	</head>
	<body>
		<form method='post' action='cadArtista.php'>
			Nome do artista: <input type='text' name='nome'>
			<br>
			<input type='submit' name='botao' value='Adicionar'>
		</form>
		<a href='../index.html'>Voltar</a>
	</body>
</html>