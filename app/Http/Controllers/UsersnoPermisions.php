<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersnoPermisions extends Controller
{

    public function index()
    {

        return redirect('usuarios.no-permission');
    }
}
