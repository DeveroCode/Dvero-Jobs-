<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function logout(Request $request)
    {
    }
    public function register(RegisterRequest $request)
    {
        // Validate
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'type_user_id' => $data['type_user'],
        ]);

        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user,
        ];
    }
    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        // Check the password
        if (!Auth::attempt($data)) {
            return response([
                'errors' => ['El email o password no son correctos'],
            ], 422);
        }

        // Authenticate
        $user = User::where('email', $data['email'])->first();
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user,
        ];
    }
}
