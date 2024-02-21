<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function profile($id, $name)
    {
        // Di sini Anda dapat melakukan apapun yang perlu untuk menampilkan profil pengguna,
        // misalnya mengambil data pengguna dari database berdasarkan ID.
        $user = [
            'id' => $id,
            'name' => $name
        ];

        return view('user.profile', compact('user'));
    }
}
