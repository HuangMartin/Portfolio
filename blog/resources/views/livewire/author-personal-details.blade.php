<div>
    
    <form method="post" wire:submit.prevent='UpdateDetails()'>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">名字</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="name" wire:model='name'>
                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">使用者名稱</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="username" wire:model='username'>
                    <span class="text-danger">@error('username'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="email" disabled wire:model='email'>
                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">簡介</label>
            <textarea class="form-control" name="example-textarea-input" rows="8" placeholder="寫點什麼介紹一下自己吧!" wire:model='biography'></textarea>
        </div>
        <button type="submit" class="btn btn-primary">保存變更</button>
    </form>

</div>
