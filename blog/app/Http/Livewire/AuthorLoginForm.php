<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthorLoginForm extends Component
{
    public $email, $password;

    public function LoginHandler()
    {
        $this->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5'
        ],[
            'email.required'=>'請輸入email!',
            'email.email'=>'Invaild email address',
            'email.exists'=>'這個email不存在於資料庫中!',
            'password.required'=>'密碼是必填項目!',
        ]);

        $creds = array('email'=>$this->email, 'password'=>$this->password);

        if( Auth::guard('web')->attempt($creds) ){

            $checkUser = User::where('email', $this->email)->first();
            if($checkUser->blocked == 1){
                Auth::guard('web')->logout();
                return redirect()->route('author.login')->with('fail','Your account had been blocked.');
            }else{
                return redirect()->route('author.home');
            }



        }else{
            session()->flash('fail','email或密碼錯誤');
        }
    }
    public function render()
    {
        return view('livewire.author-login-form');
    }
}
