@extends('layout.main')
@section('title','View Students')
@section('content')
<div class="p-4 ">
    <h1>Student Data</h1>
    <h4>Total Students : {{$students->count()}}</h4>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach($students as $student)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->contact}}</td>
                <td>
                    <a href="/edit/{{$student->id}}" class="btn btn-primary">Edit</a>
                    <a href="/delete/{{$student->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection