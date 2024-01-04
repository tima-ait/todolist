<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tasksController extends Controller
{
    public function tasksListing()
    {
        if(Auth::check())
        {
            $datatasks = tasks::all()->where('id_user', Auth::user()->id);
            return view('tasks',compact('datatasks'));
        }
        else
        {
            return to_route('index');
        }
    }
    public function taskCreate(Request $request)
    {
        $request->validate([
            'tache_new' => 'required',
        ]);
        tasks::create([
            'tache' => $request->tache_new,
            'id_user' => Auth::user()->id,
            'done' => '0',
        ]);

        return to_route('tasks');
    }
    public function taskEdit(tasks $task,request $request)
    {
        $request->validate([
            'tache' => 'required',
            'done'=>'boolean',
        ]);

        $task->fill([
            'tache' => $request->tache,
            'done' => $request->has('done'),
        ])->save();

        return to_route('tasks');
    }
    public function taskDelete(tasks $task)
    {
        $task->delete();
        return to_route('tasks');
    }
}
