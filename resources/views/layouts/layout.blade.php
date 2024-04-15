<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <title>@yield('title')</title>
</head>
<body>

<ul class="d-fix">
    <li><a href="{{route('home')}}">Home</a></li>
    <li><a href="{{route('notification.email')}}">Send Email</a></li>
</ul>

<div class="container">
    @yield('content')
</div>

</body>
</html>
