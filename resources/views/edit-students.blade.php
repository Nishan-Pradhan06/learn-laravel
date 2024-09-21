@extends('layout.main')
@section('title','Edit Students')
@section('content')
<form action="/update/{{$student->id}}" method="post" class="p-4">
    <!-- generate unique token -->
    @csrf
    <h1>Edit Students Details</h1>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Name" value="{{$student->name}}">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email" value="{{$student->email}}">
    </div>
    <div class="form-group">
        <label for="contact">Contact</label>
        <input type="tel" class="form-control" id="contact" name="contact" aria-describedby="contact" placeholder="Contact" value="{{$student->contact}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection