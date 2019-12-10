<?php
require("verificarLogin.php");

include "AlternativasDAO.php";

$AlternativasDAO = new AlternativasDAO();
$lista = $AlternativasDAO->buscar();

include "cabecalho.php";
include "menu.php";
?>

		<div class= "col-10">


			<table class="table">
				<thead class="thead-dark">
				<tr>
          <?php foreach($lista as $alternativas): ?>
					<th> <?= $alternativas->idAlternativa ?></th>
					<th> <?= $alternativas->texto ?></th>
					<th> <?= $alternativas->idQuestao?></th>
          <th> <?= $alternativas->correta?></th>
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
        <h5 class="modal-title" id="exampleModalLabel">Insira seus dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="UsuarioController.php?acao=inserir" method="POST">
  <div class="form-group">

  	<label for="exampleInputEmail1">Nome</label>
    <input type="name" name="n
    ome" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Insira seu nome">
</div>
  <div class="form-group">

    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Insira sua Senha">

  </div>
</div>
   <div class="modal-footer">
   	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

  <button type="submit" class="btn btn-primary">Salvar</button>
   	
       </div>
     </form>

    </div>
    </div>
    </div>


        

  <!-- Modal Trocar senha-->
<div class="modal fade" id="modalsenha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="UsuarioController.php?acao=trocarsenha" method="POST"> 
        	<input type="hidden" name="id" id= "campo-id" >
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control" id="id_senha" placeholder="Nova senha">
  </div>
   <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>

        </form>
  </div>
  
      </div>
      </div>
      </div>
     
      </div>
    </div>
  </div>
</div>

<!-- Modal editar-->
<div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="UsuarioController.php?acao=editar" method="POST">
    <input type="hidden" name="id_editar" id= "campo-id" >
  <div class="form-group">

    <label for="exampleInputEmail1">Nome</label>
    <input type="name" name="nome" class="form-control" id="id_nome" aria-describedby="NameHelp" placeholder="Insira seu nome">
</div>
  <div class="form-group">

    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="id_email" aria-describedby="emailHelp" placeholder="Insira seu email">
    
  </div>

   <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

  <button type="submit" class="btn btn-primary">Salvar</button>
    
       </div>
     </form>

    </div>
    </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">
	var botao = document.querySelector(".alterar-senha");
	botao.addEventListener("click", function(){
		var campo = document.querySelector("#campo-id");
		campo.value = botao.getAttribute("data-id");
	});


</script>

<script type="text/javascript">
  var botao = document.querySelector(".editar-alternativa");
  botao.addEventListener("click", function(){
    var campo = document.querySelector("#campo-id");
    campo.value = botao.getAttribute("data-id");
  });

</script>

</html>