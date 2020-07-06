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
            <div class="card-body">
                <h5 class="card-title">Last Month Amount</h5>
                <p class="card-text">{{ $month }}</p>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">Total Amount:</h5>
                <p class="card-text">{{ $sum }}</p>
            </div>
        </div>
    </div>


@endsection
