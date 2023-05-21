@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Settings')
@section('content')
    <div class="row align-items-center">
        <div class="col">
            <h2 class="page-title">
                Settings
            </h2>
        </div>
    </div>
    <div class="card">
        <ul class="nav nav-tabs" data-bs-toggle="tabs">
            <li class="nav-item">
                <a href="#tabs-home-17" class="nav-link active" data-bs-toggle="tab">General Settings</a>
            </li>
            <li class="nav-item">
                <a href="#tabs-profile-17" class="nav-link" data-bs-toggle="tab">Logo & Favicon</a>
            </li>
            <li class="nav-item">
                <a href="#tabs-profile-17" class="nav-link" data-bs-toggle="tab">Social Media</a>
            </li>
        </ul>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tabs-home-17">
                    <div>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blog name</label>
                                        <input type="text" class="form-control" placeholder="輸入Blog name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blog Email</label>
                                        <input type="text" class="form-control" placeholder="輸入Blog email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Blog description</label>
                                        <textarea class="form-control" id="" cols="3" rows="3"></textarea>
                                    </div>
                                    <button class="btn btn-primary">儲存變更</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
