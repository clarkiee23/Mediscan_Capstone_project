<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    


    <!-- smg toasttr -->
    <link rel="stylesheet" href="http://cdn/bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn/bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn/bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.css')}}">

    <link rel="stylesheet" href="{{asset('css/admin-home.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
    <link rel="stylesheet" href="{{asset('css/health-data.css')}}">
    <link rel="stylesheet" href="{{asset('css/add-health-data.css')}}">
    <link rel="stylesheet" href="{{asset('css/batch-personel-health-data.css')}}">
    <link rel="stylesheet" href="{{asset('css/batch-student-health-data.css')}}">
    <link rel="stylesheet" href="{{asset('css/supplies-inventory.css')}}">
    <link rel="stylesheet" href="{{asset('css/add-medical-supply.css')}}">
    <link rel="stylesheet" href="{{asset('css/add-consultation-record.css')}}">
    <link rel="stylesheet" href="{{asset('css/consultation-record.css')}}">
    <link rel="stylesheet" href="{{asset('css/messaging.css')}}">
    <link rel="stylesheet" href="{{asset('css/appointments.css')}}">
    <!-- Fullcalendar css -->
    <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}">
    <!-- LOGIN-LOGO-STYLE -->
    <link rel="stylesheet" href="{{asset('css/acd-logo-size.css')}}">
    <!-- HOME-BACKGROUND -->
    <link rel="stylesheet" href="{{asset('css/home-background.css')}}">
    <!-- HOME BOOTSTRAP -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>

<body>
    @include('shared.home-header')
    @yield('content')

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/datatables.js')}}"></script>
    
    <script src="{{asset('js/data-tables.js')}}"></script>
    <script src="{{asset('js/login.js')}}"></script>
    <script src="{{asset('js/admin-sidenav.js')}}"></script>
    <script src="{{asset('js/add-health-data.js')}}"></script>
    <script src="{{asset('js/batch-health-data.js')}}"></script>
    <script src="{{asset('js/add-medical-supply.js')}}"></script>
    <script src="{{asset('js/edit-medical-record.js')}}"></script>
    <script src="{{asset('js/add-consultation-record.js')}}"></script>
    <script src="{{asset('js/add-remove-siblingField.js')}}"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

</body>
</html>