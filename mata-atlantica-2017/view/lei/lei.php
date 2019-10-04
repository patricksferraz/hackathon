<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php require_once '../../head.php'; ?>
</head>

<body>

	<?php require_once '../../header.php'; ?>

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
						<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Filtro<i class="material-icons right">arrow_drop_down</i></a></li>
					</ul>
				</div>
			</nav>
		</div>

		<div class="row">
			<div class="col s12">
				<h3 class="header center">Locais</h3>
				<div class="hr"></div>
			</div>

			<div class="col s12">
				<h5 class="header"><blockquote>Recentes</blockquote></h5>
				<ul class="collapsible popout" data-collapsible="accordion">
					<li>
						<div class="collapsible-header"><i class="material-icons">more</i>Lei 11.445/2007 - Estabelece a Política Nacional de Saneamento Básico</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">more</i>Lei 9.605/1998 - Lei dos Crimes Ambientais</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">more</i>Lei 9.985/2000 - Institui o Sistema Nacional de Unidades de Conservação da Natureza</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
				</ul>
			</div>

			<div class="col s12">
				<h5 class="header"><blockquote>Consolidadas</blockquote></h5>
				<ul class="collapsible popout" data-collapsible="accordion">
					<li>
						<div class="collapsible-header"><i class="material-icons">more</i>Lei 11.445/2007 - Estabelece a Política Nacional de Saneamento Básico</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">more</i>Lei 9.605/1998 - Lei dos Crimes Ambientais</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">more</i>Lei 9.985/2000 - Institui o Sistema Nacional de Unidades de Conservação da Natureza</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
				</ul>
			</div>
			
		</div>

	</main>

	<?php require_once '../../button_floating.php'; ?>
	<?php require_once '../../footer.php'; ?>

</body>

</html>