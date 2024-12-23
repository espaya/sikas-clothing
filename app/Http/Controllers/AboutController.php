<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function index()
    {
        $auth = Auth::id();

        return view('about', ['auth' => $auth]);
    }
}
