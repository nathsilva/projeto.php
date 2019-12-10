<?php 

class AlternativasDAO{
	public $idAlternativa;
	public $texto;
	public $idQuestao;
	public $correta;

	private $con;

	function __construct(){
		$rs = $this->con = mysqli_connect("localhost:3306", "root", "etecia", "projetopw");
	}
	public function apagar ($id){
		$sql = "DELETE FROM questoes WHERE idQuestoes=$id";
		$rs = $this->con->query($sql);
		if ($rs) header("Location: /alternativas");
		else echo $this->con->error; 
	}

	public function inserir(){
		$sql = "INSERT INTO questoes VALUES (0, '$this->enunciado', '$this->tipo')";

		$rs = $this->con->query($sql);

		if ($rs)
			header("Location: /alternativas");

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
	public function editar(){
		$sql = "UPDATE alternativas SET texto='$this->texto', correta='$this->correta' WHERE idAlternativa=$this->id";
		$rs = $this->con->query($sql);
		if ($rs) 
			header("Location: \alternativas");
		else 
			echo $this->con->error;
	}
	

}

 ?>