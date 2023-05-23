
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>

    <base href="/">
    <link href="./back/dist/css/tabler.min.css" rel="stylesheet">
    <link href="./back/dist/css/tabler-flags.min.css" rel="stylesheet">
    <link href="./back/dist/css/tabler-payments.min.css" rel="stylesheet">
    <link href="./back/dist/css/tabler-vendors.min.css" rel="stylesheet">
    @stack('stylesheets')
    <link href="./back/dist/css/demo.min.css" rel="stylesheet">
  </head>


  <body>
    <div class="wapper">
        @include('back.layouts.inc.header')
        <div class="page-wapper">
            <div class="container-x1">
                @yield('pageHeader')
            </div>
        </div>
        <div class="page-body">
            <div class="container-x1">
                @yield('content')
            </div>
        </div>
        @include('back.layouts.inc.footer')
    </div>


    <script src="./back/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="./back/dist/js/tabler.min.js"></script>
    @stack('scripts')
    <script src="./back/dist/js/demo.min.js"></script>
  </body>
</html>