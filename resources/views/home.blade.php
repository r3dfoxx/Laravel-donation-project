@extends('Layouts.app')

@section('content')

    @if($errors->any())

        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{route( 'statistic-donation')}}">

        <div class="container-fluid w-50">
            <div class="row justify-content-center">
                @csrf
                <div class="container">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control" id="name" aria-describedby
                           placeholder="Enter your Name">
                </div>
                <div class="container">
                    @csrf
                    <label for="email">Email</label>
                    <input name="email" type="Email" class="form-control" id="email" placeholder="Enter your Email">
                    <small id="email" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="container">
                    @csrf
                    <label for="donation">Donation</label>
                    <input name="donation" type="number" class="form-control" id="donation" placeholder="
                    Enter the amount of donation">
                </div>
                <div class="container">
                    @csrf
                    <label for="message">Message</label>
                    <input name="message" class="form-control" id="message" rows="4"
                           placeholder="Leave your message (optional) ">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
