<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str; // import library Str
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function login(Request $request)
    {
        $email = $request->email; 
        $password = $request->password; 

        $user = User::where('email', $email)->first(); 

        if (!$user) { 
            return response()->json([ 
                'status' => 'Error', 
                'message' => 'user not exist', 
            ],404);
        }

        if (!Hash::check($password, $user->password)) { 
            return response()->json([ 
                'status' => 'Error', 
                'message' => 'wrong password', 
            ],400);
        }

        $user->token = $jwt($user); //    
        $user->save(); // 

        return response()->json([ 
            'status' => 'Success', 
            'message' => ' successfully login', 
            'data' => [ 
                'user' => $user, 
            ]
        ],200);
    }
}
