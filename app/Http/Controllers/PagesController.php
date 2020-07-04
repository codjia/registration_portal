<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
// vvv
    public function home(){
        return view('registration.form');

    }

    public function dash(){
        return view('pages.dash');
    }


}
