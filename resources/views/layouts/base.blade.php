<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <head  itemscope itemtype="http://schema.org/WebSite">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>News Application with Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://news-web-app.herokuapp.com/css/style.css" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/43db5e56d9.js"></script>

    </head>
<body>
<div id="appenDivNews">
    <nav class="navbar fixed-top navbar-light bg-faded" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">News Around the World</a>
    </nav>
@yield('content')
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Scripts -->
<script src="https://news-web-app.herokuapp.com/js/site.js"></script>
<script src="{{ asset('js/site.js') }}"></script>

</html>