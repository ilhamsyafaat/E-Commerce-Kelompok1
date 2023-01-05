<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckoutComponent extends Component
{
    use WithFileUploads;
    public $total, $name, $email, $telepon, $alamat, $image;

    public function mount()
    {
       if(!Auth::user()) {
        return redirect()->route('login');

        $product = Product::where('user_id', Auth::user()->id)->where('status'. 0)->first();
       }
    }

    public function checkout()
    {
        // dd('hai checkout');
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'image' => 'required'
        ]);

        //Simpan noHp Alamat ke data Users
        $Checkout = new Checkout();
        $Checkout->name = $this->name;
        $Checkout->email = $this->email;
        $Checkout->telepon = $this->telepon;
        $Checkout->alamat = $this->alamat;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('checkouts', $imageName);
        $Checkout->image = $imageName;
        $Checkout->save();
        
        // //update data orders
        // // $orders = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        // // $orders->status =1;
        // // $orders->update();

        // // $this->emit('keranjang');

        session()->flash('message', "Sukses Checkout");

        // return redirect()->route('history');
    }

    public function render()
    {
        return view('livewire.checkout-component');
    }
}