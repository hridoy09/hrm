<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
  public function activeemployee(){
    $employees=Employee::with('brance','brancelocation')->where('Status','1')->get();
    return view('admin.report.activeemployee',compact('employees'));
  }
  public function inacctiveemployee(){
    $employees=Employee::with('brance','brancelocation')->where('Status','0')->get();
    return view('admin.report.inactiveemployee',compact('employees'));
  }

  public function passportexpire(){
    $passports=Employee::where('pp_expiry_date','<',Carbon::now())->get();
   return view('admin.report.passport_expiry',compact('passports'));

  }

  public function rdexpiry(){
    $residences=Employee::where('rd_expiry_date','<',Carbon::now())->get();
  
      return view('admin.report.rd_expiry',compact('residences'));
  }

  public function workpermitreport(){
    $workparmits=Employee::where('work_expiry_date','<',Carbon::now())->get();
    return view('admin.report.work_expiry',compact('workparmits'));

  }



}
