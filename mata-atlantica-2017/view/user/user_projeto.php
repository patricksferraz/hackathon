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
			<div class="col m4 s12">
				<div class="card hoverable">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/office.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
						<p><a href="#">This is a link</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
						<p>Here is some more information about this product that is only revealed once clicked on.</p>
					</div>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card hoverable">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/office.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
						<p><a href="#">This is a link</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
						<p>Here is some more information about this product that is only revealed once clicked on.</p>
					</div>
				</div>
			</div>
			<div class="col m4 s12">
				<div class="card hoverable">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="images/office.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
						<p><a href="#">This is a link</a></p>
					</div>
					<div class="card-reveal">
						<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
						<p>Here is some more information about this product that is only revealed once clicked on.</p>
					</div>
				</div>
			</div>
		</div>

	</main>


	<?php require_once '../../button_floating.php'; ?>
	<?php require_once '../../footer.php'; ?>

</body>

</html>