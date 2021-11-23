<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function users()
    {
        return User::get()->map( function (User $user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'role' => $user->role->name,
            ];
        });
    }

    public function user($id)
    {
        return User::find($id)->only('name', 'email');
    }
}
