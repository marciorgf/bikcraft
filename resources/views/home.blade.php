@extends('layout.app') @section('app')

<section class="introducao">
	<div class="container">
		<h1>Bicicletas feitas a mão</h1>
		<blockquote class="quote-externo">
			<p>"não tenha nada em sua casa que você não considere útil ou acredita ser bonito"</p>
			<cite>Willian Morris</cite>
		</blockquote>
		<a class="btn" href="/budget">Orçamento</a>
	</div>
</section>
<section class="container produtos">
	<h2 class="subtitulo">Produtos</h2>
	<ul class="produtos_lista">

		<li class="grid-1-3">
			<div class="produtos_icone">
				<img src="img/produtos/passeio.png" alt="Bikcraft Passeio">
			</div>
			<h3>Passeio</h3>
			<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
		</li>

		<li class="grid-1-3">
			<div class="produtos_icone">
				<img src="img/produtos/esporte.png" alt="Bikcraft Esporte">
			</div>
			<h3>Esporte</h3>
			<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
		</li>

		<li class="grid-1-3">
			<div class="produtos_icone">
				<img src="img/produtos/retro.png" alt="Bikcraft Retro">
			</div>
			<h3>Retro</h3>
			<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
		</li>
	</ul>
	<div class="call">
		<p>clique aqui e veja os detalhes dos produtos</p>
		<a class="btn btn-preto" href="produtos.html">Produtos</a>
	</div>
</section>
<section class="portfolio">
	<div class="container">
		<h2 class="subtitulo">Portfólio</h2>
		<div class="portfolio_lista">
			<div class="grid-8">
				<img src="img/portfolio/retro.jpg" alt="Bicicleta Retro">
			</div>
			<div class="grid-8">
				<img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio">
			</div>
			<div class="grid-16">
				<img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte">
			</div>
		</div>
		<div class="call">
			<p>conheça mais o nosso portfólio</p>
			<a class="btn" href="portfólio.html">Portifólio</a>
		</div>
	</div>
</section>
<section class="container qualidade">
	<h2 class="subtitulo">Qualidade</h2>
	<img src="img/bikcraft-qualidade.png" alt="Bikecraft">
	<ul class="qualidade_lista">
		<li class="grid-1-3">
			<h3>Durabilidade</h3>
			<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
		</li>
		<li class="grid-1-3">
			<h3>Design</h3>
			<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
		</li>
		<li class="grid-1-3">
			<h3>Sustentabilidade</h3>
			<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
		</li>
	</ul>
	<div class="call">
		<p>conheça mais a nossa história</p>
		<a class="btn btn-preto" href="sobre.html">Sobre</a>
	</div>
</section>
<section class="quebra">
	<blockquote class="container quote-externo">
		<p>"o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalher da vida cotidiana."</p>
		<cite>Willian Morris</cite>
	</blockquote>
</section>
@endsection