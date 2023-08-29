<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Instance a new LoginController instance
     */

     public function dropDownShow(Request $request)

     {
     
        $items = Item::pluck('name', 'id');
     
        return view('items.edit', compact('id', 'items'));
     
     }
}
