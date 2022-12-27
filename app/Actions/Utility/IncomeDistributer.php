<?php

namespace App\Actions\Utility;

use App\Models\User;

class IncomeDistributer
{
    public function incomeDistribution(string $referCode): void
    {
        $income = [4, 2, 2, 2, 2, 2, 2];

        $a = 0;
        while ($a < count($income) && $referCode != 0) {

            // Find the user with the given refer code and check if their active_status is true
            $userWithReferCode = User::where('my_refer_code', $referCode)
                ->where('active_status', true)
                ->first();

            if (!$userWithReferCode)
                return;

            // // Find the referrer code of this user.
            // $referCodeOfReferrer =
            //     $userWithReferCode->{"my_referrer's_code"};


            // $userWhoReferred =
            //     User::where('my_refer_code', $referCodeOfReferrer)
            //         ->where('active_status', true)
            //         ->first();

            // // If the user is not found or their active_status is not true, stop
            // if (!$userWhoReferred) {
            //     return;
            // }

            $userWithReferCode->increment('wallet', $income[$a]);


            // Find the user that referred the $refer_code account and update the refer code with their my_referrer's code
            $referCode = $userWithReferCode->{"my_referrer's_code"};
            $a++;
        }
    }

}