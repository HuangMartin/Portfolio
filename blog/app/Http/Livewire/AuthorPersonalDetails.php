<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AuthorPersonalDetails extends Component
{
    public $author;
    public $name, $username, $email, $blography;

    public function mount(){
        $this->author = User::find(auth('web')->id());
        $this->name = $this->author->name;
        $this->username = $this->author->username;
        $this->email = $this->author->email;
        $this->blography = $this->author->blography;   
    }

    public function UpdateDetails(){
        
    }

    public function render()
    {
        return view('livewire.author-personal-details');
    }
}
