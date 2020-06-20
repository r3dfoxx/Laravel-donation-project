@extends('Layouts.app')

@section('content')
    <div class="card-deck display-flex" >
    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;" >
        <div class="card-header">Best Donation (name donation)</div>
        <div class="card-body">
            <h5 class="card-title">TEXT</h5>
            <p class="card-text">VALUE</p>
        </div>
    </div>
    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
        <div class="card-header">Total amount for last month</div>
        <div class="card-body">
            <h5 class="card-title">TEXT</h5>
            <p class="card-text">VALUE</p>
        </div>
    </div>
    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
        <div class="card-header">Total amount for the all period</div>
        <div class="card-body">
            <h5 class="card-title">TEXT</h5>
            <p class="card-text">VALUE</p>
        </div>
    </div>
    </div>
@endsection
