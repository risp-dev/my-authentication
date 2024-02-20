<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile() {
        if (Auth::check()) {
            $user = Auth::user();
        } else {
            return redirect()->route('login');
        }
    }
}
