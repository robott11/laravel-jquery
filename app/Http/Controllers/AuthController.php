<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRegister;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function postForm(RegisterFormRegister $request)
    {
        dd($request);
    }
}
