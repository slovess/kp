<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'surname'    => 'string|max:255|required',
            'name'       => 'string|max:255|required',
            'patronymic' => 'string|max:255|required',
            'email'      => 'string|email:rfc,dns|max:255|unique:users|required',
            'password'   => 'required|string|min:8',
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('login')->with('status', 'Регистрация прошла успешно');
    }
}
