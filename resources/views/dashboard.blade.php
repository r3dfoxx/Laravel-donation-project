@extends('Layouts.app')


@section('content')
    <div class="card-deck display-flex">
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><h4>Top Donator</h4></div>
            <div class="card-body">
                <h5 class="card-title">{{ $topDonor->name }}</h5>
                <p class="card-text"><h5>{{ $topDonor->user_amount }}</h5>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><h4>Last Month Amount</h4></div>
            <div class="card-body">
                <p class="card-text"><h5>{{ $monthAmount }}</h5>
            </div>
        </div>
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><h4>Total Amount:</h4></div>
            <div class="card-body">
                <p class="card-text"><h5>{{ $totalAmount }}</h5>
            </div>
        </div>
    </div>


    <div class="container">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = new google.visualization.DataTable();

                data.addColumn('date', 'Date');
                data.addColumn('number', "Amount");
                @foreach($donorInfo as $info)
                data.addRows([
                    [new Date('{{$info[0]}}'), {{$info[1]}}],
                ]);
                    @endforeach


                var options = {
                        title: 'Donations Statistic',
                        width: 1095,
                        height: 300,
                        hAxis: {
                            format: 'MMM-dd-yyyy',
                            gridlines: {count: 30},
                        },
                        vAxis: {
                            gridlines: {color: 'none'},
                            minValue: 0
                        }

                    };

                var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

                chart.draw(data, options);

            }


        </script>
    </div>
    <div id="chart_div"></div>

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
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td> {{ $user->amount }}</td>
                    <td>{{ $user->date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $userPaginate->links() }}
    </div>


@endsection
