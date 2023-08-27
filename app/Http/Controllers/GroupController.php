<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institutions;
use App\Models\Group;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class GroupController extends Controller
{

    public function create_group()
    {
        SwitchLanguage(Session::get('language'));
        if (\Illuminate\Support\Facades\Auth::user()->hasRole('super-admin')) {
            $data['all_institutions'] = Institutions::all();
        } else if (\Illuminate\Support\Facades\Auth::user()->hasRole('admin')) {
            $data['all_institutions'] = User::whereInstitutionId(\Illuminate\Support\Facades\Auth::user()->institution_id)->get();
        }
        return view('admin.pages.group.create', $data);
    }

    public function edit($id)
    {
        SwitchLanguage(Session::get('language'));
        $data['group'] = Group::find($id);

        $group_institution_id = '';
        foreach ($data['group']->group_user as $row) {
            if (\Illuminate\Support\Facades\Auth::user()->hasRole('super-admin')) {
                $group_institution_id .= ',' . $row->institution_id;
            } else {
                $group_institution_id .= ',' . $row->user_id;
            }
        }
        $data['group_institution'] = explode(',', $group_institution_id);
        //        echo '<pre>';print_r($data['group_institution']);die;
        if (\Illuminate\Support\Facades\Auth::user()->hasRole('super-admin')) {
            $data['all_institutions'] = Institutions::all();
        } else if (\Illuminate\Support\Facades\Auth::user()->hasRole('admin')) {
            $data['all_institutions'] = User::whereInstitutionId(\Illuminate\Support\Facades\Auth::user()->institution_id)->get();
        }
        return view('admin.pages.group.edit', $data);
    }

    public function groups()
    {
        SwitchLanguage(Session::get('language'));
        if (\Illuminate\Support\Facades\Auth::user()->hasRole('super-admin')) {

            $data['all_group'] = Group::where('delete_status', '=', 'NO')
                ->get();
        } else {
            //            echo 41224;die;
            $data['all_group'] = Group::where('delete_status', '=', 'NO')
                ->where('institution_id', '=', \Illuminate\Support\Facades\Auth::user()->institution_id)
                ->get();
        }

        return view('admin.pages.group.index', $data);
    }

    public function save_group(Request $request)
    {
        $request->validate([
            'name'              => 'required'
        ]);
        //        echo '<pre>';  print_r($request->all());die;
        $group = new Group;

        print_r(\Illuminate\Support\Facades\Auth::user());


        $group->name = $request->name;
        $group->institution_id = \Illuminate\Support\Facades\Auth::user()->institution_id;
        $group->save();

        foreach ($request->user as $rowUser) {
            $group_user = new \App\Models\GroupUser;
            $group_user['group_id'] = $group->id;
            if (\Illuminate\Support\Facades\Auth::user()->hasRole('super-admin')) {
                $group_user['institution_id'] = $rowUser;
            } else {
                $group_user['user_id'] = $rowUser;
            }

            $group_user->save();
        }

        if ($group) {
            Session::put(['title' => 'Alert', 'message' => 'Group has been created successfully!']); //             
        }
    }

    public function update_group(Request $request)
    {
        $request->validate([
            'name'              => 'required'
        ]);
        //        echo '<pre>';  print_r($request->all());die;
        $group = Group::find($request->group_id);

        $group->name = $request->name;
        $group->institution_id = \Illuminate\Support\Facades\Auth::user()->institution_id;
        $group->save();
        DB::table('group_user')->where('group_id', '=', $group->id)->delete();
        foreach ($request->user as $rowUser) {
            $group_user = new \App\Models\GroupUser;
            $group_user['group_id'] = $group->id;
            if (\Illuminate\Support\Facades\Auth::user()->hasRole('super-admin')) {
                $group_user['institution_id'] = $rowUser;
            } else {
                $group_user['user_id'] = $rowUser;
            }

            $group_user->save();
        }

        if ($group) {
            Session::put(['title' => 'Alert', 'message' => 'Group has been updated successfully!']); //             
        }
    }

    public function delete($id)
    {

        DB::table('group')->where('id', $id)->update(['delete_status' => 'YES']);
        return redirect('groups');
    }
}
