<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('user::includes.cssLinks')
    @stack('style')
    <title>@yield('title')</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    @include('user::includes.navbar')


    <main>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-image: url('{{ asset('modules/user/dist/img/user-dashboard.jpg') }}'); background-size: cover; background-position: center;">
        @yield('content')
        </div>
   </main>

    @include('user::includes.sidebar')
    @include('user::includes.footer')

    @include('user::includes.scriptLinks')
    @stack('script')

</div>

</body>
</html>
