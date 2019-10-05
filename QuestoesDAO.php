<?php 

class QuestoesDAO{
	public $idQuestao;
	public $enunciado;
	public $tipo;

	private $con;

	function __construct(){
		$rs = $this->con = mysqli_connect("localhost", "root", "", "projetopw");
	}
	public function apagar ($id){
		$sql = "DELETE FROM questoes WHERE idQuestao=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location = questoes.php");
		else echo $this->con->error; 
	}

	public function inserir(){
		$con = mysqli_connect("localhost: 3307", "root", "", "projetopw");
		$sql = "INSERT INTO questoes VALUES (0, '$this->idQuestao', '$this->enunciado', '$this->tipo')";

		$rs = $this->con->query($sql);

		if ($rs)
			header("Location: questoes.php");

		else
		 echo $this->con->error;

	}
	public function buscar(){
		$con = mysqli_connect("localhost", "root", "", "projetopw");
		$sql = "SELECT * FROM `questoes` WHERE 1";
		$rs = $this->con->query($sql);
		$listinha = array();
		while ($linha = $rs->fetch_object()){
			$listinha[] = $linha;
		}
		return $listinha;
	}
}

 ?>