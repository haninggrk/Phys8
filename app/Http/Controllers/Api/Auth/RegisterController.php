<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required|unique:users',
                    'password' => 'required|confirmed',
            ]);

        $user = $this->newUser($request->all());

        if (empty($user)) {
            return response([
                'message' => 'Failed',
            ]);
        } else {
            return response([
                'message' => 'Success',
            ]);
        }
    }

    private function newUser(array $data)
    {
        return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
        ]);
    }
}
