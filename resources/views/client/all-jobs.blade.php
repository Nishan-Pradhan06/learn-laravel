@extends('layout.client')
@section('title','Home')
@section('client-content')
<div class="px-5">
    <br>
    <h3>All Jobs</h3>

    @foreach($jobs as $job)
    <div class="card mb-4">
        <div class="card-header">
            <p style="font-size: 10px;">Posted {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</p>
            <h5>{{$job->title}}</h5>
        </div>
        <div class="card-body">
            <p class="card-text">{!! str_replace(['{', '}'], '', $job->des) !!}</p>
            <p class="card-text">Duration: {{$job->duration}}</p>
            <p class="card-text">Budget: Rs. {{$job->budget}}</p>
            <p class="card-text">Tech Stack: {{$job->req}}</p>
            <a href="{{ url('/edit-work/' . $job->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ url('/delete/' . $job->id) }}" class="btn btn-danger">Delete</a>
        </div>
    </div>
    @endforeach
</div>


@endsection