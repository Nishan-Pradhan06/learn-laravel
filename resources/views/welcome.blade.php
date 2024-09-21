@extends('layout.main')
@section('title','Home')
@section('content')
<form action="/save" method="post" class="p-4">
    <!-- generate unique token -->
    @csrf
    <h1>Students Details</h1>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="contact">Contact</label>
        <input type="tel" class="form-control" id="contact" name="contact" aria-describedby="contact" placeholder="Contact">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection