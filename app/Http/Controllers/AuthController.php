<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required',
            'password' => 'required|string|confirmed'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $response = [
            'user' => $user,
        ];

        return response()->json($response);
     }

    public function login(Request $request)
    {
      $credentials = $request->validate([
        "email" => ["required", "email"],
        "password" => ["required"],
      ]);
  
      if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return response()->json(Auth::user());
    }
      return response()->json([], 401);
    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
}
