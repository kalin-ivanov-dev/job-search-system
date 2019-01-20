@extends('layouts.app')


@section('content')
    <div class="col-md-4">
        <form action="/search" method="GET">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Search</button>
                </span>
            </div>
        </form>
    </div>
    @if(count($jobs) > 0)
        @foreach($jobs as $job)


            <ul class="list-group" style="padding-left:25px;padding-right: 25px;padding-top: 10px;">
                <li class="list-group-item">
                    <h3> {{$job->position}}</h3>
                    <small>Posted on:<strong> {{$job->created_at}} </strong>  </small>
                    <br>
                    <small>Posted by:<strong> {{$job->company}} </strong> </small>
                    <br>
                    <small>Location:<strong> {{$job->city}} </strong></small>
                    <hr>
                    <a href="/jobs/{{$job->id}}" class="btn btn-primary">Show</a>
                </li>
            </ul>
        @endforeach
        {{$jobs->links()}}
    @else
        <p>No jobs found</p>
    @endif


@endsection