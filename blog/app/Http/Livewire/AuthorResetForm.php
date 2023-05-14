<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthorResetForm extends Component
{
    public $email, $token, $new_password, $confirm_new_password;

    public function mount(){
        $this->email = request()->email;
        $this->token = request()->token;
    }

    public function ResetHandler(){
        $this->validate([
            'email'=>'required|email|exists:users,email',
            'new_password'=>'required|min:5',
            'confirm_new_password'=>'same:new_password',
        ],[
            'email.required'=>'Email是必填項目',
            'email.email'=>'無效的Email',
            'email.exists'=>'這個Email不存在',
            'new_password.required'=>'輸入新密碼',
            'new_password.min'=>'密碼不得低於五個字元',
            'confirm_new_password'=>'新密碼與確認密碼必須一致'
        ]);

        $check_token = DB::table('password_resets')->where([
            'email'=>$this->email,
            'token'=>$this->token,
        ])->first();

        if(!$check_token){
            session()->flash('fail','無效的token');
        }else{
            User::where('email', $this->email)->update([
                'password'=>Hash::make($this->new_password)
            ]);
            DB::table('password_resets')->where([
                'email'=>$this->email
            ])->delete();

            $success_token = Str::random(64);
            session()->flash('success', 'Your password has been updated successfully. 
            Login with your email and your new password');

            $this->redirectRoute('author.login', ['tkn'=>$success_token, 'UEmail'=>$this->email]);
        }
    }

    public function render()
    {
        return view('livewire.author-reset-form');
    }
}
