@extends('layouts.app')
@section('content')
<br>
<br>
<div class="cont center">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cana.png" alt="Los Angeles" id="img" class="center">
    </div>
    <div class="carousel-item">
      <img src="img/carp2.jpg" alt="Chicago" id="img" class="center">
    </div>
    <div class="carousel-item">
      <img src="img/cozinha2.jpg" alt="New York" id="img" class="center">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<br>
<br>
</div>
  <div class="cont center">
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
  </div>
  <br>
<br>
@endsection

<style>
  #img{
    height:500px;
    width:1100px;
    object-center:center;
  }
  #cont{
    object-fit: contain;
  }
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.cont{
  width:1800px;!important
}
</style>