<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CronController extends Controller
{
    public function cron()
    {

        $notificationCount  = [];
        $notificationCount['expiry_notification'] = 0;

        // pp expiry date
        $employees          = Employee::whereDate('pp_expiry_date', Carbon::now()->addMonths(3))->orWhereDate('pp_expiry_date', Carbon::now()->addMonths(2))->orWhereDate('pp_expiry_date', Carbon::now()->addMonths(1))->orWhereDate('pp_expiry_date', Carbon::now())->get();
        // dd($employees);
        $prevNotifications  = Notification::select()->addSelect(DB::raw('DATE_FORMAT(created_at,"%Y/%m/%d") as date'))->whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->get();
        $notifications      = [];
        foreach ($employees as $employee) {
            $exists     = $prevNotifications->where('employee_id', $employee->id)
                ->where('type', 'Passport Expired')
                ->where('date', Carbon::now()->format('Y/m/d'))->first();
            if (!$exists) {
                $notificationCount['expiry_notification']++;
                $now                    = Carbon::now();
                $notify['employee_id']  = $employee->id;
                $notify['shop_id']  = $employee->shop_id;

                $notify['type']         = 'Passport Expired';
                $duration               = $now->diffInMonths($employee->pp_expiry_date) + 1;
                $message                = $employee->name . '\'s passport will expired with in ' . $duration . ' months.';
                if ($employee->pp_expiry_date == $now->format('Y-m-d')) {
                    $message            = $employee->name . '\'s passport will expired from today';
                }
                $notify['data']         = $message;
                $notify['created_at']   = $now;
                $notifications[]        = $notify;
            }
        }
        Notification::insert($notifications);

        //Residence Expiry date

        $employees          = Employee::whereDate('rd_expiry_date', Carbon::now()->addMonths(3))->orWhereDate('rd_expiry_date', Carbon::now()->addMonths(2))->orWhereDate('rd_expiry_date', Carbon::now()->addMonths(1))->orWhereDate('rd_expiry_date', Carbon::now())->get();
        // dd($employees);
        $prevNotifications  = Notification::select()->addSelect(DB::raw('DATE_FORMAT(created_at,"%Y/%m/%d") as date'))->whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->get();
        $notifications      = [];
        foreach ($employees as $employee) {
            $exists     = $prevNotifications->where('employee_id', $employee->id)
                ->where('type', 'Residence Card Expired')
                ->where('date', Carbon::now()->format('Y/m/d'))->first();
            if (!$exists) {
                $notificationCount['expiry_notification']++;
                $now                    = Carbon::now();
                $notify['employee_id']  = $employee->id;
                $notify['shop_id']  = $employee->shop_id;
                $notify['type']         = 'Residence Card Expired';
                $duration               = $now->diffInMonths($employee->rd_expiry_date) + 1;
                $message                = $employee->name . '\'s residence card will expired with in ' . $duration . ' months.';
                if ($employee->rd_expiry_date == $now->format('Y-m-d')) {
                    $message            = $employee->name . '\'s residence card will expired from today';
                }
                $notify['data']         = $message;
                $notify['created_at']   = $now;
                $notifications[]        = $notify;
            }
        }
        Notification::insert($notifications);

        //work permit expiry

        $employees          = Employee::whereDate('work_expiry_date', Carbon::now()->addMonths(3))->orWhereDate('work_expiry_date', Carbon::now()->addMonths(2))->orWhereDate('work_expiry_date', Carbon::now()->addMonths(1))->orWhereDate('work_expiry_date', Carbon::now())->get();
        // dd($employees);
        $prevNotifications  = Notification::select()->addSelect(DB::raw('DATE_FORMAT(created_at,"%Y/%m/%d") as date'))->whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->get();
        $notifications      = [];
        foreach ($employees as $employee) {
            $exists     = $prevNotifications->where('employee_id', $employee->id)
                ->where('type', 'work Permit Expired')
                ->where('date', Carbon::now()->format('Y/m/d'))->first();
            if (!$exists) {
                $notificationCount['expiry_notification']++;
                $now                    = Carbon::now();
                $notify['employee_id']  = $employee->id;
                $notify['shop_id']  = $employee->shop_id;
                $notify['type']         = 'work Permit Expired';
                $duration               = $now->diffInMonths($employee->work_expiry_date) + 1;
                $message                = $employee->name . '\'s work permit will expired with in ' . $duration . ' months.';
                if ($employee->work_expiry_date == $now->format('Y-m-d')) {
                    $message            = $employee->name . '\'s work permit will expired from today';
                }
                $notify['data']         = $message;
                $notify['created_at']   = $now;
                $notifications[]        = $notify;
            }
        }
        Notification::insert($notifications);

        //work contract expiry

        $employees          = Employee::whereDate('work_contact_expiry_date', Carbon::now()->addMonths(3))->orWhereDate('work_contact_expiry_date', Carbon::now()->addMonths(2))->orWhereDate('work_contact_expiry_date', Carbon::now()->addMonths(1))->orWhereDate('work_contact_expiry_date', Carbon::now())->get();
        // dd($employees);
        $prevNotifications  = Notification::select()->addSelect(DB::raw('DATE_FORMAT(created_at,"%Y/%m/%d") as date'))->whereBetween('created_at', [Carbon::now()->startOfDay(), Carbon::now()->endOfDay()])->get();
        $notifications      = [];
        foreach ($employees as $employee) {
            $exists     = $prevNotifications->where('employee_id', $employee->id)
                ->where('type', 'Work Contract Expired')
                ->where('date', Carbon::now()->format('Y/m/d'))->first();
            if (!$exists) {
                $notificationCount['expiry_notification']++;
                $now                    = Carbon::now();
                $notify['employee_id']  = $employee->id;
                $notify['shop_id']  = $employee->shop_id;
                $notify['type']         = 'Work Contract Expired';
                $duration               = $now->diffInMonths($employee->work_contact_expiry_date) + 1;
                $message                = $employee->name . '\'s work contract will expired with in ' . $duration . ' months.';
                if ($employee->work_contact_expiry_date == $now->format('Y-m-d')) {
                    $message            = $employee->name . '\'s work contract will expired from today';
                }
                $notify['data']         = $message;
                $notify['created_at']   = $now;
                $notifications[]        = $notify;
            }
        }
        Notification::insert($notifications);






        return response()->json([
            'status'    => 'Executed',
            'data'      => $notificationCount
        ]);
    }
}
