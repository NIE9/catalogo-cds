<?php
include $_SERVER['DOCUMENT_ROOT']."/catalogoCds/modelo/Estilo.class.php";

class ControleEstilo{
	
	/*public function inserirArtista($dados){
		$contato = new Artista(null,$dados['nome']);
		$contato->inserirArtista();
		header("location:../visao/pesquisar.php");
	}*/
	
	public function inserir($dados){
		$estilo = new Estilo(null,$dados['identificacao']);
		$estilo->inserir();
		header("location:../visao/pesquisar.php");
	}
	
	public function listarTodos(){
		$estilo = new estilo();
		$estilos = $estilo->listarTodos();
		return $estilos;
	}
	
	public function listarUm($id){
		$estilo = new estilo($id,null,null);
		$estilo->listarUm();
		return $estilo;
	}
	
	public function excluir($id){
		$estilo = new estilo($id,null,null);
		$estilo->excluir();
	}
	
	public function alterar($dados){
		$estilo = new estilo($dados['id'],$dados['nome'],$dados['numero']);
		$estilo->alterar();
		header("location: pesquisar.php");
	}
	
	
}

?>