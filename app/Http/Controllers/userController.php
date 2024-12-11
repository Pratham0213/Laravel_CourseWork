<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function show($username, $age)
    {
        return "User: $username, Age: $age";
   }
}