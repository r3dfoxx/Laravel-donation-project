@extends('Layouts.app')

@section('content')
    <div class="card-deck display-flex">
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header">Top Donator</div>
            <div class="card-body">
                <h5 class="card-title">TEXT</h5>
                <p class="card-text">VALUE</p>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header">Last Month Amount</div>
            <div class="card-body">
                <h5 class="card-title">TEXT</h5>
                <p class="card-text">VALUE</p>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header">All time amount</div>
            <div class="card-body">
                <h5 class="card-title">TEXT</h5>
                <p class="card-text">VALUE</p>
            </div>
            </div>
        </div>
    </div>




    <div class="container">
        <table class="table table-info">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Amount od Donation</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->Name }}</td>
                    <td>{{ $user->Email }}</td>
                    <td> {{ $user->Amount }}</td>
                    <td>{{ $user->Date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection
