@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Forgot password')
@section('content')

<body class="d-flex flex-column theme-light">
    <script src="./dist/js/demo-theme.min.js?1674944402"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./back/logo.svg" height="36" alt=""></a>
        </div>
        @livewire('author-forgot-form')
        <div class="text-center text-muted mt-3">
          回到<a href="{{ route('author.login') }}">登入</a>頁面
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1674944402" defer=""></script>
    <script src="./dist/js/demo.min.js?1674944402" defer=""></script>
  
</body>

@endsection