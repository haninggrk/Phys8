<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Laravel\Passport\Client;

class LoginController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $GetUser = User::where('email', $request->email)->first();
        $check = $GetUser->MyUser;

        if ('1' == $check->is_active) {
            if ('0' == $check->is_login) {
                if (Auth::attempt($user)) {
                    $this->isLogin(auth()->user()->id);

                    $response = Http::asForm()->post('http://localhost:8012/semester3/Phys8/public/oauth/token', [
                        'grant_type' => 'password',
                        'client_id' => $this->client->id,
                        'client_secret' => $this->client->secret,
                        'username' => $request->email,
                        'password' => $request->password,
                        'scope' => '*',
                    ]);

                    return $response->json();
                } else {
                    return response([
                        'message' => 'Login failed',
                    ]);
                }
            } else {
                return response([
                    'message' => 'Account has login',
                ]);
            }
        } else {
            return response([
                'message' => 'Account is suspended',
            ]);
        }
    }

    private function isLogin(int $id)
    {
        $user = User::findOrFail($id)->MyUser;

        return $user->update([
            'is_login' => '1',
        ]);
    }

    public function refresh(Request $request)
    {
        $this->validate($request, [
            'refresh_token' => 'required',
        ], [
            'refresh_token' => 'refresh token is required',
        ]);

        $response = Http::asForm()->post('http://localhost:8012/semester3/Phys8/public/oauth/token', [
            'grant_type' => 'refresh_token',
            'refresh_token' => $request->refresh_token,
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'scope' => '*',
        ]);

        return $response->json();
    }

    public function logout()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $accessToken = $user->token();

        DB::table('oauth_refresh_tokens')->where('access_token_id', $accessToken->id)
        ->update([
            'revoked' => true,
        ]);

        $user->MyUser->update([
            'is_login' => '0',
        ]);

        $accessToken->revoke();

        return response([
            'message' => 'Logged out',
        ]);
    }
}
