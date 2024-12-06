<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    function show(){
        // $users = Role::find(1)
        // ->users;

        $role = User::find(1)
        ->roles;
        return $role;
        // return response()->json($users);
        
    }
}
