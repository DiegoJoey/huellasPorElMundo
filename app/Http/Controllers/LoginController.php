<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        try {
            Log::channel('api')->info('login: ');
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            Log::channel('api')->info('cred: ', $credentials);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('/'); // or wherever you want to redirect
            }

            return back()->withErrors([
                'email' => 'Las credenciales no coinciden.',
            ])->onlyInput('email');

        } catch (\Exception $e) {
            Log::channel('api')->info('Error: ' . $e->getMessage());
            return view('/login');

        }
    }
}
