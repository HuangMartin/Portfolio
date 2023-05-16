<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AuthorForgotForm extends Component
{
    public $email;

    public function ForgotHandler()
    {
        $this->validate([
            'email'=>'required|email|exists:users,email'
        ],[
            'email.required'=>'error01',
            'email.email'=>'error02',
            'email.exists'=>'error03',

        ]);

        $token = base64_encode(Str::random(64));
        DB::table('password_resets')->insert([
            'email'=>$this->email,
            'token'=>$token,
            'created_at'=>Carbon::now(),
        ]);

        $user = User::where('email', $this->email)->first();
        $link = route('author.reset-form',['token'=>$token, 'email'=>$this->email]);
        $body_message = "我們收到您<b>Blog</b>帳號重新設定密碼的請求".
        $this->email.".<br>請點擊下方按鈕重新設定密碼";
        $body_message.='<br>';
        $body_message.='<a href="'.$link.'" target="_blank style="color:#FFF;border-color:#22bc66;border-style:solid;
        border-width:10px 180px; background-color:#22bc66;display:inline-block;text-decoration:none;border-radius:3px;
        box-shadow:0 2px 3px rgba(0,0,0,0.16);-webkit-text-size-adjust:none;box-sizing:border-box">重新設定密碼</a>';
        $body_message.='<br>';
        $body_message.='如果您不需要重置密碼，請忽略此信件，謝謝!!';

        $data = array(
            'name'=>$user->name,
            'body_message'=>$body_message,
        );

        Mail::send('forgot-email-template', $data, function($message) use ($user){
            $message->from('noreply@example.com', 'Blog');
            $message->to($user->email, $user->name)
                    ->subject('Reset password');
        });

        $this->email = null;
        session()->flash('success', '已傳送重置密碼的信件!!');
    }

    public function render()
    {
        return view('livewire.author-forgot-form');
    }
}
