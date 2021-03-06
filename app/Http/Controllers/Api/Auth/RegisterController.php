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
        if (count(User::where('email', '=', $request->email)->get()) > 0) {
            return response([
                'status' => 'Email telah digunakan',
            ]);
        } else {
            if ($request->password == $request->password_confirmation) {
                $user = $this->newUser($request->all(), $request);

                if (!empty($user)) {
                    return response([
                        'status' => 'Registrasi berhasil',
                    ]);
                } else {
                    return response([
                        'status' => 'Mohon maaf, sistem sedang erorr',
                    ]);
                }
            } else {
                return response([
                    'status' => 'Konfirmasi password tidak sesuai',
                ]);
            }
        }
    }

    private function newUser(array $data,Request $request)
    {
        $CreateUser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
      
        $CreateUser->logs->create([
            'table_name' => 'students',
            'log_note' => 'Register',
            'log_description' => 'Berhasil Register',
            'log_path' =>  $request->path(),
            'log_ip' => $request->ip()
        ]);
        return $CreateUser->myUser()->create();
    }
}
