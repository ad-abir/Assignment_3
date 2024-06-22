<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donald Trump";
        $age = "75";

        // Create associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Create cookie
        $cookie = cookie(
            'access_token', // name
            '123-XYZ', // value
            1, // minutes
            '/', // path
            $_SERVER['SERVER_NAME'], // domain
            false, // secure
            true // httpOnly
        );

        // Return response with data, status code and set cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}
