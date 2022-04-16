<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Rules\Password;

class UserController extends Controller
{
    public function register(Request $request){

        try{

           $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required','string','email','max:255','unique:users'],
            'age' => ['required', 'string', 'max:255'],
            'tgl_lahir' => ['required','date'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required','string', new Password],

            ]);

            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'age' => $request->age,
                'tgl_lahir' => $request->tgl_lahir,
                'address' => $request->address,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),


            ]);

            $user = User::where('email', $request->email)->first();
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'User Terdaftar');
        }
            catch (Exception $error) {
                return ResponseFormatter::error([
                    'message' => 'Ada sesuatu yang salah',
                    'error' => $error,

                ], 'Authentication Failed', 500);

        }

    }

    public function login(Request $request) {
        try {
            $request->validate([
                'email'=> 'email|required',
                'password'=> 'required',
            ]);

            $credentials = request(['email','password']);
            if(!Auth::attempt($credentials) ) {
                return ResponseFormatter::error([
                    'message' => 'Unauthorized'
                ],
                'Authentication Failed', 500 );
            }

            $user = User::where('email', $request->email)->first();

            if(!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Invalid Credentials');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'Authenticated');

            //code...
        } catch (Exception $error) {
            //throw $th;
            return ResponseFormatter::error([
                'message' => 'Sesuatu yang Salah',
                'error' => $error,
            ], 'Authenticated');
        }
    }

    public function fetch(Request $request) {
        return ResponseFormatter::success($request->user(), 'Data profile user berhasil di ambil');
    }

    public function updateProfile(Request $request) {

        $data = $request->all();

        $user = Auth::user();
        $user->update($data);

        return ResponseFormatter::success($user, 'Profile Telah Terupdate');

    }

    public function logout(Request $request) {

        $token = $request->user()->currentAccessToken()->delete();

        return ResponseFormatter::success($token,'Token Revoked');
    }
}
