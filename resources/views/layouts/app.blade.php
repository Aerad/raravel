<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>index</title>

    <style>
        body {
            background:#FFE5C1 ;

        }

        .navbar {
            background: #FFA629;
    }
    .color {
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px;
        font-family: cursive;
    }

    .name {
        font-family: cursive;
        font-size: 18px;
    }
    </style>
</head>

<body>

    @include('layouts.nav')

    @yield('content')

    <script src="{{asset ('js/bootstrap.min.js') }}"> </script>

</body>
</html>
