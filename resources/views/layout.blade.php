<html lang="en">
<head>
    <!-- If you see this, the GitHub workflow is working -->
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Jean-Christophe Chevalier's resume, Computer Science Student" name="description">
    <meta content="Jean-Christophe Chevalier" name="author">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200|Quicksand" rel="stylesheet">

    <link href="{{ asset('images/favicon.png') }}" rel="icon"/>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet"/>
    <link href="{{ mix('/css/global.css') }}" rel="stylesheet"/>
    @yield('additional_css')

    <script src="{{ mix('/js/loading.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('start_scripts')
</head>

<body data-spy="scroll" data-target="#navbar" style="overflow: hidden;">

@yield('loader')

@yield('overview')

<nav class="navbar navbar-expand justify-content-center" id="navbar">
    <a class="navbar-brand" href="/#">Jean-Christophe Chevalier</a>
    @yield('navbar')
</nav>

@yield('content')

<script src="{{ mix('/js/navbar.js') }}"></script>
@yield('end_scripts')
</body>

</html>
