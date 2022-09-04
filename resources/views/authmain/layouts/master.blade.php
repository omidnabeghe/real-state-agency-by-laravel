<!doctype html>
<html lang="en">

<head>
    @include('authmain.layouts.head-tag')
    @yield('head-tag')
</head>

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

@yield('content')

@include('authmain.layouts.script')
@yield('script')

<section class="toast-wrapper flex-row-reverse">
    @include('admin.alert.toast.success')
    @include('admin.alert.toast.error')
</section>


</html>


