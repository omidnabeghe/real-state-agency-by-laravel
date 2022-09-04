<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head-tag')
    @yield('head-tag')

</head>

<body >

    @include('admin.layouts.header')



    <section class="body-container">

        @include('admin.layouts.sidebar')


        <section id="main-body" class="main-body">

            @yield('content')

        </section>
    </section>


    @include('admin.layouts.script')
    @yield('script')



    <section class="toast-wrapper flex-row-reverse">
        @include('admin.alert.toast.success')
        @include('admin.alert.toast.error')
    </section>


    @include('admin.alert.success')
    @include('admin.alert.error')
    @include('admin.alert.help')

</body>
</html>
