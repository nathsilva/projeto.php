<?php 

class QuestoesDAO{
	public $idQuestoes;
	public $enunciado;
	public $tipo;

	private $con;

	function __construct(){
		$rs = $this->con = mysqli_connect("localhost:3306", "root", "etecia", "projetopw");
	}
	public function apagar ($id){
		$sql = "DELETE FROM questoes WHERE idQuestoes=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location: /questoes");
		else echo $this->con->error; 
	}
    ///////ERRO//////
	public function editar ($id){
		$sql = "SELECT FROM questoes WHERE idQuestoes=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location: /questoes");
		else echo $this->con->error; 
	}
    ////////ERRO////
	public function inserir(){
		$sql = "INSERT INTO questoes VALUES (0, '$this->enunciado', '$this->tipo')";

		$rs = $this->con->query($sql);

		if ($rs)
			header("Location: /questoes");

		else
		 echo $this->con->error;

	}
	public function buscar(){
		$sql = "SELECT * FROM `questoes` WHERE 1";
		$rs = $this->con->query($sql);
		$listinha = array();
		while ($linha = $rs->fetch_object()){
			$listinha[] = $linha;
		}
		return $listinha;
	}
	public function buscarPorId(){
		$sql = "SELECT * FROM questoes WHERE idQuestao=$this->id";
		$rs = $this->con->query($sql);
		if ($linha = $rs->fetch_object()){
			$this->enunciado = $linha->enunciado;
			$this->tipo = $linha->tipo;
		}
	}
}

 ?>