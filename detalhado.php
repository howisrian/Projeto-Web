<!------------------------ Rafael Áquila / Inácio ------------------------------------->

<?php
	require './src/script/array.php';
	$title = "";
	foreach ($hotels as $h) {
		if ($h['id'] == $_GET['id']) {
			$id = $h['id'];
			$photo = $h['foto'];
			$text = $h['descricao'];
			$title = $h['nome'];
			$price = $h['preco'];
			$description = $h['descricao'];
			$classification = $h['classificacao'];
			break;
		}
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="assets/head.png" type="image/x-icon" sizes="32x32" />
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="./src/styles/global.css" />
		<link rel="stylesheet" href="./src/styles/detalhe.css" />
	</head>
	<body>
		<header>
			<div class="header">
				<div class="title"><a href="#"><span class="bluetext">Ra</span><span class="yellowtext">fi</span><span class="redtext">go</span></a></div>
				<nav>
					<ul>
						<li><a href="#"><img src="./assets/favorites.svg" alt="Ver menu" /><span>Meus favoritos</span></a></li>
						<li><a href=""><img src="./assets/user.svg" alt="fazer login" class="user" /><span>Fazer login</span></a></li>
						<li><a href=""><span>Menu</span><img src="./assets/arrow-bottom.svg" alt="Ver menu" class="rotation" /></a></li>
						<li><a href=""><span>BRL</span><img src="./assets/arrow-bottom.svg" alt="Ver mais moedas" class="rotation" /></a></li>
						<li class="hamburguer"><a href=""><img src="./assets/hamburguer.svg" alt="hamburguer menu" /><span>Menu</span></a></li>
					</ul>
				</nav>
			</div>
		</header>
		<section class="product">
			<img src="<?=$photo?>" alt="Imagem do Produto">
			<div class="info">
				<h1><?=$title?></h1>
				<h3>R$ <?=$price?>,00 / diária</h3>
				<p><?=$description?></p>
				<p class="pmargin"><b>Avaliação: <?=$classification?>/5 </b></p>
				<a href="">Alugar</a><button id="addButton" class="favorites" onclick="adicionarFavorito(<?php echo $id; ?>)">Favoritar</button>
			</div>
		</section>
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