<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institutions;
use App\Models\Regularityauthority;
use Illuminate\Support\Facades\Session;

class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_institutions'] = Institutions::all();
        $data['all_regularity'] = Regularityauthority::all();
        return view('admin.pages.institution.list_institution', $data);


        // SwitchLanguage(Session::get('language'));
        // if (Auth::user()->hasRole('super-admin')) {
        //     $data['all_institutions'] = Institutions::all();
        //     $data['all_regularity'] = Regularityauthority::all();
        // } else {

        //     $data['all_regularity']  = Regularityauthority::whereId(Auth::user()->institution_id)->get();
        //     $data['all_institutions'] = Institutions::whereInstitutionId(Auth::user()->institution_id)->get();
        // }
        return view('admin.pages.regularityauthority.list_regularityauthority', $data);
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
        $request->validate([
            'name'              => 'required',
        ]);

        $institution = new Institutions;
        $institution->name = $request->name;
        $institution->description = $request->description;
        $institution->parent_id = $request->parent_id;
        $institution->save();
        if ($institution) {
            Session::put(['title' => 'Alert', 'message' => 'Institution has been created successfully!']); //             
        }
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

        SwitchLanguage(Session::get('language'));
        $data['institution'] = Institutions::find($id);
        $data['all_institutions'] = Institutions::all();

        //echo "<pre>";print_r($data['subject_list']);die();
        return view('admin.pages.institution.edit_institution', $data);
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
        $request->validate([
            'name'              => 'required'
        ]);

        $designation = Institutions::find($id);

        $designation->name = $request->name;
        $designation->description = $request->description;
        $designation->parent_id = $request->parent_id;
        $designation->save();

        if ($designation) {
            Session::put(['title' => 'Alert', 'message' => 'Institution has been updated successfully!']); //             
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Institutions::find($id)->delete();
        return 'okay';
        //          if($designation){
        //                     Session::put(['title'=>'Alert','message'=>'Designation has been deleted successfully!']);//             
        //                }
        //                return redirect('designations');
    }
}
