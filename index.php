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
	</body>
</html>