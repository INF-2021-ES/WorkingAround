@extends('layouts.app')
@section('pageTitle', 'My requests')
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2>My Reservations</h2>
            </div>
        </div>
        <div class="col">
            <br/>
            @if ($reservations == null)
                <h2 class="text-center">No reservations at the moment!</h2>
                
            @else             
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>More</th>
                    </tr>
                    @foreach ($reservations as $reservation)                  
                        <tr>
                            <td>{{$reservation->Description}}</td>
                            <td>{{$reservation->Price}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('job.show', $reservation->serviceID)}}">Show</a>
                            </td>
                        </tr>             
                    @endforeach            
                </table> 
            </div>
            @endif
    </div>
@endsection