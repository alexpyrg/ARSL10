<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content=" {{ $keywords }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form-styles.css') }}">
    <title>{{ $formTitle }}</title>
</head>
<body>

    @yield('form');

</body>
</html>
