<?php
include $_SERVER['DOCUMENT_ROOT']."/catalogoCds/modelo/Artista.class.php";

class ControleArtista{
	
	public function inserir($dados){
		$artista = new Artista(null,$dados['nome']);
		$artista->inserir();
		header("location:../visao/pesquisar.php");
	}
	
	public function listarTodos(){
		$artista = new Artista();
		$artistas = $artista->listarTodos();
		return $artistas;
	}
	
	public function listarUm($id){
		$artista = new Artista($id,null);
		$artista->listarUm();
		return $artista;
	}
	
	public function excluir($id){
		$artista = new Artista($id,null);
		$artista->excluir();
	}
	
	public function alterar($dados){
		$artista = new Artista($dados['id'],$dados['nome'];
		$artista->alterar();
		header("location: pesquisar.php");
	}
	
	
}

?>