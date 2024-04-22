<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <title>@yield('tittle')</title>
</head>
<body>
    <div class="wrapper">
        <div class="header mb"><p>.header</p></div>
        
        <div>
        @yield('content')
        </div>

        <div class="footer"><p>.footer</p></div>
    </div>
</body>
</html>