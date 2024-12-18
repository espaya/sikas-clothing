<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontPageController extends Controller
{
    public function index()
    {
        $auth = Auth::id();

        return view('index', ['auth' => $auth]);
    }
}
