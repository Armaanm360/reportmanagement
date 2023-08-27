<?php

namespace App\Models;

use App\Models\LeaveApplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{

    public function getCurrUser()
    {
        $user = Auth::user();
        if ($user->hasRole('super-admin')) {
            return false;
        } else {
            return $user->id;
        }
    }

    public function total_leave()
    {
        if ($this->getCurrUser()) {
            return LeaveApplication::where('leave_starting_from', [Carbon::now()->today()->toDateTime()->format('Y-m-d')])
                ->where('user_id', $this->getCurrUser())
                ->where('status', '=', 1)
                ->count();
        } else {
            return LeaveApplication::where('leave_starting_from', [Carbon::now()->today()->toDateTime()->format('Y-m-d')])
                ->where('status', '=', 1)
                ->count();
        }
    }

    public function total_employees()
    {
        return User::count();
    }


    public function total_send_reports()
    {
        return DB::table('user_forms')->where('sender_user_id', Auth::user()->id)->count();
    }


    public function total_pending_reports()
    {
        return DB::table('user_forms')->where('reciever_user_id', Auth::user()->id)->where('status', false)->count();
    }


    public function total_submitted_reports()
    {
        return DB::table('user_forms')->where('reciever_user_id', Auth::user()->id)->where('status', true)->count();
    }

    public function total_monthly_reports()
    {
        return $users = DB::table('user_forms')
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->count();
    }

    public function this_month_leaves()
    {
        if ($this->getCurrUser()) {
            return LeaveApplication::where('user_id', $this->getCurrUser())
                ->where('status', 1)
                ->whereMonth('created _at', Carbon::now()->month)
                ->count();
        } else {
            return LeaveApplication::whereMonth('created_at', Carbon::now()->month)
                ->where('status', 1)
                ->count();
        }
    }

    public function remaining_leaves()
    {
        if ($this->getCurrUser()) {
            $accepted = LeaveApplication::where('user_id', $this->getCurrUser())
                ->where('status', 1)
                ->whereYear('created_at', date('Y'))
                ->count();
            return 20 - $accepted;
        } else {
            $all_user = User::count();
            $accepted = LeaveApplication::whereMonth('created_at', Carbon::now()->month)
                ->where('status', 1)
                ->whereYear('created_at', date('Y'))
                ->count();
            return ($all_user * 20) - $accepted;
        }
    }

    public function this_month_emergency_leaves_request()
    {
        if ($this->getCurrUser()) {
            return LeaveApplication::where('user_id', $this->getCurrUser())
                ->whereMonth('created_at', Carbon::now()->month)
                ->whereType('Emergency')
                ->whereStatus(0)
                ->count();
        } else {
            return LeaveApplication::whereMonth('created_at', Carbon::now()->month)
                ->whereType('Emergency')
                ->whereStatus(0)
                ->count();
        }
    }

    public function this_month_casual_leaves_request()
    {
        if ($this->getCurrUser()) {
            return LeaveApplication::where('user_id', $this->getCurrUser())
                ->whereMonth('created_at', Carbon::now()->month)
                ->whereType('Casual')
                ->whereStatus(0)
                ->count();
        } else {
            return LeaveApplication::whereMonth('created_at', Carbon::now()->month)
                ->whereType('Casual')
                ->whereStatus(0)
                ->count();
        }
    }

    public function today_leaves()
    {
        //        print_r(Carbon::now()->tomorrow()->toDateTime()->format('Y-m-d'));die;
        if ($this->getCurrUser()) {
            return LeaveApplication::where('user_id', $this->getCurrUser())
                ->where('leave_starting_from', [Carbon::now()->today()->toDateTime()->format('Y-m-d')])
                ->where('status', 1)
                ->get();
        } else {
            return LeaveApplication::where('leave_starting_from', [Carbon::now()->today()->toDateTime()->format('Y-m-d')])
                ->where('status', 1)
                ->get();
        }
    }

    public function getDesignationById($id)
    {
        //        print_r(Carbon::now()->tomorrow()->toDateTime()->format('Y-m-d'));die;
        $user = Auth::user();
        return Designation::where('id', $id)
            ->get();
    }

    public function this_year_leaves_percentage()
    {
        if ($this->getCurrUser()) {
            $t_leaves = LeaveApplication::where('user_id', $this->getCurrUser())
                ->whereYear('created_at', date('Y'))
                ->whereStatus(1)
                ->count();
            $percent = $t_leaves / 17 * 100;
            return $percent;
        } else {
            $all_user = User::count();
            $t_leaves = LeaveApplication::whereYear('created_at', date('Y'))
                ->whereStatus(1)
                ->count();
            $percent = ($all_user * 20) / 100 * $t_leaves;
            return $percent;
        }
    }

    public function this_year_pending_leaves()
    {
        if ($this->getCurrUser()) {
            return LeaveApplication::where('user_id', $this->getCurrUser())
                ->whereYear('created_at', date('Y'))
                ->where('status', 2)
                ->count();
        } else {
            return LeaveApplication::whereYear('created_at', date('Y'))
                ->where('status', 2)
                ->count();
        }
    }

    public function every_month_casual_leaves_count()
    {
        if ($this->getCurrUser()) {
            $leavesPerMonth = LeaveApplication::select(DB::raw('count(id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%Y-%m') new_date"))
                ->where('user_id', $this->getCurrUser())
                ->where('type', 'Casual')
                ->where('status', 1)
                ->groupBy('new_date')->orderBy('new_date')->get();
        } else {
            $leavesPerMonth = LeaveApplication::select(DB::raw('count(id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%Y-%m') new_date"))
                ->where('type', 'Casual')
                ->where('status', 1)
                ->groupBy('new_date')->orderBy('new_date')->get();
        }

        return $leavesPerMonth;
    }

    public function every_month_emergency_leaves_count()
    {

        if ($this->getCurrUser()) {
            $leavesPerMonth = LeaveApplication::select(DB::raw('count(id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%Y-%m') new_date"))
                ->where('user_id', $this->getCurrUser())
                ->where('type', 'Emergency')
                ->where('status', 1)
                ->groupBy('new_date')->orderBy('new_date')->get();
        } else {
            $leavesPerMonth = LeaveApplication::select(DB::raw('count(id) as `data`'), DB::raw("DATE_FORMAT(created_at, '%Y-%m') new_date"))
                ->where('type', 'Emergency')
                ->where('status', 1)
                ->groupBy('new_date')->orderBy('new_date')->get();
        }


        return $leavesPerMonth;
    }

    public function get_leaves_calender_data()
    {
        //        print_r($this->getCurrUser());die;
        if ($this->getCurrUser()) {
            return LeaveApplication::where('user_id', $this->getCurrUser())
                ->where('status', '=', 1)
                ->get();
        } else {
            return LeaveApplication::where('status', '=', 1)
                ->get();
        }
    }

		public function getUserFormById($id){
			$var = DB::table('forms')->where('id',$id)->get();

			return $var[0]->form_name;
			
		}


		public function getUserName($id){
			$var = DB::table('users')->where('id',$id)->get();

			return $var[0]->name;
			
		}
}