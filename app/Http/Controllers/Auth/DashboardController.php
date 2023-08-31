<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Service;
use App\Models\Cadre;
use App\Models\Poleused;

class DashboardController extends Controller
{
    /**
     * Show a list of all type.
     */
    public function index()
    {
        $persons = Person::all();
        $services = Service::all();
        $cadre = Cadre::all();
        $pole = Poleused::all();
 
        return view('auth.dashboard', compact('services','persons','cadre','pole'));
    }
}
