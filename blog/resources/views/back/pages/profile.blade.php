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
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">姓名</label>
                                <input type="text" class="form-control" name="example-text-input" placeholder="name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">使用者名稱</label>
                                <input type="text" class="form-control" name="example-text-input" placeholder="Username">
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
                        <textarea class="form-control" name="example-text-input" rows="8" placeholder="寫點甚麼介紹自己吧!!">test...</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">儲存變更</button>
                </form>
            </div>
            <div class="tab-pane" id="tabs-password">
              <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed</div>
            </div>
          </div>
        </div>
      </div>
  </div>
  

@endsection
