<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>college system</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body
>
    <div class="container">
        @yield('main')
    </div>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}" type="text/js"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/js"></script>

</body>
</html>