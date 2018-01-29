<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class DatabaseController extends Controller
{
    public function input()
    {

        // 全員分のデータ
        $users=DB::table('members')->get();

        // IDが５の人の情報だけとってくる
        // $users=DB::table('members')->where('ID','=',5)->get();

        // 年齢が30歳未満で、IDが10以上の人の情報を取ってくる
        // $users=DB::table('members')->where([['AGE','<','30'],['ID','>','10'],])->get();

        // var_dump($users);

        return view('db1_input',compact('users'));
    }

    public function confirm(Request $request)
    {

        $name=$request->input('dbname');
        // $age=$request->input('dbage');
        // $age1;
        // $age2;
        // if ($age == 0) {
        //     $age1=20;
        //     $age2=25;
        // }
        // else if ($age == 1) {
        //     $age1=26;
        //     $age2=30;
        // }
        // else if ($age == 2) {
        //     $age1=31;
        //     $age2=35;
        // }
        // else if ($age == 3) {
        //     $age1=36;
        //     $age2=40;
        // }
        // $users=DB::table('members')->where([['NAME','LIKE','%'.$name.'%'],['AGE','>=',$age1],['AGE','<=',$age2],])->get();

        $age1=$request->input('dbage1');
        $age2=$request->input('dbage2');

        $users=DB::table('members')
        ->where([['NAME','LIKE','%'.$name.'%'],['AGE','>=',$age1],['AGE','<=',$age2],])
        ->get();


        return view('db1_confirm',compact('users'));
    }
}