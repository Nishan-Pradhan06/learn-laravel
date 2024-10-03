<style>
    .row-hero {
        padding: 50px 80px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
</style>
@extends('layout.client')
@section('title','Home')
@section('client-content')
<div class="row-hero">
    <div>
        <h1>Hello, Nishan!</h1>
        <p>Create a job post to hire the freelancers.</p>
    </div>
    <a href="" class="btn btn-primary">Post a Job</a>
</div>
@endsection