@extends('Layouts.app')

@section('content')
    <form action="dashboard.php" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group row-cols-md-4"></div>
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" aria-describedby="Name" placeholder="Enter your Name">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="Email" class="form-control" id="Email" placeholder="Enter your Email">
            <small id="Email" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="Donation">Donation</label>
            <input type="Donation" class="form-control" id="Donation" placeholder="
Enter the amount of donation">
        </div>
        <div class="form-group">
            <label for="Message">Message</label>
            <textarea class="form-control" id="Message" rows="4" placeholder="
Leave your message (optional)"> </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
