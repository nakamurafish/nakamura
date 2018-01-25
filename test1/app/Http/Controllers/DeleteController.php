<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function screen_call()
    {

        $users = DB::table('members')->get();

        return view('delete', compact('users'));

    }

    public function delete(Request $request)
    {

        $delete_names = $request->input('checked_names');

        $delete_names = mb_substr($delete_names, 0, -1);

        var_dump($delete_names);
        // $delete_names = rtrim($delete_names, ',');

        $delete_names_arr = explode(",", $delete_names);

        // var_dump($delete_names);

        foreach ($delete_names_arr as $delete_name) {
            DB::table('members')->where('ID', '=', $delete_name)->delete();
            // var_dump($delete_name);
        }

        $users = DB::table('members')->get();

        return view('delete', compact('users', 'delete_names'));

    }
}
