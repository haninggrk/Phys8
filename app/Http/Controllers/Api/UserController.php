<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Fis8UserResource;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return ['result' => Fis8UserResource::collection(User::all())];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (count(User::where('id', $id)->get()) > 0) {
            return [
                'status' => 'resultOn',
                'result' => Fis8UserResource::collection(User::where('id', $id)->get()),
            ];
        } else {
            return response([
                'status' => 'Mohon maaf, sistem sedang erorr',
                'result' => null,
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'school' => $request->school,
            'city' => $request->city,
            'birthyear' => $request->birthyear,
        ]);

        $response = $user->myUser()->update([
            'photo' => $request->photo,
        ]);

        if (!empty($response)) {
            return response([
                'status' => 'Akun berhasil diperbaharui',
            ]);
        } else {
            return response([
                'status' => 'Mohon maaf, sistem sedang erorr',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $response = $user->delete();

        if (!empty($response)) {
            return response([
                'status' => 'Akun berhasil dihapus',
            ]);
        } else {
            return response([
                'status' => 'Mohon maaf, sistem sedang erorr',
            ]);
        }
    }
}
