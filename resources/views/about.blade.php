@extends('layout.app') @section('app')

@push('css')
<link rel="stylesheet" href="css/about.css">
@endpush

<section class="introducao_interna introducao_interna_sobre">
    <div class="container">
        <h1>Sobre</h1>
        <p>conheça mais sobre a Bikcraft</p>
    </div>
</section>
<section class="missao_sobre container">
    <div class="grid-10">
        <h2 class="subtitulo_interno">História Missão e Visão</h2>
        <p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão inovadora
            da qual fazemos parte</p>
        <p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão inovadora
            da qual fazemos parte</p>
    </div>
    <div class="grid-6">
        <h2 class="subtitulo_interno">Valores</h2>
        <ul>
            <li>- Qualidade no processo com</li>
            <li>- Foco no cliente sem perder a</li>
            <li>- diversão, preservando a</li>
            <li>- Natureza com sustentabilidade</li>
        </ul>
    </div>
    <div class="grid-16 foto_equipe">
        <img src="img/equipe-bikcraft.jpg" alt="Equipe Bikcustom">
    </div>
</section>
<section class="container qualidade">
    <h2 class="subtitulo">Qualidade</h2>
    <img src="img/bikcraft-qualidade.png" alt="Bikcustom">
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
</section>
<section class="quebra">
    <blockquote class="container quote-externo">
        <p>"o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalher da vida cotidiana."</p>
        <cite>Willian Morris</cite>
    </blockquote>
</section>

@endsection