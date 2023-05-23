<!doctype html>
<html lang="en">
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


  <body class="border-top-wide border-primary d-flex flex-column">
    @yield('content')

    
    <script src="./back/dist/js/tabler.min.js"></script>
    @stack('scripts')
    <script src="./back/dist/js/demo.min.js"></script>
  </body>
</html>