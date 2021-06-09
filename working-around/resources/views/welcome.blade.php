@extends('layouts.app')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <div class="jumbotron mb-0">
    <h1 class="display-2">Bem-Vindo ao Working Around</h1>
    <p class="lead">A plataforma que permite facilitar o dia a dia de cada um , aqui podera de uma maneira facil e rapida encomendar qualquer serviço que pretenda tendo em conta sempre os melhores preços.
      Aqui tera o melhor serviço ao domicilio que podera encontrar, procuramos sempre o melhor atendimento e o melhor serviço.
    </p>
    <hr class="my-4">
    <p>Working Around já a trabalhar connosco!</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="{{route('categories.index')}}" role="button">Explorar Categorias</a>
    </p>
  </div>
@endsection