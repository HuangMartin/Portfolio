<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('pageTitle')</title>

    <base href="/">
    <link href="./back/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./back/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    @stack('stylesheets')
    <link href="./back/dist/css/demo.min.css" rel="stylesheet"/>
  </head>
  <body >
    <div class="wrapper">
      @include('back.layouts.inc.header')
      <div class="page-wrapper">
        <div class="container-xl">
          @yield('pageHeader')
        </div>
        <div class="page-body">
          <div class="container-xl">
            @yield('content')
          </div>
        </div>
        @include('back.layouts.inc.footer')
      </div>
    </div>
    <script src="./back/dist/libs/apexcharts/dist/apexcharts.min.js"></script>

    <script src="./back/dist/js/tabler.min.js"></script>
    @stack('scripts')
    <script src="./back/dist/js/demo.min.js"></script>
  </body>
</html>
