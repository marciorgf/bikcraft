@extends('layout.app') 
@section('app') 
@push('css')
<link rel="stylesheet" href="css/contacts.css"> 
@endpush

<section class="introducao_interna introducao_interna_contato">
    <div class="container">
      <h1>Contato</h1>
      <p>Tire suas dúvidas com a gente</p>
    </div>
  </section>
  <section class="contato container">
    <form class="contato_form grid-8" id="form_orcamento">
      <label for="nome">Nome</label>
      <input type="text" id="nome">
      <label for="email">E-mail</label>
      <input type="text" id="email">
      <label for="espec">Especificações</label>
      <textarea type="text" id="expec"></textarea>
      <button type="submit" class="btn btn-preto">Enviar</button>
    </form>
    <div class="grid-8 contato_dados">
      <h3>Dados</h3>
      <span>+55 11 93223 3232</span>
      <span>orcamento@bikcraft.com</span>
      <span>Rua Ali Perto - Vila Olimpia</span>
      <span>São Paulo - SP - Brasil</span>
      <h3>Redes Sociais</h3>
      <ul>
        <li><a target="_blank" href="#Facebook"><img src="img/redes-sociais/facebook.png"></a></li>
        <li><a target="_blank" href="#Instagram"><img src="img/redes-sociais/instagram.png"></a></li>
        <li><a target="_blank" href="#Twitter"><img src="img/redes-sociais/twitter.png"></a></li>
      </ul>
    </div>
  </section>
  <section class="container contato_mapa">
    <a class="grid-16" href="https://www.google.com/maps/place/Digital+House+S%C3%A3o+Paulo/@-23.6024956,-46.6752568,15z/data=!4m5!3m4!1s0x0:0x739f0ddb0439cf94!8m2!3d-23.6024956!4d-46.6752568" target="_blank"><img src="img/mapa.png" alt="Endereço da Bikcraft"></a>
  </section>
  <section class="quebra">
    <blockquote class="container quote-externo">
      <p>"o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalher da vida cotidiana."</p>
      <cite>Willian Morris</cite>
    </blockquote>
  </section>

  @endsection