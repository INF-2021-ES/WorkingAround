@extends('layouts.app')
@section('content')
    <div class="row">

        @foreach ($services as $service)
        <div class="card" style="width: 18rem;">
            <img src="img/imagem_{{$service->name}}.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$service->name}}</h5>
              <p class="card-text">{{$service->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{$service->price}}</li>
              <li class="list-group-item">{{$service->worker_id}}</li>
              <!-- <li class="list-group-item">A third item</li> -->
            </ul>
            <div class="card-body">
              <a href="btn btn-primary" class="card-link">Reserve</a>
            </div>
          </div>
        @endforeach
    </div>

@endsection