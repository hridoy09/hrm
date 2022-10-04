<?php

namespace App\Http\Controllers;

use App\Models\Brance;
use App\Models\Employee;
use App\Models\Notification;
use Illuminate\Http\Request;
Use Carbon\Carbon;
use File;
use Image;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $employees = Employee::with('brance','brancelocation')->get();
        return view('admin.employ.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brances = Brance::where('Status','1')->get();

        return view('admin.employ.create', compact('brances'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

    	$this->validate($request, [

            'name'     => 'required',
            'sur_name' => 'required',

            'father_name' => 'required',
            'mother_name' => 'required',
            'passport_no' => 'required',

        ],
        [


            'name.required'     => 'field required',
            'sur_name.required' => 'field required',

            'father_name.required' => 'field required',
            'mother_name.required' => 'field required',

            'passport_no.required' => 'field required',


        ]);



		if($request->hasFile('passport_file')) {
            $file            = $request->file('passport_file') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/passport' ;
            $file->move($destinationPath,$fileName);
    	}



        if($request->hasFile('update_passport_file')) {
            $file             = $request->file('update_passport_file') ;
            $fileName1        = $file->getClientOriginalName() ;
            $destinationPath1 = public_path().'/admin/passport' ;
            $file->move($destinationPath1,$fileName1);
    	}


        if($request->hasFile('rd_file')) {
            $file             = $request->file('rd_file');
            $fileName2        = $file->getClientOriginalName() ;
            $destinationPath2 = public_path().'/admin/residence' ;
            $file->move($destinationPath2,$fileName2);
    	}

        if($request->hasFile('d_residence_file')) {
            $file             = $request->file('d_residence_file') ;
            $fileName3        = $file->getClientOriginalName() ;
            $destinationPath3 = public_path().'/admin/dec_residence' ;
            $file->move($destinationPath3,$fileName3);
    	}

        if($request->hasFile('work_file')) {
            $file             = $request->file('work_file') ;
            $fileName4        = $file->getClientOriginalName() ;
            $destinationPath4 = public_path().'/admin/work_file' ;
            $file->move($destinationPath4,$fileName4);
    	}

        if($request->hasFile('zus_dec')) {
            $file             = $request->file('zus_dec') ;
            $fileName5        = $file->getClientOriginalName() ;
            $destinationPath5 = public_path().'/admin/zus' ;
            $file->move($destinationPath5,$fileName5);
    	}


        if($request->hasFile('work_contact_file')) {
            $file             = $request->file('work_contact_file') ;
            $fileName6        = $file->getClientOriginalName() ;
            $destinationPath6 = public_path().'/admin/work_contact' ;
            $file->move($destinationPath6,$fileName6);
    	}

        if($request->hasFile('health_doc')) {
            $file             = $request->file('health_doc') ;
            $fileName7        = $file->getClientOriginalName() ;
            $destinationPath7 = public_path().'/admin/health_doc' ;
            $file->move($destinationPath7,$fileName7);
    	}


        if($request->hasFile('attachment1')) {
            $file             = $request->file('attachment1') ;
            $fileName8        = $file->getClientOriginalName() ;
            $destinationPath8 = public_path().'/admin/attachment' ;
            $file->move($destinationPath8,$fileName8);
    	}

        if($request->hasFile('attachment2')) {
            $file             = $request->file('attachment2') ;
            $fileName9        = $file->getClientOriginalName() ;
            $destinationPath9 = public_path().'/admin/attachment' ;
            $file->move($destinationPath9,$fileName9);
    	}


        if($request->hasFile('attachment3')) {
            $file              = $request->file('attachment3') ;
            $fileName10        = $file->getClientOriginalName() ;
            $destinationPath10 = public_path().'/admin/attachment' ;
            $file->move($destinationPath10,$fileName10);
    	}

        if($request->hasFile('attachment4')) {
            $file              = $request->file('attachment4') ;
            $fileName11        = $file->getClientOriginalName() ;
            $destinationPath11 = public_path().'/admin/attachment' ;
            $file->move($destinationPath11,$fileName11);
    	}

        if($request->hasFile('attachment5')) {
            $file              = $request->file('attachment5') ;
            $fileName12        = $file->getClientOriginalName() ;
            $destinationPath12 = public_path().'/admin/attachment' ;
            $file->move($destinationPath12,$fileName12);
    	}

        if($request->hasFile('attachment6')) {
            $file              = $request->file('attachment6') ;
            $fileName13        = $file->getClientOriginalName() ;
            $destinationPath13 = public_path().'/admin/attachment' ;
            $file->move($destinationPath13,$fileName13);
    	}

        if($request->hasFile('attachment7')) {
            $file              = $request->file('attachment7') ;
            $fileName14        = $file->getClientOriginalName() ;
            $destinationPath14 = public_path().'/admin/attachment' ;
            $file->move($destinationPath14,$fileName14);
    	}



        if($request->hasFile('attachment8')) {
            $file              = $request->file('attachment8') ;
            $fileName15        = $file->getClientOriginalName() ;
            $destinationPath15 = public_path().'/admin/attachment' ;
            $file->move($destinationPath15,$fileName15);
    	}


        if($request->hasFile('attachment9')) {
            $file              = $request->file('attachment9') ;
            $fileName16        = $file->getClientOriginalName() ;
            $destinationPath16 = public_path().'/admin/attachment' ;
            $file->move($destinationPath16,$fileName16);
    	}


        if($request->hasFile('attachment10')) {
            $file              = $request->file('attachment10') ;
            $fileName17        = $file->getClientOriginalName() ;
            $destinationPath17 = public_path().'/admin/attachment' ;
            $file->move($destinationPath17,$fileName17);
    	}

        if($request->hasFile('pasel_no')) {
            $file              = $request->file('pasel_no') ;
            $fileName18        = $file->getClientOriginalName() ;
            $destinationPath18 = public_path().'/admin/pasel_no' ;
            $file->move($destinationPath18,$fileName18);
    	}

        if($request->hasFile('exp_details')) {
            $file              = $request->file('exp_details') ;
            $fileName19        = $file->getClientOriginalName() ;
            $destinationPath19 = public_path().'/admin/exp_details' ;
            $file->move($destinationPath19,$fileName19);
    	}


        if($request->hasFile('image')) {
            $file              = $request->file('image') ;
            $fileName20        = $file->getClientOriginalName() ;
            $destinationPath20 = public_path().'/admin/image' ;
            $file->move($destinationPath20,$fileName20);

    	}


    Employee::insert([

        'employee_code'            => $request->employee_code,
        'name'                     => $request->name,
        'sur_name'                 => $request->sur_name,
        'bd_date'                  => $request->bd_date,
        'father_name'              => $request->father_name,
        'mother_name'              => $request->mother_name,
        'nationality'              => $request->nationality,
        'position'                 => $request->position,
        'em_contact'               => $request->em_contact,
        'company_name'             => $request->company_name,
        'contact_type'             => $request->contact_type,
        'salary'                   => $request->salary,
        'work_hour'                => $request->work_hour,
        'pp_issue_date'            => $request->pp_issue_date,
        'pp_expiry_date'           => $request->pp_expiry_date,
        'passport_no'              => $request->passport_no,
        'rd_issue_date'            => $request->rd_issue_date,
        'rd_expiry_date'           => $request->rd_expiry_date,
        'work_issue_date'          => $request->work_issue_date,
        'work_expiry_date'         => $request->work_expiry_date,
        'zus_date'                 => $request->zus_date,
        'work_contact_issue_date'  => $request->work_contact_issue_date,
        'work_contact_expiry_date' => $request->work_contact_expiry_date,
        'shop_id'                  => $request->shop_id,
        'shop_location_id'         => $request->shop_location_id,
        'accommodation_address'    => $request->accommodation_address,
        'pre_company_name'         => $request->pre_company_name,
        'contact_no'               => $request->contact_no,
        'reference'                => $request->reference,
        'marital_status'           => $request->marital_status,
        'email'                    => $request->email,
        'passport_file'            => @$fileName,
        'update_passport_file'     => @$fileName1,
        'rd_file'                  => @$fileName2,
        'd_residence_file'         => @$fileName3,
        'work_file'                => @$fileName4,
        'zus_dec'                  => @$fileName5,
        'work_contact_file'        => @$fileName6,
        'health_doc'               => @$fileName7,
        'attachment1'              => @$fileName8,
        'attachment2'              => @$fileName9,
        'attachment3'              => @$fileName10,
        'attachment4'              => @$fileName11,
        'attachment5'              => @$fileName12,
        'attachment6'              => @$fileName13,
        'attachment7'              => @$fileName14,
        'attachment8'              => @$fileName15,
        'attachment9'              => @$fileName16,
        'attachment10'             => @$fileName17,
        'pasel_no'                 => @$fileName18,
        'exp_details'              => @$fileName19,
        'image'                    => @$fileName20,
        'created_at'               => Carbon::now(),
  	 ]);


      return redirect()->back()->with('status', 'Employe Added.');;
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
        $employee = Employee::find($id);
        $brances  = Brance::where('Status','1')->get();
        return view('admin.employ.edit',compact('employee','brances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request,$id){
        $this->validate($request, [

            'name'     => 'required',
            'sur_name' => 'required',

            'father_name' => 'required',
            'mother_name' => 'required',

            'passport_no' => 'required',

        ],
        [


            'name.required'     => 'field required',
            'sur_name.required' => 'field required',

            'father_name.required' => 'field required',
            'mother_name.required' => 'field required',

            'passport_no.required' => 'field required',


        ]);

        $employee = Employee::find($id);
        if($request->hasFile('passport_file')) {
            $file            = $request->file('passport_file') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/passport' ;
            $file->move($destinationPath,$fileName);
            $save_url                = $fileName;
            $employee->passport_file = $save_url;
    	}

        else{

            $employee->passport_file = $employee->passport_file;
        }

        $employee = Employee::find($id);
        if($request->hasFile('update_passport_file')) {
            $file             = $request->file('update_passport_file') ;
            $fileName1        = $file->getClientOriginalName() ;
            $destinationPath1 = public_path().'/admin/passport' ;
            $file->move($destinationPath1,$fileName1);
            $save_url                       = $fileName1;
            $employee->update_passport_file = $save_url;
    	}
        else{

            $employee->update_passport_file = $employee->update_passport_file;
        }




        if($request->hasFile('rd_file')) {
            $file             = $request->file('rd_file');
            $fileName2        = $file->getClientOriginalName() ;
            $destinationPath2 = public_path().'/admin/residence' ;
            $file->move($destinationPath2,$fileName2);
            $save_url          = $fileName2;
            $employee->rd_file = $save_url;
    	}
        else{
            $employee->rd_file = $employee->rd_file;
        }


        if($request->hasFile('d_residence_file')) {
            $file             = $request->file('d_residence_file') ;
            $fileName3        = $file->getClientOriginalName() ;
            $destinationPath3 = public_path().'/admin/dec_residence' ;
            $file->move($destinationPath3,$fileName3);
            $save_url                   = $fileName3;
            $employee->d_residence_file = $save_url;
    	}
        else{
            $employee->d_residence_file = $employee->d_residence_file;
        }


        if($request->hasFile('work_file')) {
            $file             = $request->file('work_file') ;
            $fileName4        = $file->getClientOriginalName() ;
            $destinationPath4 = public_path().'/admin/work_file' ;
            $file->move($destinationPath4,$fileName4);
            $save_url            = $fileName4;
            $employee->work_file = $save_url;
    	}
        else{
            $employee->work_file = $employee->work_file;
        }


        if($request->hasFile('zus_dec')) {
            $file             = $request->file('zus_dec') ;
            $fileName5        = $file->getClientOriginalName() ;
            $destinationPath5 = public_path().'/admin/zus' ;
            $file->move($destinationPath5,$fileName5);
            $save_url          = $fileName5;
            $employee->zus_dec = $save_url;
    	}
        else{
            $employee->zus_dec = $employee->zus_dec;
        }


        if($request->hasFile('work_contact_file')) {
            $file             = $request->file('work_contact_file') ;
            $fileName6        = $file->getClientOriginalName() ;
            $destinationPath6 = public_path().'/admin/work_contact' ;
            $file->move($destinationPath6,$fileName6);
            $save_url                    = $fileName6;
            $employee->work_contact_file = $save_url;
    	}
        else{
            $employee->work_contact_file = $employee->work_contact_file;
        }


        if($request->hasFile('health_doc')) {
            $file             = $request->file('health_doc') ;
            $fileName7        = $file->getClientOriginalName() ;
            $destinationPath7 = public_path().'/admin/health_doc' ;
            $file->move($destinationPath7,$fileName7);
            $save_url             = $fileName7;
            $employee->health_doc = $save_url;
    	}
        else{
            $employee->health_doc = $employee->health_doc;
        }



        if($request->hasFile('attachment1')) {
            $file             = $request->file('attachment1') ;
            $fileName8        = $file->getClientOriginalName() ;
            $destinationPath8 = public_path().'/admin/attachment' ;
            $file->move($destinationPath8,$fileName8);
            $save_url              = $fileName8;
            $employee->attachment1 = $save_url;
    	}
        else{
            $employee->attachment1 = $employee->attachment1;
        }


        if($request->hasFile('attachment2')) {
            $file             = $request->file('attachment2') ;
            $fileName9        = $file->getClientOriginalName() ;
            $destinationPath9 = public_path().'/admin/attachment' ;
            $file->move($destinationPath9,$fileName9);
            $save_url              = $fileName9;
            $employee->attachment2 = $save_url;
    	}
        else{
            $employee->attachment2 = $employee->attachment2;
        }


        if($request->hasFile('attachment3')) {
            $file              = $request->file('attachment3') ;
            $fileName10        = $file->getClientOriginalName() ;
            $destinationPath10 = public_path().'/admin/attachment' ;
            $file->move($destinationPath10,$fileName10);
            $save_url              = $fileName10;
            $employee->attachment3 = $save_url;
    	}
        else{
            $employee->attachment3 = $employee->attachment3;
        }


        if($request->hasFile('attachment4')) {
            $file              = $request->file('attachment4') ;
            $fileName11        = $file->getClientOriginalName() ;
            $destinationPath11 = public_path().'/admin/attachment' ;
            $file->move($destinationPath11,$fileName11);
            $save_url              = $fileName11;
            $employee->attachment4 = $save_url;
    	}
        else{
            $employee->attachment4 = $employee->attachment4;
        }


        if($request->hasFile('attachment5')) {
            $file              = $request->file('attachment5') ;
            $fileName12        = $file->getClientOriginalName() ;
            $destinationPath12 = public_path().'/admin/attachment' ;
            $file->move($destinationPath12,$fileName12);
            $save_url              = $fileName12;
            $employee->attachment5 = $save_url;
    	}
        else{
            $employee->attachment5 = $employee->attachment5;
        }


        if($request->hasFile('attachment6')) {
            $file              = $request->file('attachment6') ;
            $fileName13        = $file->getClientOriginalName() ;
            $destinationPath13 = public_path().'/admin/attachment' ;
            $file->move($destinationPath13,$fileName13);
            $save_url              = $fileName13;
            $employee->attachment6 = $save_url;
    	}
        else{
            $employee->attachment6 = $employee->attachment6;
        }


        if($request->hasFile('attachment7')) {
            $file              = $request->file('attachment7') ;
            $fileName14        = $file->getClientOriginalName() ;
            $destinationPath14 = public_path().'/admin/attachment' ;
            $file->move($destinationPath14,$fileName14);
            $save_url              = $fileName14;
            $employee->attachment7 = $save_url;
    	}
        else{
            $employee->attachment7 = $employee->attachment7;
        }


        if($request->hasFile('attachment8')) {
            $file              = $request->file('attachment8') ;
            $fileName15        = $file->getClientOriginalName() ;
            $destinationPath15 = public_path().'/admin/attachment' ;
            $file->move($destinationPath15,$fileName15);
            $save_url              = $fileName15;
            $employee->attachment8 = $save_url;
    	}
        else{
            $employee->attachment8 = $employee->attachment8;
        }


        if($request->hasFile('attachment9')) {
            $file              = $request->file('attachment9') ;
            $fileName16        = $file->getClientOriginalName() ;
            $destinationPath16 = public_path().'/admin/attachment' ;
            $file->move($destinationPath16,$fileName16);
            $save_url              = $fileName16;
            $employee->attachment9 = $save_url;
    	}
        else{
            $employee->attachment9 = $employee->attachment9;
        }


        if($request->hasFile('attachment10')) {
            $file              = $request->file('attachment10') ;
            $fileName17        = $file->getClientOriginalName() ;
            $destinationPath17 = public_path().'/admin/attachment' ;
            $file->move($destinationPath17,$fileName17);
            $save_url               = $fileName17;
            $employee->attachment10 = $save_url;
    	}
        else{
            $employee->attachment10 = $employee->attachment10;
        }


        if($request->hasFile('pasel_no')) {
            $file              = $request->file('pasel_no') ;
            $fileName18        = $file->getClientOriginalName() ;
            $destinationPath18 = public_path().'/admin/pasel_no' ;
            $file->move($destinationPath18,$fileName18);
            $save_url           = $fileName18;
            $employee->pasel_no = $save_url;
    	}
        else{
            $employee->pasel_no = $employee->pasel_no;
        }


        if($request->hasFile('exp_details')) {
            $file              = $request->file('exp_details') ;
            $fileName19        = $file->getClientOriginalName() ;
            $destinationPath19 = public_path().'/admin/exp_details' ;
            $file->move($destinationPath19,$fileName19);
            $save_url              = $fileName19;
            $employee->exp_details = $save_url;
    	}
        else{
           $employee->exp_details = $employee->exp_details;
        }



        if($request->hasFile('image')) {
            $file              = $request->file('image') ;
            $fileName20        = $file->getClientOriginalName() ;
            $destinationPath20 = public_path().'/admin/image' ;
            $file->move($destinationPath20,$fileName20);
            $save_url        = $fileName20;
            $employee->image = $save_url;

    	}
        else{
            $employee->image = $employee->image;
        }


                    $employee->employee_code            = $request->employee_code;
                    $employee->name                     = $request->name;
                    $employee->sur_name                 = $request->sur_name;
                    $employee->bd_date                  = $request->bd_date;
                    $employee->father_name              = $request->father_name;
                    $employee->mother_name              = $request->mother_name;
        $employee-> nationality                         = $request->nationality;
                    $employee->position                 = $request->position;
                    $employee->em_contact               = $request->em_contact;
                    $employee->company_name             = $request->company_name;
                    $employee->contact_type             = $request->contact_type;
                    $employee->salary                   = $request->salary;
                    $employee->work_hour                = $request->work_hour;
                    $employee->pp_issue_date            = $request->pp_issue_date;
                    $employee->pp_expiry_date           = $request->pp_expiry_date;
                    $employee->passport_no              = $request->passport_no;
                    $employee->rd_issue_date            = $request->rd_issue_date;
                    $employee->rd_expiry_date           = $request->rd_expiry_date;
                    $employee->work_issue_date          = $request->work_issue_date;
                    $employee->work_expiry_date         = $request->work_expiry_date;
                    $employee->zus_date                 = $request->zus_date;
                    $employee->work_contact_issue_date  = $request->work_contact_issue_date;
                    $employee->work_contact_expiry_date = $request->work_contact_expiry_date;
                    $employee->shop_id                  = $request->shop_id;
                    $employee->shop_location_id         = $request->shop_location_id;
                    $employee->accommodation_address    = $request->accommodation_address;
                    $employee->pre_company_name         = $request->pre_company_name;
                    $employee->contact_no               = $request->contact_no;
                    $employee->reference                = $request->reference;
                    $employee->marital_status           = $request->marital_status;
                    $employee->email                    = $request->email;
        $employee->save();
            return redirect()->route('employ.list')->with('update','Update Success');
      }


// public function transfer($id){
//     $employee=Employee::find($id);
//     $brances=Brance::all();
//     return view('admin.employ.transfer',compact('employee','brances') );

// }
// public function transferupdate($id, request $request){

//     $employee=Employee::find($id);
//     $employee->new_shop_id = $request->new_shop_id;
//     $employee->new_location_id = $request->new_location_id;

//     $employee->save();
//     return redirect()->route('employ.list')->with('transer','Employee Successfully Transfers.' );




// }















    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id){

    	$employee = Employee::findOrFail($id);




        if (is_file(public_path('admin/image/'.$employee->image))){
            unlink(public_path('admin/image/'.$employee->image));
        }
        $path = public_path("admin/attachment/".$employee->attachment1);
        if (is_file($path)){
            unlink($path);
        }
        $path = public_path("admin/attachment/".$employee->attachment2);
        if (is_file($path)){
            unlink($path);
        }
        $path = public_path("admin/attachment/".$employee->attachment3);
        if (is_file($path)){
            unlink($path);
        }

        $path = public_path("admin/attachment/".$employee->attachment4);
        if (is_file($path)){
            unlink($path);
        }


        $path = public_path("admin/attachment/".$employee->attachment5);
        if (is_file($path)){
            unlink($path);
        }


        $path = public_path("admin/attachment/".$employee->attachment6);
        if (is_file($path)){
            unlink($path);
        }

        $path = public_path("admin/attachment/".$employee->attachment7);
        if (is_file($path)){
            unlink($path);
        }

        $path = public_path("admin/attachment/".$employee->attachment8);
        if (is_file($path)){
            unlink($path);
        }

        $path = public_path("admin/attachment/".$employee->attachment9);
        if (is_file($path)){
            unlink($path);
        }



        $path = public_path("admin/attachment/".$employee->attachment10);
        if (is_file($path)){
            unlink($path);
        }



        $path = public_path("admin/passport/".$employee->passport_file);
        if (is_file($path)){
            unlink($path);
        }

        $path = public_path("admin/passport/".$employee->update_passport_file);
        if (is_file($path)){
            unlink($path);
        }




        $path = public_path("admin/residence/".$employee->rd_file);
        if (is_file($path)){
            unlink($path);
        }



        $path = public_path("admin/dec_residence/".$employee->d_residence_file);
        if (is_file($path)){
            unlink($path);
        }



        $path = public_path("admin/work_file/".$employee->work_file);
        if (is_file($path)){
            unlink($path);
        }



        $path = public_path("admin/zus/".$employee->zus_dec);
        if (is_file($path)){
            unlink($path);
        }



        $path = public_path("admin/work_contact/".$employee->work_contact_file);
        if (is_file($path)){
            unlink($path);
        }



        $path = public_path("admin/health_doc/".$employee->health_doc);
        if (is_file($path)){
            unlink($path);
        }


        $path = public_path("admin/pasel_no/".$employee->pasel_no);
        if (is_file($path)){

            unlink($path);
        }



        $path = public_path("admin/exp_details/".$employee->exp_details);
        if (is_file($path)){
            unlink($path);
        }
		$employee->delete();

		return back()->with('delete', 'Employee delete success');
    }

    public function changeStatus($id){
    	$status = Employee::findOrFail($id)->Status;
    	if($status == 1){
    		Employee:: findOrFail($id)->update(['Status' => 0]);

      		return back()->with('Employeed',' Employee disable sucessfull');
    	}else{
    		Employee:: findOrFail($id)->update(['Status' => 1]);

      		return back()->with('Employeea',' Employee active sucessfull');
    	}
    }

}

