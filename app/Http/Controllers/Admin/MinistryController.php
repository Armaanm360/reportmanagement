<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ministry;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Institutions;

class MinistryController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SwitchLanguage(Session::get('language'));
        if (Auth::user()->hasRole('super-admin')) {
            $data['all_institutions'] = Institutions::all();
            $data['all_ministry'] = Ministry::all();
        } else {
            $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();
            $data['all_ministry'] = Ministry::whereInstitutionId(Auth::user()->institution_id)->get();
        }
        return view('admin.pages.ministry.list_ministry', $data);
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
            'name' => 'required'
        ]);

        $ministry = new Ministry;

        $ministry->name = $request->name;
        $ministry->description = $request->description;
        $ministry->parent_id = $request->parent_id;
        if ($request->institution_id) {
            $ministry->institution_id = $request->institution_id;
        } else {
            $ministry->institution_id = Auth::user()->institution_id;
        }
        $ministry->save();

        if ($ministry) {
            Session::put(['title' => 'Alert', 'message' => 'Ministry has been created successfully!']); //             
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

        if (Auth::user()->hasRole('super-admin')) {
            $data['all_institutions'] = Institutions::all();
            $data['all_ministry'] = Ministry::all();
        } else {
            $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();
            $data['all_ministry'] = Ministry::whereInstitutionId(Auth::user()->institution_id)->get();
        }

        $data['ministry'] = Ministry::find($id);
        //echo "<pre>";print_r($data['subject_list']);die();
        return view('admin.pages.ministry.edit_ministry', $data);
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
            'name' => 'required'
        ]);

        $ministry = Ministry::find($id);

        $ministry->name = $request->name;
        $ministry->description = $request->description;
        $ministry->parent_id = $request->parent_id;
        if ($request->institution_id) {
            $ministry->institution_id = $request->institution_id;
        } else {
            $ministry->institution_id = Auth::user()->institution_id;
        }
        $ministry->save();

        if ($ministry) {
            Session::put(['title' => 'Alert', 'message' => 'Ministry has been updated successfully!']); //             
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
        Ministry::find($id)->delete();
        return 'okey';
    }
}
