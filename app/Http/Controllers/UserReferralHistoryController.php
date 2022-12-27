<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserReferralHistoryController extends Controller
{
    /**
     * Show the user referral screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        // Fetch all users referred by the authenticated user
        $referredUsers = User::where("my_referrer's_code", $request->user()->my_refer_code)->get();

        return view('referral.show', [
            'request' => $request,
            'user' => $request->user(),
            'referredUsers' => $referredUsers,
            // Pass the referred users to the view
        ]);
    }
}
