<?php

namespace App\Http\Livewire\Admin;

use App\Models\Checkout;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddCheckoutComponent extends Component
{
   use WithFileUploads;
   public $checkout_id;
   public $name;
   public $email;
   public $image;
   public $telepon;
   public $alamat;
   public $newimage;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);
    }

    public function storeCheckout()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $checkout = new Checkout();
        $checkout->name = $this->name;
        $checkout->email = $this->email;
        $checkout->telepon = $this->telepon;
        $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
        $this->newimage->storeAs('checkouts', $imageName);
        $checkout->image = $imageName;
        $checkout->alamat = $this->alamat;
        $checkout->save();
        session()->flash('message', 'Checkout has been created succesfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-checkout-component');
    }
}
