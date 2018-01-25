<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function input()
    {
        return view('insert');
    }

    // public function input2()
    // {
    //     return view('insert_result');
    // }

    public function insert(Request $request)
    {
        $insertid = $request->input('insertid');
        $insertname = $request->input('insertname');
        $insertage = $request->input('insertage');
        $insertdate = $request->input('insertdate');

        DB::table('members')->insert(['ID' => $insertid, 'NAME' => $insertname, 'AGE' => $insertage, 'DATE' => $insertdate]);

        return view('insert_result', compact('insertid', 'insertname', 'insertage', 'insertdate'));
    }

}
