<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;
use Illuminate\Support\Facades\Session;
use App\Models\Institutions;
use Illuminate\Support\Facades\Auth;

class DesignationController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        SwitchLanguage(Session::get('language'));
        // if (Auth::user()->hasRole('super-admin')) {
        //     $data['all_institutions'] = Institutions::all();
        //     $data['all_designation'] = Designation::all();
        // } else {
        //     $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();
        //     $data['all_designation'] = Designation::whereInstitutionId(Auth::user()->institution_id)->get();
        // }

        $data['all_designation'] = Designation::where('parent_id', Auth::user()->user_category)->get();

        return view('admin.pages.designation.list_designation', $data);
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

        $designation = new Designation;

        $designation->name = $request->name;
        $designation->parent_id = Auth::user()->user_category;
        // if ($request->institution_id) {
        //     $designation->institution_id = $request->institution_id;
        // } else {
        //     $designation->institution_id = Auth::user()->institution_id;
        // }
        $designation->save();

        if ($designation) {
            Session::put(['title' => 'Alert', 'message' => 'Designation has been created successfully!']); //             
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
        $data['designation'] = Designation::find($id);
        // if (Auth::user()->hasRole('super-admin')) {
        //     $data['all_institutions'] = Institutions::all();
        //     $data['all_designation'] = Designation::all();
        // } else {
        //     $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();
        //     $data['all_designation'] = Designation::whereInstitutionId(Auth::user()->institution_id)->get();
        // }
        $data['all_designation'] = Designation::where('parent_id', Auth::user()->user_category)->get();;
        //echo "<pre>";print_r($data['subject_list']);die();
        return view('admin.pages.designation.edit_designation', $data);
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

        $designation = Designation::find($id);

        $designation->name = $request->name;
        $designation->parent_id = Auth::user()->user_category;
        $designation->save();

        if ($designation) {
            Session::put(['title' => 'Alert', 'message' => 'Designation has been updated successfully!']); //             
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Designation::find($id)->delete();
        return 'okay';
//          if($designation){
//                     Session::put(['title'=>'Alert','message'=>'Designation has been deleted successfully!']);//             
//                }
//                return redirect('designations');
    }

}
