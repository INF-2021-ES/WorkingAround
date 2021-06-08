@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>My Jobs</h2>
            </div>
        </div>
    </div>
    <div class="col">
        <br/>
        @if ($jobs == null)
            <h2 class="text-center">No jobs available at the moment!</h2>
        @else
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Client</th>
                    <th>More</th>
                </tr>
                @foreach ($jobs as $job)                 
                <tr>
                    <td>{{$job->name}}</td>
                    <td>{{$job->price}}</td>
                    <td>{{$job->client}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('job.show', $job->id)}}">Show</a>
                        @can('create-service')
                                <a class="btn btn-primary" href="{{route('job.accept', $job->id)}}">Accept</a>
                                <a class="btn btn-danger" href="{{route('job.decline', $job->id)}}">Decline</a>
                        @endcan
                    </td>
                </tr>

                @endforeach
            </table>            
        @endif
    </div>
</div>
@endsection