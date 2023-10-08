<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cloneUser()
    {
        $user = User::first();
        $clone =  clone $user;
        $user->name = "arvind";
        $user->save();
        return ['user' => ucfirsts($user->name), "clone" => $clone->name];
    }
}
