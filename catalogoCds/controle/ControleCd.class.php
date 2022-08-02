<?php
include $_SERVER['DOCUMENT_ROOT']."/catalogoCds/modelo/Contato.class.php";

class ControleCD{
	
	public function cadastrarCd($dados){
		$sql = "SELECT * FROM cd WHERE";
		if($dados['titulo']) {
			$sql = $sql.'titulo LIKE '%".$dados['titulo']."% AND";
		}
		if($dados['ano']) {
			$sql = $sql.'titulo LIKE '%".$dados['titulo']."% AND";
		}
		if($dados['idGravadora']) {
			$sql = $sql.'titulo LIKE '%".$dados['titulo']."% AND";
		}
		if($dados['IdEstilo']) {
			$sql = $sql.'titulo LIKE '%".$dados['titulo']."% AND";
		}
		if($dados['artista']) {
			$controleArtista = New ControleArtista();
			$listaIdArtista = $controleArtista->pesquisaArtista($dados['artista']);
			$idArtista = '';
			foreach ($listaIdArtista as $artista){
				if($artista == $idArtista[0]) {
					$idArtista = $idArtista."".$artista->getIdArtista();
				}else{
					$idArtista = $idArtista.", ".$artista->getIdArtista();
				}
			}
			$sql = $sql."artista_idArtistas.")";
		}else {
			$sql = $sql." TRUE";
		}
		return $sql;
	}
	
	public function inserir($dados){
		$cd = new Cd(null,$dados['titulo'],$dados['ano'],$dados['idGravadora'],$dados['idArtista']);
		$cd->inserir();
		header("location:../visao/pesquisar.php");
	}
	
}

?>