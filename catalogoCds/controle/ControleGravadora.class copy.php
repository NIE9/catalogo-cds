<?php
include $_SERVER['DOCUMENT_ROOT']."/catalogoCds/modelo/Gravadora.class.php";

class ControleGravadora{
	
	/*public function inserirArtista($dados){
		$contato = new Artista(null,$dados['nome']);
		$contato->inserirArtista();
		header("location:../visao/pesquisar.php");
	}*/
	
	public function inserir($dados){
		$gravadora = new Gravadora(null,$dados['identificacao']);
		$gravadora->inserir();
		header("location:../visao/pesquisar.php");
	}

	public function listarTodos(){
		$gravadora = new gravadora();
		$gravadoras = $gravadora->listarTodos();
		return $gravadoras;
	}
	
	public function listarUm($id){
		$gravadora = new gravadora($id,null,null);
		$gravadora->listarUm();
		return $gravadora;
	}
	
	public function excluir($id){
		$gravadora = new gravadora($id,null,null);
		$gravadora->excluir();
	}
	
	public function alterar($dados){
		$gravadora = new gravadora($dados['id'],$dados['nome'],$dados['numero']);
		$gravadora->alterar();
		header("location: pesquisar.php");
	}
	
	
}

?>