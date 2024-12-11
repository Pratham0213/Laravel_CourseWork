<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function setSession(Request $request)
    {
        $request->session()->put('favcolor', 'yellow');
        return response('Session data has been set');
    }

    public function getSession(Request $request)
    {
        $value = $request->session()->get('favcolor');
        return response('Favorite color is ' . $value);
    }
}
