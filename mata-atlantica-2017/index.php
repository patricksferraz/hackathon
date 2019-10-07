<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php require_once 'head.php'; ?>
</head>

<body>

	<?php require_once 'header.php'; ?>

	<main>
		<nav class="row">
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

		<section>
			<div class="parallax-container">
				<div class="parallax"><img class="img-responsive" src="img/b_top.svg"></div>
				<div class="row section white-text">
					<div class="col s12 m4 l4 hide-on-small-only ">
						<img id="logo-nav-background" class="img-responsive" src="img/tree.svg">
					</div>
					<div class="col s12 m8 l7 offset-l1">
						<h3 class="header">#CuriosidadeDoDia</h3>
						<p class="flow-text justify-align"><i class="material-icons">format_quote</i>Você sabia que uma tonelada de papel reciclado poupa cerca de 22 árvores, economiza 71% de energia elétrica e polui o ar 74% menos do que se fosse produzido de novo?<i class="material-icons">format_quote</i></p>
						<div class="divider"></div>
						<p class="flow-text">Presenciou algum crime ambiental? Ajude-nos, denúncie anonimamente!</p>
						<a href="view/user/denuncia.php" class="waves-effect waves-light btn-large red">Clique aqui para denúnciar!</a>
						<a href="view/user/denuncia.php" class="waves-effect waves-light btn-large red">Baixe nosso app!</a>
					</div>
				</div>
			</div>
		</section>

		<section class="row">
			<div class="col s12">
				<h3 class="header center">Eco-Notícias</h3>
				<div class="hr"></div>
				<div class="carousel carousel-slider" data-indicators="true">
					<!--<div class="carousel-fixed-item center">
						<a class="btn waves-effect">button</a>
					</div>-->
					<div class="carousel-item" href="#one!">
						<div class="row">
							<div class="col s12 m4">
								<div class="card small">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="img/publicacoes/noticia/exemplo_noticia.jpg">
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">O espectro do “licenciamento flex” parece ter sido enterrado<i class="material-icons right">more_vert</i></span>
										<p><a href="#">Saiba mais</a></p>
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">O espectro do “licenciamento flex” parece ter sido enterrado<i class="material-icons right">close</i></span>
										<p>O texto sobre a flexibilização do licenciamento ambiental se aproxima da última fase. A décima terceira versão do projeto de lei será levada a votação no plenário da Câmara, em regime de urgência. A boa notícia é que, pelo menos por enquanto, parece enterrado o espectro do “licenciamento flex”, no qual Estados e municípios decidiriam à vontade sobre o grau de rigor nas licenças, criando uma guerra para ver quem afrouxaria mais.</p>
									</div>
								</div>
							</div>
							<div class="col s12 m4">
								<div class="card small">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="img/publicacoes/noticia/exemplo_noticia2.png">
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">O país esta em chamas<i class="material-icons right">more_vert</i></span>
										<p><a href="#">Saiba mais</a></p>
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">O país esta em chamas<i class="material-icons right">close</i></span>
										<p>Dados do o INPE (Instituto Nacional de Pesquisas Espaciais) mostram que o país registrou 185.002 focos de incêndio. O fogo atinge todos os biomas brasileiros, concentrando na Amazônia, com 43,4% dos focos de incêndio, seguida pelo Cerrado, com 39,6%; e pela Mata Atlântica, com 10,6%. Os incêndios também ocorrem nas Unidades de Conservação (UC). As principais atingidas foram a Reserva Extrativista Chico Mendes, no Acre, e a do Bacurizinho, no Maranhão, a Terra Indígena brasileira com mais queimadas do Brasil.</p>
									</div>
								</div>									
							</div>
							<div class="col s12 m4">
								<div class="card small">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="img/publicacoes/noticia/exemplo_noticia3.jpg">
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">Crime ambiental em Ipiaú revolta sul da Bahia<i class="material-icons right">more_vert</i></span>
										<p><a href="#">Saiba mais</a></p>
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Crime ambiental em Ipiaú revolta sul da Bahia<i class="material-icons right">close</i></span>
										<p>Ocorreu nos municípios de Barra do Rocha e Ipiaú o crime ambiental de desmatamento com derrubada de árvores centenárias de espécies que estão sob forte pressão antrópica e ameaçadas de extinção, essas que foram flagradas e documentadas por equipe da Polícia Rodoviária Estadual e do INEMA. As principais espécies encontradas foram, Jequitibá Rosa, Vinhático, Sucupira e Pau D’Arco, todas elas madeiras de lei. Para mais informações acesse: https://g1.globo.com/bahia/noticia/operacao-apreende-grande-quantidade-de-madeira-extraida-ilegalmente-em-fazendas-no-sul-da-bahia.ghtml</p>
									</div>
								</div>								
							</div>
						</div>
					</div>
					<div class="carousel-item" href="#two!">
						<div class="row">
							<div class="col s12 m4">
								<div class="card small">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="img/publicacoes/noticia/exemplo_noticia4.jpg">
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">Tentativa de extinção do RENCA cai!<i class="material-icons right">more_vert</i></span>
										<p><a href="#">Saiba mais</a></p>
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Tentativa de extinção do RENCA cai!<i class="material-icons right">close</i></span>
										<p>O presidente Michel Temer revogou a extinção da Reserva Nacional do Cobre e Associados (RENCA). Ocorreu após o assunto ganhar grande repercussão na mídia, e ambientalistas, artistas, parlamentares e sociedade em geral se manifestarem contra a projeto de lei. Organizações não-governamentais acusaram o governo de ceder aos interesses das mineradoras, interessadas nas reservas de ouro, nióbio e outros metais e prejudicar o meio ambiente. </p>
									</div>
								</div>
							</div>
							<div class="col s12 m4">
								<div class="card small">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="img/publicacoes/noticia/exemplo_noticia5.png">
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">Análise de cratera reconstitui 1 milhão de anos da Mata Atlântica<i class="material-icons right">more_vert</i></span>
										<p><a href="#">Saiba mais</a></p>
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Análise de cratera reconstitui 1 milhão de anos da Mata Atlântica<i class="material-icons right">close</i></span>
										<p>Análise permite obter informações sobre o tipo de vegetação e até da água da chuva que caiu há milhares de anos</p>
									</div>
								</div>								
							</div>
							<div class="col s12 m4">
								<div class="card small">
									<div class="card-image waves-effect waves-block waves-light">
										<img class="activator" src="img/publicacoes/noticia/exemplo_noticia6.jpg">
									</div>
									<div class="card-content">
										<span class="card-title activator grey-text text-darken-4">Desmatamento na Mata Atlântica cresce quase 60% em um ano<i class="material-icons right">more_vert</i></span>
										<p><a href="#">Saiba mais</a></p>
									</div>
									<div class="card-reveal">
										<span class="card-title grey-text text-darken-4">Desmatamento na Mata Atlântica cresce quase 60% em um ano<i class="material-icons right">close</i></span>
										<p>Segundo Mario Mantovani, da SOS Mata Atlântica, a situação indica uma reversão na tendência de queda do desmatamento registrada nos últimos anos.</p>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="parallax-container parallax-small">
			<div class="parallax black parallax-opacity"><img src="img/parallax/ma_amazonia_araras.jpg"></div>
			<div class="row section">
				<div class="col s12 m8 offset-m2">
					<p class="center flow-text"><strong><i class="material-icons">format_quote</i>É triste pensar que a natureza fala e que o gênero humano não a ouve.<i class="material-icons">format_quote</i></strong></p>
					<p class="right">- Victor Hugo</p>
				</div>
			</div>
		</section>

		<section class="section">
			<h3 class="header center">Biodiversidade</h3>
			<div class="hr"></div>
			<div class="row">
				<div class="col m4 s12">
					<img class="materialboxed responsive-img" src="img/publicacoes/biodiversidade/animal/beija_flor.jpg">
				</div>
				<div class="col m8 s12">
					<h4 class="header">#EspécieDoDia</h4>
					<h5><blockquote>Beija Flor</blockquote></h5>
					<p class="justify-align">O beija-flor é muito importante para a natureza pois ele poliniza muitas plantas, quando visita as flores procurando o néctar ele encontra também o pólen, que fica preso ao seu bico e penas de forma que quando ele se dirige a outras flores, deixa nelas esse pólen fertilizando-as.<br><br>
					Dessa forma a planta se reproduz gerando novas sementes, em apenas uma dia o beija-flor pode ingerir quantidade de néctar equivalente a até três vezes o seu próprio peso, o néctar é seu principal alimento mas ele também come pequenos insetos, especialmente quando filhote.</p>
				</div>
			</div>
		</section>

		<section class="section green darken-4 white-text">
			<h3 class="header center">Projetos</h3>
			<div class="hr"></div>
			<div class="row">
				<div class="col s12 m4">
					<div class="card small hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/publicacoes/projeto/livro.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Projeto Serra da Jibóia<i class="material-icons right">more_vert</i></span>
							<p><a href="#">Saiba mais</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Projeto Serra da Jibóia<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card small hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/publicacoes/projeto/livro1.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Restauração Florestal do Corredor Ecológico Pau Brasil<i class="material-icons right">more_vert</i></span>
							<p><a href="#">Saiba mais</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Restauração Florestal do Corredor Ecológico Pau Brasil<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
				<div class="col s12 m4">
					<div class="card small hoverable">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="img/publicacoes/projeto/livro2.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Projeto Mata Atlântica Interiorana da Bahia - UESC<i class="material-icons right">more_vert</i></span>
							<p><a href="#">Saiba mais</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Projeto Mata Atlântica Interiorana da Bahia - UESC<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section">
			<div class="white">
				<div>
					<div class="col s12">
						<h3 class="header center">Amigos da Natureza</h3>
						<div class="hr"></div>
						<div class="carousel carousel-slider center" data-indicators="true">
							<!--<div class="carousel-fixed-item center">
								<a href="view/user/denuncia.php" class="waves-effect waves-light btn-large">Seja você também!</a>
							</div>-->
							<div class="carousel-item" href="#one!">
								<div class="row">
									<div class="col m3">
										<img class="responsive-img" src="img/publicacoes/projeto/amigo_da_natureza/amigo.jpg">
									</div>
									<div class="col m3">
										<img class="responsive-img" src="img/publicacoes/projeto/amigo_da_natureza/amigo1.jpg">
									</div>
									<div class="col m3">
										<img class="responsive-img" src="img/publicacoes/projeto/amigo_da_natureza/amigo2.jpg">
									</div>
									<div class="col m3">
										<img class="responsive-img" src="img/publicacoes/projeto/amigo_da_natureza/amigo.jpg">
									</div>
								</div>
							</div>
							<div class="carousel-item" href="#two!">
								<div class="row">
									<div class="col m3">
										<img class="responsive-img" src="img/publicacoes/projeto/amigo_da_natureza/amigo1.jpg">
									</div>
									<div class="col m3">
										<img class="responsive-img" src="img/publicacoes/projeto/amigo_da_natureza/amigo2.jpg">
									</div>
									<div class="col m3">
										<img class="responsive-img" src="img/publicacoes/projeto/amigo_da_natureza/amigo.jpg">
									</div>
									<div class="col m3">
										<img class="responsive-img" src="img/publicacoes/projeto/amigo_da_natureza/amigo1.jpg">
									</div>
								</div>
							</div>
						</div>
						<div class="center">
							<a href="view/preservacao/amigo_natureza/amigo_natureza.php" class="waves-effect waves-light btn-large">Seja você também!</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="parallax-container parallax-small">
			<div class="parallax black parallax-opacity"><img src="img/parallax/ma_amazonia.jpg"></div>
		</section>

		<section class="section">
			<div class="white">
				<div class="row container">
					<div class="col s12 m6">
						<h5 class="header center">Eventos</h5>
						<div class="hr"></div>
						<ul class="collection">
							<li class="collection-item avatar">
								<i class="material-icons circle">folder</i>
								<span class="title">Hackathon</span>
								<p><i class="material-icons">today</i> 20/12/2017 <br>
									<i class="material-icons">place</i> Universidade Estadual de Santa Cruz
								</p>
								<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
							</li>
							<li class="collection-item avatar">
								<i class="material-icons circle">folder</i>
								<span class="title">I Fórum de Eco-Nomia da Mata Atlântica</span>
								<p><i class="material-icons">today</i> 20/12/2017 <br>
									<i class="material-icons">place</i> Universidade Estadual de Santa Cruz
								</p>
								<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
							</li>
						</ul>
					</div>
					<div class="col s12 m6">
						<h5 class="header center">Enquete da Semana</h5>
						<div class="hr"></div>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<?php require_once 'button_floating.php'; ?>
	<?php require_once 'footer.php'; ?>

</body>
</html>