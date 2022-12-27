<?php

namespace App\Actions\Utility;

use App\Models\User;

class IncrementReferCount
{
    public function incrementReferCount(string $referCode): void
    {
        User::where('my_refer_code', $referCode)->where('active_status', true)->increment('refer_count', 1);
    }
}