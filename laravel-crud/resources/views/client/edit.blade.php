@extends('layout.client')
@section('title','edit')
@section('client-content')
<style>
    .container {
        padding: 20px 10px;
    }
</style>
<div class="container">
    <h1>Edit a Job</h1>
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
        <div class="alert alert-da{{{{nger alert-dismissible fade show" role="alert">
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
            <textarea class="form-control" id="editor" rows="3" placeholder="Enter job description" name="des">{{$job->des}}</textarea>
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
        </div>
    </form>
</div>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor', {
        toolbar: [{
                name: 'basicstyles',
                items: ['Bold', 'Italic']
            },
            {
                name: 'paragraph',
                items: ['NumberedList', 'BulletedList']
            },
        ],
        height: 300
    });
</script>
@endsection


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>