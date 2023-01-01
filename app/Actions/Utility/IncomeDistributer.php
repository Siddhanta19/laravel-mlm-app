<?php

namespace App\Actions\Utility;

use App\Models\User;

class IncomeDistributer
{

    /*
    BEGIN
    DECLARE a INT DEFAULT 0;
    DECLARE userWithReferCode INT;
    CREATE TEMPORARY TABLE income (amount INT);
    INSERT INTO income VALUES (4), (2), (2), (2), (2), (2), (2);
    WHILE a < (SELECT COUNT(*) FROM income) AND referCode != 0 DO
    SELECT id FROM users WHERE my_refer_code = referCode AND active_status = 1 INTO userWithReferCode;
    IF userWithReferCode IS NOT NULL THEN
    UPDATE users SET wallet = wallet + (SELECT amount FROM income WHERE id = a) WHERE id = userWithReferCode;
    SET referCode = (SELECT my_referrer_code FROM users WHERE id = userWithReferCode);
    SET a = a + 1;
    ELSE
    SET referCode = 0;
    END IF;
    END WHILE;
    END;
    */

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

            $userWithReferCode->increment('wallet', $income[$a]);


            // Find the user that referred the $refer_code account and update the refer code with their my_referrer's code
            $referCode = $userWithReferCode->{"my_referrer's_code"};
            $a++;
        }
    }

}