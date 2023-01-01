<?php

namespace App\Http\Livewire\Profile;

use App\Models\Bank;
use Livewire\Component;

class UpdateBankDetailsForm extends Component
{

    public $bank_name;
    public $ifsc_code;
    public $account_number;


    public function mount()
    {
        // Retrieve the current authenticated user's bank details
        $user = auth()->user();
        $bank = $user->bank;

        if ($bank) {
            $this->bank_name = $bank->bank_name;
            $this->ifsc_code = $bank->ifsc_code;
            $this->account_number = $bank->account_number;
        }
    }

    public function updateBankDetails()
    {

        // Validate form input
        $this->validate([
            'bank_name' => 'required',
            'ifsc_code' => 'required',
            'account_number' => 'required'
        ]);

        // Update the user's bank details in the database
        $user = auth()->user();
        $bank = $user->bank ?: new Bank;

        // update only if the bank saved field is false.
        if (!$bank->saved) {
            $bank->user_id = $user->id;
            $bank->bank_name = $this->bank_name;
            $bank->ifsc_code = $this->ifsc_code;
            $bank->account_number = $this->account_number;
            $bank->saved = true;
            $bank->save();

            // Show saved message
            $this->emit('saved');
        }


    }
    public function render()
    {
        return view('profile.update-bank-details-form');
    }
}