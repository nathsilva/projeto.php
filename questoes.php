<?php 
require("verificarLogin.php");

include "QuestoesDAO.php";

$questoesDAO = new QuestoesDAO();
$listinha = $questoesDAO-> buscar();

include "cabecalho.php";
include "menu.php";
?>


<div class= "col-10">


			<h3>Questões</h3>

			<button class="btn btn-primary"  data-toggle="modal" data-target="#modalnovo" style= "background-color:#ff00ff ">
				
			Nova questão
		</button>
			<table class="table">
  <thead class="" style= "background-color:#ff00ff">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Enunciado</th>
      <th scope="col">Tipo de questões</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
 <?php foreach($listinha as $questoes): ?>
				<tr>
					<td><?=  $questoes->idQuestoes ?></td>
					<td><?=  $questoes->enunciado ?></td>
					<td><?=  $questoes->tipo ?></td>
					<td>
						<a type="button" class="btn btn-dark" href="QuestoesController.php?acao=apagar&id=<?=  $questoes->idQuestoes ?>">
							<i class="fas fa-trash-alt">
							</i>
            </a>

						<a type="button" class="btn btn-dark editar"  href="" data-toggle="modal" data-target="#modaleditar" data-id="<?=  $questoes->idQuestoes ?>">
							<i class ="fas fa-edit"> </i>
						</a>
          
						<a type="button" class="btn btn-dark" href="\alternativas?questao=<?=$questoes->idQuestoes?>"><i class="fas fa-list-ul"></i>
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

    <label for="exampleInputEmail1">Enunciado</label>
    <input type="name" name="enunciado" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Insira o Enunciado da questão">
    
  </div>
  <div class="form-group">
    <label for="exampleInputType1">Tipo de questão</label>
    <input type="name" name="tipos" class="form-control" id="exampleInputType1" placeholder="Insira um dos tipos da questão">

    </div>
</div>
   <div class="modal-footer">
   	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

  <button type="submit" class="btn btn-primary">Salvar</button>
   	</form>
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
        <form action="QuestoesController.php?acao=editar" method="POST">
    <input type="hidden" name="id_editar-questao" id= "campo-id-questao" >
  <div class="form-group">

    <label for="exampleInput">Editar enunciado</label>
    <input type="name" name="enunciado" class="form-control" id="idQuestoes" aria-describedby="NameHelp" placeholder="Edite Enunciado">

    <label for="exampleInput">Tipo</label>
    <input type="tipo" name="tipo" class="form-control" id="idQuestoes" aria-describedby="NameHelp" placeholder="Edite Tipo">
</div>
  <div class="form-group">
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
  var botao = document.querySelector(".editar-questao");
  botao.addEventListener("click", function(){
    var campo = document.querySelector("#campo-id-questao");
    campo.value = botao.getAttribute("data-id");
  });


</script>
</html>

