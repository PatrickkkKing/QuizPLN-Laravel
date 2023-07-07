<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleapp.css') }}">
    <script src="stylesheet" href="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    <div class="aside1">

        <header>
            <img src="{{url('../resources/img/fblogo.png')}}" class="brand">
            <div class="user">{{ Auth::user()->name }}</div>
        </header>
    
        <aside>
            <ul>
                <li>
                    <a href="{{url('dashboard/')}}">
                        <img class="icon" src="{{url('../resources/img/menu.png')}}" alt=""> Home
                    </a>
                </li>
                <li>
                    <a href="{{url('golongan/')}}">
                        <img class="icon" src="{{url('../resources/img/menu.png')}}" alt=""> Data Golongan
                    </a>
                </li>
                <li>
                    <a href="{{url('pelanggan/')}}">
                        <img class="icon" src="{{url('../resources/img/menu.png')}}" alt=""> Data Pelanggan
                    </a>
                </li>
                <li>
                    <a href="{{url('welcome/')}}">
                        <img class="icon" src="{{url('../resources/img/menu.png')}}" alt=""> Logout
                    </a>
                </li>
            </ul>
        </aside>
    
    </div>
</body>
</html>