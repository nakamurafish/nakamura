<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class TestController extends Controller
{
    public function index()
    {
        return view('test_input');
    }

    public function input()
    {
        return view('test_confirm',compact());
    }

}