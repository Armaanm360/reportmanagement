<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\LeaveApplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Mpdf\Tag\Pre;


class DashboardController extends Controller
{

    public function createFromFormat()
    {
        return [];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SwitchLanguage(Session::get('language'));
        //$data['param'] = DB::table('user_forms')->get()->take(5);


        if (Auth::user()->user_category == 1) {

            //   test

            $data['test'] = DB::table('forms_info_all')->select('receiver_id')->whereNotNull('receiver_id')->get()->unique('receiver_id');
            $data['test_user'] = DB::table('users')->select('id')->where('user_type', 'AUTHORIZE_USER')->get()->unique('id');
            $data['only_sent_forms'] = DB::table('auth_entry_table')->join('forms', 'forms.id', '=', 'auth_entry_table.ae_form_id')->join('saved_format', 'saved_format.saved_form_id', '=', 'auth_entry_table.ae_form_id')->get();
            $data['only_sent_forms_auth'] = DB::table('auth_to_auth_table')->join('forms', 'forms.id', '=', 'auth_to_auth_table.aa_form_id')->join('saved_format', 'saved_format.saved_form_id', '=', 'auth_to_auth_table.aa_form_id')->get();
            $data['report'] = DB::table('auth_entry_table')->join('forms', 'forms.id', '=', 'auth_entry_table.ae_form_id')->join('saved_format', 'saved_format.saved_form_id', '=', 'auth_entry_table.ae_form_id')->get();
            $data['report_auth'] = DB::table('auth_to_auth_table')->join('forms', 'forms.id', '=', 'auth_to_auth_table.aa_form_id')->join('saved_format', 'saved_format.saved_form_id', '=', 'auth_to_auth_table.aa_form_id')->get();
            $data['created_users'] = DB::table('users')->get();
            $data['default_forms'] = DB::table('new_default_form')->join('forms', 'forms.id', '=', 'new_default_form.default_form_id')->join('saved_format','saved_form_id','=', 'new_default_form.default_form_id')->get();


            //Count Dashboard
            $data['total_forms_count'] = DB::table('forms')->count();
            $data['total_sent_forms'] = DB::table('forms_info_all')->select('form_id')->where('report_status', 'RECIEVED')->get()->unique()->count();
            $data['total_completed_forms'] = DB::table('forms_info_all')->select('form_id')->where('final_status', 1)->get()->unique()->count();
            $data['total_created_forms'] = DB::table('forms_info_all')->select('form_id')->where('report_status', 'CREATED')->get()->unique()->count();
            $data['total_default_forms'] = DB::table('new_default_form')->select('default_id')->get()->unique()->count();
            $data['total_users_count'] = DB::table('users')->select('id')->get()->unique()->count();
            $data['new_users_today'] = DB::table('users')->select('id')->whereDate('created_at', Carbon::today())->get()->unique()->count();
            $data['total_new_forms_today'] = DB::table('forms_info_all')->select('form_id')->whereDate('created_at', Carbon::today())->where('report_status', 'CREATED')->get()->unique()->count();
            $data['rejected_reports'] = DB::table('forms_info_all')->select('form_id')->where('final_status', false)->get()->unique()->count();
            $data['backed_forms'] = DB::table('forms_info_all')->select('form_id')->where('send_process', 'back')->get()->unique()->count();
            $data['total_data_forms'] = DB::table('saved_format')->select('saved_form_type')->where('saved_form_type', 'data_form')->get()->count();
            $data['total_plain_forms'] = DB::table('saved_format')->select('saved_form_type')->where('saved_form_type', 'plain_form')->get()->count();
            $data['total_new_forms_week'] = DB::table('forms_info_all')->select('form_id')->whereBetween(
                'created_at',
                [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
            )->where('report_status', 'CREATED')->get()->unique()->count();
            $data['total_new_forms_month'] = DB::table('forms_info_all')->select('form_id')->whereMonth(
                'created_at',
                Carbon::now()->format('m')
            )->whereYear('created_at', Carbon::now()->format('Y'))->where('report_status', 'CREATED')->get()->unique()->count();
            
            //end
            
            //end
            // echo '<pre>';
            // print_r($data['total_plain_forms']);
            // die;

            $data['allinfoLog'] = DB::table('forms_info_all')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->get();
            $data['sent_forms'] = DB::table('forms_info_all')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->get();
            $data['user_wise'] = DB::table('forms_info_all')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->whereNotNull('deadline')->get();
            $data['created_forms'] = DB::table('forms')->join('saved_format', 'saved_format.saved_form_id','=','forms.id')->get();
            // $data['received_forms'] = DB::table('auth_entry_table')->join('forms', 'forms.id', '=', 'auth_entry_table.ae_form_id')->join('saved_format', 'saved_format.saved_form_id', '=', 'auth_entry_table.ae_form_id')->where('ae_receiver_id', Auth::user()->id)->get();
        } else {
            $data['allinfoLog'] = DB::table('forms_info_all')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->where('form_creator', Auth::user()->id)->orWhere('receiver_id', Auth::user()->id)->orWhere('sender_id', Auth::user()->id)->get();
            $data['user_wise'] = DB::table('forms_info_all')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->whereNotNull('deadline')->Where('receiver_id', Auth::user()->id)->orWhere('sender_id', Auth::user()->id)->get();
            $data['sent_forms'] = DB::table('forms_info_all')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->where('sender_id', Auth::user()->id)->get();
            if (Auth::user()->user_type == 'AUTHORIZE_USER') {
                // $data['created_forms'] = DB::table('forms_info_all')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->where('form_creator', Auth::user()->id)->where('report_status','CREATED')->get();
                $data['created_forms'] = DB::table('forms')->where('form_creator', Auth::user()->id)->join('saved_format', 'saved_format.saved_form_id','=','forms.id')->get();
                $data['only_sent_forms'] = DB::table('auth_entry_table')->where('ae_sender_id', Auth::user()->id)->join('forms', 'forms.id', '=', 'auth_entry_table.ae_form_id')->join('saved_format', 'saved_format.saved_form_id','=', 'auth_entry_table.ae_form_id')->get();
                $data['only_sent_forms_auth'] = DB::table('auth_to_auth_table')->where('aa_sender_id', Auth::user()->id)->join('forms', 'forms.id', '=', 'auth_to_auth_table.aa_form_id')->join('saved_format', 'saved_format.saved_form_id','=', 'auth_to_auth_table.aa_form_id')->get();
                $data['received_forms_auth'] = DB::table('auth_TO_auth_table')->join('forms', 'forms.id', '=', 'auth_TO_auth_table.aa_form_id')->join('saved_format', 'saved_format.saved_form_id', '=', 'auth_TO_auth_table.aa_form_id')->where('aa_receiver_id', Auth::user()->id)->get();
                $data['default_forms'] = DB::table('new_default_form')->join('forms', 'forms.id', '=', 'new_default_form.default_form_id')->join('saved_format','saved_form_id','=', 'new_default_form.default_form_id')->get();
                $data['report_auth'] = DB::table('auth_to_auth_table')->join('forms', 'forms.id', '=', 'auth_to_auth_table.aa_form_id')->join('saved_format', 'saved_format.saved_form_id', '=', 'auth_to_auth_table.aa_form_id')->where('aa_sender_id',Auth::user()->id)->orwhere('aa_receiver_id',Auth::user()->id)->get();

                $data['created_users'] = DB::table('users')->where('user_creator',Auth::user()->id)->get();

                //Count Dashboard
                $data['total_forms_count'] = DB::table('forms')->count();
                $data['total_sent_forms'] = DB::table('forms_info_all')->select('form_id')->where('report_status','RECIEVED')->get()->unique()->count();
                $data['total_completed_forms'] = DB::table('forms_info_all')->select('form_id')->where('final_status', 1)->get()->unique()->count();
                $data['total_created_forms'] = DB::table('forms_info_all')->select('form_id')->where('report_status', 'CREATED')->get()->unique()->count();
                $data['total_default_forms'] = DB::table('new_default_form')->select('default_id')->get()->unique()->count();
                $data['total_users_count'] = DB::table('users')->select('id')->get()->unique()->count();
                $data['new_users_today'] = DB::table('users')->select('id')->whereDate('created_at', Carbon::today())->get()->unique()->count();
                $data['total_new_forms_today'] = DB::table('forms_info_all')->select('form_id')->whereDate('created_at', Carbon::today())->where('report_status', 'CREATED')->get()->unique()->count();
                $data['rejected_reports'] = DB::table('forms_info_all')->select('form_id')->where('final_status', false)->get()->unique()->count();
                $data['backed_forms'] = DB::table('forms_info_all')->select('form_id')->where('send_process', 'back')->get()->unique()->count();
                $data['total_data_forms'] = DB::table('saved_format')->select('saved_form_type')->where('saved_form_type', 'data_form')->get()->count();
                $data['total_plain_forms'] = DB::table('saved_format')->select('saved_form_type')->where('saved_form_type', 'plain_form')->get()->count();
                $data['total_new_forms_week'] = DB::table('forms_info_all')->select('form_id')->whereBetween(
                    'created_at',
                    [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
                )->where('report_status', 'CREATED')->get()->unique()->count();
                $data['total_new_forms_month'] = DB::table('forms_info_all')->select('form_id')->whereMonth(
                    'created_at',
                    Carbon::now()->format('m')
                )->whereYear('created_at', Carbon::now()->format('Y'))->where('report_status', 'CREATED')->get()->unique()->count();
            
            //end
               
            } else{
                //Count Dashboard
                $data['total_forms_count'] = DB::table('forms')->count();
                $data['total_sent_forms'] = DB::table('forms_info_all')->select('form_id')->where('report_status', 'RECIEVED')->get()->unique()->count();
                $data['total_completed_forms'] = DB::table('forms_info_all')->select('form_id')->where('final_status', 1)->get()->unique()->count();
                $data['total_created_forms'] = DB::table('forms_info_all')->select('form_id')->where('report_status', 'CREATED')->get()->unique()->count();
                $data['total_default_forms'] = DB::table('new_default_form')->select('default_id')->get()->unique()->count();
                $data['total_users_count'] = DB::table('users')->select('id')->get()->unique()->count();
                $data['new_users_today'] = DB::table('users')->select('id')->whereDate('created_at', Carbon::today())->get()->unique()->count();
                $data['total_new_forms_today'] = DB::table('forms_info_all')->select('form_id')->whereDate('created_at', Carbon::today())->where('report_status', 'CREATED')->get()->unique()->count();
                $data['rejected_reports'] = DB::table('forms_info_all')->select('form_id')->where('final_status', false)->get()->unique()->count();
                $data['backed_forms'] = DB::table('forms_info_all')->select('form_id')->where('send_process', 'back')->get()->unique()->count();
                $data['total_data_forms'] = DB::table('saved_format')->select('saved_form_type')->where('saved_form_type', 'data_form')->get()->count();
                $data['total_plain_forms'] = DB::table('saved_format')->select('saved_form_type')->where('saved_form_type', 'plain_form')->get()->count();
                $data['total_new_forms_week'] = DB::table('forms_info_all')->select('form_id')->whereBetween(
                    'created_at',
                    [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
                )->where('report_status', 'CREATED')->get()->unique()->count();
                $data['total_new_forms_month'] = DB::table('forms_info_all')->select('form_id')->whereMonth(
                    'created_at',
                    Carbon::now()->format('m')
                )->whereYear('created_at', Carbon::now()->format('Y'))->where('report_status', 'CREATED')->get()->unique()->count();
            
            //end
                $data['received_forms'] = DB::table('auth_entry_table')->join('forms', 'forms.id', '=', 'auth_entry_table.ae_form_id')->join('saved_format','saved_format.saved_form_id','=','auth_entry_table.ae_form_id')->where('ae_receiver_id',Auth::user()->id)->get();
                $data['report'] = DB::table('auth_entry_table')->join('forms', 'forms.id', '=', 'auth_entry_table.ae_form_id')->join('saved_format','saved_format.saved_form_id','=','auth_entry_table.ae_form_id')->where('ae_receiver_id',Auth::user()->id)->get();
             //   $data['only_sent_forms'] = DB::table('auth_entry_table')->join('forms', 'forms.id', '=', 'auth_entry_table.ae_form_id')->get();
            }
        }

        // $data['allinfoLog'] = DB::table('forms_info_all')->join('forms','forms.id','=', 'forms_info_all.form_id')->get()->whereNotNull('deadline')->unique('form_id');
        // echo '<pre>';
        // print_r($data['allinfoLog']);
        // die;
        return view('layouts.admin.dashboard', $data);
    }

    public function notifications()
    {

        $notifications = DB::table('notification')
            ->where('for_user_id', '=', Auth::user()->id)
            ->orderBy('id', 'desc')
            ->get();

        $htmloutput = '';
        $countData = 0;
        $seenCountData = 0;
        $notificationStatus = '';
        foreach ($notifications as $row) {
            $countData++;
            if ($row->status == 0) {
                $notificationStatus = 'notification-unseen';
                $seenCountData++;
            } else {
                $notificationStatus = '';
            }
            //            print_r($row);
            $htmloutput .= '
                          <a href="' . $row->link . '/' . $row->id . '" class="' . $notificationStatus . '">
                                            <div class="notif-icon notif-primary"> <i class="la flaticon-envelope-3"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    ' . $row->message . '
                                                </span>  
                                                 <span class="time">' . $row->show_date . '</span> 
                                            </div>
                                        </a>
                      ';
            // }

        }
        $data = [
            'response' => $htmloutput,
            'total_data' => $countData,
            'total_seen_data' => $seenCountData
        ];
        return $data;
    }

    public function set_theme_mode(Request $request)
    {
        Session::put('theme_mode', $request->theme_mode);
        return Session::get('theme_mode');
    }

    public function get_dashboard_list(Request $request)
    {
        $draw = intval($request->draw);
        $start = intval($request->start);
        $limit = intval($request->length);
        $sortBy = null;
        $sortDirection = '';
        //        print_r($request->order);die;
        if (isset($request->order[0]['column'])) {
            $sortBy = $request->columns[$request->order[0]['column']]['data'];
            $sortDirection = $request->order[0]['dir'];
        }
        if (getCurrUser()) {
            $total_data = DB::table('leave_application')
                ->where('leave_application.user_id', Auth::user()->id)
                ->whereBetween('leave_starting_from', [Carbon::now()->tomorrow()->toDateTime()->format('Y-m-d'), Carbon::now()->endOfMonth()->toDateTime()->format('Y-m-d')])
                ->when($sortBy, function ($query, $sortBy) use ($sortDirection) {
                    return $query->orderBy($sortBy, $sortDirection);
                }, function ($query) {
                    return $query->orderBy('id', 'desc');
                })
                ->count();

            $all_leave_application = DB::table('leave_application')
                ->where('leave_application.user_id', Auth::user()->id)
                ->whereBetween('leave_starting_from', [Carbon::now()->tomorrow()->toDateTime()->format('Y-m-d'), Carbon::now()->endOfMonth()->toDateTime()->format('Y-m-d')])
                ->leftJoin("users", "leave_application.user_id", "=", "users.id")
                ->leftJoin("users_roles", "users.id", "=", "users_roles.user_id")
                ->leftJoin("roles", "roles.id", "=", "users_roles.role_id")
                ->leftJoin("designations", "designations.id", "=", "users.designation")
                ->when($sortBy, function ($query, $sortBy) use ($sortDirection) {
                    return $query->orderBy($sortBy, $sortDirection);
                }, function ($query) {
                    return $query->orderBy('leave_application.id', 'desc');
                })
                ->select("users.user_id AS user_unique_id", "users.name", "users.email", "users.designation", "users.phone", "users.address", "roles.id AS role_id", "roles.name AS role_name", "designations.name AS designation_name", "leave_application.*")
                ->offset($start)
                ->limit($limit)
                ->get();
        } else {
            $total_data = DB::table('leave_application')
                ->whereBetween('leave_starting_from', [Carbon::now()->tomorrow()->toDateTime()->format('Y-m-d'), Carbon::now()->endOfMonth()->toDateTime()->format('Y-m-d')])
                ->when($sortBy, function ($query, $sortBy) use ($sortDirection) {
                    return $query->orderBy($sortBy, $sortDirection);
                }, function ($query) {
                    return $query->orderBy('id', 'desc');
                })
                ->count();

            $all_leave_application = DB::table('leave_application')
                ->whereBetween('leave_starting_from', [Carbon::now()->tomorrow()->toDateTime()->format('Y-m-d'), Carbon::now()->endOfMonth()->toDateTime()->format('Y-m-d')])
                ->leftJoin("users", "leave_application.user_id", "=", "users.id")
                ->leftJoin("users_roles", "users.id", "=", "users_roles.user_id")
                ->leftJoin("roles", "roles.id", "=", "users_roles.role_id")
                ->leftJoin("designations", "designations.id", "=", "users.designation")
                ->when($sortBy, function ($query, $sortBy) use ($sortDirection) {
                    return $query->orderBy($sortBy, $sortDirection);
                }, function ($query) {
                    return $query->orderBy('leave_application.id', 'desc');
                })
                ->select("users.user_id AS user_unique_id", "users.name", "users.email", "users.designation", "users.phone", "users.address", "roles.id AS role_id", "roles.name AS role_name", "designations.name AS designation_name", "leave_application.*")
                ->offset($start)
                ->limit($limit)
                ->get();
        }

        //        echo '<pre>';print_r($all_leave_application);die;
        $data = array();
        $i = 1;

        $user = Auth::user();
        //        $user->can('add-vendor');

        foreach ($all_leave_application as $row) {
            $action = '';
            //            $message = 'Are You Sure want to delete';
            //            $action .= "<a class='btn btn-primary btn-sm mr-2' href='leave-applications/" . $row->id . "'>View</a>";
            //            if ($user->id == $row->user_id) {
            //                $action .= "<button class='btn btn-success btn-sm float-left btn-edit' data-id='" . $row->id . "' >Edit</button>";
            //                $action .= "<button class='btn btn-sm btn-danger btn-delete' data-id='" . $row->id . "'>Delete</button>";
            //            }
            //

            $user_array['sl'] = $i;
            $user_array['user_id'] = $row->user_unique_id;
            $user_array['name'] = $row->name;
            $user_array['email'] = $row->email;
            $user_array['phone'] = $row->email;
            $user_array['address'] = $row->email;
            $user_array['designation'] = $row->designation_name;
            $user_array['leave_starting_from'] = $row->leave_starting_from;
            $user_array['leave_ending_on'] = $row->leave_ending_on;
            //            $user_array['action'] = $action;

            $data[] = $user_array;
            $i++;
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $total_data,
            "recordsFiltered" => $total_data,
            "data" => $data
        );
        echo json_encode($output);
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
    public function search(Request $request)
    {
        if ($request->section == 'users') {
            $data['keywords'] = $request->keywords;
            $data['search_result'] = DB::table('users')
                ->leftJoin("designations", "designations.id", "=", "users.designation")
                ->leftJoin("users_roles", "users.id", "=", "users_roles.user_id")
                ->leftJoin("roles", "roles.id", "=", "users_roles.role_id")
                ->where('users.name', 'like', '%' . $request->keywords . '%')
                ->orwhere('users.email', 'like', '%' . $request->keywords . '%')
                ->orwhere('users.phone', 'like', '%' . $request->keywords . '%')
                ->orwhere('users.user_id', 'like', '%' . $request->keywords . '%')
                ->orwhere('users.description', 'like', '%' . $request->keywords . '%')
                ->select("users.user_id AS user_unique_id", "users.id AS id", "users.name", "users.email", "users.designation", "users.phone", "users.address", "roles.id AS role_id", "roles.name AS role_name", "designations.name AS designation_name")
                ->get();
            return view('admin.pages.search.user.search_result', $data);
        }
    }
}