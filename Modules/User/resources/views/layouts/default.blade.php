<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>
  @stack('styles')
  <!-- font awesome style -->
  <link href="{{ asset('modules/user/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('modules/user/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('modules/user/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>
    <div class="hero_area">
        @yield('header')
        @yield('content')
        @yield('footer-info-section')
        @yield('footer')
    </div>
    @stack('scripts')


  <!-- jQery -->
  <script src="{{ asset('modules/user/js/jquery-3.4.1.min.js') }}"></script>
  <!-- bootstrap js -->
  <script src="{{ asset('modules/user/js/bootstrap.js') }}"></script>
  <!-- custom js -->
  <script src="{{ asset('modules/user/js/custom.js') }}"></script>

</body>

</html>
