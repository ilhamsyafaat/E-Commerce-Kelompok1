<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $email = '';
    public $telepon = '';
    public $message = '';


    public function saveMessage()
    {
        Contact::create([
            'email' => $this->email,
            'telepon' => $this->telepon,
            'message' => $this->message,
        ]);
        // session()->flash('message', "Sukses");
    }
    public function render()
    {

        return view('livewire.contact-component');
    }
}
