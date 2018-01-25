<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class HelloController extends Controller
{
    public function index()
    {

        return view('input');
    }

    public function confirm(Request $request)
    {
        $name = "「".$request->input('text1')."」";
        $name2 = "「".$request->input('text2')."」";
    
        return view('confirm',compact('name','name2'));
    }

    public function index2()
    {
  

        return view('input2');
    }
    
    public function confirm2(Request $request)
    {
        
        // $name = $request->input('text1');
        $name3 = $request->input('text3');
        $text4 = $request->input('text4');
        $name4 = $request->input('radio1');
        $radio2 = $request->input('radio2');
        $names5 = $request->input('checkbox1');
        $checkbox2 = $request->input('checkbox2');
        $name6 = $request->input('select1');
        $select2 = $request->input('select2');
        $name7 = $request->input('textarea1');
        $textarea2 = $request->input('textarea2');

var_dump($names5);

        return view('confirm2',compact('name3','text4','name4','radio2','names5','checkbox2','name6','select2','name7','textarea2'));
    }

    public function contact()  // 追加
    {
        return View("contact");  // (a) view 関数を使わず、テキストを返してみる
    }

}
