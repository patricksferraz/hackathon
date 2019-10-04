<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php require_once '../../head.php'; ?>
</head>

<body>

	<?php require_once '../../header.php'; ?>

	<main>
		<!--
		<section class="row">
			<div class="col s12 green darken-4">
				<ul class="tabs tabs-transparent">
					<li class="tab col s3"><a href="#test1">Test 1</a></li>
					<li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
					<li class="tab col s3"><a href="#test3">Disabled Tab</a></li>
					<li class="tab col s3"><a href="#test4">Test 4</a></li>
				</ul>
			</div>
			<div id="test1" class="col s12">Test 1</div>
			<div id="test2" class="col s12">Test 2</div>
			<div id="test3" class="col s12">Test 3</div>
			<div id="test4" class="col s12">Test 4</div>
		</section>-->

		<section class="row">
			<div class="col s12">
				<h3 class="header center">Faça sua Denúncia!</h3>
				<div class="hr"></div>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="col s12">
								<div class="card red lighten-1">
									<div class="card-content white-text">
										<p class="center">Fique tranquilo! Garantimos a segurança de suas informações. Todos dados inseridos são sigilosos.</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row">							
							<p class="col s12">
								<input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
								<label for="filled-in-box" class="red-text">Anonimato garantido</label>
							</p>
							<div class="input-field col m6 s12">
								<i class="material-icons prefix">today</i>
								<input id="icon_prefix" type="date" class="validate">
								<label class="active" for="icon_prefix">Data da ocorrido</label>
							</div>
							<div class="input-field col m6 s12">
								<i class="material-icons prefix">done_all</i>
								<select class="icons" multiple>
									<option value="" disabled selected>Categoria</option>
									<option value="" data-icon="img/sample-1.jpg" class="left circle">Vegetação</option>
									<option value="" data-icon="img/office.jpg" class="left circle">Animais</option>
									<option value="" data-icon="img/yuna.jpg" class="left circle">Solos</option>
									<option value="" data-icon="img/yuna.jpg" class="left circle">Ruído</option>
									<option value="" data-icon="img/yuna.jpg" class="left circle">Fogo</option>
									<option value="" data-icon="img/yuna.jpg" class="left circle">Água</option>
									<option value="" data-icon="img/yuna.jpg" class="left circle">Outros</option>
								</select>
								<label>Selecione as categorias</label>
							</div>
							<div class="input-field col m6 s12">
								<i class="material-icons prefix">done_all</i>
								<select class="icons" multiple>
									<option value="" disabled selected>Subcategoria</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Vegetação: Comercio ilegal de madeira</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Vegetação: Serraria Irregular</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Vegetação: Carvoaria ilegal</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Vegetação: Desmatamento</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Vegetação: Corte seletivo (retirada de especies especificas)</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Vegetação: Extração de Palmito</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Vegetação: Corte de arvores sem autorização em área urbana</option>

										<option value="" data-icon="img/sample-1.jpg" class="left circle">Animais: Caça de animais silvestres</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Animais: Abandono de animais domésticos</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Animais: Maltrato de animais</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Animais: Comércio de animais</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Animais: Pesca predatória</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Animais: Pesca em período de defeso</option>

										<option value="" data-icon="img/sample-1.jpg" class="left circle">Solos:  Mineração ilegal</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Solos:  Descarte irregular de entulho</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Solos:  Descarte irregular de resíduos industriais</option>

										<option value="" data-icon="img/sample-1.jpg" class="left circle">Ruído: Industrial</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Ruído: Mineração</option>

										<option value="" data-icon="img/sample-1.jpg" class="left circle">Fogo: Queimadas para aberturas de áreas</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Fogo: Limpeza de pasto</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Fogo: Incêndios florestais</option>

										<option value="" data-icon="img/sample-1.jpg" class="left circle">Água: Descarte de resíduos industriais</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Água: Descarte de lixo</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Água: Desvio de rio</option>
										<option value="" data-icon="img/sample-1.jpg" class="left circle">Água: Barragens ilegais</option>
								</select>
								<label>Selecione as subcategorias</label>
							</div>
						</div>

						<div class="row">
							<div class="col s12">
								<blockquote><p>Endereço do ocorrido</p></blockquote>
							</div>

							<div class="input-field col m4 s12">
								<input id="icon_telephone" type="tel" class="validate">
								<label for="icon_telephone">CEP</label>
							</div>
							<div class="input-field col m6 s12">
								<input id="icon_telephone" type="tel" class="validate">
								<label for="icon_telephone">Rua/Avenida</label>
							</div>
							<div class="input-field col m2 s12">
								<input id="icon_telephone" type="tel" class="validate">
								<label for="icon_telephone">Número</label>
							</div>
							<div class="input-field col m6 s12">
								<input id="icon_telephone" type="tel" class="validate">
								<label for="icon_telephone">Bairro</label>
							</div>
							<div class="input-field col m4 s12">
								<input id="icon_telephone" type="tel" class="validate">
								<label for="icon_telephone">Cidade</label>
							</div>
							<div class="input-field col m2 s12">
								<input id="icon_telephone" type="tel" class="validate">
								<label for="icon_telephone">Estado</label>
							</div>
							<div class="input-field col s12">
								<input id="icon_telephone" type="tel" class="validate">
								<label for="icon_telephone">Referência</label>
							</div>
						</div>

						<div class="row">
							<div class="col s12">
								<blockquote><p>Dados descritivos</p></blockquote>
							</div>
							<div class="input-field col m6 s12">
								<i class="material-icons prefix">subject</i>
								<input id="icon_telephone" type="tel" class="validate">
								<label for="icon_telephone">Título da denúncia</label>
							</div>
							<div class="input-field col m6 s12">
								<i class="material-icons prefix">people</i>
								<input id="icon_telephone" type="tel" class="validate">
								<label for="icon_telephone">Denunciado identificado?</label>
							</div>
							<div class="input-field col s12">
								<i class="material-icons prefix">mode_edit</i>
								<textarea id="icon_prefix2" class="materialize-textarea" data-length="1000"></textarea>
								<label for="icon_prefix2">Descrição do fato</label>
							</div>
							<div class="file-field input-field col m6 s12">
								<div class="btn">
									<span>Evidências</span>
									<input type="file" multiple>
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" placeholder="Envie-nos evidências para facilitar a análise">
								</div>
							</div>
							<div class="input-field col s12 center">
								<button class="btn-large waves-effect waves-light" type="submit" name="action">Registrar Denúncia
									<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</section>

	</main>

	<?php require_once '../../button_floating.php'; ?>
	<?php require_once '../../footer.php'; ?>

</body>

<script type="text/javascript">
	$(document).ready(function() {
		$('input#input_text, textarea#textarea1').characterCounter();
		$('select').material_select();
	});
</script>

</html>
