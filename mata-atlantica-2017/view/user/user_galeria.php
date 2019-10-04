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
							<label for="search">Buscar publicação</label>
						</div>
					</form>
				</div>
			</div>
		</nav>

		<div class="row">
			<div class="col s12">
				<h5 class="header"><blockquote>Fotos publicadas</blockquote></h5>
			</div>			
		</div>

		<div class="row">
			<div class="col m3 s6">
				<img class="materialboxed responsive-img" src="img/nature.jpg">
			</div>
			<div class="col m3 s6">
				<img class="materialboxed responsive-img" src="img/nature.jpg">
			</div>
			<div class="col m3 s6">
				<img class="materialboxed responsive-img" src="img/nature.jpg">
			</div>
			<div class="col m3 s6">
				<img class="materialboxed responsive-img" src="img/nature.jpg">
			</div>
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


		<div class="row">
			<div class="col s12">
				<h5 class="header"><blockquote>Vídeos publicados</blockquote></h5>
			</div>			
		</div>

		<div class="row">
			<div class="col m3 s6">
				<video class="responsive-video" controls><source src="movie.mp4" type="video/mp4"></video>
				</div>
				<div class="col m3 s6">
					<video class="responsive-video" controls><source src="movie.mp4" type="video/mp4"></video>
					</div>
					<div class="col m3 s6">
						<video class="responsive-video" controls><source src="movie.mp4" type="video/mp4"></video>
						</div>
						<div class="col m3 s6">
							<video class="responsive-video" controls><source src="movie.mp4" type="video/mp4"></video>
							</div>
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

					</main>


					<?php require_once '../../button_floating.php'; ?>
					<?php require_once '../../footer.php'; ?>

				</body>

				</html>