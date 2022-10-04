<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function notifyview($id){
        $notification=Notification::findOrFail($id);
        if(!$notification->read_at){
            $notification->read_at=now();
            $notification->save();
        }


        return back()->with('seen','Notification seen successfull');
    }

    public function clearnotify(){

        Notification::where('read_at', '=', NULL)->update(['read_at' =>now()]);

        return back()->with('seen','Notification seen successfull');
    }

    public function clearshopnotify(){

        Notification::where('shop_id', '=', Auth::id())->update(['read_by_shop' =>now()]);

        return back()->with('seen','Notification seen successfull');
    }





    public function notifyviewshop($id){
        $notification=Notification::findOrFail($id);
        if(!$notification->read_by_shop){
            $notification->read_by_shop=now();
            $notification->save();
        }


        return back()->with('seen','Notification seen successfull');
    }

    public function allnotify(){
        $notifications=Notification::all();
        return view('admin.notification',compact('notifications'));

    }

    public function allshopnotify(){
        $notifications=Notification::where('shop_id',Auth::id())->get();
        return view('user_brance.notification',compact('notifications'));

    }
}
