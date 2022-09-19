<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;
use App\Models\Customer;

class Create extends Component
{

    public $name, $address, $email, $contact_number;

    public function addCustomer(){
     
            $this->validate([
                'name'              => ['required','string','max:255'],
                'address'           => ['required','string','max:255'],
                'email'             => ['required','email','unique:customers'],
                'contact_number'    => ['required','numeric','digits:11'],

            ]);
    
            Customer::create([
                'name'              => $this->name,
                'address'           => $this->address,
                'email'             => $this->email,
                'contact_number'    => $this->contact_number
            ]);

            return redirect('/')->with('message', $this->name . ' added successfully');
    }

    public function updated($propertyEmail)
    {
        $this->validateOnly($propertyEmail, [
            'email'             => ['required','email','unique:customers'],
            
        ]);
    }

    public function render()
    {
        return view('livewire.customers.create');
    }
}
