<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Bikcuston</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsivo.css">
		@stack('css')
		<script src="js/libs/modernizr.custom.js"></script>
	</head>
	<body>
		<header class="header">
			<div class="container">
				<a target="" href="/" class="grid-4">
					<img src="img/logo.png" alt="bikcustom">
				</a>
				<nav class="header_menu grid-12">
					<ul>
						<li><a href="/about">Sobre</li></a>
						<li><a href="#">Produtos</li></a>
						<li><a href="/cases">Portfólio</li></a>
						<li><a href="/contacts">contato</li></a>
					</ul>
				</nav>
			</div>
		</header>
            @yield('app')
		<footer>
			<div class="footer">
				<div class="container">
					<div class="grid-8 footer_historia">
						<h3>Nossa História</h3>
						<p>O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana. interesse por todos os detalhes da vida cotidiana.</p>
					</div>
					<div class="grid-4 footer_contato">
						<h3>Contato</h3>
						<ul>
							<li>- 11 2323-4343</li>
							<li>- contato@bikcustom.com</li>
							<li>- São Paulo - SP</li>
						</ul>	
					</div>
					<div class="grid-4 footer_redes">
						<h3>Redes Sociais</h3>
						<ul>
							<li><a target="_blank" href="#Facebook"><img src="img/redes-sociais/facebook.png"></a></li>
							<li><a target="_blank" href="#Instagram"><img src="img/redes-sociais/instagram.png"></a></li>
							<li><a target="_blank" href="#Twitter"><img src="img/redes-sociais/twitter.png"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<p class="grid-16">Bikcustom 2019 - &copy; Copyright - Todos os direitos reservados</p>
				</div>
			</div>
		</footer>

		<!-- Scripts -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>window.jquery || document.write('<script src="js/libs/jquery.min.js"><\/script>')</script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<!-- Scripts -->
	</body>
</html>