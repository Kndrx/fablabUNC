<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Models\Service;
use App\Models\Cadre;
use App\Models\Poleused;
use App\Models\Trec;
use App\Models\Filieres;

use App\Models\ListingPerson;




class FormController extends Controller
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
        $trec = Trec::all();
        $filieres = Filieres::all();
 
        return view('welcome', compact('services','persons','cadre','pole','filieres','trec'));
    }

    public function post(Request $request)
    {

        $post = new ListingPerson;
        $post->created_at = now();
        $post->updated_at = now();
        $post->type = $request->type_id;
        $post->service = $request->service_id;
        $post->filiere = $request->filiere_id;
        $post->TREC = $request->trec_id;
        $post->raison = $request->raison_id;
        $post->pole = $request->pole_id;

        
        $post->save();

        return redirect('/')->with('status', 'Enregistrement effectué. Merci');

    }
}
