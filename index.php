<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="assets/head.png" type="image/x-icon" sizes="32x32" />
		<link rel="stylesheet" href="src/styles/style.css" />
		<link rel="stylesheet" href="src/styles/global.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer">
		<title>Rafigo</title>
	</head>
	<body>
		<header>
			<div class="header">
				<div class="title"><a href="#"><span class="bluetext">Ra</span><span class="yellowtext">fi</span><span class="redtext">go</span></a></div>
				<nav>
					<ul>
						<li><a href="./src/pages/favorites.html"><img src="./assets/favorites.svg" alt="Ver menu" /><span>Meus favoritos</span></a></li>
						<li><a href=""><img src="./assets/user.svg" alt="fazer login" class="user" /><span>Fazer login</span></a></li>
						<li><a href=""><span>Menu</span><img src="./assets/arrow-bottom.svg" alt="Ver menu" class="rotation" /></a></li>
						<li><a href=""><span>BRL</span><img src="./assets/arrow-bottom.svg" alt="Ver mais moedas" class="rotation" /></a></li>
						<li class="hamburguer"><a href=""><img src="./assets/hamburguer.svg" alt="hamburguer menu" /><span>Menu</span></a></li>
					</ul>
				</nav>
			</div>
		</header>
		<main>
			<!------------------------------ Carregamento ------------------------------------>
			<!------------------------ Rafael Áquila ------------------------------------->
			<div class="loading-screen">
    		<p class="loading-text">Carregando...</p>
  		</div>
			<!------------------------------ Search -------------------------------->
			<!------------------------ Rafael Áquila ------------------------------------->
			<section class="forms">
				<h1>Veja as <span class="bluetext">ofertas</span> dos seus sites de reserva favoritos</h1>
				<p>Procure uma cidade, um hotel ou um lugar famoso.</p>
				<form action="index.php" method="POST">
						<input type="text" />	
						<button>Pesquisar</button>
				</form>
				<ul>
					<li><img src="./assets/booking.png" alt="empresas aéreas"></li>
					<li><img src="./assets/hoteis.png" alt="empresas aéreas"></li>
					<li><img src="./assets/expedida.png" alt="empresas aéreas"></li>
					<li><img src="./assets/vrbo.png" alt="empresas aéreas"></li>
					<li><img src="./assets/all.png" alt="empresas aéreas"></li>
					<li><img src="./assets/trip.png" alt="empresas aéreas"></li>
					<li><img src="./assets/decolar.png" alt="empresas aéreas"></li>
					<li><span>+ de 100</span></li>
				</ul>
			</section>
		<div class="slider js-slider"></div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"
			integrity="sha512-h9kKZlwV1xrIcr2LwAPZhjlkx+x62mNwuQK5PAu9d3D+JXMNlGx8akZbqpXvp0vA54rz+DrqYVrzUGDMhwKmwQ=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js"
			integrity="sha512-fDGBclS3HUysEBIKooKWFDEWWORoA20n60OwY7OSYgxGEew9s7NgDaPkj7gqQcVXnASPvZAiFW8DiytstdlGtQ=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
			integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
			<script type="text/javascript" src="./assets/script/script.js"></script>
			<!-------------------------------- Hoteis ------------------------------>
			<!------------------------ Rafael Áquila ------------------------------------->
			<section class="hoteis">
					<h1>Os <span class="bluetext">melhores</span> hotéis</h1>
					<div class="content">
						<?php
							foreach ($hotels as $h) {
								$id = $h['id'];
								$photo = $h['foto'];
								$text = $h['descricao'];
								$name = $h['nome'];
								echo '<div class="card">
												<img src="' . $photo . '" alt="foto do hotel">
												<h1>' . $name . '</h1>
												<p>' . $text . '</p>
												<a href="detalhado.php?id=' . $id . '">Ver mais</a>
											</div>';
							}
						?>
					</div>
			</section>
			<!---------------------------------- About ------------------------------------>
			<section class="about">
				<h2>Sobre o <span class="bluetext">Rafigo</span></h2>
				<div class="faq">
					<div class="box">
						<h3>Buscador global de hotéis do Rafigo</h3>
						<p>Com apenas alguns cliques, o buscador de hotéis do rafigo permite que os usuários comparem preços de hotéis em centenas
						de sites de reserva com mais de 5 milhões de hotéis e outros tipos de acomodações em mais de 190 países. Todos os anos,
						ajudamos milhões de viajantes a comparar ofertas de hotéis e acomodações. Consulte informações para viagens a cidades
						como <b>Rio de Janeiro</b> ou <b>São Paulo</b> e encontre o hotel certo no rafigo, de maneira rápida e fácil. <b>Fortaleza</b> e seus
						arredores são ótimas escolhas para viagens de uma semana ou mais com a grande variedade de hotéis disponíveis.</p>
					</div>
					<div class="box">
						<h3>Encontre hotéis baratos no rafigo</h3>
						<p>O rafigo permite a você encontrar <span class="bluebackground">facilmente o hotel ideal e comparar preços de vários sites</span>. Basta informar para onde
						quer ir e as datas desejadas para viajar, e deixe que nosso mecanismo de busca compare preços de acomodações para você.
						Para refinar os resultados de sua busca, filtre por preço, distância (da praia, por exemplo), categoria por estrelas,
						instalações e muito mais. De hostels econômicos a suítes de luxo, o rafigo facilita a reserva online. Você pode buscar
						entre uma enorme variedade de quartos e localizações ao redor do Brasil, como <b>Salvador</b> e <b>Florianópolis</b>, além de outras
						cidades populares e destinos de férias internacionais!</p>
					</div>
					<div class="box">
						<h3>As avaliações o ajudam a encontrar seu hotel ideal</h3>
						<p>Com mais de <span class="bluebackground">175 milhões de avaliações de hotéis agregadas</span> e mais de 19 milhões de imagens, fica mais fácil encontrar
						informações sobre o local para onde você está viajando. Para ter uma visão geral de um hotel, o rafigo exibe uma média
						das avaliações junto a diversas opiniões de outros sites de reservas, como Decolar, Hotel Urbano, Hoteis.com, Expedia,
						etc. O rafigo ajuda você a encontrar informações sobre sua viagem para <b>Paris</b>, incluindo o hotel ideal para você.</p>
					</div>
					<div class="box">
						<h3>Como reservar</h3>
						<p>O rafigo é um buscador de hotéis com um extenso comparador de preços. Os preços exibidos vêm de vários sites de
						reservas e de hotéis. Isso quer dizer que, enquanto os usuários decidem no rafigo qual hotel melhor supre suas
						necessidades, o processo de reserva se dá através dos sites de reserva (que estão conectados a nosso site). Ao clicar no
						botão “Ver oferta”, você será direcionado para um site de reservas no qual poderá completar o processo de reserva para a
						oferta encontrada no rafigo.<br>
						Visite o site do rafigo e encontre o preço ideal em mais de centenas de sites de reserva!</p>
					</div>
				</div>
			</section>
		</main>
		<footer>
			<div class="media">
				<h3>Rafigo</h3>
				<div class="media__redes">
					<img src="./assets/facebook.svg" alt="Redes sociais"/>
					<img src="./assets/twitter.svg" alt="Redes sociais" />
					<img src="./assets/instagram.svg" alt="Redes sociais" />
					<img src="./assets/youtube.svg" alt="Redes sociais" />
					<img src="./assets/linkedin.svg" alt="Redes sociais" />
				</div>
			</div>
			<select name="Pais">
				<option value="1">Brasil</option>
				<option value="2">Estados Unidos</option>
				<option value="3">Canadá</option>
				<option value="4">Suiça</option>
				<option value="5">Dinamarca</option>
				<option value="6">Uruguai</option>
			</select>
			<div class="links">
				<ul>
					<li><a href="">Quem Somos</a></li>
					<li><a href="">Vagas</a></li>
					<li><a href="">Imprensa</a></li>
					<li><a href="">Investidor relations</a></li>
					<li><a href="">App rafigo - acesse de onde estiver</a></li>
					<li><a href="">Rafigo Business Studio</a></li>
					<li><a href="">Afiliados</a></li>
				</ul>
				<ul>
					<li><a href="">Central de ajuda</a></li>
					<li><a href="">Descubra como o rafigo funciona</a></li>
					<li><a href="">Condições e uso</a></li>
					<li><a href="">Informações legais</a></li>
					<li><a href="">Preferências de cookies</a></li>
					<li><a href="">Aviso de Privacidade</a></li>
					<li><a href="">Cyber Security</a></li>	
				</ul>
				<div class="news">
					<h2>Quer <span class="bluetext">receber</span> ofertas de acomodações exclusivas?<br />Assine nossa <span class="bluetext">newsletter</span>.</h2>
					<form action="">
						<input type="text" placeholder="Endereço de e-mail"><button>Inscreva-se</button>
					</form>
				</div>
			</div>
		</footer>
		<script>
			function hideLoadingScreen() {
				let loadingScreen = document.querySelector('.loading-screen');
				loadingScreen.style.display = 'none';
			}
			setTimeout(hideLoadingScreen, 1000);
  </script>
	</body>
	<script src="./src/script/search.js"></script>
</html>