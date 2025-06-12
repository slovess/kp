<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('auth.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'patronymic' => 'required|string|max:255',
            'birthday' => 'nullable|date|before_or_equal:today',
            'email' => 'required|email:rfc,dns|unique:users,email,' . $user->id,
        ]);

       if ($user->update($validated)) {
    return redirect()->route('profile.show')->with('success', 'Профиль обновлен.');
} else {
    return back()->with('error', 'Не удалось обновить профиль.');
}
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
