<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('customer.account_details');
    }
}
