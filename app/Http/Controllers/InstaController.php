<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstaController extends Controller
{
    public function index() {
        return view('index');
    }
}
