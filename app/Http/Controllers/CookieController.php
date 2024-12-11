<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function setCookie()
    {
        $cookie = Cookie::make('favcolor', 'yellow', 60); // 60 minutes
        return response('Cookie has been set')->cookie($cookie);
    }

    public function getCookie(Request $request)
    {
        $value = $request->cookie('favcolor');
        return response('Favorite color is ' . $value);
    }
}
