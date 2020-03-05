<?php $recurso = $_SERVER["PATH_INFO"] ?>
<div class="container-fluid" >
	<div class="row">
		<div class = "col-2">
			<ul class="nav flex-column nav-pills vertical">
				<li class="nav-item">
					<a style = "background-color:#ee82ee" class="nav-link <?= ($recurso=='/usuario')?'active':''?>" href="/usuario">Usuário</a>
				</li>
				
				<li class="nav-item">
					<a  style = "background-color:#da70d6" class="nav-link <?= ($recurso=='/questoes')?'active':''?>" href="/questoes">Questões</a>
				</li>
				<li class="nav-item">
					<a style = "background-color:#dda0dd" class="nav-link <?= ($recurso=='/alternativas')?'active':''?>" href="/alternativas">Alternativas</a>
				</li>
				<li class="nav-item">
					<a style = "background-color:#9370db" class="nav-link <?= ($recurso=='/ranking')?'active':''?>" href="/ranking">Ranking</a>
				</li>
			</ul>
		</div>
