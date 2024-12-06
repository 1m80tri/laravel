<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // su dung rang buoc middleware
    function __construct()
    {
        // chir được áp dụng một số
        // $this->middleware("CheckAge")-> only("show");

        //loại trừ xa không áp dụng
        //  $this->middleware("CheckAge")->except("show");
    }

    function show(){
        return view("admin");
    }

    function add(){
        return "Ban dang them san pham";
    }

    function dashboard(){
        $users = Auth::user();
        return $users->role->name;
        return "OK"; 
    }
}
