<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view('home');
    }


    public function adminHome()
    {
        return view('admin-home');
    }

    public function admincars(){
        return view('admin-addcars');
    }
}
