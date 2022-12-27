<?php

namespace App\Actions\Utility;

use App\Models\User;

class ActiveUserWalletIncrementer
{
    /* protected $incomeDistributer;

    public function __construct(IncomeDistributer $incomeDistributer)
    {
        $this->incomeDistributer = $incomeDistributer;
    } */

    protected function getActiveUsers()
    {
        return User::where('active_status', true)->get();
    }

    public function incrementWallets()
    {
        $users = $this->getActiveUsers();

        foreach ($users as $user) {
            $user->increment('wallet', 10);
            // $this->incomeDistributer->incomeDistribution($user->my_refer_code);
        }
    }

}