<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Brance;
use App\Models\Employee;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopUsercontroller extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::with('brance','brancelocation')->where('shop_id', Auth::id())->where('Status','1')->get();
        // $employees=Employee::with('brance','brancelocation')->get();


        return view('user_brance.listemployee',compact('employees'));

    }


    public function userindex(){
        $employees = Employee::with('brance','brancelocation')->where('shop_id', Auth::id())->where('Status','1')->get();
        $recent_employees = Employee::orderBy('created_at', 'desc')->where('shop_id', Auth::id())->where('Status','1')->take(5)->get();



        return view('user_brance.index',compact('employees','recent_employees'));
    }

    public function shopinfo(){
        $shopinfos=Brance::where('id', Auth::id())->where('Status','1')->get();

        return view('user_brance.shopinfo',compact('shopinfos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
