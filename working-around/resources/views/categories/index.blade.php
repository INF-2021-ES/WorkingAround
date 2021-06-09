@extends('layouts.app')
@section('content')
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($categories as $category)
                <div class="col">
                    <div class="card h-100">
                    <img src="/img/image1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->name}}</h5>
                        <p class="card-text">{{$category->description}}</p>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection