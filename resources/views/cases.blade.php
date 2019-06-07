@extends('layout.app') 
@section('app') 
@push('css')
<link rel="stylesheet" href="css/cases.css"> 
@endpush

<section class="introducao_interna introducao_interna_portfolio">
    <div class="container">
        <h1>Portfólio</h1>
        <p>conheça os projetos que amamos mostrar</p>
    </div>
</section>
<section class="container">
    <ul class="rslides">
        <li>
            <blockquote class="quote_clientes">
                <p>"No mundo atual, a contínua expansão de nossa ativodade cumpre um papel essencial na formulação da gestão
                    inovadora da qual fazemos parte."</p>
                <cite>Barbara Moss</cite>
            </blockquote>
        </li>
        <li>
            <blockquote class="quote_clientes">
                <p>"No mundo atual, a contínua expansão de nossa ativodade cumpre um papel essencial na formulação da gestão
                    inovadora da qual fazemos parte."</p>
                <cite>Leonidas Peligrineli</cite>
            </blockquote>
        </li>
        <li>
            <blockquote class="quote_clientes">
                <p>"No mundo atual, a contínua expansão de nossa ativodade cumpre um papel essencial na formulação da gestão
                    inovadora da qual fazemos parte."</p>
                <cite>Mykelly Guimarães</cite>
            </blockquote>
        </li>
    </ul>
</section>

<section class="portfolio">
    <div class="container">
        <ul class="portfolio_lista rslides_portfolio">
            <li>
                <div class="grid-8">
                    <img src="img/portfolio/retro.jpg" alt="Bicicleta Retro">
                </div>
                <div class="grid-8">
                    <img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio">
                </div>
                <div class="grid-16">
                    <img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte">
                </div>
            </li>
            <li>
                <div class="grid-8">
                    <img src="img/portfolio/passeio.jpg" alt="Bicicleta Retro">
                </div>
                <div class="grid-8">
                    <img src="img/portfolio/retro.jpg" alt="Bicicleta Passeio">
                </div>
                <div class="grid-16">
                    <img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte">
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="quebra">
    <blockquote class="container quote-externo">
        <p>"o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalher da vida cotidiana."</p>
        <cite>Willian Morris</cite>
    </blockquote>
</section>

@endsection