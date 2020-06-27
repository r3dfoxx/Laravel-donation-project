@extends('Layouts.app')

@section('content')
    <form method="POST" action="/dashboard">
        @csrf
<div class="container-fluid w-50">
    <div class="row justify-content-center">
        <div class="container">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" aria-describedby="Name" placeholder="Enter your Name">
        </div>
        <div class="container">
            <label for="Email">Email</label>
            <input type="Email" class="form-control" id="Email" placeholder="Enter your Email">
            <small id="Email" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="container">
            <label for="Donation">Donation</label>
            <input type="Donation" class="form-control" id="Donation" placeholder="
Enter the amount of donation">
        </div>
        <div class="container">
            <label for="Message">Message</label>
            <textarea class="form-control" id="Message" rows="4" placeholder="Leave your message (optional)
"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
    </form>
@endsection
