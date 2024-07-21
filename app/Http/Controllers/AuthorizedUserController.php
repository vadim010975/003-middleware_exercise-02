<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorizedUserController extends Controller
{
    public function index()
    {
        return view('authorized_user.index', [
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'id' => Auth::user()->id,
        ]);
    }
}
