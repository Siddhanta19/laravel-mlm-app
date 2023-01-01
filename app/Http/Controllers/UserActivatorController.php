<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserActivatorController extends Controller
{
    /**
     * Activate The User
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function activate(Request $request, $email)
    {
        // Fetch the user with the given email address.
        $user = User::where("email", $email)->first();

        // if (!$user)
        //     return;
        if ($user) {
            // Activate The User
            $user->active_status = 1;

            // Save the changes to the database
            $user->save();


            return view('user.activated', [
                'message' => "The account with the email of <span class='font-bold text-primary'>{$user->email}</span> has been activated!",
                'class' => 'text-primary-content',
                // Pass the referred users to the view
            ]);
        }

        if (!$user) {
            return view('user.activated', [
                'message' => "{$user->email} Not Found, Please Try Again with a valid Email Address!",
                'class' => 'text-red-400',
                // Pass the referred users to the view
            ]);
        }

        return view('user.activated', [
            'message' => "Something went wrong, Please Try Again!"
        ]);
    }
}