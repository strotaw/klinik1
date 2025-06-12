<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - {{$title}}</title>
    <link href="{{asset('se/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('se/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<!-- Bagian Form -->
    @if ($title=='Login')

    @yield('form_login')

    @elseif($title == 'Register')

    @yield('form_register')

    @endif
<!-- End Bagian Form -->

    <script src="{{asset('se/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('se/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('se/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script src="{{asset('se/assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>