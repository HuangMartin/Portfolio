<div>

    @if (Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <form class="card card-md" method="post" wire:submit.prevent='ForgotHandler()'>
        <div class="card-body">
            <h2 class="card-title text-center mb-4">我忘記密碼惹QQ</h2>
            <p class="text-muted mb-4">輸入您的Email並重置密碼</p>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="請輸入Email" wire:model='email'>
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-footer">
                <button class="btn btn-primary w-100" type="submit">
                    <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                        </path>
                        <path d="M3 7l9 6l9 -6"></path>
                    </svg>
                    重置密碼
                </button>
            </div>
        </div>
    </form>
</div>
