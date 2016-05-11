<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{URL::to('src/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">

    <script src="{{URL::to('src/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>


</head>
<body>
@include('includes.header')
<div class="container">
    @yield('content')
</div>

@include('includes.modal')

<!-- Latest compiled and minified JavaScript -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="{{ URL::to('src/js/vendor/jquery-1.11.2.min.js') }}"><\/script>')
</script>
<script src="{{ URL::to('src/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ URL::to('src/js/main.js') }}"></script>

</body>
</html>