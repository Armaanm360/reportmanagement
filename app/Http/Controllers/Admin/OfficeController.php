<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Institutions;

class OfficeController extends Controller
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
            $data['all_office'] = Office::all();
        } else {
            $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();
            $data['all_office'] = Office::whereInstitutionId(Auth::user()->institution_id)->get();
        }
        return view('admin.pages.office.list_office', $data);
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

        $office = new Office;

        $office->name = $request->name;
        $office->description = $request->description;
        $office->parent_id = $request->parent_id;
        if ($request->institution_id) {
            $office->institution_id = $request->institution_id;
        } else {
            $office->institution_id = Auth::user()->institution_id;
        }
        $office->save();

        if ($office) {
            Session::put(['title' => 'Alert', 'message' => 'Office has been created successfully!']); //             
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
            $data['all_office'] = Office::all();
        } else {
            $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();
            $data['all_office'] = Office::whereInstitutionId(Auth::user()->institution_id)->get();
        }

        $data['office'] = Office::find($id);
        //echo "<pre>";print_r($data['subject_list']);die();
        return view('admin.pages.office.edit_office', $data);
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

        $office = Office::find($id);

        $office->name = $request->name;
        $office->description = $request->description;
        $office->parent_id = $request->parent_id;
        if ($request->institution_id) {
            $office->institution_id = $request->institution_id;
        } else {
            $office->institution_id = Auth::user()->institution_id;
        }
        $office->save();

        if ($office) {
            Session::put(['title' => 'Alert', 'message' => 'Office has been updated successfully!']); //             
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
        Office::find($id)->delete();
        return 'okey';
    }
}
