<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>{{config('app.name', 'Application Laravel')}} </title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content') 
    </div>
   
</body>
</html>