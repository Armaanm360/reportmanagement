<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Institutions;

class DepartmentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        SwitchLanguage(Session::get('language'));
        // if (Auth::user()->hasRole('super-admin')) {
        //     $data['all_institutions'] = Institutions::all();
        //     $data['all_department'] = Department::all();
        // } else {
        //     $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();
        //     $data['all_department'] = Department::whereInstitutionId(Auth::user()->institution_id)->get();
        // }

        $data['all_department'] = Department::where('parent_id',Auth::user()->user_category)->get();
        return view('admin.pages.department.list_department', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'name' => 'required'
        ]);

        $department = new Department;

        $department->name = $request->name;
        $department->parent_id = Auth::user()->user_category;
        $department->save();

        if ($department) {
            Session::put(['title' => 'Alert', 'message' => 'Department has been created successfully!']); //             
        }
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
    public function edit($id) {
        SwitchLanguage(Session::get('language'));

        $data['all_department'] = Department::where('parent_id', Auth::user()->user_category)->get();

        $data['department'] = Department::find($id);
        //echo "<pre>";print_r($data['subject_list']);die();
        return view('admin.pages.department.edit_department', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required'
        ]);

        $department = Department::find($id);

        $department->name = $request->name;
        $department->parent_id = Auth::user()->user_category;
        // if ($request->institution_id) {
        //     $department->institution_id = $request->institution_id;
        // } else {
        //     $department->institution_id = Auth::user()->institution_id;
        // }
        $department->save();

        if ($department) {
            Session::put(['title' => 'Alert', 'message' => 'Department has been updated successfully!']); //             
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Department::find($id)->delete();
        // return 'okay';
//          if($department){
//                     Session::put(['title'=>'Alert','message'=>'Department has been deleted successfully!']);//             
//                }
//                return redirect('departments');
    }

}
