<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Application dashboard.
     */
    public function init()
    {
        return view('dashboard');
    }
}
