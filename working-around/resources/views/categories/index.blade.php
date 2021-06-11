@extends('layouts.app')
@section('pageTitle', 'Categories')
@section('content')
    <div class="container my-4 vh-100">
        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($categories as $category)
                <div class="col mb-4">
                    <div class="card" id="carta">
                    <img src="img/{{$category->name}}.jpg" class="card-img-top" alt="category_image" id="cards">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->name}}</h5>
                       
                        <a href='{{route('categories.show', $category->id)}}' class="btn btn-primary btn-lg btn-block">Show</a>
                        
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated a few minutes ago</small>
                      </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection