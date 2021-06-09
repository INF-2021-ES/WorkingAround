@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>My Jobs</h2>
        </div>
    </div>
    <div class="col">
        <br/>
        @if ($jobs == null && $accepted == null)
            <h2 class="text-center">No jobs available at the moment!</h2>

        @elseif ($jobs == null && $accepted != null)
            <h2 class="text-center">Accepted jobs</h2>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>More</th>
                </tr>
                @foreach ($accepted as $job)                  
                    <tr>
                        <td>{{$job->description}}</td>
                        <td>{{$job->price}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('job.show', $job->id)}}">Show</a>
                            @can('create-service')
                                    <a class="btn btn-success" href="{{route('job.accept', $job->id)}}">Accept</a>
                                    <a class="btn btn-danger" href="{{route('job.decline', $job->id)}}">Decline</a>
                            @endcan
                        </td>
                    </tr>             
                @endforeach            
            </table>  

        @elseif ($jobs != null && $accepted == null)
            <h2 class="text-center">Available jobs</h2>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>More</th>
                </tr>
                @foreach ($jobs as $job)         
                        <tr>
                            <td>{{$job->description}}</td>
                            <td>{{$job->price}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('job.show', $job->id)}}">Show</a>
                                @can('create-service')
                                        <a class="btn btn-success" href="{{route('job.accept', $job->id)}}">Accept</a>
                                        <a class="btn btn-danger" href="{{route('job.decline', $job->id)}}">Decline</a>
                                @endcan
                            </td>
                        </tr>              
                @endforeach
            </table>
        
        @else 
            <h2 class="text-center">Available jobs</h2>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>More</th>
                </tr>
                @foreach ($jobs as $job)                 
                        <tr>
                            <td>{{$job->description}}</td>
                            <td>{{$job->price}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('job.show', $job->id)}}">Show</a>
                                @can('create-service')
                                        <a class="btn btn-success" href="{{route('job.accept', $job->id)}}">Accept</a>
                                        <a class="btn btn-danger" href="{{route('job.decline', $job->id)}}">Decline</a>
                                @endcan
                            </td>
                        </tr>             
                @endforeach
            </table>

            <h2 class="text-center">Accepted jobs</h2>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>More</th>
                </tr>
                @foreach ($accepted as $acceptedJob)              
                        <tr>
                            <td>{{$acceptedJob->description}}</td>
                            <td>{{$acceptedJob->price}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('job.show', $acceptedJob->id)}}">Show</a>
                                @can('create-service')
                                        <a class="btn btn-success" href="{{route('job.accept', $acceptedJob->id)}}">Accept</a>
                                        <a class="btn btn-danger" href="{{route('job.decline', $acceptedJob->id)}}">Decline</a>
                                @endcan
                            </td>
                        </tr>               
                @endforeach            
            </table>       
        @endif
    </div>
</div>
@endsection