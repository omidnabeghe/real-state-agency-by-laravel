<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.head-tag')
    @yield('head-tag')
</head>

<body class="text-right">

@include('layouts.navbar')


@yield('content')




    <footer class="ftco-footer ftco-bg-dark ftco-section">

        @include('layouts.footer')
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    @include('layouts.script')
    @yield('script')

    <section class="toast-wrapper flex-row-reverse">
        @include('admin.alert.toast.success')
        @include('admin.alert.toast.error')
    </section>




</body>

</html>
