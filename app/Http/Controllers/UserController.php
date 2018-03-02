<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        return view('users.profile',['user' => User::findOrFail($id)]);
        
    }
}
