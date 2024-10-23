@extends('layout.freelancer')
@section('title','Find work')
@section('freelancer-content')
<style>
    .container {
        padding: 20px 10px;
    }

    .crop-text{
        
    }
</style>
<div class="container">
    <h1>Proposal</h1>
        <div class="px-5">
            <br>
            <h3>Find Jobs</h3>
            <!-- @foreach($jobs as $job) -->
            <div class="card mb-4">
                <div class="card-header">
                    <!-- <p style="font-size: 10px;">Posted {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}</p> -->
                    <!-- <h5>{{$job->title}}</h5> -->
                </div>
                <div class="card-body">
                    <!-- <p class="card-text">{!! str_replace(['{', '}'], '', $job->des) !!}</p> -->

                </div>
            </div>
            @endforeach
        </div>
    <form class="p-4 form-div" method="post" action="/save-proposal">
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
            <label for="proposal">Proposal</label>
            <textarea class="form-control" id="editor" rows="3" placeholder="write a proposal" name="proposal"></textarea>
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