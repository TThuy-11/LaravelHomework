<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input, File;
use App\Http\Requests\signupRequest;

class signupController extends Controller
{
    public function index()
    {
        return view("signup");
    }
    function displayInfor(signupRequest $Request)
    {
        $users = [
            'name' => $name = $Request->input("name"),
            'age' =>  $gae = $Request->input("age"),
            'date' => $date = $Request->input("date"),
            'phone'=>$phone=$Request->input("phone"),
            'web' =>  $web = $Request->input("web"),
            'address' =>  $address = $Request->input("address"),
        ];
        return view('signup')->with('users', $users);
    }
}
