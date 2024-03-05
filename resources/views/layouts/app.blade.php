<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script href="{{ asset('js/app.js')}}" src="{{ asset('js/app.js')}}"></script>
    <title> {{ __('page_title') }} </title>
</head>
<body>
    <div class="sideBar">
        <div class="top-side">
            <h2 class="side-menu-title"> Μενού </h2>
            <a  class="side-menu-item @if(Request::path() === '/' || Request::path() === '')
            selected
            "
            @else
            " href="/"
            @endif
            > <span class="material-symbols-outlined">

                pages
                </span> Αρχική </a>
            <a href="#/new" onclick="dropdown()" class="side-menu-item"> <span class="material-symbols-outlined">
               add
                </span> Νέα Εγγραφή </a>
            <div class="dropdown-content" id='dropdownlist'>
                <a class="dropdown-link side-menu-item"  href="/accident/new"><span class="material-symbols-outlined">
                    car_crash
                    </span> Ατύχημα </a>
                <a class="dropdown-link side-menu-item"  href="/vehicle/new"><span class="material-symbols-outlined">
                    directions_car
                    </span> Όχημα </a>
                <a class="dropdown-link side-menu-item"  href="/street/new"><span class="material-symbols-outlined">
                    add_road
                    </span> Όδος </a>
            </div>

            @if(Auth::user()->role_id >= 3)
                <a href="#/browse" class="side-menu-item"><span class="material-symbols-outlined">
                    database
                </span> Περιήγηση </a>
            @endif
            <a href="#/graphs" class="side-menu-item"><span class="material-symbols-outlined">
                monitoring
                </span> Γραφήματα </a>
        </div>

        <div class="bottom-side">
            <a href="#/log-out" class="side-menu-item bottom-item"><span class="material-symbols-outlined">
                person
                </span>Λογαριασμός</a>

            <a href="/logout" class="side-menu-item bottom-item"><span class="material-symbols-outlined">
                logout
                </span>Αποσύνδεση</a>
        </div>
    </div>
    <div class="container">

        @yield('content')

    </div>


</body>

</html>
