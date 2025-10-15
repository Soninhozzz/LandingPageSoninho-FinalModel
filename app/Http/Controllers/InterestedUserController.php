<?php

namespace App\Http\Controllers;

use App\Models\InterestedUser;
use Illuminate\Http\Request;

class InterestedUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interest');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:interested_users',
        ]);

        InterestedUser::create($request->all());

        return redirect('/')->with('success', 'Seu interesse foi registrado com sucesso! Em breve, você receberá novidades sobre o lançamento do Soninho.');
    }
}