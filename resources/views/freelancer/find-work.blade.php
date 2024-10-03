@extends('layout.freelancer')
@section('title','Find work')
@section('freelancer-content')
<style>
    .container {
        padding: 20px 10px;
    }
</style>
<div class="container">
    <div class="px-5">
        <br>
        <h3>Find Jobs</h3>
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
                <a href="" class="btn btn-primary">Apply</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection