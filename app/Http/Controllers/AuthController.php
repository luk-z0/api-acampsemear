<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $input = $request->validated();

        $credentials = [
            'login' => $input['login'],
            'password' => $input['password']
        ];

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Forbidden'], 403);
        }
        return $this->respondWithToken($token);
    }

    public function logout() {
        auth()->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh() {
        return $this->respondWithToken(auth('api')->refresh());
    }

    public function me() {
        return response()->json(auth()->user());
    }

    public function verify() {
        return response()->json(auth()->check());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
        ]);
    }
}
