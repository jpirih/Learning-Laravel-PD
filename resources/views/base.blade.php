<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap linki -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- jquery cdn -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/redmond/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- moj css -->
    <link rel="stylesheet" href="/css/theme.css">

    <title>Planinsko duštvo - @yield('title')</title>
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_zg">
                <span class=" glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <a href="/" class="navbar-brand">Hobby PD</a>
        </div>

        <div class="collapse navbar-collapse" id="nav_zg" >
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Domov</a></li>
                <li><a href="{{ route('hikes') }}">Hribi</a></li>
                <li><a href="{{ route('about') }}">O nas</a></li>
                @if(Auth::guest())
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Gost <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/login') }}">Prijava</a></li>
                            <li><a href="{{ url('/register') }}">Registracija</a></li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ url('/logout') }}">Odjava</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>

        <div class="page-header text-center">
            <h1> @yield('page-heading')</h1>
        </div>

        @yield('content')

</body>
</html>