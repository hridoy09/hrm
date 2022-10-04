<?php

namespace App\Http\Controllers;

use App\Models\logo;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function index()
    {

        $logos=logo::latest()->first();
        return view('admin.logo.index',compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    {
        $this->validate($request, [
            'title'             => 'required',
            'small_logo'         => 'required',
            'lg_logo'           => 'required',
            'fav_icon'  => 'required',



        ],
        [
            'title.required'             => 'Field required',
            'small_logo.required'         => 'Field required',
            'lg_logo.required'           => 'Field required',
            'fav_icon.required'  => 'Field required',


        ]);



		if($request->hasFile('small_logo')) {
            $file            = $request->file('small_logo') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/logo' ;
            $file->move($destinationPath,$fileName);
    	}
        if($request->hasFile('lg_logo')) {
            $file             = $request->file('lg_logo');
            $fileName2        = $file->getClientOriginalName() ;
            $destinationPath2 = public_path().'/admin/logo' ;
            $file->move($destinationPath2,$fileName2);
    	}
        if($request->hasFile('fav_icon')) {
            $file             = $request->file('fav_icon') ;
            $fileName3        = $file->getClientOriginalName() ;
            $destinationPath3 = public_path().'/admin/logo';
            $file->move($destinationPath3,$fileName3);
    	}

        Logo::insert([

            'title'      => $request->title,
            'small_logo' => @$fileName,
            'lg_logo'    => @$fileName2,
            'fav_icon'   => @$fileName3,
            'created_at' => Carbon::now(),
           ]);


          return redirect()->back()->with('status', 'Logo Added.');;
        }
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
        $logo=Logo::findOrFail($id);
        $logos=Logo::latest()->first();

        return view('admin.logo.edit',compact('logo','logos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update( Request $request,$id){


        $logo = Logo::find($id);
        if($request->hasFile('lg_logo')) {
            $file            = $request->file('lg_logo') ;
            $fileName        = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/logo' ;
            $file->move($destinationPath,$fileName);
            $save_url                = $fileName;
            $logo->lg_logo = $save_url;
    	}

        else{

            $logo->lg_logo = $logo->lg_logo;
        }


        if($request->hasFile('small_logo')) {
            $file             = $request->file('small_logo') ;
            $fileName1        = $file->getClientOriginalName() ;
            $destinationPath1 = public_path().'/admin/logo' ;
            $file->move($destinationPath1,$fileName1);
            $save_url                       = $fileName1;
            $logo->small_logo = $save_url;
    	}
        else{

            $logo->small_logo = $logo->small_logo;
        }




        if($request->hasFile('fav_icon')) {
            $file             = $request->file('fav_icon');
            $fileName2        = $file->getClientOriginalName() ;
            $destinationPath2 = public_path().'/admin/residence' ;
            $file->move($destinationPath2,$fileName2);
            $save_url          = $fileName2;
            $logo->fav_icon = $save_url;
    	}
        else{
            $logo->fav_icon = $logo->fav_icon;
        }

        $logo->title            = $request->title;

        $logo->save();
            return redirect('admin/logo-index')->with('update','Update Success');
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
