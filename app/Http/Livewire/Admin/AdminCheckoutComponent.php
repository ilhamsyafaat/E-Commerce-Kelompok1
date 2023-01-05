<?php

namespace App\Http\Livewire\Admin;

use App\Models\Checkout;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCheckoutComponent extends Component
{
    public $checkout_id;
    use WithPagination;

    public function deleteCheckout()
    {
        $checkout = Checkout::find($this->checkout_id);
        // unlink('assets/imgs/checkouts/' . $checkout->newimage);
        $checkout->delete();
        session()->flash('message', 'Checkout has been deleted successfully!');
    }
    
    public function render()
    {
        $checkouts = Checkout::orderBy('name', 'ASC')->paginate(5);
        return view('livewire.admin.admin-checkout-component',['checkouts' => $checkouts]);
    }
}
