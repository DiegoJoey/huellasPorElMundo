<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    //

    public function store(Request $request)
    {
        Log::channel('api')->info('asdasd');
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8',
            ]);

            Log::channel('api')->info('User creation request: ', $validated);

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            return redirect('/login')->with(['success'=> 'User created successfully.', 'user' => $user]);

        } catch (\Exception $e) {

            Log::channel('api')->error('User creation failed: ', ['error' => $e->getMessage()]);
            return redirect('/')->with(['error'=> 'User creation failed.', 'message: ' => $e->getMessage()]);

        }
    }
}
