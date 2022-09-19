<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;
use App\Models\Customer;

class Edit extends Component
{

    public$customerId;
    public $name, $email, $address, $contact_number;

    public function mount(){
        $this->name             = $this->customer->name;
        $this->email            = $this->customer->email;
        $this->address          = $this->customer->address;
        $this->contact_number   = $this->customer->contact_number;
    }

    public function editCustomer() {
        $this->validate([
            'name'              => ['required','string','max:255'],
            'email'             => ['required','email','unique:customers,email,'.$this->customer->id],
            'address'           => ['required','string','max:255'],
            'contact_number'    => ['required','numeric','digits:11']
        ]);

        $this->customer->update([
            'name'              => $this->name,
            'email'             => $this->email,
            'address'           => $this->address,
            'contact_number'    => $this->contact_number
        ]);

        return redirect('/dashboard')->with('message',' Updated successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }

    public function getCustomerProperty(){
        return Customer::find($this->customerId);
    }

    public function render()
    {
        return view('livewire.customers.edit');
    }
}
