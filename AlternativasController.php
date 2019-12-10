<?php 

include "AlternativaDAO.php";

$acao = $_GET["acao"];

switch ($acao){
	case 'inserir':
		$alternativas = new AlternativasDAO();
		$alternativas->idAlternativa = $_POST["idAlternativa"];
		$alternativas->texto = $_POST["texto"];
		$alternativas->idQuestao = $_POST["idQuestao"];
		$alternativas->correta = $_POST["correta"];
		$alternativas->inserir();
		break;

	case 'apagar':
		$questoes = new AlternativasDAO();
		$id = $_GET["id"];
		$questoes->apagar($id);
		break;

	case 'editar':
		$alternativa = new AlternativasDAO();
		$alternativa->id = $_POST["id"];
		$alternativa->texto = $_POST["texto"];
		$alternativa->tipo = $_POST["tipo"];
		$alternativa->editar();
		break;

	default:

		break;


}




 ?>