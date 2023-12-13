<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('admin::includes.cssLinks')
    @stack('style')
    <title>@yield('title')</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    @include('admin::includes.navbar')


    <main>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        @yield('content')
        </div>
   </main>

    @include('admin::includes.sidebar')
    @include('admin::includes.footer')

    @include('admin::includes.scriptLinks')
    @stack('script')

</div>

</body>
</html>
