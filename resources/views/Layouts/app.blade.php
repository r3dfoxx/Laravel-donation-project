<html>
<head>
    <title>Donation@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@section('sidebar')
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
