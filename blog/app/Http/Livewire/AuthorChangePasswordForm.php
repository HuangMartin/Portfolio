<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthorChangePasswordForm extends Component
{
    public $current_password, $new_password, $confirm_new_password;

    public function changePassword(){
        $this->validate([
            'current_password'=>[
                'required', function($attribute, $value, $fail){
                    if(!Hash::check($value, User::find(auth('web')->id())->password)){
                        return $fail(_('目前密碼不正確'));
                    }
                },
            ],
            'new_password'=>'required|min:5|max:25',
            'confirm_new_password'=>'same:new_password',
        ],[
            'current_password.required'=>'輸入目前密碼',
            'new_password.required'=>'輸入新密碼',
            'confirm_new_password.same'=>'確認新密碼必須與新密碼一致',
        ]);

        $query = User::find(auth('web')->id())->update([
            'password'=>Hash::make($this->new_password)
        ]);
    }
    public function render()
    {
        return view('livewire.author-change-password-form');
    }
}
