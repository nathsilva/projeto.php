<?php 

include "QuestoesDAO.php";

$acao = $_GET["acao"];

switch ($acao){
	case 'inserir':
		$questoes = new QuestoesDAO();
		$questoes->nome = $_POST[""];
		$questoes->enunciado = $_POST["enunciado"];
		$questoes->tipos = $_POST["tipos"];
		$questoes->inserir();
		break;

	case 'apagar':
		$questoes = new QuestoesDAO();
		$id = $_GET["id"];
		$questoes->apagar($id);
		break;

	default:

		break;


}




 ?>