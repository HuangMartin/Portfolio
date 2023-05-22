@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'login')
@section('content')

<div class="page page-center">
    <div class="container-tight py-4">
      <div class="text-center mb-4">
        <a href="." class="navbar-brand navbar-brand-autodark"><img src="./back/static/logo.svg" alt="" height="36"></a>
      </div>
          <form class="card card-md" action="." method="get" autocomplete="off">
            <div class="card-body">
              <div class="card-title text-center mb-4">登入</div>
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              <div class="mb-2">
                <label class="form-label">
                  Password
                    <span class="form-label-description">
                    <a href="{{ route('author.forgot-password')}}">我忘記密碼惹QQ</a>
                    </span>
                </label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control" placeholder="Password" autocomplete="off">
                    <span class="input-group-text">
                        <a href="#" class="link-secondary"></a>
                    </span>
                </div>
              </div>
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-label">Remember me</span>
                </label>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
              </div>
            </div>
          </form>
          <div class="text-center text-muted">
            Don't have account yet? <a href="./register.html">Sign up</a>
          </div>
      </div>
    </div>
  </div>

    
@endsection