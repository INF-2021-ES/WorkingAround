@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')
<div class="container mt-4">
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
      <img src="img/cana.png" alt="plumber" id="img" class="center">
    </div>
    <div class="carousel-item">
      <img src="img/carp2.jpg" alt="carpenter" id="img" class="center">
    </div>
    <div class="carousel-item">
      <img src="img/cozinha2.jpg" alt="chefs" id="img" class="center">
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
</div>
  <div class="container mt-4">
    <div class="jumbotron mb-4">
      <h1 class="display-4">Welcome to Working Around</h1>
      <p class="lead">The platform that makes everyone&#8217;s day to day life easier. Here you will be able to request any available service faster and easier with the best prices and the best home service you can find on the market. We strive to ensure that you have the best communication client to worker and vice-versa.
      </p>
      <hr class="my-4">
      <div class="d-flex justify-content-center">
        <p>Working Around start working with us now !</p>
      </div>
      <p class="lead">
        <a class="btn btn-primary btn-lg center" href="{{route('categories.index')}}" role="button">Explore Categories</a>
      </p>
    </div>
  </div>
  <style>
    #img{
      height:500px;
      width:1100px;
      object-fit: cover;
    }
    #cont{
      object-fit: cover;
    }
    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  </style>
@endsection