<?php
include $_SERVER['DOCUMENT_ROOT']."/catalogoCds/db/MySQL.class.php";

	class artista{
		private $id;
		private $titulo;
		private $ano;
		private $idArtista;
		private $idEstilo;
		private $idGravadora;
		
		
		public function __construct($id = null, $titulo = null, $ano = null, $idArtista = null, $idEstilo = null, $idGravadora = null){
			$this->id = $id;
			$this->titulo = $titulo;
			$this->ano = $ano;
			$this->idGravadora = $idGravadora;
			$this->idArtista = $idArtista;
			$this->idEstilo = $idEstilo;
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getTitulo(){
			return $this->titulo;
		}
		
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		
		public function inserir(){
			$con = new MySQL();
			$sql = "INSERT INTO cd (titulo, ano, idGravadora, idArtista, idEstilo) VALUES ('$this->titulo', '$this->ano', '$this->idGravadora', '$this->idArtista', idEstilo)";
			$con->executa($sql);
		}
	}
?>