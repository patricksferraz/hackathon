<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php require_once 'head.php'; ?>
</head>

<body class="green darken-4">

	<main>
		<div class="container">
			<div class="row">

				<div class="col s12 m6 offset-m3">
					<h3 class="white-text center-align"><img src="img/tree.svg" alt="Árvore"></h3>
					<div class="card">
						<div class="card-content">
							<span class="card-title center-align">Para continuar, insira seus dados!</span>
							<div class="row">
								<form class="col s12">
									<div class="row">
										<div class="input-field col s12">
											<i class="material-icons prefix">account_circle</i>
											<input id="login" type="text" class="validate" required>
											<label for="login">Usuário</label>
										</div>
										<div class="input-field col s12">
											<i class="material-icons prefix">lock_open</i>
											<input id="senha" type="password" class="validate" required>
											<label for="senha">Senha</label>
										</div>
										<div class="col s12">
											<p class="right"><a href="">Esqueceu sua senha?</a></p>
										</div>
										<div class="col s12 center-align margin-top">
											<div class="g-recaptcha" data-sitekey=""></div>
											<button onclick="" class="btn waves-effect waves-light" type="button" name="action">Cadastre-se
												<i class="material-icons left">person_add</i>
											</button>
											<button onclick="location.href = 'view/user/user.php'" class="btn waves-effect waves-light" type="button" name="action">Entrar
												<i class="material-icons right">send</i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
			</div>				
		</div>
	</main>

</body>

</html>