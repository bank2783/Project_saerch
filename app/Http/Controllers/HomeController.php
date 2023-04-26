<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {

        $data = [];

        if(Auth::check()) {
            $data['name'] = Auth::user()->name;
        } else {
            $data['name'] = 'Not Login';
        }

        return view('welcome', $data);
    }
}
