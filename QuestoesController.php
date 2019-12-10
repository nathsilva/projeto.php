<?php 

include "QuestoesDAO.php";

$acao = $_GET["acao"];

switch ($acao){
	case 'inserir':
		$questoes = new QuestoesDAO();
		$questoes->idQuestao = $_POST["idQuestoes"];
		$questoes->enunciado = $_POST["enunciado"];
		$questoes->tipo = $_POST["tipo"];
		$questoes->inserir();
		break;

	case 'apagar':
		$questoes = new QuestoesDAO();
		$id = $_GET["id"];
		$questoes->apagar($id);
		break;

	case 'editar':
		$questao = new QuestoesDAO();
		$questao->enunciado = $_POST["enunciado"];
		$questao->tipo = $_POST["tipo"];
		$questao->editar();
		break;
 
	default:

		break;


}




 ?>