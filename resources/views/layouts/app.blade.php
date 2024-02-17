<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
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
            <a href="#/new" class="side-menu-item"> <span class="material-symbols-outlined">
               add
                </span> Νέα Εγγραφή </a>
            <a href="#/browse" class="side-menu-item"><span class="material-symbols-outlined">
                database
                </span> Περιήγηση </a>
            <a href="#/graphs" class="side-menu-item"><span class="material-symbols-outlined">
                monitoring
                </span> Γραφήματα </a>
        </div>

        <div class="bottom-side">
            <a href="#/log-out" class="side-menu-item bottom-item"><span class="material-symbols-outlined">
                person
                </span>Λογαριασμός</a>

            <a href="#/log-out" class="side-menu-item bottom-item"><span class="material-symbols-outlined">
                logout
                </span>Αποσύνδεση</a>
        </div>
    </div>
    <div class="container">

        @yield('content')

    </div>


</body>
</html>
