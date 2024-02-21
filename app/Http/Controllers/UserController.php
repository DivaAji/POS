<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function profile($id, $name)
    {
      $user = [
            'id' => $id,
            'name' => $name
        ];

        return view('user.profile', compact('user'));
    }
}
