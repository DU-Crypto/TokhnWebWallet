<?php

namespace App\Http\Controllers;


class WalletController extends Controller
{
    public function index($account)
    {
        // $accounts = 'account'
        return view('wallet.index', compact($account));
        // return view('wallet.index', compact('wallet'));
    }
}
