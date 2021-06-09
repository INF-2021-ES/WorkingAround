@extends('layouts.app')
@section('content')
    <div class="container my-4">
        <div class="col">
            <table class='table table-bordered'>
                <tr>
                    <th>Client</th>
                    <td>{{$client->name}}</td>
                </tr>
                <tr>
                    <th>Client address</th>
                    <td>{{$client->address}}</td>
                </tr>
                <tr>
                    <th>Job description</th>
                    <td>{{$service->description}}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{$service->price}} €</td>
                </tr>
            </table>
        </div>
    </div>
@endsection