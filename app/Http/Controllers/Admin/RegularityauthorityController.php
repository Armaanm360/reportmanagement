<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ministry;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Institutions;
use App\Models\Regularityauthority;

class RegularityauthorityController extends Controller
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
            //$data['all_institutions'] = Institutions::all();
            $data['all_regularity'] = Regularityauthority::all();
        } else {
            $data['all_regularity'] = Regularityauthority::all();
           // $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();
            //$data['all_regularity'] = Regularityauthority::whereInstitutionId(Auth::user()->institution_id)->get();
        }
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
            'name' => 'required'
        ]);

        $regauthority = new Regularityauthority();

        $regauthority->name = $request->name;
        $regauthority->description = $request->description;
        $regauthority->parent_id = $request->parent_id;
        // if ($request->institution_id) {
        //     $regauthority->institution_id = $request->institution_id;
        // } else {uDtwNddhW5g#w.Y
        //     $regauthority->institution_id = Auth::user()->institution_id;
        // }
        $regauthority->save();

        if ($regauthority) {
            Session::put(['title' => 'Alert', 'message' => 'Regularity has been created successfully!']); //             
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
            $data['all_regularity']   = Regularityauthority::all();
        } else {
            $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();
            $data['all_regularity']   = Regularityauthority::whereInstitutionId(Auth::user()->institution_id)->get();
        }

        $data['regauthority'] = Regularityauthority::find($id);
        //echo "<pre>";print_r($data['subject_list']);die();
        return view('admin.pages.regularityauthority.edit_regularityauthority', $data);
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

        $regauthority = Regularityauthority::find($id);

        $regauthority->name = $request->name;
        $regauthority->description = $request->description;
        $regauthority->parent_id = $request->parent_id;

        $regauthority->save();

        if ($regauthority) {
            Session::put(['title' => 'Alert', 'message' => 'Regularity Authority has been updated successfully!']); //             
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
        Regularityauthority::find($id)->delete();
        return 'okey';
    }
}
