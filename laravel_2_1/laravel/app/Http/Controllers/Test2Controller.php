<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Test2Controller extends Controller {
    
    public function complete() {
        $users = DB::table('sales')
            //salesテーブルとsales_staffテーブルを結合          
            ->join('sales_staff', 'sales.STAFF_ID', '=', 'sales_staff.STAFF_ID')
            ->get(); 
        return view('test2/complete', compact('users'));
    }
    
    public function registration() {
        return view('test2/registration');
    }
    
    public function confirm(Request $request) {
        DB::beginTransaction();
            try {
            //salesテーブルに値を追加
            $department = $request->input('department');
            $prfecture = $request->input('prfecture');
            $staff_id = $request->input('staff_id');
            $amount = $request->input('amount');
            $year = $request->input('year');
            $month = $request->input('month');
            $create_date = $request->input('create_date');
        DB::table('sales')->insert(['DEPARTMENT' => $department, 'PRFECTURE' => $prfecture, 'STAFF_ID' => $staff_id, 'AMOUNT' => $amount, 'YEAR' => $year, 'MONTH' => $month, 'CREATE_DATE' => $create_date]);
            //sales_staffテーブルに値を追加
            $name = $request->input('name');
            $age = $request->input('age');
            $gender = $request->input('gender');
        DB::table('sales_staff')->insert(['STAFF_ID' => $staff_id, 'NAME' => $name, 'AGE' => $age, 'GENDER' =>$gender]);
        DB::commit();
        $success = true;
            } catch (SQLException $e) {
            $success = false;
        DB::rollback();     
            }catch (Exception $e) {
            $success = false;  
            }
            return view('test2/confirm',compact('staff_id', 'department', 'prfecture', 'amount', 'year', 'month', 'create_date', 'name', 'age', 'gender'));  
    }
    
}