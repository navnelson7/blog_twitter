<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class EntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //creando metodo create
    public function create()
    {
        return view('entries.create');
    }
    //creando metodo storage
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:7|max:255|unique:entries',
            'content' => 'required|min:25|max:3000'
        ]);
        $entry = new Entry();
        $entry->title = $validateData['title'];
        $entry->content = $validateData['content'];
        $entry->user_id = auth()->id();
        $entry->save(); //inserte en la tabla
        $status = "Your post has been published succesfully";
        return back()->with(compact('status'));
    }
    //definiendo el edit
    public function  edit(Entry $entry)
    {
        return view('entries.edit',compact('entry'));
    }

    //definieno el update
    public function update(Request $request,Entry $entry)
    {
        $validateData = $request->validate([
            'title' => 'required|min:7|max:255|unique:entries,id,'.$entry->id,
            'content' => 'required|min:25|max:3000'
        ]);
        //verificar que el id del usuario autenticado sea igual que el de la entrada
        $entry->title = $validateData['title'];
        $entry->content = $validateData['content'];
        $entry->save(); //inserte en la tabla
        $status = "Your post has been edited succesfully";
        return back()->with(compact('status'));

    }
}
