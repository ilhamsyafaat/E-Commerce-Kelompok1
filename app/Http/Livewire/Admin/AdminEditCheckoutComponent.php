<?php

namespace App\Http\Livewire\Admin;

use App\Models\Checkout;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditCheckoutComponent extends Component
{
   use WithFileUploads;
   public $checkout_id;
   public $name;
   public $email;
   public $image;
   public $telepon;
   public $alamat;
   public $newimage;

    public function mount($checkout_id)
    {
        $checkout = Checkout::find($checkout_id);
        $this->checkout_id = $checkout->id;
        $this->name = $checkout->name;
        $this->email = $checkout->email;
        $this->telepon = $checkout->telepon;
        $this->alamat = $checkout->alamat;
        $this->image = $checkout->image;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);
    }

    public function updateCheckout()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $checkout = Checkout::find($this->checkout_id);
        $checkout->name = $this->name;
        $checkout->email = $this->email;
        $checkout->telepon = $this->telepon;
        if ($this->newimage) {
            // unlink('assets/imgs/checkout/'.$checkout->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('checkouts', $imageName);
            $checkout->image = $imageName;
        }
        $checkout->alamat = $this->alamat;
        $checkout->save();
        session()->flash('message', 'Checkout has been updated succesfully!');
    }
  

    public function render()
    {
        $checkouts = Checkout::orderBy('name', 'ASC')->get();
        return view('livewire.admin.admin-edit-checkout-component',['checkouts' => $checkouts]);
    }
}
