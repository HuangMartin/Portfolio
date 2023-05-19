<div>
    

    <form method="post" wire:submit.prevent='changePassword()'>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">目前密碼</label>
                    <input type="password" class="form-control" name="example-text-input" placeholder="目前密碼"
                    wire:model='current_password'>
                    <span class="text-danger">@error('current_password'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">新密碼</label>
                    <input type="password" class="form-control" name="example-text-input" placeholder="新密碼"
                    wire:model='new_password'>
                    <span class="text-danger">@error('new_password'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">確認新密碼</label>
                    <input type="password" class="form-control" name="example-text-input" placeholder="確認新密碼"
                    wire:model='confirm_new_password'>
                    <span class="text-danger">@error('confirm_new_password'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">變更密碼</button>
    </form>
    
</div>
