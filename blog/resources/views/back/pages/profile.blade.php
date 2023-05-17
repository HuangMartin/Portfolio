@extends('back.layouts.pages-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Profile')
@section('content')



    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-auto">
                <span class="avatar avatar-md" style="background-image: url(/samples/avatars/023m.jpg)"></span>
            </div>
            <div class="col-md-6">
                <h2 class="page-title">Paweł Kuna</h2>
                <div class="page-subtitle">
                    <div class="row">
                        <div class="col-auto">
                            <a href="#" class="text-reset">UI Designer at Tabler</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-auto d-md-flex">
                <a href="#" class="btn btn-primary">
                    更換圖片
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="card">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs">
                <li class="nav-item">
                  <a href="#tabs-home-ex1" class="nav-link active" data-bs-toggle="tab">Home</a>
                </li>
                <li class="nav-item">
                  <a href="#tabs-profile-ex1" class="nav-link" data-bs-toggle="tab">Profile</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-home-ex1">
                  <h4>Home tab</h4>
                  <div>Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus nibh</div>
                </div>
                <div class="tab-pane" id="tabs-profile-ex1">
                  <h4>Profile tab</h4>
                  <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
                </div>
              </div>
            </div>
          </div>
          
    </div>


@endsection

{{-- 6:14 --}}