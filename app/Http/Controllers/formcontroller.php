<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function create()
    {
        return view('form');
    }

    /**
     * Handle form submission and validate the inputs.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name.*'  => 'required|string|max:255', // Validate each name in the array
            'email.*' => 'required|email',          // Validate each email in the array
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}