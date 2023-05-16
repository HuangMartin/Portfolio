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
        $body_message = "we are received a request to reset the password for <b>Blog</b> account associated with".
        $this->email.".<br>You can reset your password by clicking the button below.";
        $body_message.='<br>';
        $body_message.='<a href>Reset password</a>';
        $body_message.='<br>';
        $body_message.='If you..........................';

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
        session()->flash('success', 'We have..........');
    }

    public function render()
    {
        return view('livewire.author-forgot-form');
    }
}
