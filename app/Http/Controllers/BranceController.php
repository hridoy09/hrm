<?php

namespace App\Http\Controllers;

use App\Models\Brance;
use App\Models\Employee;
use App\Models\Notification;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BranceController extends Controller
{

    public function adminindex(){
        $employees         = Employee::with('brance','brancelocation')->get();
        $inactiveemployees = Employee::where('Status','0')->get();
        $activeemployees   = Employee::where('Status','1')->get();

        $brances         = Brance::where('Status','1')->get();
        $inactivebrances = Brance::where('Status','0')->get();
        $activebrances   = Brance::where('Status','1')->get();


        // $notifications = DB::table('notifications')->letest()->get();
        // dd($notifications);

        return view('admin.index',compact('employees','brances','inactivebrances','inactiveemployees','activeemployees','activebrances'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $brances = Brance::all();
      return view('admin.brance.index',compact('brances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

    	$this->validate($request, [
            'name'             => 'required',
            'location'         => 'required',
            'number'           => 'required',
            'controller_name'  => 'required',
            'acc_number'       => 'required',
            'shop_issue_date'  => 'required',
            'shop_expiry_date' => 'required',
            'shop_file'        => 'required',
            'email'            => 'required',
            'password'         => 'required',

        ],
        [
            'name.required'             => 'Field required',
            'location.required'         => 'Field required',
            'number.required'           => 'Field required',
            'controller_name.required'  => 'Field required',
            'acc_number.required'       => 'Field required',
            'shop_issue_date.required'  => 'Field required',
            'shop_expiry_date.required' => 'Field required',
            'shop_file.required'        => 'Field required',
            'email.required'            => 'Field required',
            'password.required'         => 'Field required',

        ]);



		if($request->hasFile('shop_file')) {
            $file            = $request->file('shop_file') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/shop/shop_file' ;
            $file->move($destinationPath,$fileName);
    	}
        if($request->hasFile('home_file')) {
            $file             = $request->file('home_file');
            $fileName2        = $file->getClientOriginalName() ;
            $destinationPath2 = public_path().'/admin/shop/home_file' ;
            $file->move($destinationPath2,$fileName2);
    	}
        if($request->hasFile('senapid_decision')) {
            $file             = $request->file('senapid_decision') ;
            $fileName3        = $file->getClientOriginalName() ;
            $destinationPath3 = public_path().'/admin/shop/senapid_decision' ;
            $file->move($destinationPath3,$fileName3);
    	}

        if($request->hasFile('starowstwo_decision')) {
            $file             = $request->file('starowstwo_decision') ;
            $fileName4        = $file->getClientOriginalName() ;
            $destinationPath4 = public_path().'/admin/shop/starowstwo_decision' ;
            $file->move($destinationPath4,$fileName4);
    	}

        if($request->hasFile('book')) {
            $file             = $request->file('book') ;
            $fileName5        = $file->getClientOriginalName() ;
            $destinationPath5 = public_path().'/admin/shop/book' ;
            $file->move($destinationPath5,$fileName5);
    	}

        if($request->hasFile('water_test')) {
            $file             = $request->file('water_test') ;
            $fileName6        = $file->getClientOriginalName() ;
            $destinationPath6 = public_path().'/admin/shop/water_test' ;
            $file->move($destinationPath6,$fileName6);
    	}

        if($request->hasFile('vantilation_report')) {
            $file             = $request->file('vantilation_report') ;
            $fileName7        = $file->getClientOriginalName() ;
            $destinationPath7 = public_path().'/admin/shop/vantilation_report' ;
            $file->move($destinationPath7,$fileName7);
    	}

        if($request->hasFile('garbage')) {
            $file             = $request->file('garbage') ;
            $fileName8        = $file->getClientOriginalName() ;
            $destinationPath8 = public_path().'/admin/shop/garbage' ;
            $file->move($destinationPath8,$fileName8);
    	}

        if($request->hasFile('electronic_contract')) {
            $file             = $request->file('electronic_contract') ;
            $fileName9        = $file->getClientOriginalName() ;
            $destinationPath9 = public_path().'/admin/shop/electronic_contract' ;
            $file->move($destinationPath9,$fileName9);
    	}

        if($request->hasFile('bhp1')) {
            $file              = $request->file('bhp1') ;
            $fileName10        = $file->getClientOriginalName() ;
            $destinationPath10 = public_path().'/admin/shop/bhp' ;
            $file->move($destinationPath10,$fileName10);
    	}

        if($request->hasFile('bhp2')) {
            $file              = $request->file('bhp2') ;
            $fileName11        = $file->getClientOriginalName() ;
            $destinationPath11 = public_path().'/admin/shop/bhp' ;
            $file->move($destinationPath11,$fileName11);
    	}

        if($request->hasFile('bhp3')) {
            $file              = $request->file('bhp3') ;
            $fileName12        = $file->getClientOriginalName() ;
            $destinationPath12 = public_path().'/admin/shop/bhp' ;
            $file->move($destinationPath12,$fileName12);
    	}

        if($request->hasFile('bhp4')) {
            $file              = $request->file('bhp4') ;
            $fileName13        = $file->getClientOriginalName() ;
            $destinationPath13 = public_path().'/admin/shop/bhp' ;
            $file->move($destinationPath13,$fileName13);
    	}

        if($request->hasFile('krs')) {
            $file              = $request->file('krs') ;
            $fileName14        = $file->getClientOriginalName() ;
            $destinationPath14 = public_path().'/admin/shop/krs' ;
            $file->move($destinationPath14,$fileName14);
    	}

        if($request->hasFile('oil_contract')) {
            $file              = $request->file('oil_contract') ;
            $fileName15        = $file->getClientOriginalName() ;
            $destinationPath15 = public_path().'/admin/shop/oil_contract' ;
            $file->move($destinationPath15,$fileName15);
    	}

        if($request->hasFile('login_info')) {
            $file              = $request->file('login_info') ;
            $fileName16        = $file->getClientOriginalName() ;
            $destinationPath16 = public_path().'/admin/shop/login_info' ;
            $file->move($destinationPath16,$fileName16);
    	}

        if($request->hasFile('ali_baba_contract')) {
            $file              = $request->file('ali_baba_contract') ;
            $fileName17        = $file->getClientOriginalName() ;
            $destinationPath17 = public_path().'/admin/shop/ali_baba_contract' ;
            $file->move($destinationPath17,$fileName17);
    	}
        if($request->hasFile('beverage_contract')) {
            $file              = $request->file('beverage_contract') ;
            $fileName18        = $file->getClientOriginalName() ;
            $destinationPath18 = public_path().'/admin/shop/beverage_contract' ;
            $file->move($destinationPath18,$fileName18);
    	}




    Brance::insert([

        'name'             => $request->name,
        'location'         => $request->location,
        'number'           => $request->number,
        'controller_name'  => $request->controller_name,
        'acc_number'       => $request->acc_number,
        'shop_issue_date'  => $request->shop_issue_date,
        'shop_expiry_date' => $request->shop_expiry_date,
        'home_issue_date'  => $request->home_issue_date,
        'home_expiry_date' => $request->home_expiry_date,
        'project'          => $request->project,
        'email'            => $request->email,
        'password'         => Hash::make($request->password),

        'shop_file'           => @$fileName,
        'home_file'           => @$fileName2,
        'senapid_decision'    => @$fileName3,
        'starowstwo_decision' => @$fileName4,
        'book'                => @$fileName5,
        'water_test'          => @$fileName6,
        'vantilation_report'  => @$fileName7,
        'garbage'             => @$fileName8,
        'electronic_contract' => @$fileName9,
        'bhp1'                => @$fileName10,
        'bhp2'                => @$fileName11,
        'bhp3'                => @$fileName12,
        'bhp4'                => @$fileName13,
        'krs'                 => @$fileName14,
        'oil_contract'        => @$fileName15,
        'login_info'          => @$fileName16,
        'ali_baba_contract'   => @$fileName17,
        'beverage_contract'   => @$fileName18,
        'created_at'          => Carbon::now(),
  	 ]);


      return redirect()->back()->with('status', 'Shop Added.');;
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
        $brance = Brance::find($id);
        return view('admin.brance.edit',compact('brance'));
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
        $this->validate($request, [
            'name'             => 'required',
            'location'         => 'required',
            'number'           => 'required',
            'controller_name'  => 'required',
            'acc_number'       => 'required',
            'shop_issue_date'  => 'required',
            'shop_expiry_date' => 'required',
            'shop_file'        => 'required',

            'email'    => 'required',
            'password' => 'required',

        ],
        [
            'name.required'             => 'Field required',
            'location.required'         => 'Field required',
            'number.required'           => 'Field required',
            'controller_name.required'  => 'Field required',
            'acc_number.required'       => 'Field required',
            'shop_issue_date.required'  => 'Field required',
            'shop_expiry_date.required' => 'Field required',
            'shop_file.required'        => 'Field required',

            'email.required'    => 'Field required',
            'password.required' => 'Field required',

        ]);


        $brance = Brance::find($id);
		if($request->hasFile('shop_file')) {
            $file            = $request->file('shop_file') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/shop/shop_file' ;
            $file->move($destinationPath,$fileName);
            $save_url          = $fileName;
            $brance->shop_file = $save_url;
    	}
        else{

            $brance->shop_file = $brance->shop_file;
        }


        if($request->hasFile('home_file')) {
            $file             = $request->file('home_file');
            $fileName2        = $file->getClientOriginalName() ;
            $destinationPath2 = public_path().'/admin/shop/home_file' ;
            $file->move($destinationPath2,$fileName2);
            $save_url          = $fileName2;
            $brance->home_file = $save_url;
    	}
        else{

            $brance->home_file = $brance->home_file;
        }


        if($request->hasFile('senapid_decision')) {
            $file             = $request->file('senapid_decision') ;
            $fileName3        = $file->getClientOriginalName() ;
            $destinationPath3 = public_path().'/admin/shop/senapid_decision' ;
            $file->move($destinationPath3,$fileName3);
            $save_url                 = $fileName3;
            $brance->senapid_decision = $save_url;
    	}
        else{

            $brance->senapid_decision = $brance->senapid_decision;
        }


        if($request->hasFile('starowstwo_decision')) {
            $file             = $request->file('starowstwo_decision') ;
            $fileName4        = $file->getClientOriginalName() ;
            $destinationPath4 = public_path().'/admin/shop/starowstwo_decision' ;
            $file->move($destinationPath4,$fileName4);
            $save_url                    = $fileName4;
            $brance->starowstwo_decision = $save_url;
    	}
        else{

            $brance->starowstwo_decision = $brance->starowstwo_decision;
        }



        if($request->hasFile('book')) {
            $file             = $request->file('book') ;
            $fileName5        = $file->getClientOriginalName() ;
            $destinationPath5 = public_path().'/admin/shop/book' ;
            $file->move($destinationPath5,$fileName5);
            $save_url     = $fileName5;
            $brance->book = $save_url;
    	}
        else{

            $brance->book = $brance->book;
        }



        if($request->hasFile('water_test')) {
            $file             = $request->file('water_test') ;
            $fileName6        = $file->getClientOriginalName() ;
            $destinationPath6 = public_path().'/admin/shop/water_test' ;
            $file->move($destinationPath6,$fileName6);
            $save_url           = $fileName6;
            $brance->water_test = $save_url;
    	}
        else{

            $brance->water_test = $brance->water_test;
        }



        if($request->hasFile('vantilation_report')) {
            $file             = $request->file('vantilation_report') ;
            $fileName7        = $file->getClientOriginalName() ;
            $destinationPath7 = public_path().'/admin/shop/vantilation_report' ;
            $file->move($destinationPath7,$fileName7);
            $save_url                   = $fileName7;
            $brance->vantilation_report = $save_url;
    	}
        else{

            $brance->vantilation_report = $brance->vantilation_report;
        }



        if($request->hasFile('garbage')) {
            $file             = $request->file('garbage') ;
            $fileName8        = $file->getClientOriginalName() ;
            $destinationPath8 = public_path().'/admin/shop/garbage' ;
            $file->move($destinationPath8,$fileName8);
            $save_url        = $fileName8;
            $brance->garbage = $save_url;
    	}
        else{

            $brance->garbage = $brance->garbage;
        }



        if($request->hasFile('electronic_contract')) {
            $file             = $request->file('electronic_contract') ;
            $fileName9        = $file->getClientOriginalName() ;
            $destinationPath9 = public_path().'/admin/shop/electronic_contract' ;
            $file->move($destinationPath9,$fileName9);
            $save_url                    = $fileName9;
            $brance->electronic_contract = $save_url;
    	}
        else{

            $brance->electronic_contract = $brance->electronic_contract;
        }



        if($request->hasFile('bhp1')) {
            $file              = $request->file('bhp1') ;
            $fileName10        = $file->getClientOriginalName() ;
            $destinationPath10 = public_path().'/admin/shop/bhp' ;
            $file->move($destinationPath10,$fileName10);
            $save_url     = $fileName10;
            $brance->bhp1 = $save_url;

    	}
        else{

            $brance->bhp = $brance->bhp;
        }


        if($request->hasFile('bhp2')) {
            $file              = $request->file('bhp2') ;
            $fileName11        = $file->getClientOriginalName() ;
            $destinationPath11 = public_path().'/admin/shop/bhp' ;
            $file->move($destinationPath11,$fileName11);
            $save_url     = $fileName11;
            $brance->bhp2 = $save_url;
    	}
        else{

            $brance->bhp2 = $brance->bhp2;
        }



        if($request->hasFile('bhp3')) {
            $file              = $request->file('bhp3') ;
            $fileName12        = $file->getClientOriginalName() ;
            $destinationPath12 = public_path().'/admin/shop/bhp' ;
            $file->move($destinationPath12,$fileName12);
            $save_url     = $fileName12;
            $brance->bhp3 = $save_url;
    	}
        else{

            $brance->bhp3 = $brance->bhp3;
        }



        if($request->hasFile('bhp4')) {
            $file              = $request->file('bhp4') ;
            $fileName13        = $file->getClientOriginalName() ;
            $destinationPath13 = public_path().'/admin/shop/bhp' ;
            $file->move($destinationPath13,$fileName13);
            $save_url     = $fileName13;
            $brance->bhp4 = $save_url;


    	}
        else{

            $brance->bhp4 = $brance->bhp4;
        }


        if($request->hasFile('krs')) {
            $file              = $request->file('krs') ;
            $fileName14        = $file->getClientOriginalName() ;
            $destinationPath14 = public_path().'/admin/shop/krs' ;
            $file->move($destinationPath14,$fileName14);
            $save_url     = $fileName14;
            $brance->bhp4 = $save_url;
    	}
        else{

            $brance->krs = $brance->krs;
        }



        if($request->hasFile('oil_contract')) {
            $file              = $request->file('oil_contract') ;
            $fileName15        = $file->getClientOriginalName() ;
            $destinationPath15 = public_path().'/admin/shop/oil_contract' ;
            $file->move($destinationPath15,$fileName15);
            $save_url             = $fileName15;
            $brance->oil_contract = $save_url;
    	}
        else{

            $brance->oil_contract = $brance->oil_contract;
        }


        if($request->hasFile('login_info')) {
            $file              = $request->file('login_info') ;
            $fileName16        = $file->getClientOriginalName() ;
            $destinationPath16 = public_path().'/admin/shop/login_info' ;
            $file->move($destinationPath16,$fileName16);
            $save_url           = $fileName16;
            $brance->login_info = $save_url;
    	}
        else{

            $brance->login_info = $brance->login_info;
        }


        if($request->hasFile('ali_baba_contract')) {
            $file              = $request->file('ali_baba_contract') ;
            $fileName17        = $file->getClientOriginalName() ;
            $destinationPath17 = public_path().'/admin/shop/ali_baba_contract' ;
            $file->move($destinationPath17,$fileName17);
            $save_url                  = $fileName17;
            $brance->ali_baba_contract = $save_url;

    	}


        if($request->hasFile('beverage_contract')) {
            $file              = $request->file('beverage_contract') ;
            $fileName18        = $file->getClientOriginalName() ;
            $destinationPath18 = public_path().'/admin/shop/beverage_contract' ;
            $file->move($destinationPath18,$fileName18);
            $save_url                  = $fileName18;
            $brance->beverage_contract = $save_url;
    	}




        $brance->name             = $request->name;
        $brance->location         = $request->location;
        $brance->number           = $request->number;
        $brance->controller_name  = $request->controller_name;
        $brance->acc_number       = $request->acc_number;
        $brance->shop_issue_date  = $request->shop_issue_date;
        $brance->shop_expiry_date = $request->shop_expiry_date;
        $brance->home_issue_date  = $request->home_issue_date;
        $brance->home_expiry_date = $request->home_expiry_date;
        $brance->Project          = $request->project;
        $brance->email            = $request->email;
        // $brance->password = $request->password;
        $brance->password = Hash::make($request->password);

      	$brance->updated_at = Carbon::now();
        $brance->save();



      return redirect()->route('brance.list')->with('status', 'Shop update.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function changeStatus($id){
    	$status = Brance::findOrFail($id)->Status;
    	if($status == 1){
    		Brance:: findOrFail($id)->update(['Status' => 0]);
    		$notification = array(
            'message'    => 'brance$brance Disabled Successfully',
            'alert-type' => 'warning',
        );
      		return redirect()->back()->with($notification);
    	}else{
    		Brance:: findOrFail($id)->update(['Status' => 1]);
    		 $notification = array(
            'message'    => 'brance$brance Enabled Successfully',
            'alert-type' => 'success',
        );
      		return redirect()->back()->with($notification);
    	}
}

public function destroy($id){

    $brance = Brance::findOrFail($id);


    if (is_file(public_path("admin/shop/shop_file/".$brance->shop_file))){
        unlink(public_path("admin/shop/shop_file/".$brance->shop_file));
    }


    $path = public_path("admin/shop/home_file/".$brance->home_file);
    if (is_file($path)){
        unlink($path);
    }


    $path = public_path("admin/shop/senapid_decision/".$brance->senapid_decision);
    if (is_file($path)){
        unlink($path);
    }


    $path = public_path("admin/shop/starowstwo_decision/".$brance->starowstwo_decision);
    if (is_file($path)){
        unlink($path);
    }


    $path = public_path("admin/shop/book/".$brance->book);
    if (is_file($path)){
        unlink($path);
    }


    $path = public_path("admin/shop/water_test/".$brance->water_test);
    if (is_file($path)){
        unlink($path);
    }


    $path = public_path("admin/shop/vantilation_report/".$brance->vantilation_report);
    if (is_file($path)){
        unlink($path);
    }

    $path = public_path("admin/shop/garbage/".$brance->garbage);
    if (is_file($path)){
        unlink($path);
    }


    $path = public_path("admin/shop/electronic_contract/".$brance->electronic_contract);
    if (is_file($path)){
        unlink($path);
    }


    $path = public_path("admin/shop/bhp/".$brance->bhp1);
    if (is_file($path)){
        unlink($path);
    }



    $path = public_path("admin/shop/bhp/".$brance->bhp2);
    if (is_file($path)){
        unlink($path);
    }


    $path = public_path("admin/shop/bhp/".$brance->bhp3);
    if (is_file($path)){
        unlink($path);
    }



    $path = public_path("admin/shop/bhp/".$brance->bhp4);
    if (is_file($path)){
        unlink($path);
    }



    $path = public_path("admin/shop/krs/".$brance->krs);
    if (is_file($path)){
        unlink($path);
    }



    $path = public_path("admin/shop/oil_contract/".$brance->oil_contract);
    if (is_file($path)){
        unlink($path);
    }


    $path = public_path("admin/shop/login_info/".$brance->login_info);
    if (is_file($path)){
        unlink($path);
    }


    $path = public_path("admin/shop/ali_baba_contract/".$brance->ali_baba_contract);
    if (is_file($path)){
        unlink($path);
    }



    $path = public_path("admin/shop/beverage_contract/".$brance->beverage_contract);
    if (is_file($path)){
        unlink($path);
    }




    $brance->delete();



    return redirect()->back()->with('delete', 'Shop delete success');
}


}
