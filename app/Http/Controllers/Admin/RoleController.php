<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Institutions;

class RoleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {     
//        print_r(Auth::user()->institution_id);die;
        SwitchLanguage(Session::get('language'));
            if(Auth::user()->hasRole('super-admin')){
             $data['all_roles'] = Role::all();
             }else{
            $data['all_roles'] = Role::whereInstitutionId(Auth::user()->institution_id)->get();  
             }
        return view('admin.pages.role.list_role', $data);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        SwitchLanguage(Session::get('language'));
        if(Auth::user()->hasRole('super-admin')){
        $all_permissions = Permission::all();
        }else{
         $all_permissions = Permission::whereInstitutionId(Auth::user()->institution_id)->get();   
        }
        $data['all_institutions'] = Institutions::all();
        $array = array();

        foreach ($all_permissions as $row) {
            $array[$row['section_name']][] = $row;
        }

        // echo '<pre>';print_r($new_array);die;

        $data['all_permissions'] = $array;
        return view('admin.pages.role.create_role', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
//        print_r($request->permissions);die;
        $request->validate([
            'name' => 'required',
        ]);

        $role = new Role;

        $role->name = $request->name;
        if ($request->institution_id) {
            $role->institution_id = $request->institution_id;
        } else {
            $role->institution_id = Auth::user()->institution_id;
        }

        $role->slug = str_replace(' ', '-', strtolower($request->name));

        $role->save();

        $permissions = $request->permissions;

        $data = array();
        foreach ($permissions as $row) {
            $data['role_id'] = $role->id;
            $data['permission_id'] = $row;

            DB::table('roles_permissions')->insert($data);
        }

        Session::put(['title' => 'Alert!', 'message' => 'Role has been created successfully!']); //             
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
        SwitchLanguage(Session::get('language'));
        if(Auth::user()->hasRole('super-admin')){
          $data['all_institutions'] = Institutions::all();   
          $all_permissions = Permission::all();
        }else{
          $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();   
          $all_permissions = Permission::whereInstitutionId(Auth::user()->institution_id)->get(); 
        }
       
        $data['roleData'] = Role::find($id);
        

        $array = array();

        foreach ($all_permissions as $row) {
            $array[$row['section_name']][] = $row;
        }

        // echo '<pre>';print_r($new_array);die;
        $role_wise_permission_array = array();
        foreach ($data['roleData']->permissions as $row) {
            $role_wise_permission_array[] = $row->pivot->permission_id;
        }

        $data['role_wise_permission_array'] = $role_wise_permission_array;
        $data['all_permissions'] = $array;

        return view('admin.pages.role.edit_role', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
//      print_r($request->all());die;
//        if(Auth::user()->hasRole('super-admin')){
        $request->validate([
            'name' => 'required',
        ]);

        $role = Role::find($id);

        $role->name = $request->name;
        if ($request->institution_id) {
            $role->institution_id = $request->institution_id;
        } else {
            $role->institution_id = Auth::user()->institution_id;
        }
        $role->slug = str_replace(' ', '-', strtolower($request->name));

        $role->save();

        $permissions = $request->permissions;

        $data = array();

        DB::table('roles_permissions')
                ->where('role_id', '=', $role->id)
                ->delete();

        foreach ($permissions as $row) {
            $data['role_id'] = $role->id;
            $data['permission_id'] = $row;

            DB::table('roles_permissions')->insert($data);
        }

        Session::put(['title' => 'Alert!', 'message' => 'Role has been updated successfully!']); //             
//        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
