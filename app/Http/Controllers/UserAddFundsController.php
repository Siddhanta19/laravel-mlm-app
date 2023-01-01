<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddFundsController extends Controller
{
     /**
     * Show the user Add Funds Page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {

        return view('wallet.add-funds-show');
    }
}
