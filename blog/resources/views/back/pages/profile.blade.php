@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Profile')
@section('content')


    @livewire('author-profile-header')
    <hr>
    <div class="row">
        <div class="card">
            <ul class="nav nav-tabs" data-bs-toggle="tabs">
                <li class="nav-item">
                    <a href="#tabs-details" class="nav-link active" data-bs-toggle="tab">關於我</a>
                </li>
                <li class="nav-item">
                    <a href="#tabs-password" class="nav-link" data-bs-toggle="tab">變更密碼</a>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tabs-details">
                        <div>
                            @livewire('author-personal-details')
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-password">
                        <div>
                            @livewire('author-change-password-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
