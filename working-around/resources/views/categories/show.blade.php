@extends('layouts.app')
@section('pageTitle', 'Services')
@section('content')
  <div class="container my-4">
    <div class="d-flex justify-content-center center">
        @guest
                <a href="{{route('login')}}" class="btn btn-primary btn-lg btn-block">Login to Create a Service</a>
                @else
                  @if (auth()->user()->can('create-service'))
                  <a class="btn btn-primary btn-lg btn-block" href="{{route('service.create', $id)}}">+ Create Service</a>
                  @else
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
                      + Create Service
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
                            Only Workers can create Services
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
  <div class="container my-5 center">
  <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($services as $service)
          <div class="col mb-4">
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
                    <a href="{{route('category.reserve', ['category' => $service->category, 'id' => $service->id])}}" class="btn btn-primary btn-block">Reserve service</a>
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
  </div>
@endsection

<style>

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
</style>