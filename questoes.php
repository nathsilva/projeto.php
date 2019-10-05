<?php 
include "QuestoesDAO.php";

$questoesDAO = new QuestoesDAO();
$listinha = $questoesDAO-> buscar();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
</head>
<body><nav class="navbar navbar-expand-lg navbar-light" style= "background-color:#00BFFF " >
	<a class="navbar-brand" href="#">Projeto </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Página Inicial <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class = "col-2">
			<ul class="nav flex-column nav-pills vertical">
				<li class="nav-item">
					<a class="nav-link active" href="#" style= "background-color:#ffa31a ">Ativo </a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Desativado</a>
				</li>
				<li class="nav-item">
					<a class="nav-link usuario.php" href="#" tabindex="-1" aria-disabled="true">Usuários</a>
				</li>
			</ul>
		</div>

<div class= "col-10">


			<h3>Questões</h3>

			<button class="btn btn-primary"  data-toggle="modal" data-target="#modalnovo" style= "background-color:#ffa31a ">
				
			Nova questão
		</button>
			<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Questões Cadastradas</th>
      <th scope="col">Enunciado</th>
      <th scope="col">Tipo de questões</th>
    </tr>
  </thead>
 <?php foreach($listinha as $questoes): ?>
				<tr>
					<td><?=  $questoes->idUsuario ?></td>
					<td><?=  $questoes->enunciado ?></td>
					<td><?=  $questoes->tipo ?></td>
					<td>
					<td>
						<a type="button" class="btn btn-dark" href="UsuarioController.php?acao=apagar&id=<?=  $questoes->idUsuario ?>">
							<i class="fas fa-trash-alt">
							</i></a>
						<a type="button" class="btn btn-dark">
							<i class="fas fa-edit"> 
							</i>
						</a>
						<a type="button" class="btn btn-dark alterar-senha" data-toggle="modal" data-target="#modalsenha" data-id="<?=  $questoes->idUsuario ?>">
						<i class="fas fa-key"></i>
					</a>
					</td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
	
</div>


<!-- Modal primordial-->
<div class="modal fade" id="modalnovo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastre uma Questão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="QuestoesController.php?acao=inserir" method="POST">
  <div class="form-group">

  	<label for="exampleInputEmail1">Questão</label>
    <input type="name" name="nome" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Insira a questão">

    <label for="exampleInputEmail1">Enunciado</label>
    <input type="name" name="nome" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Insira o Enunciado da questão">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tipo de questão</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Insira um dos tipos da questão">

    </div>
</div>
   <div class="modal-footer">
   	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

  <button type="submit" class="btn btn-primary">Salvar</button>
   	
       </div>

    </div>
    </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>