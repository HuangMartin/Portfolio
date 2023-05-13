<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthorLoginForm extends Component
{
    public $login_id, $password;

    public function LoginHandler()
    {
        $fieldType = filter_var($this->login_id, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if ($fieldType == 'email') {
            $this->validate([
                'login_id' => 'required|email|exists:users,email',
                'password' => 'required|min:5',
            ], [
                'login_id' => 'Email/使用者名稱是必填項目!',
                'login_id.email' => '無效的Email!',
                'login_id.exists' => '這個Email不存在於資料庫中!',
                'password.required' => '密碼是必填項目!',
            ]);
        } else {
            $this->validate([
                'login_id' => 'required|exists:users,email',
                'password' => 'required|min:5',
            ], [
                'login_id.required' => 'Email/使用者名稱是必填項目!',
                'login_id.exists' => '這個使用者不存在於資料庫中!',
                'password.required' => '密碼是必填項目!',
            ]);
        }
        $creds = array($fieldType => $this->login_id, 'password' => $this->password);
        if (Auth::guard('web')->attempt($creds)) {

            $checkUser = User::where($fieldType, $this->login_id)->first();
            if ($checkUser->blocked == 1) {
                Auth::guard('web')->logout();
                return redirect()->route('author.login')->with('fail', 'Your account had been blocked.');
            } else {
                return redirect()->route('author.home');
            }
        } else {
            session()->flash('fail', 'Email/使用者名稱 或密碼錯誤');
        }

        // $this->validate([
        //     'email' => 'required|email|exists:users,email',
        //     'password' => 'required|min:5'
        // ], [
        //     'email.required' => '請輸入email!',
        //     'email.email' => '無效的email!',
        //     'email.exists' => '這個email不存在於資料庫中!',
        //     'password.required' => '密碼是必填項目!',
        // ]);

        // $creds = array('email' => $this->email, 'password' => $this->password);

        // if (Auth::guard('web')->attempt($creds)) {

        //     $checkUser = User::where('email', $this->email)->first();
        //     if ($checkUser->blocked == 1) {
        //         Auth::guard('web')->logout();
        //         return redirect()->route('author.login')->with('fail', 'Your account had been blocked.');
        //     } else {
        //         return redirect()->route('author.home');
        //     }
        // } else {
        //     session()->flash('fail', 'email或密碼錯誤');
        // }
    }
    public function render()
    {
        return view('livewire.author-login-form');
    }
}
