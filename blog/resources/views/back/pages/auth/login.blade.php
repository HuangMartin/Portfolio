@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Login')
@section('content')

<body class="d-flex flex-column theme-light">
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./back/logo.svg" height="36" alt=""></a>
        </div>
        @livewire('author-login-form')
      </div>
    </div>
  
</body>

@endsection