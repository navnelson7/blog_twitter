<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    //creando metodo create
    public function create()
    {
        return view('entries.create');
    }
}
