<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        @yield('main')
    </div>


    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
