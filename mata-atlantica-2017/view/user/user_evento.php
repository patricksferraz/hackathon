<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<?php require_once '../../head.php'; ?>
	<?php require_once '../../head_user.php'; ?>
</head>

<body>

	<?php require_once '../../header_user.php'; ?>

	<main class="margin-top">

		<nav class="row margin-top-tabs">
			<div class="col s12">
				<div class="white-text">
					<form class="col s12 right">
						<div class="input-field">
							<i class="material-icons prefix">search</i>
							<input id="search" type="text" required>
							<label for="search">Buscar projeto</label>
						</div>
					</form>
				</div>
			</div>
		</nav>

		<div class="row">
			<div class="col s12">
				<h5 class="header"><blockquote>Projetos que participo</blockquote></h5>
			</div>			
		</div>

		<div class="row">
			<div class="col s12">
				<ul class="collection">
					<li class="collection-item avatar">
						<i class="material-icons circle">folder</i>
						<span class="title">Title</span>
						<p><i class="material-icons">today</i> 20/12/2017 <br>
							<i class="material-icons">place</i> Universidade Estadual de Santa Cruz
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					</li>
					<li class="collection-item avatar">
						<i class="material-icons circle">folder</i>
						<span class="title">Title</span>
						<p><i class="material-icons">today</i> 20/12/2017 <br>
							<i class="material-icons">place</i> Universidade Estadual de Santa Cruz
						</p>
						<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					</li>
				</ul>
			</div>
		</div>

	</main>


	<?php require_once '../../button_floating.php'; ?>
	<?php require_once '../../footer.php'; ?>

</body>

</html>