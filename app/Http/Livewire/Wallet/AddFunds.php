<?php

namespace App\Http\Livewire\Wallet;

use App\Models\Funding;
use Livewire\Component;

class AddFunds extends Component
{


    public $amount;
    public $utr_number;
    public $password;
    public $confirm_password;

    public function saveFormDetails()
    {

        // Validate form input
        $this->validate([
            'amount' => 'required',
            'utr_number' => 'required',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);

        // Update the user's bank details in the database
        $user = auth()->user();
        $funding = new Funding;

        $funding->amount = $this->amount;
        $funding->email = $user->email;
        $funding->utr_number = $this->utr_number;
        $funding->save();

        $this->emit('saved');
    }
    public function render()
    {
        return view('wallet.add-funds');
    }
}