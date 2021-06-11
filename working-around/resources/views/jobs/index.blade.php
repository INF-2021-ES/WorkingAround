@extends('layouts.app')
@section('pageTitle', 'My Jobs')
@section('content')
<div class="container my-4">
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
                        <td>{{$job->Description}}</td>
                        <td>{{$job->Price}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('job.show', $job->serviceID)}}">Show</a>
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
                            <td>{{$job->Description}}</td>
                            <td>{{$job->Price}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('job.show', $job->jobID)}}">Show</a>
                                @can('create-service')
                                        <a class="btn btn-success" href="{{route('job.accept', ['id' => $job->serviceID, 'job' => $job->jobID])}}">Accept</a>
                                        <a class="btn btn-danger" href="{{route('job.decline', $job->serviceID)}}">Decline</a>
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
                            <td>{{$job->Description}}</td>
                            <td>{{$job->Price}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('job.show', $job->serviceID)}}">Show</a>
                                <a class="btn btn-success" href="{{route('job.accept', ['id' => $job->serviceID, 'job' => $job->jobID])}}">Accept</a>
                                <a class="btn btn-danger" href="{{route('job.decline', $job->serviceID)}}">Decline</a>
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
                            <td>{{$acceptedJob->Description}}</td>
                            <td>{{$acceptedJob->Price}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('job.show', $acceptedJob->serviceID)}}">Show</a>
                            </td>
                        </tr>               
                @endforeach            
            </table>       
        @endif
    </div>
</div>
@endsection