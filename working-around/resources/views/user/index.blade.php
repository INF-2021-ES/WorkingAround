@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User Details</h2>
            </div>
        </div>
    </div>
    <div class="col">
        <br/>
        <a class="btn btn-primary" href="{{route('user.edit', $user->id)}}">Edit</a>
        <br/>
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
    </div>
</div>
@endsection