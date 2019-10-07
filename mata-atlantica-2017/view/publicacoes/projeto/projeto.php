<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php require_once '../../../head.php'; ?>
</head>

<body>

	<?php require_once '../../../header.php'; ?>

	<main>
		<div class="row">
			<ul id="dropdown1" class="dropdown-content">
				<li><a href="#!">one</a></li>
				<li><a href="#!">two</a></li>
				<li class="divider"></li>
				<li><a href="#!">three</a></li>
			</ul>
			<nav>
				<div class="row white-text">
					<form class="col m4 s6 right">
						<div class="input-field">
							<i class="material-icons prefix">search</i>
							<input id="search" type="text" required>
							<label for="search">Buscar</label>
						</div>
					</form>
					<ul class="left col s6">
						<!-- Dropdown Trigger -->
						<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Filtrar<i class="material-icons right">arrow_drop_down</i></a></li>
					</ul>
				</div>
			</nav>
		</div>

		<div class="slider margin-top-nav">
			<ul class="slides">
				<li>
					<img src="img/publicacoes/noticia/mpba.jpg"> <!-- random image -->
					<div class="caption center-align">
						<h3>O MEIO AMBIENTE PEDE AJUDA!</h3>
						<h5 class="light grey-text text-lighten-3">Proteja, ajude e seja um amigo da natureza !!!</h5>
					</div>
				</li>
				<li>
					<img src="img/publicacoes/noticia/mpba1.jpg"> <!-- random image -->
					<div class="caption left-align">
						<h3>O MEIO AMBIENTE PEDE AJUDA!!</h3>
						<h5 class="light grey-text text-lighten-3">Uma contribuição do Ministério publico do Meio Ambiente...</h5>
					</div>
				</li>
				<li>
					<img src="img/publicacoes/projeto/livro2.jpg"> <!-- random image -->
					<div class="caption right-align">
						<h3>O MEIO AMBIENTE PEDE AJUDA!!</h3>
						<h5 class="light grey-text text-lighten-3">I Fórum de Eco-Nomia da Mata Atlântica</h5>
					</div>
				</li>
				</li>
			</ul>
		</div>

		<div class="col s12">
			<h3 class="header center">Projetos</h3>
			<div class="hr"></div>
		</div>

		<div class="row">
			<div class="col m4 s12">
				<div class="card medium hoverable">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="img/publicacoes/projeto/livro.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Projeto Serra da Jibóia<i class="material-icons right">more_vert</i></span>
						<p><a href="#">Saiba Mais</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Projeto Serra da Jibóia<i class="material-icons right">close</i></span>
						<p>O Projeto Serra da Jibóia, idealizado e conduzido pelo Grupo Ambientalista da Bahia (Gambá) e Universidade Federal do Recôncavo da Bahia, realizou estudos que comprovaram a riqueza biológica do último grande remanescente florestal do Recôncavo Sul Baiano. Baseado neles, propõe a criação de um Parque para proteger o maciço florestal mais conservado e uma Área de Proteção Ambiental (APA) para potencializar o uso sustentável da terra em seu entorno, formando assim um mosaico de UCs, junto com a Reserva Particular de Proteção Ambiental Guarirú, unidade de conservação já existente na área.</p>
					</div>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card medium hoverable">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="img/publicacoes/projeto/livro1.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Restauração Florestal do Corredor Ecológico Pau Brasil – Monte Pascoal<i class="material-icons right">more_vert</i></span>
						<p><a href="#">Saiba Mais</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Restauração Florestal do Corredor Ecológico Pau Brasil – Monte Pascoal<i class="material-icons right">close</i></span>
						<p>Implantado em 2009, tem como foco contribuir para a recomposição da cobertura vegetal e da conectividade entre o Parque Nacional do Pau Brasil e o Parque Nacional Monte Pascoal, no Sul da Bahia. Para mais informações acesse: http://ibio.org.br/pb/projetos/restauracao-florestal-do-corredor-ecologico-pau-brasil-monte-pascoal-ba</p>
					</div>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card medium hoverable">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="img/publicacoes/projeto/livro2.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Projeto Mata Atlântica Interiorana da Bahia - UESC<i class="material-icons right">more_vert</i></span>
						<p><a href="#">Saiba Mais</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Projeto Mata Atlântica Interiorana da Bahia - UESC<i class="material-icons right">close</i></span>
						<p>A região sudoeste da Bahia, situada no planalto de Vitória da Conquista, abriga a chamada Mata Atlântica Interiorana da Bahia. A expansão da Mata Atlântica rumo ao interior da Bahia dá origem a uma área de intensa diversidade biológica resultado do contato estabelecido entre a Mata Atlântica e a Caatinga.</p>
					</div>
				</div>
			</div>

		</div>

	</main>

	<?php require_once '../../../button_floating.php'; ?>
	<?php require_once '../../../footer.php'; ?>

</body>

</html>
