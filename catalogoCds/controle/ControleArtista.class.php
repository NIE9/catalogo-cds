<?php
include $_SERVER['DOCUMENT_ROOT']."/agenda/modelo/Contato.class.php";

class ControleCatalogo{
	
	public function inserirArtista($dados){
		$contato = new Artista(null,$dados['nome']);
		$contato->inserirArtista();
		header("location:../visao/pesquisar.php");
	}
	
	public function inserirEstilo($dados){
		$contato = new Estilo(null,$dados['identificacao']);
		$contato->inserirEstilo();
		header("location:../visao/pesquisar.php");
	}
	
	public function inserirGravadora($dados){
		$contato = new Artista(null,$dados['nome']);
		$contato->inserir();
		header("location:../visao/pesquisar.php");
	}

	public function inserirCd($dados){
		$contato = new Artista(null,$dados['nome']);
		$contato->inserir();
		header("location:../visao/pesquisar.php");
	}
	
	public function listarTodos(){
		$contato = new Contato();
		$contatos = $contato->listarTodos();
		return $contatos;
	}
	
	public function listarUm($id){
		$contato = new Contato($id,null,null);
		$contato->listarUm();
		return $contato;
	}
	
	public function excluir($id){
		$contato = new Contato($id,null,null);
		$contato->excluir();
	}
	
	public function alterar($dados){
		$contato = new Contato($dados['id'],$dados['nome'],$dados['numero']);
		$contato->alterar();
		header("location: pesquisar.php");
	}
	
	
}

?>