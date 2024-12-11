<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caformController extends Controller
{
    public function showForm()
    {
        return view('caform');
    }

    public function handleForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
        ]);

        return view('caform')->with([
            'name' => $validatedData['name'],
            'age' => $validatedData['age'],
        ]);
    }
}
