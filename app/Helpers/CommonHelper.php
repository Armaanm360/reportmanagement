<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\LeaveApplication;
use App\Models\UserForm;

if (!function_exists('menu_class')) {

    function menu_class($url)
    {
        $str = substr($url, 35);
        return strtok($str, '/');
    }
}
if (!function_exists('check_user_password')) {

    function check_user_password($pass)
    {
        $pass_check = Auth::user();
        if (Hash::check($pass, $pass_check->password)) {
            return true;
        } else {
            return false;
        }
    }
}
if (!function_exists('getCurrUser')) {

    function getCurrUser()
    {
        $user = Auth::user();
        if ($user->hasRole('super-admin')) {
            return false;
        } else {
            return $user->id;
            //            return false;
        }
    }
}
if (!function_exists('CurrUser')) {

    function CurrUser()
    {
        return Auth::user();
    }
}
if (!function_exists('SwitchLanguage')) {

    function SwitchLanguage($lang)
    {
        Illuminate\Support\Facades\App::setLocale($lang);
    }
}
if (!function_exists('userData')) {

    function userData()
    {
        return User::find(Auth::user()->id);
    }
}
if (!function_exists('CurrSessionMode')) {

    function CurrSessionMode()
    {
        return Session::get('theme_mode');
    }
}

if (!function_exists('reportRequest')) {

    function reportRequest()
    {

        $group_forms = array();
        $user_group_id = '';
        $sub_form_id = '';

        $user_group = DB::table('group_user')
            ->where('group_user.user_id', '=', Auth::user()->id)
            ->get();

        //            print_r($user_group);die;

        foreach ($user_group as $rowGroup) {
            $result = UserForm::where('group_id', '=', $rowGroup->group_id)
                ->where('status', 0)
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
            ->where('status', 1)
            ->get();

        if (count($result1) !== 0) {

            foreach ($result1 as $row_form1) {
                $user_group_id .= ',' . $row_form1->institution_id;
                $sub_form_id .= ',' . $row_form1->sub_form_id;
            }

            $group_forms[] = $result1;
        }

        //                  echo '<pre>'; print_r($sub_form_id);
        //  die;

        return explode(',', $sub_form_id);
    }
}
if (!function_exists('getSubForm')) {

    function getSubForm($id)
    {
        $data = DB::table('forms')->where('id', '=', $id)
            ->get()->unique();

        return $data;
    }
}
// if (!function_exists('defaultForms')) {

//     function defaultForms()
//     {
//         $data = DB::table('default_forms')
//             ->get();
//         return $data;
//     }
// }
if (!function_exists('defaultForms')) {

    function defaultForms()
    {
       $data = DB::table('new_default_form')->join('forms', 'forms.id', '=', 'new_default_form.default_form_id')->join('saved_format', 'saved_form_id', '=', 'new_default_form.default_form_id')->get();
        return $data;
    }
}
if (!function_exists('defaultSubForms')) {

    function defaultSubForms($id)
    {
        $data = DB::table('default_sub_forms')
            ->where('default_form_id', '=', $id)
            ->get();
        return $data;
    }
}
if (!function_exists('getForm')) {

    function getForm($id)
    {
        $data = DB::table('default_forms')->where('id', '=', $id)
            ->get();

        return $data;
    }
}
if (!function_exists('sendMail')) {

    function sendMail($from, $to, $subject, $msg)
    {
        $data = [
            'from' => $from,
            'to' => $to,
            'subject' => $subject,
            'msg' => $msg
        ];

        Mail::send('send_mail', $data, function ($message) use ($data) {
            $message->from($data['from']);
            $message->to($data['to'], 'Leave Management');
            $message->subject($data['subject']);
        });
    }
}