<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\DefaultForm;
use App\Models\UserForm;
use App\Models\Group;
use App\Events\Notification;
use App\Models\Role;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\URL;

class SendFormController extends Controller
{

    public function send_form()
    {

        // $data['all_group'] = Group::where('status', 1)
        //     ->get();
        // $data['forms'] = DefaultForm::where('status',true)->where('form_id', 5)
        //     ->get();

        $data['all_user'] = User::where('status', 1)
            ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        $data['all_group'] = Group::where('status', 1)
            ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        // $data['forms'] = DB::table('user_forms')
        //     ->where('status', '=', 0)
        //     ->whereRecieverInstitutionId(Auth::user()->institution_id)
        //     ->groupBy('form_id')
        //     ->get();
        $data['forms'] = DefaultForm::where('status', true)->where('form_id', 5)
            ->get();
        $data['sub_forms'] = DB::table('user_forms')
            ->where('status', '=', 0)
            ->whereRecieverInstitutionId(Auth::user()->institution_id)
            ->get();

        return view('admin.pages.send_form.send_form', $data);
    }
    public function send_form_individual($formId)
    {

        $data['all_user'] = User::where('status', 1)
        ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        $data['all_group'] = Group::where('status', 1)
        ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        // $data['forms'] = DB::table('user_forms')
        //     ->where('status', '=', 0)
        //     ->whereRecieverInstitutionId(Auth::user()->institution_id)
        //     ->groupBy('form_id')
        //     ->get();
        $data['forms'] = DefaultForm::where('status', true)->where('form_id', 5)
        ->get();
        $data['sub_forms'] = DB::table('forms')
        ->where('id', $formId)
            ->get();


        return view('admin.pages.send_form.send_form_individual', $data);
    }

    public function send_form_back($formId)
    {

        // $data['all_group'] = Group::where('status', 1)
        //     ->get();
        // $data['forms'] = DefaultForm::where('status',true)->where('form_id', 5)
        //     ->get();

        $data['all_user'] = User::where('status', 1)
            ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        $data['all_group'] = Group::where('status', 1)
            ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        // $data['forms'] = DB::table('user_forms')
        //     ->where('status', '=', 0)
        //     ->whereRecieverInstitutionId(Auth::user()->institution_id)
        //     ->groupBy('form_id')
        //     ->get();
        $data['forms'] = DefaultForm::where('status', true)->where('form_id', 5)
            ->get();
        $data['sub_forms'] = DB::table('forms')
            ->where('id', $formId)
            ->get();

        return view('admin.pages.send_form.send_form_back', $data);
    }

    public function send_form_user_wise($formId)
    {



        $data['all_user'] = User::where('status', 1)
            ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        $data['all_group'] = Group::where('status', 1)
            ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        // $data['forms'] = DB::table('user_forms')
        //     ->where('status', '=', 0)
        //     ->whereRecieverInstitutionId(Auth::user()->institution_id)
        //     ->groupBy('form_id')
        //     ->get();
        $data['forms'] = DefaultForm::where('status', true)->where('form_id', 5)
            ->get();
        $data['sub_forms'] = DB::table('forms')
            ->where('id', $formId)
            ->get();


        $data['form_tables'] = DB::table('form_tables')->where('form_id', $formId)->get();
        $data['form_creator'] = $data['form_tables'][0]->created_by;



        //  $aaa =  DB::table('forms_info_all')->where('form_id', $data['sub_forms'][0]->id)->where('send_process', 'individual')->get();
//       $form_id = $data['sub_forms'][0]->id;
   

            $data['forms_info'] = DB::table('individual_table')->where('indiv_form_id', $data['sub_forms'][0]->id)->where('indiv_receiver', Auth::user()->id)->get();
 

        return view('admin.pages.send_form.send_form_user_wise', $data);
    }


    /* process send */


    /* send form entry user */
    public function send_form_entry_user($formId)
    {
        // if (Auth::user()->hasRole('super-admin')) {
        //     $data['all_group'] = Group::where('status', 1)
        //     ->get();
        //     $data['forms'] = DefaultForm::where('status', true)->where('form_id', 5)
        //     ->get();
        // } else if (Auth::user()->hasRole('admin')) {
        // $data['all_user'] = User::where('status', 1)
        // ->whereInstitutionId(Auth::user()->institution_id)
        //     ->get();
        // $data['all_group'] = Group::where('status', 1)
        // ->whereInstitutionId(Auth::user()->institution_id)
        //     ->get();
        // DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        // $data['forms'] = DefaultForm::where('status', true)->where('form_id', 5)
        // ->get();
        // $data['sub_forms'] = DB::table('user_forms')
        // ->where('status', '=', 0)
        //     ->whereRecieverInstitutionId(Auth::user()->institution_id)
        //     ->get();
        //}

        // $data['all_group'] = Group::where('status', 1)
        //     ->get();
        // $data['forms'] = DefaultForm::where('status',true)->where('form_id', 5)
        //     ->get();

        $data['all_user'] = User::where('status', 1)
            ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        $data['all_group'] = Group::where('status', 1)
            ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        // $data['forms'] = DB::table('user_forms')
        //     ->where('status', '=', 0)
        //     ->whereRecieverInstitutionId(Auth::user()->institution_id)
        //     ->groupBy('form_id')
        //     ->get();
        $data['forms'] = DefaultForm::where('status', true)->where('form_id', 5)
            ->get();
        $data['sub_forms'] = DB::table('user_forms')
            ->where('status', '=', 0)
            // ->whereRecieverInstitutionId(Auth::user()->institution_id)
            ->get();
        return view('admin.pages.send_form.send_form_entry_user', $data);
    }
    /* send form entry user wise */
    public function send_form_entry_user_wise($formId)
    {
        $data['all_user'] = User::where('status', 1)
            ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        $data['all_group'] = Group::where('status', 1)
            ->whereInstitutionId(Auth::user()->institution_id)
            ->get();
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        // $data['forms'] = DB::table('user_forms')
        //     ->where('status', '=', 0)
        //     ->whereRecieverInstitutionId(Auth::user()->institution_id)
        //     ->groupBy('form_id')
        //     ->get();
        $data['forms'] = DefaultForm::where('status', true)->where('form_id', 5)
            ->get();
        $data['sub_forms'] = DB::table('forms')
            ->where('id', $formId)
            ->get();
        return view('admin.pages.send_form.send_form_entry_user_wise', $data);
    }




    /* end of this process */






    public function list_of_send_form()
    {
        //  echo '<pre>';
        // print_r(Auth::user()); die;
        //	$data['forms'] = UserForm::where('status', 0)->latest()->get();
        // $data['forms'] = DB::table('forms')->where('status', 1)->latest()->get();
        // $data['forms'] = DB::table('user_forms')->join('forms', 'user_forms.sub_form_id','=', 'forms.id')->select('forms.id')->distinct(['sender_user_id,reciever_user_id'])->where('sender_user_id',Auth::user()->id)->orwhere('reciever_user_id',Auth::user()->id)->get();
        $data['forms'] = DB::table('user_forms')->join('forms', 'user_forms.sub_form_id', '=', 'forms.id')->select('forms.id')->distinct(['sender_user_id,reciever_user_id'])->where('sender_user_id', Auth::user()->id)->orwhere('reciever_user_id', Auth::user()->id)->get();
        // echo '<pre>';print_r($data);die;

        return view('admin.pages.send_form.list_of_send_form', $data);
    }

    public function list_of_recieved_reports()
    {
        // $data['forms'] = DB::table('user_forms')->join('forms', 'user_forms.sub_form_id', '=', 'forms.id')->join('forms_info_all', 'forms_info_all.form_id', '=', 'user_forms.sub_form_id')->distinct(['sender_user_id,reciever_user_id'])->where('report_status', 'RECIEVED')->where('sender_user_id', Auth::user()->id)->orwhere('reciever_user_id', Auth::user()->id)->get();

        $data['forms'] = DB::table('forms_info_all')->where('report_status', 'RECIEVED')->where('sender_id', Auth::user()->id)->orwhere('receiver_id', Auth::user()->id)->whereNotNull('deadline')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->get()->unique('form_id');

        // echo '<pre>';
        // print_r($data);
        // die;

        return view('admin.pages.send_form.list_of_recieved_reports', $data);
    }

    public function list_of_already_send_form()
    {
        $data['forms'] = DB::table('user_forms')->join('forms', 'user_forms.sub_form_id', '=', 'forms.id')->distinct(['sender_user_id'])->where('sender_user_id', Auth::user()->id)->get();

        //    echo '<pre>';
        // print_r($data['forms']); die;


        return view('admin.pages.send_form.list_of_already_send_form', $data);
    }

    public function save_send_form(Request $request)
    {
        $tasks_controller = new UserForm();


        $get_form_id = $request->sub_form_id[0];
        $form_info = DB::table('forms')->where('id', $request->sub_form_id[0])->get();
        $form_creator = $form_info[0]->form_creator;
        $form_user_category = DB::table('users')->where('id', $form_creator)->get();
        $creator_category = $form_user_category[0]->user_category;

        if (Auth::user()->user_type == 'AUTHORIZE_USER') {

            /* table_info */
            $sub_form_id = DB::table('form_tables')->where('form_id', $request->sub_form_id)->get();
            $table_name  = $sub_form_id[0]->table_name;
            $table_get = DB::table($table_name)->orderBy('id', 'asc')->where('filled_by', '=', 0)->where('authorize_user', '=', 0)->get();
            $obj = $table_get[0];
            $table_arr = json_decode(json_encode($obj), true);
            $first_array = array_slice($table_arr, 2);
            $user_insert =  $request->user_id;
            $form_creator_insert = $obj->created_by;
            $raw_array = array_slice($first_array, 2);
            $send_process =  $request->process;
            // if ($send_process == 'down') {
            //     $insert_array = ["authorize_user" => $user_insert, "created_by" => $form_creator_insert, "filled_by" => 0, "status" => 0];
            // } elseif ($send_process == 'up') {
            //     $insert_array = ["authorize_user" => $user_insert, "created_by" => $form_creator_insert, "filled_by" => 0, "status" => 0];
            // }
            // $newget = $tasks_controller->insertValueAtPosition($raw_array, $insert_array, 0);
            // $table_col = array_keys($newget);
            // $table_val = array_values($newget);
            // $keys = implode("`,`", $table_col);
            // $values = implode("','", $table_val);



           if ($request->process == 'down') {
                foreach ($table_get as $row) {
                    $insert_array = ["authorize_user" => $user_insert, "created_by" => $form_creator_insert, "filled_by" => 0, "status" => 0];
                    $data = array_slice(json_decode(json_encode($row), true), 1);
                    unset($data["authorize_user"]);
                    unset($data["created_by"]);
                    unset($data["filled_by"]);
                    unset($data["status"]);
                    $newget = $tasks_controller->insertValueAtPosition($data, $insert_array, 0);

                    // echo'asga54645';
                    // print_r($newget);
                    // $data = array_slice(json_decode(json_encode($row), true), 1);
                    $tbl_name = $data['table_name'];
                    // echo $first_array;
                    DB::table($tbl_name)->insert($newget);
                    // $raw_array = array_slice(json_decode(json_encode($row), true), 2);
                    // $values = implode("','", $raw_array);
                    // $sql = "INSERT INTO `$table_name` (`$keys`) VALUES ('$values')";
                    // print_r($sql);
                    // DB::statement($sql);

                }
        
           }
     



            /* saved row or column */

            // $saved_format_table = DB::table('saved_format')->where('saved_table_name', $table_name)->get();
            // $rows = $saved_format_table[0]->saved_format;
            // $table_get_latest = DB::table($table_name)->orderBy('id', 'desc')->get();
            // $latest_id = $table_get_latest[0]->id;




            // for ($i = $latest_id; $i < $latest_id + $rows; $i++) {
            //     $sql = "INSERT INTO `$table_name` (`$keys`) VALUES ('$values')";
            //     DB::statement($sql);
            // }
        }



        $request->validate([
            'form_id' => 'required',
            'sub_form_id' => 'required'
        ]);

        if ($request->method == 'user') {
            $condition_method = 'reciever_user_id';
            $condition_value = $request->user_id;
        } else {
            $condition_method = 'group_id';
            $condition_value = $request->group_id;
        }
        $chekhifexist = DB::table('user_forms')
            ->where($condition_method, '=', $condition_value)
            ->where('sub_form_id', '=', $request->sub_form_id[0])
            ->where('sub_form_id_unique_id', '=', $request->form_id)
            ->where('status', '=', 1)
            ->get();
        if (count($chekhifexist) != 0) {
            echo 'This form alrady has been sent to this user!';
            return false;
        } else {
            foreach ($request->sub_form_id as $sub_form) {
                $user_form = new UserForm;
                $user_form['sender_user_id'] = Auth::user()->id;
                $user_form['form_id'] = $request->form_id;
                $user_form['sender_institution_id'] = Auth::user()->institution_id;
                $user_form['duration'] = $request->duration;
                $user_form['method'] = $request->method;
                if ($request->method == 'group') {
                    $user_form['group_id'] = $request->group_id;


                    $group_user = \App\Models\GroupUser::where('group_id', $request->group_id)->get();
                    foreach ($group_user as $rowgroup) {
                        $sendNotification = Auth::user()->name . " send you a report request in " . Group::find($rowgroup->group_id)['name'];
                        $link = 'submit-form/' . $request->form_id;
                        event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $rowgroup->user_id, $sendNotification, $link));
                    }
                }
                if ($request->method == 'user') {
                    $user_form['reciever_user_id'] = $request->user_id;
                    $user_form['reciever_institution_id'] = User::find($request->user_id)['institution_id'];
                }
                $user_form['sub_form_id'] = $sub_form;
                $user_form['sub_form_id_unique_id'] = $request->sub_form_unique_id;
                $user_form['status'] = 1;
                $user_form->save();
            }

            // if ($request->method == 'user') {
            //     $to_user_data = User::find($request->user_id);
            //     $sendNotification = Auth::user()->name . " send you a report request";
            //     $link = 'http://localhost/report-management/submit-form/' . $sub_form;
            //     event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
            // }
            // if ($request->method == 'user') {
            //     $to_user_data = User::find($request->user_id);
            //     $sendNotification = Auth::user()->name . " send you a report request";
            //     // $link = URL::to('/').'/created-submit-form/' . $sub_form;
            //     $link = URL::to('/') . '/form/' . $sub_form;
            //     event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
            // }
            if ($request->method == 'user') {
                $to_user_data = User::find($request->user_id);
                $sendNotification = Auth::user()->name . " send you a report request";
                // $link = URL::to('/').'/created-submit-form/' . $sub_form;
                $link = URL::to('/') . '/created-submit-form/' . $sub_form;
                event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
            }
        }


        $check_status = DB::table('auth_to_auth_table')->where('aa_form_id', $get_form_id)->where('aa_sender_id', Auth::user()->id)->where('aa_receiver_id', $request->user_id)->count();

        if ($check_status == 0) {
            DB::table('auth_to_auth_table')->insert([
                'aa_form_id'     => $get_form_id,
                'aa_sender_id'   => Auth::user()->id,
                'aa_receiver_id' => $request->user_id,
                'aa_process'     => $request->process,
                'aa_deadline'    => $request->duration,
                'aa_status'      => false,
                'aa_comment'     => '',

            ]);
        }
        // } else {

        //     DB::table('auth_to_auth_table')->where('aa_form_id', $get_form_id)->where('aa_sender_id', Auth::user()->id)->where('aa_receiver_id', $request->user_id)->update([
        //         'aa_status'      => true,
        //         'aa_comment'     => '',

        //     ]);
        // }

        DB::table('forms_info_all')->insert([
            'form_created_by'  => $form_creator,
            'receiver_id' => $request->user_id,
            'receiver_category' => $tasks_controller->getUserCategory($request->user_id),
            'sender_category'   => Auth::user()->user_category,
            'sender_id'   => Auth::user()->id,
            'creator_category' => $creator_category,
            'form_id'          => $get_form_id,
            'report_status'    => 'RECIEVED',
            'final_status'     => false,
            'send_process'     => $request->process,
            'deadline'         => $request->duration
        ]);
    }
    public function save_send_form_individual(Request $request)
    {
        $tasks_controller = new UserForm();


        $get_form_id = $request->sub_form_id[0];
        $form_info = DB::table('forms')->where('id', $request->sub_form_id[0])->get();
        $form_creator = $form_info[0]->form_creator;
        $form_user_category = DB::table('users')->where('id', $form_creator)->get();
        $creator_category = $form_user_category[0]->user_category;

        if (Auth::user()->user_type == 'AUTHORIZE_USER') {

            /* table_info */
            $sub_form_id = DB::table('form_tables')->where('form_id', $request->sub_form_id)->get();
            $table_name  = $sub_form_id[0]->table_name;
            $table_get = DB::table($table_name)->orderBy('id', 'asc')->where('filled_by', '=', 0)->where('authorize_user', '=', 0)->get();
            $obj = $table_get[0];
            $table_arr = json_decode(json_encode($obj), true);
            $first_array = array_slice($table_arr, 2);
            $user_insert =  $request->user_id;
            $form_creator_insert = $obj->created_by;
            $raw_array = array_slice($first_array, 2);
            $send_process =  $request->process;

           if ($request->process == 'individual') {
                foreach ($table_get as $row) {
                    $insert_array = ["authorize_user" => $user_insert, "created_by" => $form_creator_insert, "filled_by" => 0, "status" => 0];
                    $data = array_slice(json_decode(json_encode($row), true), 1);
                    unset($data["authorize_user"]);
                    unset($data["created_by"]);
                    unset($data["filled_by"]);
                    unset($data["status"]);
                    $newget = $tasks_controller->insertValueAtPosition($data, $insert_array, 0);
                    $tbl_name = $data['table_name'];
                    DB::table($tbl_name)->insert($newget);

                }
        
           }



     

        }



        $request->validate([
            'form_id' => 'required',
            'sub_form_id' => 'required'
        ]);

        if ($request->method == 'user') {
            $condition_method = 'reciever_user_id';
            $condition_value = $request->user_id;
        } else {
            $condition_method = 'group_id';
            $condition_value = $request->group_id;
        }
        $chekhifexist = DB::table('user_forms')
            ->where($condition_method, '=', $condition_value)
            ->where('sub_form_id', '=', $request->sub_form_id[0])
            ->where('sub_form_id_unique_id', '=', $request->form_id)
            ->where('status', '=', 1)
            ->get();
        if (count($chekhifexist) != 0) {
            echo 'This form alrady has been sent to this user!';
            return false;
        } else {
            foreach ($request->sub_form_id as $sub_form) {
                $user_form = new UserForm;
                $user_form['sender_user_id'] = Auth::user()->id;
                $user_form['form_id'] = $request->form_id;
                $user_form['sender_institution_id'] = Auth::user()->institution_id;
                $user_form['duration'] = $request->duration;
                $user_form['method'] = $request->method;
                if ($request->method == 'group') {
                    $user_form['group_id'] = $request->group_id;


                    $group_user = \App\Models\GroupUser::where('group_id', $request->group_id)->get();
                    foreach ($group_user as $rowgroup) {
                        $sendNotification = Auth::user()->name . " send you a report request in " . Group::find($rowgroup->group_id)['name'];
                        $link = 'submit-form/' . $request->form_id;
                        event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $rowgroup->user_id, $sendNotification, $link));
                    }
                }
                if ($request->method == 'user') {
                    $user_form['reciever_user_id'] = $request->user_id;
                    $user_form['reciever_institution_id'] = User::find($request->user_id)['institution_id'];
                }
                $user_form['sub_form_id'] = $sub_form;
                $user_form['sub_form_id_unique_id'] = $request->sub_form_unique_id;
                $user_form['status'] = 1;
                $user_form->save();
            }

              
            /* indiv back table */

         $indiv_count = DB::table('individual_table')->where('indiv_form_id',
                $request->form_id
            )->where('indiv_creator', $form_creator_insert)->where('indiv_receiver', $request->user_id)->count();

            if ($indiv_count == 0) {
                DB::table('individual_table')->insert([
                    'indiv_form_id' => $request->sub_form_id[0],
                    'indiv_creator' => $form_creator_insert,
                    'indiv_receiver' => $request->user_id

                ]);
                
            }

            
            
        

            // if ($request->method == 'user') {
            //     $to_user_data = User::find($request->user_id);
            //     $sendNotification = Auth::user()->name . " send you a report request";
            //     $link = 'http://localhost/report-management/submit-form/' . $sub_form;
            //     event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
            // }
            // if ($request->method == 'user') {
            //     $to_user_data = User::find($request->user_id);
            //     $sendNotification = Auth::user()->name . " send you a report request";
            //     // $link = URL::to('/').'/created-submit-form/' . $sub_form;
            //     $link = URL::to('/') . '/form/' . $sub_form;
            //     event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
            // }
            if ($request->method == 'user') {
                $to_user_data = User::find($request->user_id);
                $sendNotification = Auth::user()->name . " send you a report request";
                // $link = URL::to('/').'/created-submit-form/' . $sub_form;
                $link = URL::to('/') . '/created-submit-form/' . $sub_form;
                event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
            }
        }


        $check_status = DB::table('auth_to_auth_table')->where('aa_form_id', $get_form_id)->where('aa_sender_id', Auth::user()->id)->where('aa_receiver_id', $request->user_id)->count();

        if ($check_status == 0) {
            DB::table('auth_to_auth_table')->insert([
                'aa_form_id'     => $get_form_id,
                'aa_sender_id'   => Auth::user()->id,
                'aa_receiver_id' => $request->user_id,
                'aa_process'     => $request->process,
                'aa_deadline'    => $request->duration,
                'aa_status'      => false,
                'aa_comment'     => '',
            ]);
        }
        // } else {

        //     DB::table('auth_to_auth_table')->where('aa_form_id', $get_form_id)->where('aa_sender_id', Auth::user()->id)->where('aa_receiver_id', $request->user_id)->update([
        //         'aa_status'      => true,
        //         'aa_comment'     => '',

        //     ]);
        // }
        $check_row = DB::table('forms_info_all')->where('sender_id', Auth::user()->id)->where('receiver_id', $request->user_id)->count();


        if ($check_row == 0) {
             DB::table('forms_info_all')->insert([
            'form_created_by'  => $form_creator,
            'receiver_id' => $request->user_id,
            'receiver_category' => $tasks_controller->getUserCategory($request->user_id),
            'sender_category'   => Auth::user()->user_category,
            'sender_id'   => Auth::user()->id,
            'creator_category' => $creator_category,
            'form_id'          => $get_form_id,
            'report_status'    => 'RECIEVED',
            'final_status'     => false,
            'send_process'     => $request->process,
            'deadline'         => $request->duration
        ]);
        }

       

        $to_user_data = User::find($request->user_id);
        $sendNotification = Auth::user()->name . " send you a report request";
        // $link = URL::to('/').'/created-submit-form/' . $sub_form;
        $link = URL::to('/') . '/created-submit-form/' . $sub_form;
        event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
    }




    public function save_send_form_entry(Request $request)
    {
        $tasks_controller = new UserForm();

        // echo '<pre>';
        // echo Auth::user()->id;
        // echo $request->user_id; die;
        // print_r($request->all());
        // if ($request->method == 'user') {
        //     $condition_method = 'reciever_user_id';
        //     $condition_value = $request->user_id;
        // } else {
        //     $condition_method = 'group_id';
        //     $condition_value = $request->group_id;
        // }
        // $chekhifexist = DB::table('user_forms')
        //     ->where($condition_method, '=', $request->user_id)
        //     ->where('sub_form_id', '=', $request->sub_form_id[0])
        //     ->where('sub_form_id_unique_id', '=', $request->form_id)
        //     ->where('status', '=', 1)
        //     ->get();
        if (Auth::user()->user_type == 'AUTHORIZE_USER') {

            /* table_info */
            $sub_form_id = DB::table('form_tables')->where('form_id', $request->sub_form_id)->get();
            $table_name  = $sub_form_id[0]->table_name;
            $table_get = DB::table($table_name)->orderBy('id', 'asc')->where('filled_by', '=', 0)->get();

            $total = count($table_get);
            $obj = $table_get[0];
      
            // for ($i = $latest_id; $i < $latest_id + $rows; $i++) {
            //     $sql = "INSERT INTO `$table_name` (`$keys`) VALUES ('$values')";
            //     print_r($sql);
            //     // DB::statement($sql);
            // }

          
            // $table_arr = json_decode(json_encode($obj), true);
            // $first_array = array_slice($table_arr, 2);
            
              $user_insert =  $request->user_id;
              $form_creator_insert = $obj->created_by;
            // $raw_array = array_slice($first_array, 2);


            // DB::table('table_7544181')->insert($newget); 
            // print_r($newget);
            // die;

            // echo '<pre>';
            // print_r($keys);
            // echo '=';
            // print_r($values);
            // $table_col = array_keys($newget);
            // $table_val = array_values($newget);
            // $keys = implode("`,`", $table_col);
            // $values = implode("','", $table_val);
           

        
            // $null_val_array = array_slice($raw_array, 2);
            // $arr_pop = array_pop($null_val_array);
            // $real_val = array_values($null_val_array);
            // $count_array_val = count($real_val);
            // $replaced_val = array_fill(0, $count_array_val, "");
            // $last_replace = array_replace($real_val, $replaced_val);

            // $arr_object = (object) $null_val_array;




            // /* saved row or column */

            $saved_format_table = DB::table('saved_format')->where('saved_table_name', $table_name)->get();
            $rows = $saved_format_table[0]->saved_format;
            $table_get_latest = DB::table($table_name)->orderBy('id', 'desc')->get();
            $latest_id = $table_get_latest[0]->id;


            /* row count auth user */

            $row_count_auth = DB::table($table_name)->where('authorize_user', Auth::user()->id)->count();
            // echo '<pre>';
            // print_r($latest_id);
            if ($row_count_auth > 0) {
                $row_count_auth = DB::table($table_name)->where('authorize_user', Auth::user()->id)->update(['filled_by' => $user_insert]);
            } else {
                foreach ($table_get as $row) {
                    $insert_array = ["authorize_user" => Auth::user()->id, "created_by" => $form_creator_insert, "filled_by" => $user_insert, "status" => 0];

                    $data = array_slice(json_decode(json_encode($row), true), 1);
                    unset($data["authorize_user"]);
                    unset($data["created_by"]);
                    unset($data["filled_by"]);
                    unset($data["status"]);
                    $newget = $tasks_controller->insertValueAtPosition($data, $insert_array, 0);

                    // echo'asga54645';
                    // print_r($newget);
                    // $data = array_slice(json_decode(json_encode($row), true), 1);
                    $tbl_name = $data['table_name'];
                    // echo $first_array;
                    DB::table($tbl_name)->insert($newget);
                    // $raw_array = array_slice(json_decode(json_encode($row), true), 2);
                    // $values = implode("','", $raw_array);
                    // $sql = "INSERT INTO `$table_name` (`$keys`) VALUES ('$values')";
                    // print_r($sql);
                    // DB::statement($sql);

                }
            }

// die;


        }


// <pre>3INSERT INTO `table_7544181` (`authorize_user`,`created_by`,`filled_by`,`status`,`table_name`,`name`,`roll`,`section`,`total`,`created_at`) VALUES ('248','248','249','0','table_7544181','armaan','','','0','2022-08-11 10:46:44')INSERT INTO `table_7544181` (`authorize_user`,`created_by`,`filled_by`,`status`,`table_name`,`name`,`roll`,`section`,`total`,`created_at`) VALUES ('248','248','249','0','table_7544181','armaan','','','0','2022-08-11 10:46:44')INSERT INTO `table_7544181` (`authorize_user`,`created_by`,`filled_by`,`status`,`table_name`,`name`,`roll`,`section`,`total`,`created_at`) VALUES ('248','248','249','0','table_7544181','armaan','','','0','2022-08-11 10:46:44')



        // [id] => 1
        // [created_by] => 241
        // [filled_by] => 0
        // [status] => 0
        // [table_name] => table_2746207
        // [সাল] => 
        // [আমানত] => 
        // [ঋণ] => 
        // [মন্তব্য] => 
        // [created_at] => 2022-08-01 00:00:00

        $get_form_id = $request->sub_form_id[0];
        $form_info = DB::table('forms')->where('id', $request->sub_form_id[0])->get();
        $form_creator = $form_info[0]->form_creator;
        $form_user_category = DB::table('users')->where('id', $form_creator)->get();
        $creator_category = $form_user_category[0]->user_category;

        DB::table('forms_info_all')->insert([
            'form_created_by'  => $form_creator,
            'receiver_id' => $request->user_id,
            'receiver_category' => $tasks_controller->getUserCategory($request->user_id),
            'sender_category'   => Auth::user()->user_category,
            'sender_id'   => Auth::user()->id,
            'creator_category' => $creator_category,
            'form_id'          => $get_form_id,
            'report_status'    => 'RECIEVED',
            'final_status'           => false,
            'deadline'           => $request->duration,
            'comment'          => $request->comment,
            'send_process'     => $request->process
        ]);

       
     $check_status = DB::table('auth_entry_table')->where('ae_form_id', $get_form_id)->where('ae_sender_id', Auth::user()->id)->where('ae_receiver_id', $request->user_id)->count();   

     if ($check_status == 0) {
            DB::table('auth_entry_table')->insert([
                'ae_form_id'     => $get_form_id,
                'ae_sender_id'   => Auth::user()->id,
                'ae_receiver_id' => $request->user_id,
                'ae_process'     => $request->process,
                'ae_deadline'    => $request->duration,
                'ae_status'      => false,
                'ae_comment'     => '',

            ]);
        
        }
    //  }else{

    //         DB::table('auth_entry_table')->where('ae_form_id', $get_form_id)->where('ae_sender_id', Auth::user()->id)->where('ae_receiver_id', $request->user_id)->update([
    //             'ae_status'      => true,
    //             'ae_comment'     => '',

    //         ]);

    //  }


        foreach ($request->sub_form_id as $sub_form) {
            $user_form = new UserForm;
            $user_form['sender_user_id'] = Auth::user()->id;
            $user_form['form_id'] = $request->form_id;
            $user_form['sender_institution_id'] = Auth::user()->institution_id;
            $user_form['duration'] = $request->duration;
            $user_form['method'] = $request->method;
            // if ($request->method == 'user') {
            //     $user_form['reciever_user_id'] = $request->user_id;
            //     $user_form['reciever_institution_id'] = User::find($request->user_id)['institution_id'];
            // }
            $user_form['reciever_user_id'] = $request->user_id;
            $user_form['reciever_institution_id'] = User::find($request->user_id)['institution_id'];
            $user_form['sub_form_id'] = $sub_form;
            $user_form['sub_form_id_unique_id'] = $request->sub_form_unique_id;
            $user_form['status'] = 1;
            $user_form->save();
        }
        $to_user_data = User::find($request->user_id);
        $sendNotification = Auth::user()->name . " send you a report request";
        $link = URL::to('/') . '/created-submit-form/' . $sub_form;
        event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
    }


    public function save_send_form_back(Request $request)
    {
        // $tasks_controller = new UserForm();
        // $get_form_id = $request->formid;
        // $form_info = DB::table('forms')->where('id', $get_form_id)->get();
        // $form_creator = $form_info[0]->form_creator;
        // $form_user_category = DB::table('users')->where('id', $form_creator)->get();
        // $creator_category = $form_user_category[0]->user_category;

        // DB::table('forms_info_all')->insert([
        //     'form_created_by'  => $form_creator,
        //     'receiver_id' => $request->user_id,
        //     'receiver_category' => $tasks_controller->getUserCategory($request->user_id),
        //     'sender_category'   => Auth::user()->user_category,
        //     'sender_id'   => Auth::user()->id,
        //     'creator_category' => $creator_category,
        //     'form_id'          => $get_form_id,
        //     'report_status'    => 'RECIEVED',
        //     'final_status'           => false,
        //     'deadline'           => $request->duration,
        //     'comment'          => $request->comment,
        //     'send_process'     => $request->process
        // ]);

        // // foreach ($request->sub_form_id as $sub_form) {
        // //     $user_form = new UserForm;
        // //     $user_form['sender_user_id'] = Auth::user()->id;
        // //     $user_form['form_id'] = $request->form_id;
        // //     $user_form['sender_institution_id'] = Auth::user()->institution_id;
        // //     $user_form['duration'] = $request->duration;
        // //     $user_form['method'] = $request->method;
        // //     // if ($request->method == 'user') {
        // //     //     $user_form['reciever_user_id'] = $request->user_id;
        // //     //     $user_form['reciever_institution_id'] = User::find($request->user_id)['institution_id'];
        // //     // }
        // //     $user_form['reciever_user_id'] = $request->user_id;
        // //     $user_form['reciever_institution_id'] = User::find($request->user_id)['institution_id'];
        // //     $user_form['sub_form_id'] = $sub_form;
        // //     $user_form['sub_form_id_unique_id'] = $request->sub_form_unique_id;
        // //     $user_form['status'] = 1;
        // //     $user_form->save();
        // // }
        // $to_user_data = User::find($request->user_id);
        // $sendNotification = Auth::user()->name . " send you a report request";
        // $link = URL::to('/') . '/form/' . $get_form_id;
        // event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
    }

    public function get_default_sub_form(Request $request)
    {
        // $sub_forms = DB::table('default_sub_forms')->where('default_form_id', $request->form_id)->get();
        // $sub_forms = DB::table('forms')->where('status', 1)->latest()->get();
        // $sub_forms = DB::table('forms_info_all')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->where('receiver_id', Auth::user()->id)->orwhere('form_created_by', Auth::user()->id)->get();
        // $sub_forms = DB::table('forms_info_all')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->get()->unique('form_id');
        // $sub_forms = DB::table('forms_info_all')->join('forms', 'forms.id', '=', 'forms_info_all.form_id')->get()->unique('form_id');
        $sub_forms = DB::table('forms')->where('id', 188)->get();
        // echo '<pre>';
        //      print_r($sub_forms);
        //      die;
        $output = '';
        $output .= ' <option value="" >Select</option>';
        foreach ($sub_forms as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->form_name . '</option>';
        }
        return $output;
    }


    public function form_unique_id(Request $request)
    {
        // $sub_forms = DB::table('default_sub_forms')->where('default_form_id', $request->form_id)->get();
        $sub_forms = DB::table('forms')->where('status', 0)->where('id', $request->sub_form_id)->get();
        print_r($sub_forms);
        die;
        // $output = '';
        // $output .= ' <option value="" >Select</option>';
        // foreach ($sub_forms as $row) {
        //     $output .= '<option value="' . $row->id . '">' . $row->form_name . '</option>';
        // }
        // return $output;
    }



    public function get_admin_default_sub_form(Request $request)
    {
        //        print_r($request->form_id);
        $sub_forms = DB::table('user_forms')
            ->where('form_id', $request->form_id)
            ->where('status', '=', 0)
            ->whereRecieverInstitutionId(Auth::user()->institution_id)
            ->get();
        //      echo '<pre>';
        //      print_r($sub_forms);
        $output = '';
        $output .= ' <option value="" >Select</option>';
        foreach ($sub_forms as $row) {
            $sub_form_inf = getSubForm($row->sub_form_id);
            //          print_r($sub_form_inf[0]->id);die;
            $output .= '<option value="' . $sub_form_inf[0]->id . '">' . $sub_form_inf[0]->sub_form_name . '</option>';
        }
        //      print_r($output);
        return $output;
    }

    public function get_default_sub_form_unique_ids(Request $request)
    {
        // print_r($request->sub_form_id);die;
        $tbl_unique_id_get = '';
        $sub_forms = DB::table('default_sub_forms')
            ->where('id', $request->sub_form_id)
            ->get();

        // echo '<pre>';
        //              print_r($tbl_name[0]);
        //              die;
        //      If comma exist

        if (strpos($sub_forms[0]->table_name, ',') !== false) {
            $tbl_nam = explode(',', $sub_forms[0]->table_name);
            $tbl_name = $tbl_nam[0];
        } else {
            $tbl_name = $sub_forms[0]->table_name;
        }
        DB::statement("SET SQL_MODE=''");
        $tbl_unique_ids = DB::table($tbl_name)->groupBy('unique_form_id')->get();
        foreach ($tbl_unique_ids as $rowForm) {
            if ($rowForm->unique_form_id) {
                $tbl_unique_id_get .= ', ' . $rowForm->unique_form_id;
            }
        }


        //        print_r($tbl_unique_id_get);
        //        die;
        $output = '';
        $output .= ' <option value="" >Select</option>';
        foreach (explode(',', $tbl_unique_id_get) as $row) {
            $output .= '<option value="' . $row . '">' . $row . '</option>';
        }
        //      print_r($output);
        return $output;
    }

    /* form process */
    public function formProcess(Request $request)
    {


        $user_desgination = new UserForm();



        if ($request->process_type == 'up') {
            $input = Auth::user()->user_category;
            $up   = $input - 1;
            $down = $input + 1;
            $same = $input;
            $all_user = User::where('status', 1)->where('user_category', $up)->where('user_type', 'AUTHORIZE_USER')->get();
            // return gettype($all_user);
            // die;

            // print_r($all_user);die;
            $output = '';
            $output .= '';
            foreach ($all_user as $row) {
                $output .= '<option class="text-bold" value="' . $row->id . '">' . $row->name .  '(' . $user_desgination->getDesignation($row->designation) . ',' . $user_desgination->getDeptNameUserWise($row->id) . ')' . '</option>';
            }
            return $output;
        } elseif ($request->process_type == 'down') {
            $input = Auth::user()->user_category;
            $up   = $input - 1;
            $down = $input + 1;
            $same = $input;


            $all_user = User::where('status', 1)->where('user_category', $down)->where('user_type', 'AUTHORIZE_USER')->get();
            // return gettype($all_user);
            // die;
            $output = '';
            //  $output .= ' <option value="" >Select</option>';
            $output .= '';
            foreach ($all_user as $row) {
                $output .= '<option value="' . $row->id . '">' . $row->name .  '(' . $user_desgination->getDesignation($row->designation) . ',' . $user_desgination->getDeptNameUserWise($row->id) . ')' . '</option>';
            }
            return $output;
        }elseif($request->process_type == 'indiv_up'){

           $indiv_row = DB::table('individual_table')->where('indiv_form_id',$request->sub_form_id)->get();
           $indiv_creator = DB::table('users')->where('id',$indiv_row[0]->indiv_creator)->get();
            $output = '';
            //  $output .= ' <option value="" >Select</option>';
            $output .= '';
            foreach ($indiv_creator as $row) {
                $output .= '<option value="' . $row->id . '">' . $row->name .  '(' . $user_desgination->getDesignation($row->designation) . ',' . $user_desgination->getDeptNameUserWise($row->id) . ')' . '</option>';
            }
            return $output;
        }
    }

    /* form process end */


    /* form process individual*/
    public function formProcessIndividual(Request $request)
    {


        $user_desgination = new UserForm();


        if ($request->process_type == 'individual') {
            $input = Auth::user()->user_category;

            if (Auth::user()->role == 1) {
                $role_range = range(11,16);
            }elseif(Auth::user()->role != 1){
                $get_role_id = Auth::user()->role;
                $find_max    = DB::table('roles')->max('id');
                $role_range = range($get_role_id + 1, $find_max);
            }



            $range =  range($input+1,6);
            $all_user = User::where('status', 1)->whereIn('user_category', $range)->where('user_type', 'AUTHORIZE_USER')->get();
            $all_roles = DB::table('roles')->whereIn('id', $role_range)->join('alternative_role_levels', 'alternative_role_levels.role_id','=','roles.id')->get();


            $arr = (array) $all_roles;

            




            $output = '';
            $output .= '';
            foreach ($all_user as $row) {
 
                $output .= '<option class="text-bold" value="' . $row->id . '">' . $row->name .  '(' . $user_desgination->getDesignation($row->designation) . ',' . $user_desgination->getDeptNameUserWise($row->id) . ')' . '</option>';
            }


            $output_roles = '';
            $output_roles .= '';
            foreach ($all_roles as $row) {
                $output_roles .= '<option class="text-bold" value="' . $row->role_id . '">' . $row->role_name .'</option>';
            }

            $arra = [
                'user' => $output,
                'roles' => $output_roles
            ];
            return $arra;
        } 
    }

    public function getRoleWiseUser($roleid)
    {

        $user_desgination = new UserForm();
        $user = User::where('role',$roleid)->where('user_type', 'AUTHORIZE_USER')->get();

        $output = '';
        $output .= '';
        foreach ($user as $row) {
            $output .= '<option value="' . $row->id . '" selected>' . $row->name .  '(' . $user_desgination->getDesignation($row->designation) . ',' . $user_desgination->getDeptNameUserWise($row->id) . ')' . '</option>';
        }
        return $output;

        // $user_desgination = new UserForm();


        // if ($request->process_type == 'individual') {
        //     $input = Auth::user()->user_category;

        //     $range =  range($input+1,6);
        //     $all_user = User::where('status', 1)->whereIn('user_category', $range)->where('user_type', 'AUTHORIZE_USER')->get();
        //     $all_roles = Role::All();

        //     // echo '<pre>';
        //     // print_r($all_user); die;

        //     $output = '';
        //     $output .= '';
        //     foreach ($all_user as $row) {
        //         $output .= '<option class="text-bold" value="' . $row->id . '">' . $row->name .  '(' . $user_desgination->getDesignation($row->designation) . ',' . $user_desgination->getDeptNameUserWise($row->id) . ')' . '</option>';
        //     }


        //     $output_roles = '';
        //     $output_roles .= '';
        //     foreach ($all_roles as $row) {
        //         $output_roles .= '<option class="text-bold" value="' . $row->id . '">' . $row->name .'</option>';
        //     }

        //     $arra = [
        //         'user' => $output,
        //         'roles' => $output_roles
        //     ];
        //     return $arra;
        // } 
    }

    /* form process end */



    /* form process entry */
    public function formProcessEntry(Request $request)
    {

        $user_desgination = new UserForm();
        $sif = $user_desgination->creatorGet(Auth::user()->id);

        
        if ($request->process_type == 'forward') {
            $input = Auth::user()->user_category;
            $up   = $input - 1;
            $down = $input + 1;
            $same = $input;
            if (Auth::user()->user_type == 'ENTRY_USER') {
                $all_user = User::where('status', 1)->where('user_type', 'AUTHORIZE_USER')->where('user_creator',264)->get();
            } else {
                $all_user = User::where('status', 1)->where('user_category', $same)->where('user_type', 'ENTRY_USER')->where('user_creator',Auth::user()->id)->get();
            }

            $output = '';
            $output .= '';
            foreach ($all_user as $row) {
                $output .= '<option value="' . $row->id . '" selected>' . $row->name .  '(' . $user_desgination->getDesignation($row->designation) . ',' . $user_desgination->getDeptNameUserWise($row->id) . ')' . '</option>';
            }
            return $output;
        }
    }

    /* send form process back */
    public function formProcessBack($formid, $process)
    {



        $user_desgination = new UserForm();
        if ($process == 'back') {
            $input = Auth::user()->user_category;

            $rec_cateogry = $input - 1;
            $rec_id = DB::table('users')->where('user_category', $rec_cateogry)->get();



            $forms_info = DB::table('forms')->where('id', $formid)->get();

            $user = DB::table('users')->where('id', $rec_id[0]->id)->get();




            $output = '';
            $output .= '';
            foreach ($user as $row) {
                $output .= '<option value="' . $row->id . '" selected>' . $row->name .  '(' . $user_desgination->getDesignation($row->designation) . ',' . $user_desgination->getDeptNameUserWise($row->id) . ')' . '</option>';
            }
            return $output;
        }
    }

    /* form process end */

    public function reportRequest()
    {

        $group_forms  = array();
        $user_group_id = '';
        $sub_form_id = '';

        $user_group = DB::table('group_user')
            ->where('group_user.user_id', '=', Auth::user()->id)
            ->get();

        //            print_r($user_group);die;

        foreach ($user_group as $rowGroup) {
            $result = UserForm::where('group_id', '=', $rowGroup->group_id)
                ->where('status', 1)
                ->get();
            //                echo '<pre>'; print_r($result);
            if (count($result) !== 0) {

                foreach ($result as $row_form) {
                    $user_group_id .= ',' . $row_form->institution_id;
                    $sub_form_id .= ',' . $row_form->sub_form_id;
                }

                $group_forms[] = $sub_form_id;
            }
        }


        $result1 = UserForm::where('reciever_user_id', '=', Auth::user()->id)
            ->where('reciever_institution_id', '=', Auth::user()->institution_id)
            ->where('status', 1)
            ->get();

        if (count($result1) !== 0) {

            foreach ($result1 as $row_form1) {
                $user_group_id .= ',' . $row_form1->institution_id;
                $sub_form_id .= ',' . $row_form1->sub_form_id;
            }

            $group_forms[] = $result1;
        }

        return explode(',', $sub_form_id);
    }
}