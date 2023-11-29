<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/font-awesome-icons.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.css')}}">

    <!-- <link rel="stylesheet" href="{{asset('css/admin-home.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidenav.css')}}">
    <link rel="stylesheet" href="{{asset('css/health-data.css')}}">


    <link rel="stylesheet" href="{{asset('css/add-consultation-record.css')}}">
    <link rel="stylesheet" href="{{asset('css/consultation-record.css')}}">
    <link rel="stylesheet" href="{{asset('css/messaging.css')}}">
    <link rel="stylesheet" href="{{asset('css/appointments.css')}}">
    <!-- Fullcalendar css -->
    <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}">
    <!-- CREATE-USER-LOGO-STYLE -->
    <link rel="stylesheet" href="{{asset('css/dashboard-create-user.css')}}">
    <!-- ELEMENT_PLUS -->
    <link rel="stylesheet" href="//unpkg.com/element-plus/dist/index.css" />

    <link
    rel="stylesheet"
    href="//cdn.jsdelivr.net/npm/element-plus/dist/index.css"/>

<!-- STYLE  -->
    <style>
    html,body{
        /* padding: 0;
        margin: 0;
        width: 100%;
        height: 100%; */
        font-family: Arial, Helvetica, sans-serif;
    }
    
    #dot {
        padding: -0px 6px;
        background-color: red;
        border-radius: 50%;
        display: inline-block;
        color: white;
    }

    .sec{
        position: relative;
        right: -15px;
        top:-20px;
        font-size: 11px;
    }

    .counter.counter-lg {
        top: -35px !important;
    }
    </style>
</head>

<body>
   
    @include('shared.admin-header')
    @include('shared.admin-sidenav')
    
    @yield('content')
    <?php date_default_timezone_set('Asia/Manila'); ?>
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

    <!-- ELEMENT_PLUS -->
    <script src="//unpkg.com/vue@3"></script>
    <script src="//unpkg.com/element-plus"></script>
    <script src="//cdn.jsdelivr.net/npm/vue@3"></script>
    <script src="//cdn.jsdelivr.net/npm/element-plus"></script>

</body>
</html>