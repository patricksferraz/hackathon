<header>
	<!-- Dropdown Publicações -->
	<ul id="publicacoes" class="dropdown-content">
		<li><a href="view/publicacoes/noticia/noticia.php">Notícias</a></li>
		<li><a href="view/publicacoes/projeto/projeto.php">Projetos</a></li>
		<li><a href="view/publicacoes/enquete/enquete.php">Enquetes</a></li>
		<li><a href="view/publicacoes/curiosidade/curiosidade.php">Curiosidades</a></li>
		<li><a href="view/publicacoes/galeria/galeria.php">Galeria</a></li>
	</ul>

	<!-- Dropdown Preservação -->
	<ul id="preservacao" class="dropdown-content">
		<li><a href="view/preservacao/amigo_natureza/amigo_natureza.php">Amigo da natureza</a></li>
		<li><a href="view/preservacao/biodiversidade/biodiversidade.php">Biodiversidade</a></li>
	</ul>

	<nav class="nav-extended white">
		<div class="nav-wrapper">
			<a href="#" class="brand-logo"><img src="img/logo_mpba.png" alt="Logo" width="245"></a>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#"><i class="material-icons left">home</i>Home</a></li>
				<li><a href="view/user/denuncia.php"><i class="material-icons left">gps_fixed</i>Fazer denúncia</a></li>
				
				<!-- Dropdown Publicações -->
				<li><a class="dropdown-button" href="#!" data-activates="publicacoes"><i class="material-icons left">airplay</i>Publicações<i class="material-icons right">arrow_drop_down</i></a></li>
				<!-- Dropdown Preservação -->
				<li><a class="dropdown-button" href="#!" data-activates="preservacao"><i class="material-icons left">nature</i>Preservação<i class="material-icons right">arrow_drop_down</i></a></li>

				<li><a href="view/lei/lei.php"><i class="material-icons left">pan_tool</i>Leis</a></li>
				<li><a href="login.php"><i class="material-icons left">lock_open</i>Entrar</a></li>
			</ul>
		</div>

		<!--Navbarmobile-->
		<ul class="side-nav" id="nav-mobile">
			<li><a class="collapsible-header waves-effect waves-green" href="#"><i class="material-icons left">home</i>Home</a></li>
			<li><a class="collapsible-header waves-effect waves-green" href="view/user/denuncia.php"><i class="material-icons">gps_fixed</i>Fazer denúncia</a></li>
			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
					<li class="bold"><a class="collapsible-header waves-effect waves-green"><i class="material-icons left">airplay</i>Publicações<i class="material-icons right">arrow_drop_down</i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="view/publicacoes/noticia/noticia.php">Notícias</a></li>
								<li><a href="view/publicacoes/projeto/projeto.php">Projetos</a></li>
								<li><a href="view/publicacoes/enquete/enquete.php">Enquetes</a></li>
								<li><a href="view/publicacoes/curiosidade/curiosidade.php">Curiosidades</a></li>
								<li><a href="view/publicacoes/galeria/galeria.php">Galeria</a></li>
							</ul>
						</div>
					</li>
					<li class="bold"><a class="collapsible-header waves-effect waves-green"><i class="material-icons left">nature</i>Preservação<i class="material-icons right">arrow_drop_down</i></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="view/preservacao/amigo_natureza/amigo_natureza.php">Amigo da natureza</a></li>
								<li><a href="view/preservacao/biodiversidade/biodiversidade.php">Biodiversidade</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</li>

			<li><a class="collapsible-header waves-effect waves-green" href="view/lei/lei.php"><i class="material-icons left">pan_tool</i>Leis</a></li>
			<li><a class="collapsible-header waves-effect waves-green" href="login.php"><i class="material-icons left">lock_open</i>Entrar</a></li>
		</ul>
	</nav>
</header>