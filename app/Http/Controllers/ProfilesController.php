<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        //dd($user); 
        $data = \App\Models\User::findOrFail($user);

        return view('profiles.index', [
            'user' => $data
        ]);

    }
}
