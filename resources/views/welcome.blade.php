<!DOCTYPE html>
<html class="loading semi-dark-layout"  data-layout="semi-dark-layout" data-textdirection="ltr"lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="baizid.md.ashadzzaman@gmail.com">
        <title>LaraVue</title>
        <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/charts/apexcharts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/bordered-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/semi-dark-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/dashboard-ecommerce.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/charts/chart-apex.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/ext-component-toastr.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/authentication.css')}}">
        <style >
            .sr-only{
                display: none;
            }
        </style>
        
    </head>
    
    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
        
        <div id="app">
            <router-view></router-view>
        </div>

        <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" defer></script>
        <script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}" defer></script>
        <script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}" defer></script>
        <script src="{{asset('app-assets/js/core/app-menu.js')}}" defer></script>
        <script src="{{asset('app-assets/js/core/app.js')}}" defer></script>
        <script src="{{asset('app-assets/js/scripts/pages/dashboard-ecommerce.js')}}" defer></script>
        <script src="{{asset('app-assets/js/scripts/extensions/ext-component-blockui.js')}}" defer></script>
        <script>
            // $(window).on('load', function() {
            //     if (feather) {
            //         feather.replace({
            //             width: 14,
            //             height: 14
            //         });
            //     }
            // })
        </script> 
        @vite(['resources/js/app.js'])   
    </body>
</html>
