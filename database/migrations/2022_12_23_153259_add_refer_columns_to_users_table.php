<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {

    public function generateUniqueReferCode()
    {
        // Generate a random 6-digit string with a prefix of "LE"
        $referCode = 'LE' . Str::random(6);

        // Check if the refer code already exists in the users table
        while (User::where('my_refer_code', $referCode)->exists()) {
            // Generate a new refer code if it already exists
            $referCode = 'LE' . Str::random(6);
        }


        return $referCode;
    }


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('my_refer_code')
                ->nullable()
                ->after('email');

            $table->string('my_referrer\'s_code', 8)
                ->after('my_refer_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(array_merge([
                'my_refer_code',
                'my_referrer\'s_code',
            ], ));
        });
    }
};