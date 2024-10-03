@extends('layout.client')
@section('title','Home')
@section('client-content')
<style>
    .container {
        padding: 20px 10px;
    }
</style>
<div class="container">
    <h1>Post a Job</h1>
    <form class="p-4 form-div" method="post" action="/save-work">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Job posted successfully.
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
            <input type="text" class="form-control" id="title" placeholder="Enter Job Title" required name="title">
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="form-group">
            <label for="des">Description</label>
            <textarea class="form-control" id="editor" rows="3" placeholder="Enter job description" name="des"></textarea>
        </div>

        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="date" class="form-control" id="duration" placeholder="duration" name="duration">
        </div>
        <div class="form-group">
            <label for="budget">Budget</label>
            <input type="text" class="form-control" id="budget" placeholder="12k" name="budget">
        </div>
        <div class="form-group">
            <label for="req">Requirement</label>
            <input type="text" class="form-control" id="req" placeholder="Enter tech requirements" name="req">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
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