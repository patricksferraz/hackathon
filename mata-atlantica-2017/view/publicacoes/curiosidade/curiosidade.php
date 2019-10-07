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
		<div class="row">
			<div class="col s12 m9 l10">
				<div id="curiosidade-do-dia" class="section scrollspy">
					<div class="row">
						<div class="col s12">
							<h5 class="header"><blockquote>#CuriosidadeDoDia</blockquote></h5>
						</div>
						<div class="col s12">
							<div class="card">
								<div class="card-content">
									<span class="card-title">"Você sabia que uma tonelada de papel reciclado poupa cerca de 22 árvores, economiza 71% de energia elétrica e polui o ar 74% menos do que se fosse produzido de novo?"</span>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="curiosidades-anteriores" class="section scrollspy">
					<div class="row">
						<div class="col s12">
							<h5 class="header"><blockquote>Curiosidades anteriores</blockquote></h5>
						</div>
						<div class="col s12">
							<div class="row">
								<ul class="collection">
									<li class="collection-item avatar">
										<i class="material-icons circle green">insert_chart</i>
										<span class="title">"Você sabia que ...</span>
										<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
									</li>
									<li class="collection-item avatar">
										<i class="material-icons circle green">insert_chart</i>
										<span class="title">"Você sabia que ...</span>
										<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
									</li>
									<li class="collection-item avatar">
										<i class="material-icons circle green">insert_chart</i>
										<span class="title">"Você sabia que ...</span>
										<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
									</li>
									<li class="collection-item avatar">
										<i class="material-icons circle green">insert_chart</i>
										<span class="title">"Você sabia que ...</span>
										<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
									</li>
								</ul>
								<ul class="col s12 pagination center">
									<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
									<li class="active"><a href="#!">1</a></li>
									<li class="waves-effect"><a href="#!">2</a></li>
									<li class="waves-effect"><a href="#!">3</a></li>
									<li class="waves-effect"><a href="#!">4</a></li>
									<li class="waves-effect"><a href="#!">5</a></li>
									<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col hide-on-small-only m3 l2">
				<ul class="section table-of-contents toc-contents">
					<li><a href="#curiosidade-do-dia">#CuriosidadeDoDia</a></li>
					<li><a href="#curiosidades-anteriores">Curiosidades anteriores</a></li>
				</ul>
			</div>
		</div>
	</main>

	<?php require_once '../../../button_floating.php'; ?>
	<?php require_once '../../../footer.php'; ?>

</body>

</html>