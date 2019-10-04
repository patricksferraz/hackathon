<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php require_once '../head.php'; ?>
</head>

<body>

	<?php require_once '../header.php'; ?>

	<main>

		<div class="row">
			<div class="col s12">
				<h3 class="header center">Perguntas frequentes</h3>
				<div class="hr"></div>
			</div>
			<form class="col s12 m6">
				<div class="input-field">
					<i class="material-icons prefix">search</i>
					<input id="search" type="text" required>
					<label for="search">Qual sua dúvida?</label>
				</div>
			</form>
		</div>

		<section class="row">
			<div class="col s12">
				<ul class="collapsible popout" data-collapsible="accordion">
					<li>
						<div class="collapsible-header"><i class="material-icons">help</i>Como faço para ...</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">help</i>Como faço para ...</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons">help</i>Como faço para ...</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>
				</ul>
			</div>
		</section>
	</main>

	<?php require_once '../button_floating.php'; ?>
	<?php require_once '../footer.php'; ?>

</body>

</html>
