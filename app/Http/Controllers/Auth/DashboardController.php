<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Show a list of all type.
     */
    public function index()
    {

 
        return view('auth.dashboard');
    }

    
}
