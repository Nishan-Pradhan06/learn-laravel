@extends('layout.main')
@section('title','Edit Work')
@section('content')
<form class="p-4" method="post" action="{{ url('/update-work/' . $job->id) }}">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Job updated successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oh no!</strong> {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter Job Title" required name="title" value="{{$job->title}}">
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="form-group">
        <label for="des">Description</label>
        <textarea class="form-control" id="desc" rows="3" placeholder="Enter job description" name="des">{{$job->des}}</textarea>
    </div>


    <div class="form-group">
        <label for="duration">Duration</label>
        <input type="date" class="form-control" id="duration" placeholder="duration" name="duration" value="{{$job->duration}}">
    </div>
    <div class="form-group">
        <label for="budget">Budget</label>
        <input type="text" class="form-control" id="budget" placeholder="12k" name="budget" value="{{$job->budget}}">
    </div>
    <div class="form-group">
        <label for="req">Requirement</label>
        <input type="text" class="form-control" id="req" placeholder="Enter tech requirements" name="req" value="{{$job->req}}">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ url('/delete/' . $job->id) }}" class="btn btn-danger">Delete</a>
    </div>
</form>
@endsection