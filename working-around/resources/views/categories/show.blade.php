@extends('layouts.app')
@section('pageTitle', 'Services')
@section('content')
  <div class="container my-4">
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary btn-lg btn-block" href="#" type="button">+ Create Service</button>
      </div>
  </div>
  <div class="container my-4">
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
                <a href="{{route('login')}}" class="btn btn-primary btn-block">Login to make a reservation</a>
                @else
                  @if (auth()->user()->can('reserve-service'))
                    <a href="{{route('categoryService.reserve', $service->id)}}" class="btn btn-primary btn-block">Reserve service</a>
                  @else
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Reserve Service
                    </button>
                    <br>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                          </div>
                          <div class="modal-body">
                            Only clients can make reservations
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>          
                  @endif         
                @endguest
              </div>
            </div>
          </div>
        @endforeach
  </div>
@endsection