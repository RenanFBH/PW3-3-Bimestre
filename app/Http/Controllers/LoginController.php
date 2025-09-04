<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function auth(Request $request) {
        $credencials = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required'],
        ], [
            'name.required' => 'O campo nome é obrigatório!',
            'name.name' => 'O nome não é válido!',
            'password.required' => 'O campo senha é obrigatório!',
        ]);
        if(Auth::attempt($credencials)) {
            $request->session()->regenerate();
            return redirect()->intended('index');
        } else {
            return redirect()->back()->with('erro', 'Nome ou senha inválida.');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login.form'));
    }
}
