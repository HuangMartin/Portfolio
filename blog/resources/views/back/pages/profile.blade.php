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
                        <a href="#tabs-details" class="nav-link active" data-bs-toggle="tab">個人信息</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tabs-password" class="nav-link" data-bs-toggle="tab">變更密碼</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tabs-details">
                        <div>
                          <form method="post">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="mb-3">
                                  <label class="form-label">名字</label>
                                  <input type="text" class="form-control" name="example-text-input" placeholder="name">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="mb-3">
                                  <label class="form-label">使用者名稱</label>
                                  <input type="text" class="form-control" name="example-text-input" placeholder="username">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="mb-3">
                                  <label class="form-label">Email</label>
                                  <input type="text" class="form-control" name="example-text-input" placeholder="email" disabled>
                                </div>
                              </div>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">簡介</label>
                              <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="寫點什麼吧...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, quia!</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">保存變更</button>
                          </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="tabs-password">
                        <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc
                            amet, pellentesque id egestas velit sed</div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

{{-- 10.33 --}}
