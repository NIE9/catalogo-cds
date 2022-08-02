<?php
include $_SERVER['DOCUMENT_ROOT']."/catalogoCds/db/MySQL.class.php";

	class artista{
		private $idArtista;
		private $nome;
		
		
		public function __construct($idArtista = null, $nome = null){
			$this->IdArtista = $id;
			$this->nome = $nome;
		}
		
		public function getIdArtista(){
			return $this->idArtista;
		}
		
		public function setIdArtista($idArtista){
			$this->id = $idArtista;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function inserir(){
			$con = new MySQL();
			$sql = "INSERT INTO artista (nome) VALUES ('$this->nome')";
			$con->executa($sql);
		}
		
		public function listarTodos(){
			$con = new MySQL();
			$sql = "SELECT * FROM Artista";
			$resultados = $con->consulta($sql);
			if(!empty($resultados)){
				$artistas = array();
				foreach($resultados as $resultado){
					$artista = new artista();
					$artista->setIdArtista($resultado['idArtista']);
					$artista->setNome($resultado['nome']);
					$artistas[] = $artista;
				}
				return $artistas;
			}else{
				return false;
			}
		}
		
		public function listarUm(){
			$con = new MySQL();
			$sql = "SELECT * FROM artista WHERE id = $this->id";
			$resultado = $con->consulta($sql);
			if(!empty($resultado)){
					$this->nome = $resultado[0]['nome'];
					$this->numero = $resultado[0]['numero'];
			}else{
				return false;
			}
		}
		
		public function excluir(){
			$con = new MySQL();
			$sql = "DELETE FROM artista WHERE id = $this->id";
			$con->executa($sql);
		}
		
		public function alterar(){
			$con = new MySQL();
			$sql = "UPDATE artista SET nome = '$this->nome', numero = '$this->numero' WHERE id = $this->id";
			$con->executa($sql);
		}
		
		
	}
?>