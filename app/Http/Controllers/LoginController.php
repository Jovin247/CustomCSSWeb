<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function pass() {
        return view('dashboard');
    }

    public function login() {
        return view('login');
    }
}
