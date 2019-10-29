<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config("app.name",'NasaDailyReader')}}</title>
        <link rel = "stylesheet" href = "{{asset('css/app.css')}}"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @include("inc.navbar")
        <div class = "container main-container">
            @yield('content')
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src = "https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src = "https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
</html>