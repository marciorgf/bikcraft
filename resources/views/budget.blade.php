@extends('layout.app') 
@section('app') 
@push('css')
<link rel="stylesheet" href="css/budget.css"> 
@endpush

<section class="introducao_interna introducao_interna_contato">
    <div class="container">
      <h1>Orçamento</h1>
      <p>Escolha peças exclusivas e personalizadas</p>
    </div>
  </section>
  <section class="contato container">
    <form class="contato_form grid-12" id="form_orcamento">
      <label for="nome">Nome</label>
      <input type="text" id="nome">
      <label for="email">E-mail</label>
      <input type="text" id="email">
      <label for="number">Telefone</label>
      <input type="number" id="number">
      <label for="espec">Informações</label>
      <textarea type="text" id="expec"></textarea>
      <button type="submit" class="btn btn-preto">Enviar</button>
    </form>    
  </section>  
  <section class="quebra">
    <blockquote class="container quote-externo">
      <p>"o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalher da vida cotidiana."</p>
      <cite>Willian Morris</cite>
    </blockquote>
  </section>

  @endsection