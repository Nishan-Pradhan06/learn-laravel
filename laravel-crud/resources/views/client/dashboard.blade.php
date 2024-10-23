<style>
    .container {
        padding: 50px 80px;
    }

    .row-hero {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .heading-details {
        margin-top: 30px;
        /* Spacing above the heading */
        font-size: 24px;
        /* Font size for the heading */
        color: #343a40;
        /* Color for the heading */
    }

    .row-card {
        display: flex;
        /* Aligns card boxes in a row */
        gap: 20px;
        /* Adds space between the cards */
        margin-top: 20px;
        /* Adds space above the card row */
    }

    .card-box {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        width: 250px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .card-content h3 {
        margin: 0;
        font-size: 18px;
        color: #343a40;
    }

    .card-content p {
        font-size: 24px;
        font-weight: bold;
        color: #007bff;
    }
</style>

@extends('layout.client')
@section('title','Home')
@section('client-content')
<div class="container">
    <div class="row-hero">
        <div>
            <h1>Hello, Nishan!</h1>
            <p>Create a job post to hire the freelancers.</p>
        </div>
        <a href="/post-work" class="btn btn-primary">Post a Job</a>
    </div>

    <h1 class="heading-details">Dashboard Overview</h1> <!-- New Heading -->
    <div class="row-card">
        <div class="card-box">
            <div class="card-content">
                <h3>Total Jobs</h3>
                <p id="total-contracts">{{$totalJobs}}</p>
            </div>
        </div>
        <div class="card-box">
            <div class="card-content">
                <h3>Total Contracts</h3>
                <p id="total-jobs">0</p>
            </div>
        </div>
        <div class="card-box">
            <div class="card-content">
                <h3>Pending Jobs</h3>
                <p id="total-jobs">0</p>
            </div>
        </div>
    </div>
</div>
@endsection