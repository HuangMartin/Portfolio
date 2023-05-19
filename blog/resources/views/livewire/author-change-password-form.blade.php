<div>
    

    <form method="post" wire:submit.prevent='changePassword()'>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">目前密碼</label>
                    <input type="password" class="form-control" name="example-text-input"
                        placeholder="Current password" wire:model='current_password'>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">新密碼</label>
                    <input type="password" class="form-control" name="example-text-input"
                        placeholder="New password">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">確認新密碼</label>
                    <input type="password" class="form-control" name="example-text-input"
                        placeholder="Retype new password">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">變更密碼</button>
    </form>
</div>
