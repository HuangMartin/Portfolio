@extends('back.layouts.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Forgot password')
@section('content')

<div class="page page-center">
    <div class="container-tight py-4">
          <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./back/static/logo.svg" alt="" height="36"></a>
          </div>
          <form class="card card-md" action="." method="get">
            <div class="card-body">
              <div class="card-title text-center mb-4">Forgot password</div>
              <p class="text-muted mb-4">Enter your email address and your password will be reset and emailed to you.</p>
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-block">Send me new password</button>
              </div>
            </div>
          </form>
          <div class="text-center text-muted mt-3">
            Forget it, <a href="{{ route('author.login') }}">send me back</a> to the sign in screen.
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection