<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $data = $request->validate([
            'email' => 'string|required',
            'password' => 'string|required|min:8'
        ]);

        if(Auth::attempt($data)) {
            return redirect()->route('home');
        }

        return back()->withErrors([
            'name' => 'Неверные учетные данные'
        ]);
    }

    public function logout () {
        Auth::logout();

        return redirect()->route ('home');
    }
}
