<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        $users = User::all();
        return view('auth.profile', compact('users'));
    }

    public function update(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users' . Auth::id(),
        ]);

        $user = Auth::user();

        $user->update($data);

        return redirect()->route('login');
    }
}
