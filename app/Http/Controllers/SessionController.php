<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function destroy() {
        Auth::logout();
        return redirect('/');
    }

    public function store(Request $r) {
        $validated = $r->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);  

        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                "email" => "Nepareizs epasts vai parole"
            ]);
        }
        $r->session()->regenerate();
        return redirect('/todos');
    }

    public function create() {
        return view('auth.login');
    }
}
