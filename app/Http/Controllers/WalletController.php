<?php

namespace App\Http\Controllers;


class WalletController extends Controller
{
    public function index($wallet)
    {
        // $accounts = 'account'
        // return view('wallet.index', compact('accounts'));
        return view('wallet.index', compact('wallet'));
    }
}
