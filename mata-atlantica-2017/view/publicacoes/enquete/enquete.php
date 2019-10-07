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
				<div id="enquete-da-semana" class="section scrollspy">
					<div class="row">
						<div class="col s12">
							<h5 class="header"><blockquote>Enquete da Semana</blockquote></h5>
						</div>
						<div class="col s12">
							<div class="card">
								<div class="card-content">
									<span class="card-title">Você realiza o descarte seletivo na sua residência?</span>
									<form class="row" action="#">
										<div class="col s12">
											<p>
												<input class="with-gap" name="group1" type="radio" id="test1" />
												<label for="test1">Sim</label>
											</p>
											<p>
												<input class="with-gap" name="group1" type="radio" id="test2" />
												<label for="test2">Não</label>
											</p>
											<p>
												<input class="with-gap" name="group1" type="radio" id="test3"  />
												<label for="test3">Às vezes</label>
											</p>
										</div>
										<div class="col s12 margin-top">
											<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
												<i class="material-icons right">send</i>
											</button>
										</div>
									</form>
								</div><!--
								<div class="card-action">
									<a href="#">This is a link</a>
									<a href="#">This is a link</a>
								</div>-->
							</div>
						</div>
					</div>
				</div>

				<div id="resultados-anteriores" class="section scrollspy">
					<div class="row">
						<div class="col s12">
							<h5 class="header"><blockquote>Resultados anteriores</blockquote></h5>
						</div>
						<div class="col s12">
							<div class="row">
								<div class="col s12 m4">
									<div class="card small green darken-4">
										<div class="card-content">
											<span class="card-title activator white-text">Você mora próximo de alguma ...?<i class="material-icons right">more_vert</i></span>
											<!--<p><a href="#">This is a link</a></p>-->
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
											<p>
												Sim [50%]
												<div class="progress">
													<div class="determinate" style="width: 50%"></div>
												</div>
											</p>
											<p>
												Não [30%]
												<div class="progress">
													<div class="determinate" style="width: 30%"></div>
												</div>
											</p>
											<p>
												Às vezes [20%]
												<div class="progress">
													<div class="determinate" style="width: 20%"></div>
												</div>
											</p>
										</div>
									</div>
								</div>
								<div class="col s12 m4">
									<div class="card small green darken-4">
										<div class="card-content">
											<span class="card-title activator white-text">Você mora próximo de alguma ...?<i class="material-icons right">more_vert</i></span>
											<!--<p><a href="#">This is a link</a></p>-->
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
											<p>
												Sim [50%]
												<div class="progress">
													<div class="determinate" style="width: 50%"></div>
												</div>
											</p>
											<p>
												Não [30%]
												<div class="progress">
													<div class="determinate" style="width: 30%"></div>
												</div>
											</p>
											<p>
												Às vezes [20%]
												<div class="progress">
													<div class="determinate" style="width: 20%"></div>
												</div>
											</p>
										</div>
									</div>
								</div>
								<div class="col s12 m4">
									<div class="card small green darken-4">
										<div class="card-content">
											<span class="card-title activator white-text">Você mora próximo de alguma ...?<i class="material-icons right">more_vert</i></span>
											<!--<p><a href="#">This is a link</a></p>-->
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
											<p>
												Sim [50%]
												<div class="progress">
													<div class="determinate" style="width: 50%"></div>
												</div>
											</p>
											<p>
												Não [30%]
												<div class="progress">
													<div class="determinate" style="width: 30%"></div>
												</div>
											</p>
											<p>
												Às vezes [20%]
												<div class="progress">
													<div class="determinate" style="width: 20%"></div>
												</div>
											</p>
										</div>
									</div>
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
						</div>
					</div>
				</div>
			</div>
			<div class="col hide-on-small-only m3 l2">
				<ul class="section table-of-contents toc-contents">
					<li><a href="#enquete-da-semana">Enquete da Semana</a></li>
					<li><a href="#resultados-anteriores">Resultados anteriores</a></li>
				</ul>
			</div>
		</div>
	</main>

	<?php require_once '../../../button_floating.php'; ?>
	<?php require_once '../../../footer.php'; ?>

</body>

</html>