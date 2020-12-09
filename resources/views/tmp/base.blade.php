<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- ADD CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- ADD CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <!-- ADD BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body>
    @section('content')
    @show

    <!-- ADD AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- ADD JS -->
    <script rel="stylesheet" src="{{ URL::asset('js/ajax.js') }}"></script>
</body>

</html>
