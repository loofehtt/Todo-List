<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $todolists = Todolist::all();
        return view('home', ['todolists' => Todolist::where('is_complete', 0)->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'content' => 'required'
        // ]);
        // Todolist::create($data);
        $data = new Todolist;
        $data->content = $request->content;
        $data->is_complete = 0;
        $data->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todolist $todolist)
    {
        $todolist->delete();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function mark(Todolist $todolist)
    {
        $markTodo = Todolist::find($todolist);
        $markTodo->is_complete = 1;
        $markTodo->save();

        return back();
    }
}
