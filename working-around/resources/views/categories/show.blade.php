@extends('layouts.app')
@section('content')
  <div class="row">
        @foreach ($services as $service)
          <div class="col">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{$service->workerName}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$service->address}}</h6>
                <p class="card-text">
                  <span class="text-muted">Description: </span>
                  <span>{{$service->description}}</span>
                </p>
                <p class="card-text">
                  <span class="text-muted">Price: </span>
                  <span>{{$service->price}} €</span>
                </p>
                @guest
                <a href="{{route('')}}" class="btn btn-primary btn-block">Register to make a reservation</a>
                @else               
                  <a href="{{route('register')}}" class="btn btn-primary btn-block">Reserve service</a>
                @endguest
               
              </div>
            </div>
          </div>
        @endforeach
  </div>

@endsection