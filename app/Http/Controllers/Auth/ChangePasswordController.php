<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index() {
        return view('auth.change-password');
    }

    public function update(Request $request) {
        $data = $request->validate([
            'current_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if(!Hash::check($data['current_password'], $user->password)) {
            return back()->withErrors(['current_password' => 'Текущий пароль неверен']);
        }

        $user->password = Hash::make($data['current_password']);

        $user->save();

        return redirect()->route('login')->with('status', 'Пароль успешно изменен!');
    }
}
