<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'telepon' => 'required'
        ]);
        // return $request;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'role_id' => 2,
            'password' => bcrypt($request->password)
        ]);
        if ($user) {
            return response()->json([
                'status' => true,
                'message' => 'Successfully created user!'
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Failed created user!'
            ], 401);
        }
    }

    public function login(Request $request)
    {
        $username = $request->email;
        $password = $request->password;
        // dd($password);
        // return bcrypt($password);
        // return $request;
        $data = User::where('email', $username)->first();
        if ($data) {
            if (password_verify($password, $data->password)) {
                $success['name'] = $data->name;
                $success['email'] = $data->email;
                $success['telepon'] = $data->telepon;
                $success['role'] = $data->role_id;
                $success['token'] =  $data->createToken('nApp')->accessToken;
                return response()->json(['status' => true, 'data' => $success], 200);
            } else {
                return response()->json(['status' => false, 'error' => bcrypt($password)], 401);
            }
        } else {
            return response()->json(['status' => false, 'error' => 'Email Salah'], 401);
        }
    }

    public function update(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'telepon' => 'required'
        ]);
        $id = Auth::user()->id;
        
        // return $id;
        $user = User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'password' => bcrypt($request->password)
        ]);
        if ($user) {
            return response()->json([
                'status' => true,
                'message' => 'Successfully updated user!'
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Failed updated user!'
            ], 401);
        }
    }


    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
