<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestController extends Controller {
    
    public function complete() {
        $users = DB::table('sales_staff')
            //sales_staffテーブルとstaff_familyテーブルを結合          
            ->join('staff_family', 'sales_staff.STAFF_ID', '=', 'staff_family.STAFF_ID')
            ->get(); 
        return view('test/complete', compact('users'));
    }
    
    public function registration() {
        return view('test/registration');
    }
    
    public function confirm(Request $request) {
        DB::beginTransaction();
            try {
                //sales_staffテーブルに値を追加
                $staff_id = $request->input('staff_id');
                $name = $request->input('name');
                $age = $request->input('age');
                $gender = $request->input('gender');
            DB::table('sales_staff')->insert(['STAFF_ID' => $staff_id, 'NAME' => $name, 'AGE' => $age, 'GENDER' =>$gender]);
                //staff_familyテーブルに値を追加
                $brother_type = $request->input('brother_type');
                $brother_name = $request->input('brother_name');
            DB::table('staff_family')->insert(['STAFF_ID' => $staff_id, 'BROTHER_TYPE' => $brother_type, 'BROTHER_NAME' => $brother_name]);
            DB::commit();
            $success = true;
                } catch (SQLException $e) {
                $success = false;
            DB::rollback();
                } catch (Exception $e) {
                $success = false;
                }
            return view('test/confirm',compact('staff_id', 'name', 'age', 'gender', 'brother_type', 'brother_name'));  
    }
    
}