<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;
use App\Models\Customer;

class Delete extends Component
{
    public $customerId;
    public function getCustomerProperty() {
        return Customer::select('id', 'name', 'contact_number')
            ->find($this->customerId);
    }

    public function delete() {
        $this->customer->delete();

        return redirect('/')->with('message', ' Deleted successfully');
    }

    public function back() {
        return redirect('/');
    }


    public function render()
    {
        return view('livewire.customers.delete');
    }
}
