<html>
<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Jean-Christophe Chevalier's resume, Computer Science Student" name="description">
    <meta content="Jean-Christophe Chevalier" name="author">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200|Quicksand" rel="stylesheet">

    <link href="{{ asset('images/favicon.png') }}" rel="icon"/>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"/>
    <link href="{{ mix('/css/global.css') }}" rel="stylesheet"/>
    @yield('additional_css')

    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('start_scripts')
</head>

<body data-spy="scroll" data-target="#navbar" style="overflow: hidden;">

@section('loader')
    <div id="loader-container">
        <div id="loader">
            <p class="loading">
            <div class="bounceball"></div>
            <div class="text">NOW LOADING<br>Enable Javascript to access this website</div>
        </div>
    </div>
@show

@yield('overview')

<nav class="navbar navbar-expand navbar-light justify-content-center" id="navbar">
    <a class="navbar-brand" href="#">Jean-Christophe Chevalier</a>
    @yield('navbar')
</nav>

@yield('content')

@yield('end_scripts')
</body>

</html>
