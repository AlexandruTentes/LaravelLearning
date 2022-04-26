<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
       
    }

    public function index(Request $request)
    {
        print('a');
        return route('login');
    }
}
