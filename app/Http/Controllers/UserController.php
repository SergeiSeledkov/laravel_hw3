<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $user = Auth::user();

        return view('user/index', [
            'name' => $user->name,
            'email' => $user->email,
            'id' => $user->id,
        ]);
    }
}
