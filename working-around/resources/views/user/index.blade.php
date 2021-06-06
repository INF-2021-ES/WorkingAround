@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User Details</h2>
                <img src="{{ asset('img/profile_pic.png') }}" alt="profile_icon">
                <style>
                    img {
                        height: 100px;
                        width: 100px;
                        margin-left: 20px;
                    }
                </style> 
            </div>
        </div>
    </div>
    <div class="col">
        <br/>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th>E-Mail</th>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$user->address}}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{$user->roles}}</td>
            </tr>
        </table>
        <a class="btn btn-primary" href="{{route('user.edit', $user->id)}}">Edit</a>
        
        @if(auth()->user()->can('create-service')) <!-- Worker -->
        <a class="btn btn-danger"href="{{route('user.removeWorker')}}">Delete</a> 
        @else <!-- Admin or Client-->
        <a class="btn btn-danger"href="{{route('user.removeClient')}}">Delete</a> <!-- Client method works in admin -->
    @endif
    </div>
</div>
@endsection