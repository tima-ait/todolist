<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class indexController extends Controller
{
    public function viewIndex()
    {
        if(Auth::check())
        {
            return to_route('tasks');
        }
        else
        {
            return view('index');
        }
    }
    public function viewInscription()
    {
        return view('inscription');
    }
    public function inscription(Request $request)
    {
        $request->validate([
            'nom_complet'=>'required',
            'email'=>'required|email|unique:utilisateurs',
            'password'=>'required|confirmed',
        ]);
        $pw = Hash::make($request->password);
        Utilisateur::create([
            'nom_complet' => $request->nom_complet,
            'email' => $request->email,
            'password' => $pw,
        ]);

        return to_route('tasks');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt(['email' => $request->email , 'password' => $request->password]))
        {
            $request->session()->regenerate();
            return to_route('tasks')->with('success','loggedin ! ');
        }
        else
        {
            return back()->withErrors([
                'incorrect'=>'Email ou mot de passe incorrect',
            ])->onlyInput('email');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('index');
    }
}
