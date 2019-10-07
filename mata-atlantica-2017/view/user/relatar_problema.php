<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<?php require_once '../../head.php'; ?>
</head>

<body class="green darken-4">

	<main>
		<div class="row">
			<div class="col s12 center margin-top">
				<a href="#"><img src="img/tree.svg" alt="Tree"></a>
			</div>
			<div class="col s12 m8 offset-m2">
				<div class="card">
					<div class="card-content">
						<div class="row">
							<div class="col s12 center">
								<h3 class="header">Relatar problema</h3>
								<div class="hr"></div>
							</div>
							<form class="col s12">

								<div class="row">
									<div class="input-field col s6">
										<i class="material-icons prefix">account_circle</i>
										<input id="icon_prefix" type="text" class="validate" required>
										<label for="icon_prefix">Insira seu nome</label>
									</div>
									<div class="input-field col s6">
										<i class="material-icons prefix">email</i>
										<input id="icon_prefix" type="text" class="validate" required>
										<label for="icon_prefix">Insira seu email</label>
									</div>
									<div class="input-field col s12">
										<i class="material-icons prefix">subject</i>
										<input id="icon_prefix" type="text" class="validate" required>
										<label for="icon_prefix">Insira o assunto</label>
									</div>
									<div class="input-field col s12">
										<i class="material-icons prefix">mode_edit</i>
										<textarea id="icon_prefix2" class="materialize-textarea" required></textarea>
										<label for="icon_prefix2">Descreve o problema</label>
									</div>
								</div>

								<div class="col s12 center-align">
									<div class="g-recaptcha" data-sitekey=""></div>
									<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
										<i class="material-icons right">send</i>
									</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php require_once '../../footer.php'; ?>

</body>

</html>