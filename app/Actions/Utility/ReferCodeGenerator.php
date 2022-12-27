<?php

namespace App\Actions\Utility;

use App\Models\User;

class ReferCodeGenerator
{
    public function getUniqueReferCode(): string
    {
        // Generate a random 6-digit string with a prefix of "LE"
        $uniqueCode = 'LE' . random_int(100000, 999999);

        // Check if the refer code already exists in the users table
        while (User::where('my_refer_code', $uniqueCode)->exists()) {
            // Generate a new refer code if it already exists
            $uniqueCode = 'LE' . random_int(100000, 999999);
        }

        return $uniqueCode;
    }
}