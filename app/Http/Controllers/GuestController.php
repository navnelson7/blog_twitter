<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
class GuestController extends Controller
{
    //definiendo metodo index
    //Entri N- 1 egde
    //eager loading
    public function index()
    {
        $entries = Entry::with('user')
        ->orderByDesc('created_at')
        ->paginate(10);
        return view('welcome',compact('entries'));
    }

    //definiendo el metodo show
    public function show(Entry $entry)
    {
        return view('entries.show',compact('entry'));
    }
}
