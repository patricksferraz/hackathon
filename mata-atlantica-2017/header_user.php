<header>
	<nav class="nav-wrapper">
		<div class="nav-wrapper">
			<span class="brand-logo center"></span>
			<a href="#" data-activates="mobile-nav" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
			<div class="nav-content toolbar">
				<span class="nav-title"></span>
				<a href="#" class="btn-floating btn-large halfway-fab waves-effect waves-light orange darken-1">
					<i class="material-icons">home</i>
				</a>
			</div>
		</div>
	</nav>
	<ul id="mobile-nav" class="side-nav fixed">
		<li>
			<div class="user-view"><!--
				<div class="background">
					<img alt="SCO" src="img/b_top.svg">
				</div>-->
				<a href="#!user"><img alt="tree" src="img/tree-green.svg"></a>
				<a href="#!name"><span class="green-text name">Equipe Hackathon</span></a>
				<a href="#!email"><span class="green-text email">hackathon@uesc.br</span></a>
				<a href=""><span class="orange-text">20.000 pnts</span></a>
			</div>
		</li>
		<li>
			<div class="row">
				<form class="col s12">
					<div class="input-field">
						<i class="material-icons prefix">search</i>
						<input id="icon_prefix" type="text" class="validate">
						<label for="icon_prefix">Nº da denúncia</label>
					</div>
				</form>
			</div>
		</li>
		<li><div class="divider"></div></li>
		<li><a class="collapsible-header waves-effect waves-green" href="view/user/user.php"><i class="material-icons">gps_fixed</i>Minhas Denúncias</a></li>
		<li><a class="collapsible-header waves-effect waves-green" href="view/user/user_evento.php"><i class="material-icons">event_note</i>Meus Eventos</a></li>
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li class="bold"><a class="collapsible-header waves-effect waves-green"><i class="material-icons left">nature_people</i>Amigo da Natureza<i class="material-icons right">arrow_drop_down</i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="#!">Minha Árvore</a></li>
							<li><a href="view/user/user_projeto.php">Projetos</a></li>
							<li><a href="view/user/user_galeria.php">Galeria</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
	</ul>
</header>