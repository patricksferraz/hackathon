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
							<label for="search">Buscar denúncia</label>
						</div>
					</form>
				</div>
			</div>
		</nav>

		<div class="row">
			<div class="col s12">
				<h5 class="header"><blockquote>Minhas Denúncias</blockquote></h5>
			</div>
			<div class="col s12">
				<a href="view/user/denuncia.php" class="right waves-effect waves-light btn-large red">Nova denúncia</a>
			</div>
		</div>

		<ul class="collapsible popout" data-collapsible="accordion">
			<li>
				<div class="collapsible-header">
					<i class="material-icons green-text text-darken-4">gps_fixed</i>#20171001 - Desmatamento Ilegal
					<span class="badge green-text"><i class="material-icons">thumb_up</i></span>
					<i class="material-icons right">attach_file</i>
				</div>
				<div class="collapsible-body">
					<p class="justify-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe aliquam voluptas quam, assumenda numquam nobis sed quos fugiat animi. Voluptatum, quasi delectus esse ipsam autem sunt. Adipisci quidem sit, iure. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio possimus maiores, esse asperiores quis doloremque ea expedita minus perspiciatis enim ullam veniam tenetur officiis illum sed nobis optio dolore hic! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dolores, maiores laborum earum voluptatum sequi iste harum pariatur distinctio, saepe non suscipit voluptate sit, aliquid ipsum voluptatibus quos culpa cum.</p>
					<div class="row">
						<div class="col s12">
							<blockquote><h5>Análise</h5></blockquote>
						</div>
						<div class="col s12">
							<div class="card green">
								<div class="card-content white-text">
									<span class="card-title">Aprovado</span>
								</div>
							</div>
						</div>
					</div>
					<div class="chip">
						<i class="tiny material-icons bottom-align">today</i> 22/11/2017
						<a href="" class="margin-left" target="_blank"><i class="tiny material-icons bottom-align margin-left">place</i> Montes Claros</a>
						<i class="tiny material-icons bottom-align margin-left">timer</i> 18:30
					</div>

					<hr>

					<div class="right">
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Download" href=""><i class="material-icons">file_download</i></a>
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Arquivar" href=""><i class="material-icons">move_to_inbox</i></a>
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Enviar Mensagem" href=""><i class="material-icons">question_answer</i></a>
					</div>

						<!--
						<a href=""><i class="material-icons">turned_in</i></a>
						<a href=""><i class="material-icons">turned_in_not</i></a>
					-->
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons green-text text-darken-4">gps_fixed</i>#20171002 - Desmatamento Ilegal
					<span class="badge red-text"><i class="material-icons">thumb_down</i></span>
					<i class="material-icons right">attach_file</i>
				</div>
				<div class="collapsible-body">
					<p class="justify-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus et natus, maxime ullam dolores accusamus! Numquam, voluptates praesentium eum quos explicabo sed repudiandae. Placeat fuga tempora architecto illum aliquid, temporibus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam nostrum dignissimos pariatur incidunt repellat nisi nemo reprehenderit quia laborum ratione rem at maxime, mollitia dolorum quis. Velit in, nemo quaerat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus porro totam iste cumque, nesciunt esse error iure quibusdam laborum architecto, animi explicabo ad quam ipsa, commodi. Corporis, nulla numquam esse.</p>
					<div class="row">
						<div class="col s12">
							<blockquote><h5>Análise</h5></blockquote>
						</div>
						<div class="col s12">
							<div class="card red">
								<div class="card-content white-text">
									<span class="card-title">Faltou ....</span>
								</div>
							</div>
						</div>
					</div>
					<div class="chip">
						<i class="tiny material-icons bottom-align">today</i> 22/11/2017
						<a href="" class="margin-left" target="_blank"><i class="tiny material-icons bottom-align margin-left">place</i> Montes Claros</a>
						<i class="tiny material-icons bottom-align margin-left">timer</i> 18:30
					</div>

					<hr>

					<div class="right">
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Download" href=""><i class="material-icons">file_download</i></a>
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Arquivar" href=""><i class="material-icons">move_to_inbox</i></a>
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Enviar Mensagem" href=""><i class="material-icons">question_answer</i></a>
					</div>

						<!--
						<a href=""><i class="material-icons">turned_in</i></a>
						<a href=""><i class="material-icons">turned_in_not</i></a>
					-->
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons green-text text-darken-4">gps_fixed</i>#20171003 - Pesca Ilegal
					<span class="badge green-text"><i class="material-icons">thumb_up</i></span>
					<i class="material-icons right">attach_file</i>
				</div>
				<div class="collapsible-body">
					<p class="justify-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum placeat, quaerat nobis magnam! Nesciunt fugiat, doloremque maiores consequatur possimus, id expedita omnis soluta ea, eos voluptatem labore ipsa iusto recusandae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. In tempore cupiditate explicabo aspernatur. Recusandae deleniti sed animi, similique est molestiae repellat, ab amet explicabo dolorum dicta soluta praesentium, id aut. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis expedita molestias eius eaque assumenda voluptatibus repellat blanditiis officiis optio fugiat, nobis accusantium, cupiditate veniam dolores non qui iusto sed!</p>
					<div class="chip">
						<i class="tiny material-icons bottom-align">today</i> 22/11/2017
						<a href="" class="margin-left" target="_blank"><i class="tiny material-icons bottom-align margin-left">place</i> Montes Claros</a>
						<i class="tiny material-icons bottom-align margin-left">timer</i> 18:30
					</div>

					<hr>

					<div class="right">
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Download" href=""><i class="material-icons">file_download</i></a>
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Arquivar" href=""><i class="material-icons">move_to_inbox</i></a>
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Enviar Mensagem" href=""><i class="material-icons">question_answer</i></a>
					</div>

						<!--
						<a href=""><i class="material-icons">turned_in</i></a>
						<a href=""><i class="material-icons">turned_in_not</i></a>
					-->
				</div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons green-text text-darken-4">gps_fixed</i>#20171004 - Descarte Ilegal
					<span class="badge green-text"><i class="material-icons">thumb_up</i></span>
					<i class="material-icons right">attach_file</i>
				</div>
				<div class="collapsible-body">
					<p class="justify-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ipsa cumque eos animi nemo, corporis facilis consectetur, tenetur quos qui possimus odio quis eum aliquam maxime delectus necessitatibus ea dicta? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus illum rerum sint. Minima et temporibus, magni officia quod fuga nihil libero repellat vitae laudantium quas eveniet rerum reiciendis omnis veritatis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ipsum nostrum quos tenetur maiores modi adipisci veritatis eveniet, quo, sint quasi iure laborum voluptas sapiente provident ut reiciendis deserunt nulla.</p>
					<div class="chip">
						<i class="tiny material-icons bottom-align">today</i> 22/11/2017
						<a href="" class="margin-left" target="_blank"><i class="tiny material-icons bottom-align margin-left">place</i> Montes Claros</a>
						<i class="tiny material-icons bottom-align margin-left">timer</i> 18:30
					</div>

					<hr>

					<div class="right">
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Download" href=""><i class="material-icons">file_download</i></a>
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Arquivar" href=""><i class="material-icons">move_to_inbox</i></a>
						<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Enviar Mensagem" href=""><i class="material-icons">question_answer</i></a>
					</div>

						<!--
						<a href=""><i class="material-icons">turned_in</i></a>
						<a href=""><i class="material-icons">turned_in_not</i></a>
					-->
				</div>
			</li>
		</ul>

	</main>

	<?php require_once '../../button_floating.php'; ?>
	<?php require_once '../../footer.php'; ?>

</body>

</html>