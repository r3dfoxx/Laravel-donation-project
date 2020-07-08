@extends('Layouts.app')


@section('content')
    <div class="card-deck display-flex">
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><h4>Top Donator</h4></div>
            <div class="card-body">
                <h5 class="card-title">{{ $Donor->Name }}</h5>
                <p class="card-text"><h5>{{ $Donor->Amount }}</h5>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><h4>Last Month Amount</h4></div>
            <div class="card-body">
                <p class="card-text"><h5>{{ $var }}</h5>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><h4>Total Amount:</h4></div>
            <div class="card-body">
                <p class="card-text"><h5>{{ $num }}</h5>
        </div>
        </div>
    </div>


    <div class="container">

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Date' , 'Amount'],
                    [$DonorInfo[0]['Date'] , $DonorInfo[0]['Amount']],


                ]);

                var options = {
                    title: 'Donation Statistic',
                    curveType: 'function',
                    legend: { position: 'bottom' }
                };

                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                chart.draw(data, options);
            }
        </script>

        <div id="curve_chart" style="width: 100%; height: 400px">

        </div>

    </div>

    <div class="container">
        <table class="table table-info">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Amount of Donation</th>
                <th scope="col">Date</th>
            </tr>
            </thead>
            <tbody>

            @foreach($userPaginate as $user)

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
        {{ $userPaginate->links() }}
    </div>


@endsection
