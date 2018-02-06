<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 
class ContactController extends Controller {
    
    public function index() {
        $name = "田中太郎";
        return view('contact')->with('name',$name); 
    }
    
}

