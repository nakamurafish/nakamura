<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    
    public function complete() {
        $users = DB::table('members')->get(); 
        return view('user/complete', compact('users'));
    }
    public function registration() {
        return view('user/registration');
    }
    public function confirm(Request $request) {
        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        DB::table('members')->insert(['NAME' => $name, 'AGE' => $age, 'GENDER' => $gender]);
        return view('user/confirm',compact('name', 'age', 'gender'));  
    }
    
}