<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller {
    
    //sales top画面
    public function index(Request $request) {
        $user = Auth::user();
        $users = DB::table('sales')
            //salesテーブルとsales_staffテーブルを結合          
            ->join('sales_staff', 'sales.STAFF_ID', '=', 'sales_staff.STAFF_ID')
            ->select('sales.ID', 'sales.DEPARTMENT', 'sales.AMOUNT', 'sales.YEAR', 'sales.MONTH', 'sales_staff.NAME')
            ->get();
        $param = ['user' => $user, 'users' => $users];
        return view('sales.index', $param);
    }
    //新規登録画面
    public function create() {
        return view('sales.create');
    }
    public function store(Request $request) {
            //salesテーブルに値を追加
            $department = $request->input('department');
            $prfecture = $request->input('prfecture');
            $staff_id = $request->input('staff_id');
            $amount = $request->input('amount');
            $year = $request->input('year');
            $month = $request->input('month');
            $create_date = $request->input('create_date');
            //sales_staffテーブルに値を追加
            $name = $request->input('name');
            $age = $request->input('age');
            $gender = $request->input('gender');
            return view('sales.store', compact('staff_id', 'department', 'prfecture', 'amount', 'year', 'month', 'create_date', 'name', 'age', 'gender')); 
    }
    public function getIndex(Request $request) {
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
        DB::table('sales')
            ->insert(['DEPARTMENT' => $department, 'PRFECTURE' => $prfecture, 'STAFF_ID' => $staff_id, 'AMOUNT' => $amount, 'YEAR' => $year, 'MONTH' => $month, 'CREATE_DATE' => $create_date]);
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
            return view('sales.getIndex', compact('staff_id', 'department', 'prfecture', 'amount', 'year', 'month', 'create_date', 'name', 'age', 'gender')); 
    }
    //編集画面
    public function edit(Request $request) {
        $id = $request->id;
        $users = DB::table('sales')
            ->join('sales_staff', 'sales.STAFF_ID', '=', 'sales_staff.STAFF_ID')
            ->select('sales.ID', 'sales.DEPARTMENT', 'sales.AMOUNT', 'sales.YEAR', 'sales.MONTH', 'sales_staff.NAME')
            ->where('sales.ID', $id)
            ->first();
        return view('sales.edit', compact('users'));
    }
 
    public function update(Request $request) {
        $id = $request->id;
        $amount = $request->input('amount');
        $users = DB::table('sales')
            ->where('sales.ID', $id)
            //AMOUNT(売上げ)を更新
            ->update(['AMOUNT' => $amount]);
            return view('sales.update', compact('amount'));
    }
    
}
    
