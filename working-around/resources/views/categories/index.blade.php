@extends('layouts.app')
@section('pageTitle', 'Categories')
@section('content')
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($categories as $category)
                <div class="col">
                    <div class="card h-100" id="carta">
                    <img src="img/{{$category->name}}.jpg" class="card-img-top" alt="..." id="cards">
                    <div class="card-body">
                        <h5 class="card-title">{{$category->name}}</h5>
                       
                        <a href='{{route('categories.show', $category->id)}}' class="btn btn-primary btn-lg btn-block">Show</a>
                        
                    </div>
                    </div>
                </div>
                <br>
                <br>
            @endforeach
        </div>
    </div>
@endsection

<style>
    #cards{
        height:220px;!important
        width: 400px;!important

    }
    #carta{
        border-top:10px solid #ffffff;
    }

</style>