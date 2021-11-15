<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $token = auth('api')->attempt($credentials);
        if (!$token) {
            return response()->json([
                'error' => true,
                'message' => "The given data was invalid",
                'data' => ['credentials' => ["Invalid Credentials"]],
            ], 400);
        }

        return $this->respondWithToken($token, "Login berhasil");
    }

    public function refresh()
    {
        try {
            $token = auth('api')->refresh();
        } catch (JWTException $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage(),
            ], 403);
        }
        return $this->respondWithToken($token, "Refresh token berhasil");
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json([
            'error' => false,
            'message' => 'Sukses Melakukan Log Out',
        ]);
    }

    protected function respondWithToken($token, $message = "")
    {
        return response()->json([
            'error' => false,
            'message' => $message,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
        ]);
    }

    
}
