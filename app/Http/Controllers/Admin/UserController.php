<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Designation;
use Illuminate\Support\Facades\Hash;
use App\Models\Department;
use App\Models\Institutions;
use App\Events\Notification;
use App\Models\Division;
use App\Models\Ministry;
use App\Models\Office;
use App\Models\Regularityauthority;
use App\Models\UnitOffice;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SwitchLanguage(Session::get('language'));
        // if (Auth::user()->can('view-user')) {
        //     return view('admin.pages.user.user_list');
        // }

        return view('admin.pages.user.user_list');
    }

    public function user_list(Request $request)
    {
        $draw = intval($request->draw);
        $start = intval($request->start);
        $limit = intval($request->length);
        $sortBy = null;
        $sortDirection = '';
        //        print_r($request->order);die;
        if (isset($request->order[0]['column'])) {
            $sortBy = $request->columns[$request->order[0]['column']]['data'];
            $sortDirection = $request->order[0]['dir'];
        }

        $searchArr1 = $request->columns;
        $except_first_array = array_slice($searchArr1, count($searchArr1) - (count($searchArr1) - 1), count($searchArr1));

        $searchArr = array_slice($except_first_array, '-' . count($except_first_array), 5);

        //         echo "<pre>";print_r($searchArr);die;

        if (Auth::user()->hasRole('super-admin')) {
            $total_data = DB::table('users')
                ->when($searchArr, function ($query) use ($searchArr, $start, $limit) {
                    foreach ($searchArr as $searchRow) {
                        $searchRowdata = $searchRow['data'];
                        $searchRowvalue = $searchRow['search']['value'];
                        $query->orWhere($searchRowdata, "LIKE", "%" . $searchRowvalue . "%");
                    }
                })
                ->when($sortBy, function ($query, $sortBy) use ($sortDirection) {
                    return $query->orderBy($sortBy, $sortDirection);
                }, function ($query) {
                    return $query->orderBy('id', 'desc');
                })
                ->count();

            $user_list = DB::table('users')
                ->leftJoin("users_roles", "users.id", "=", "users_roles.user_id")
                ->leftJoin("roles", "roles.id", "=", "users_roles.role_id")
                ->leftJoin("designations", "designations.id", "=", "users.designation")
                ->when($sortBy, function ($query, $sortBy) use ($sortDirection) {
                    return $query->orderBy($sortBy, $sortDirection);
                }, function ($query) {
                    return $query->orderBy('id', 'desc');
                })
                ->select("users.*", "roles.id AS role_id", "roles.name AS role_name", "designations.name AS designation_name")
                ->when($searchArr, function ($query) use ($searchArr, $start, $limit) {
                    foreach ($searchArr as $searchRow) {
                        $searchRowdata = $searchRow['data'];
                        $searchRowvalue = $searchRow['search']['value'];
                        $query->orWhere("users.$searchRowdata", "LIKE", "%$searchRowvalue%");
                    }
                })
                ->offset($start)
                ->limit($limit)
                ->get();
        } else {

            $total_data = DB::table('users')
                ->whereInstitutionId(Auth::user()->institution_id)
                ->when($searchArr, function ($query) use ($searchArr, $start, $limit) {
                    foreach ($searchArr as $searchRow) {
                        $searchRowdata = $searchRow['data'];
                        $searchRowvalue = $searchRow['search']['value'];
                        $query->where($searchRowdata, "LIKE", "%" . $searchRowvalue . "%");
                    }
                })
                ->when($sortBy, function ($query, $sortBy) use ($sortDirection) {
                    return $query->orderBy($sortBy, $sortDirection);
                }, function ($query) {
                    return $query->orderBy('id', 'desc');
                })
                ->count();

            $user_list = DB::table('users')
                // ->where('users.institution_id', '=', Auth::user()->institution_id)
                ->leftJoin("users_roles", "users.id", "=", "users_roles.user_id")
                ->leftJoin("roles", "roles.id", "=", "users_roles.role_id")
                ->leftJoin("designations", "designations.id", "=", "users.designation")
                // ->whereIn('user_category',array(Auth::user()->user_category, Auth::user()->user_category + 1))
                ->where('user_creator', Auth::user()->id)
                ->when($sortBy, function ($query, $sortBy) use ($sortDirection) {
                    return $query->orderBy($sortBy, $sortDirection);
                }, function ($query) {
                    return $query->orderBy('id', 'desc');
                })
                ->select("users.*", "roles.id AS role_id", "roles.name AS role_name", "designations.name AS designation_name")
                ->when($searchArr, function ($query) use ($searchArr, $start, $limit) {
                    foreach ($searchArr as $searchRow) {
                        $searchRowdata = $searchRow['data'];
                        $searchRowvalue = $searchRow['search']['value'];
                        $query->where("users.$searchRowdata", "LIKE", "%$searchRowvalue%");
                    }
                })
                ->offset($start)
                ->limit($limit)
                ->get();
        }


        //        echo '<pre>';print_r($user_list);die;
        $data = array();
        $i = 1;

        $user = Auth::user();
        //        $user->can('add-vendor');

        foreach ($user_list as $row) {
            $action = '';
            $message = 'Are You Sure want to delete';
            if ($user->can('view-user')) {
                $action .= "<a class='btn btn-primary btn-sm mr-2' href='users/" . $row->id . "'>View</a>";
            }
            // if ($user->can('edit-user')) {
            //     $action .= "<a class='btn btn-success btn-sm mr-2' href='users/" . $row->id . "/edit'>Edit</a>";
            // }
            if ($user->can('delete-user')) {
                $action .= "<form action='" . route('users.destroy', $row->id) . "' method='POST' style='display: inline-block;'>"
                    . csrf_field() . ""
                    . method_field('DELETE') . "
                            <button class='btn btn-danger btn-sm' type='submit'>Delete</button>
                        </form>";
            }


            $user_array['sl'] = $i;
            $user_array['name'] = $row->name;
            $user_array['email'] = $row->email;
            $user_array['phone'] = $row->phone;
            $user_array['user_id'] = $row->user_id;
            $user_array['designation'] = $row->designation_name;
            $user_array['role_name'] = $row->role_name;
            $user_array['user_type'] = $row->user_type;

            if ($row->status == true) {
                $user_array['status'] = '<span class="badge badge-pill badge-info">Active</span>';
            } else {
                $user_array['status'] = '<span class="badge badge-pill badge-warning">InActive</span>';
            }

            $user_array['action'] = $action;
            $data[] = $user_array;
            $i++;
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $total_data,
            "recordsFiltered" => $total_data,
            "data" => $data
        );
        echo json_encode($output);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        SwitchLanguage(Session::get('language'));
        //if (Auth::user()->hasRole('super-admin')) {
        // $data['all_designation'] = Designation::where('parent_id',Auth::user()->user_category)->get();
        $data['all_designation'] = Designation::latest()->get();
        $data['all_division'] = Division::all();
        if (Auth::user()->user_category == 1) {
            $data['all_roles'] = Role::whereIn('id', array(1, 11))->get();
        } elseif (Auth::user()->user_category == 2) {
            $data['all_roles'] = Role::whereIn('id', array(11, 12))->get();
        } elseif (Auth::user()->user_category == 3) {
            $data['all_roles'] = Role::whereIn('id', array(12, 13))->get();
        } elseif (Auth::user()->user_category == 4) {
            $data['all_roles'] = Role::whereIn('id', array(13, 14))->get();
        } elseif (Auth::user()->user_category == 5) {
            $data['all_roles'] = Role::whereIn('id', array(14, 15))->get();
        } else {
            $data['all_roles'] = Role::whereIn('id', array(15))->get();
        }

        $data['all_employees'] = User::all();
        $data['all_department'] = Department::where('parent_id', Auth::user()->user_category)->get();
        $data['all_institutions'] = Institutions::all();
        $data['all_ministry'] = Ministry::all();
        $data['all_organization_users'] = Office::all();
        $data['all_regulatory_authority'] = Regularityauthority::all();
        $data['all_branch'] = UnitOffice::all();
        // } else {
        //     $data['all_designation'] = Designation::where('parent_id', Auth::user()->user_category)->get();
        //     $data['all_division'] = Division::whereInstitutionId(Auth::user()->institution_id)->get();
        //     $data['all_roles'] = Role::whereInstitutionId(Auth::user()->institution_id)->get();
        //     $data['all_employees'] = User::whereInstitutionId(Auth::user()->institution_id)->get();
        //     $data['all_department'] = Department::where('parent_id', Auth::user()->user_category)->get();
        //     $data['all_institutions'] = Institutions::whereId(Auth::user()->institution_id)->get();
        //     $data['all_ministry'] = Ministry::whereId(Auth::user()->institution_id)->get();
        //     $data['all_organization_users'] = Office::whereId(Auth::user()->institution_id)->get();
        //     $data['all_regulatory_authority'] = Regularityauthority::whereId(Auth::user()->institution_id)->get();
        //     $data['all_branch'] = UnitOffice::whereId(Auth::user()->institution_id)->get();
        // }
        return view('admin.pages.user.create_user', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  echo '<pre>';
        // print_r($request->all());die;
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|unique:users',
        //     'designation' => 'required',
        //     'division' => 'required',
        //     'password' => 'required|min:8|required_with:confirm_password|same:confirm_password',
        //     'confirm_password' => 'min:8',
        //     'role' => 'required'
        // ]);
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            // 'designation' => 'required',
            // 'division' => 'required',
            'password' => 'required|min:3|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:3',
            'role' => 'required'
        ]);

        $user = new User;

        $user->name = $request->name;
        $user->slug = str_replace(' ', '-', $request->name);
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('user_images'), $imageName);
            $user->image = $imageName;
        }


        $user->email = $request->email;
        $user->user_id = $request->user_id;
        $user->designation = $request->designation;
        $user->division = $request->division;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->user_creator = Auth::user()->id;
        if ($request->role == '1') {
            $user->user_category = 1;
        } else if ($request->role == '11') {
            $user->user_category = 2;
        } else if ($request->role == '12') {
            $user->user_category = 3;
        } else if ($request->role == '13') {
            $user->user_category = 4;
        } else if ($request->role == '14') {
            $user->user_category = 5;
        } else if ($request->role == '15') {
            $user->user_category = 6;
        }
        $user->ministry_department = $request->ministry_department;
        $user->institution_id = $request->institution_id;
        $user->organization_user = $request->orguser;
        $user->regulatory_authority = $request->regauthority;
        $user->branch_user = $request->branch;
        $user->user_type = $request->user_type;
        $user->password = Hash::make($request->password);
        $user->save();

        if ($request->signature) {
            $imageName1 = time() . '.' . $request->signature->extension();
            $request->signature->move(public_path('user_images'), $imageName1);
            $user->signature = $imageName1;
        }

        $user_role['role_id'] = $request->role;
        $user_role['user_id'] = $user->id;

        $user_save = DB::table('users_roles')->insert($user_role);

        $permissions = DB::table('roles_permissions')
            ->where('role_id', $request->role)
            ->get();
        foreach ($permissions as $rowPermission) {
            $datasave['user_id'] = $user->id;
            $datasave['permission_id'] = $rowPermission->permission_id;
            DB::table('users_permissions')->insert($datasave);
        }
        //   $purmission_holder = $request->permission_holder_id;
        // foreach ($request->permission_holder_id as $rowId) {
        //     $datasave1['user_id'] = $user->id;
        //     $datasave1['permision_holder_id'] = $rowId;
        //     $datasave1['created_by'] = Auth::user()->id;
        //     $datasave1['status'] = 1;
        //     DB::table('user_leave_permission')->insert($datasave1);
        // }

        if ($request->department_id) {
            foreach ($request->department_id as $rowId) {
                $datasave2['user_id'] = $user->id;
                $datasave2['department_id'] = $rowId;
                DB::table('user_departments')->insert($datasave2);
            }
        }
        // if ($request->alter_user_id) {
        //     foreach ($request->alter_user_id as $rowId) {
        //         $datasave3['user_id'] = $user->id;
        //         $datasave3['alternate_user_id'] = $rowId;
        //         $datasave3['status'] = 1;
        //         DB::table('alternate_users')->insert($datasave3);
        //     }
        // }

        if ($user_save) {
            Session::put(['title' => 'Alert', 'message' => 'User has been created successfully!']);
            $msg = 'Report Management User Id : ' . $request->user_id . ' & Password : ' . $request->password .'   '.'App Link :'. url('/');
            sendMail('m360ict@gmail.com', $request->email, 'Report  Management', $msg);


            // $to_user_data = User::find($user->id);
            // $sendNotification = 'Hello ' . $request->name . " . Welcome to the Report Management System, Financial Institution Division,Ministry of Finance, Bangladesh.";
            // $link = 'report-requests/show' . '/demo';
            // event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));

            $to_user_data = User::find($user->id);
            $sendNotification = 'Hello ' . $request->name . " . Welcome to the Report Management System, Financial Institution Division,Ministry of Finance, Bangladesh.";
            $link = '';
            event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));


            $password_change = User::find($user->id);
            $sendNotification = 'Hello ' . $request->name . " . Your are requested to change your password.";
            $link = 'usersedit/' . $user->id . '';
            event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $password_change->id, $sendNotification, $link));
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
        SwitchLanguage(Session::get('language'));
        $data['user'] = \App\Models\User::find($id);
        // $data['user_leaves'] = \App\Models\LeaveApplication::where('user_id', '=', $id)->where('status', '=', 1)->get();
        //        print_r($data['user']->user_leaves);die;
        return view('admin.pages.user.view_user', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //         SwitchLanguage(Session::get('language'));
        //         $abc = \App\Models\User::find($id)->permission_holder;
        //         foreach ($abc as $rowpl) {
        //             $datapl[] = "'$rowpl->permision_holder_id'";
        //                       //  print_r($datapl);
        //         }
        //         if (isset($datapl)) {
        //             $data['permission_holders'] = implode(',', $datapl);
        //         }


        //         if (Auth::user()->user_type == 'AUTHORIZE_USER') {
        //             $data['all_designation'] = Designation::where('parent_id', Auth::user()->user_category)->get();
        //             $data['all_division'] = Division::where('parent_id',Auth::user()->user_category)->all();
        //             $data['all_institutions'] = Institutions::all();
        //             $data['all_roles'] = Role::all();
        //             $data['all_employees'] = User::all();
        //             $data['all_department'] = Department::where('parent_id', Auth::user()->user_category)->get();
        //             $data['all_ministry'] = Ministry::all();
        //             $data['all_organization_users'] = Office::all();
        //             $data['all_regulatory_authority'] = Regularityauthority::all();
        //             $data['all_branch'] = UnitOffice::all();
        //             // $data['user_type'] = DB::table('users')
        //             //                     ->select('users.user_type')
        //             //                     ->where('users.id', $id)
        //             //                     ->get();

        //             $data['userData'] = DB::table('users')
        //                 ->leftJoin('users_roles', 'users.id', '=', 'users_roles.user_id')
        //                 ->leftJoin('roles', 'users_roles.role_id', '=', 'roles.id')
        //                 ->where('users.id', $id)
        //                 ->select('users.*', 'roles.id AS role_id', 'roles.name AS role_name')
        //                 ->first();

        //             $departments = DB::table('user_departments')
        //                 ->where('user_departments.user_id', $id)
        //                 ->get();
        //         } else {


        //             $data['userData'] = DB::table('users')
        //                 ->leftJoin('users_roles', 'users.id', '=', 'users_roles.user_id')
        //                 ->leftJoin('roles', 'users_roles.role_id', '=', 'roles.id')
        //                 ->where('users.id', $id)
        //                 ->where('users.institution_id', Auth::user()->institution_id)
        //                 ->select('users.*', 'roles.id AS role_id', 'roles.name AS role_name')
        //                 ->first();

        // 								// echo '<pre>';
        // 								// print_r(Auth::user());
        // 								// echo '<pre>';

        //                 // die;
        //                 // $data['all_roles']         = Role::where('institution_id',Auth::user()->role_id)->get();
        //                 // $data['all_employees']     = User::where('institution_id',Auth::user()->user_id)->get();
        //                 // $data['all_department']     = Department::where('institution_id',Auth::user()->department)->get();
        //                 // $data['all_designation']     = Designation::where('institution_id',Auth::user()->designation)->get();
        //                 // $data['all_division']     = Division::where('institution_id',Auth::user()->division)->get();
        //                 // $data['all_institutions']     = Institutions::whereId(Auth::user()->institution_id)->get();
        //                 $data['all_department']       = Department::where('parent_id',Auth::user()->user_category)->get();
        // 								$data['all_roles']            = Role::where('institution_id',Auth::user()->institution_id)->get();
        // 								$data['all_employees']        = User::where('institution_id',Auth::user()->institution_id)->get();
        // 								$data['all_division']         = Division::where('institution_id',Auth::user()->institution_id)->get();
        // 								$data['all_institutions']     = Institutions::where('id',Auth::user()->institution_id)->get();
        // 								$data['all_designation']      = Designation::where('parent_id', Auth::user()->user_category)->get();
        //                                 $data['all_ministry'] = Ministry::whereId(Auth::user()->institution_id)->get();
        //                                 $data['all_organization_users'] = Office::whereId(Auth::user()->institution_id)->get();
        //                                 $data['all_regulatory_authority'] = Regularityauthority::whereId(Auth::user()->institution_id)->get();
        //                                 $data['all_branch'] = UnitOffice::whereId(Auth::user()->institution_id)->get();
        // 								// echo '<pre>';
        // 								// print_r($data['all_institutions']);die;
        // 								// echo '<pre>';


        // 								// die;


        //             // $departments = DB::table('user_departments')
        //             //     ->where('user_departments.user_id', $id)
        //             //     ->get();
        //             $departments = DB::table('user_departments')
        //                 ->where('user_departments.user_id', $id)
        //                 ->get();


        // 								// $institutions = DB::table('institutions')
        //             //     ->where('institutions.id', $id)
        //             //     ->get();


        // 					// print_r($data['all_designation'] );die;
        //             // $data['all_roles']         = Role::whereInstitutionId(Auth::user()->institution_id)->get();
        //             // $data['all_employees']     = User::whereInstitutionId(Auth::user()->institution_id)->get();
        //             // $data['all_department']    = Department::whereInstitutionId(Auth::user()->institution_id)->get();
        //             // $data['all_designation']   = Designation::whereInstitutionId(Auth::user()->institution_id)->get();
        //             // $data['all_division']      = Division::whereId(Auth::user()->institution_id)->get();
        //             // $data['all_institutions']     = Institutions::whereId(Auth::user()->institution_id)->get();
        //         }


        //         //     


        // $datapl[] = '';
        //         foreach ($departments as $rowpl) {
        //             $datapl[] = $rowpl->department_id;
        //         }
        //         if (count($datapl) != 0) {
        //             $data['user_departments'] = $datapl;
        //         } else {
        //             $data['user_departments'] = "";
        //         }
        //         // $alternate_users = DB::table('alternate_users')
        //         //     ->where('alternate_users.user_id', $id)
        //         //     ->get();
        //         // foreach ($alternate_users as $rowpl) {
        //         //     $datapl[] = $rowpl->alternate_user_id;
        //         // }
        //         // if (count($datapl) != 0) {
        //         //     $data['alternate_users'] = $datapl;
        //         // } else {
        //         //     $data['alternate_users'] = "";
        //         // }



        //         return view('admin.pages.user.edit_user', $data);

        SwitchLanguage(Session::get('language'));
        $abc = \App\Models\User::find($id)->permission_holder;
        foreach ($abc as $rowpl) {
            $datapl[] = "'$rowpl->permision_holder_id'";
            //  print_r($datapl);
        }
        if (isset($datapl)) {
            $data['permission_holders'] = implode(',', $datapl);
        }


        if (Auth::user()->hasRole('super-admin')) {
            $data['all_designation'] = Designation::all();
            $data['all_division'] = Division::all();
            $data['all_institutions'] = Institutions::all();
            $data['all_roles'] = Role::all();
            $data['all_employees'] = User::all();
            $data['all_department'] = Department::all();
            $data['all_ministry'] = Ministry::all();
            $data['all_organization_users'] = Office::all();
            $data['all_regulatory_authority'] = Regularityauthority::all();
            $data['all_branch'] = UnitOffice::all();

            $data['userData'] = DB::table('users')
                ->leftJoin('users_roles', 'users.id', '=', 'users_roles.user_id')
                ->leftJoin('roles', 'users_roles.role_id', '=', 'roles.id')
                ->where('users.id', $id)
                ->select('users.*', 'roles.id AS role_id', 'roles.name AS role_name')
                ->first();

            $departments = DB::table('user_departments')
                ->where('user_departments.user_id', $id)
                ->get();
        } else {


            $data['userData'] = DB::table('users')
                ->leftJoin('users_roles', 'users.id', '=', 'users_roles.user_id')
                ->leftJoin('roles', 'users_roles.role_id', '=', 'roles.id')
                ->where('users.id', $id)
                ->where('users.institution_id', Auth::user()->institution_id)
                ->select('users.*', 'roles.id AS role_id', 'roles.name AS role_name')
                ->first();

            // echo '<pre>';
            // print_r(Auth::user());
            // echo '<pre>';

            // die;
            // $data['all_roles']         = Role::where('institution_id',Auth::user()->role_id)->get();
            // $data['all_employees']     = User::where('institution_id',Auth::user()->user_id)->get();
            // $data['all_department']     = Department::where('institution_id',Auth::user()->department)->get();
            // $data['all_designation']     = Designation::where('institution_id',Auth::user()->designation)->get();
            // $data['all_division']     = Division::where('institution_id',Auth::user()->division)->get();
            $data['all_institutions']     = Institutions::whereId(Auth::user()->institution_id)->get();
            $data['all_department']       = Department::where('institution_id', Auth::user()->institution_id)->get();
            $data['all_roles']            = Role::where('id', Auth::user()->role)->get();
            $data['all_employees']        = User::where('institution_id', Auth::user()->institution_id)->get();
            $data['all_division']         = Division::where('institution_id', Auth::user()->institution_id)->get();
            $data['all_institutions']     = Institutions::where('id', Auth::user()->institution_id)->get();
            $data['all_designation']      = Designation::where('id', Auth::user()->designation)->get();
            $data['all_ministry'] = Ministry::where('id', Auth::user()->ministry_department)->get();
            $data['all_regulatory_authority'] = Regularityauthority::all();
            $data['all_organization_users'] = Office::all();
            $data['all_branch'] = UnitOffice::all();
            // echo '<pre>';
            // print_r($data['all_institutions']);die;
            // echo '<pre>';


            // die;


            // $departments = DB::table('user_departments')
            //     ->where('user_departments.user_id', $id)
            //     ->get();
            $departments = DB::table('user_departments')
                ->where('user_departments.user_id', $id)
                ->get();


            // $institutions = DB::table('institutions')
            //     ->where('institutions.id', $id)
            //     ->get();


            // print_r($data['all_designation'] );die;
            // $data['all_roles']         = Role::whereInstitutionId(Auth::user()->institution_id)->get();
            // $data['all_employees']     = User::whereInstitutionId(Auth::user()->institution_id)->get();
            // $data['all_department']    = Department::whereInstitutionId(Auth::user()->institution_id)->get();
            // $data['all_designation']   = Designation::whereInstitutionId(Auth::user()->institution_id)->get();
            // $data['all_division']      = Division::whereId(Auth::user()->institution_id)->get();
            // $data['all_institutions']     = Institutions::whereId(Auth::user()->institution_id)->get();
        }


        // if ($request->signature) {
        //     $imageName1 = time() . '.' . $request->signature->extension();
        //     $request->signature->move(public_path('user_images'), $imageName1);
        //     $user->signature = $imageName1;
        // }


        //     


        $datapl[] = '';
        foreach ($departments as $rowpl) {
            $datapl[] = $rowpl->department_id;
        }
        if (count($datapl) != 0) {
            $data['user_departments'] = $datapl;
        } else {
            $data['user_departments'] = "";
        }
        // $alternate_users = DB::table('alternate_users')
        //     ->where('alternate_users.user_id', $id)
        //     ->get();
        // foreach ($alternate_users as $rowpl) {
        //     $datapl[] = $rowpl->alternate_user_id;
        // }
        // if (count($datapl) != 0) {
        //     $data['alternate_users'] = $datapl;
        // } else {
        //     $data['alternate_users'] = "";
        // }



        return view('admin.pages.user.edit_user', $data);
    }



    public function editUser($id, $def = null)
    {
        SwitchLanguage(Session::get('language'));
        $abc = \App\Models\User::find($id)->permission_holder;
        foreach ($abc as $rowpl) {
            $datapl[] = "'$rowpl->permision_holder_id'";
            //            print_r($datapl);
        }
        if (isset($datapl)) {
            $data['permission_holders'] = implode(',', $datapl);
        }


        if (Auth::user()->hasRole('super-admin')) {

            $data['all_division'] = Division::all();
            $data['all_designation'] = Designation::where('parent_id', Auth::user()->user_category)->get();
            $data['all_institutions'] = Institutions::all();
            $data['all_roles'] = Role::all();
            $data['all_employees'] = User::all();
            $data['all_department'] = Department::where('parent_id', Auth::user()->user_category)->get();

            $data['userData'] = DB::table('users')
                ->leftJoin('users_roles', 'users.id', '=', 'users_roles.user_id')
                ->leftJoin('roles', 'users_roles.role_id', '=', 'roles.id')
                ->where('users.id', $id)
                ->select('users.*', 'roles.id AS role_id', 'roles.name AS role_name')
                ->first();

            $departments = DB::table('user_departments')
                ->where('user_departments.user_id', $id)
                ->get();
        } else {


            $data['userData'] = DB::table('users')
                ->leftJoin('users_roles', 'users.id', '=', 'users_roles.user_id')
                ->leftJoin('roles', 'users_roles.role_id', '=', 'roles.id')
                ->where('users.id', $id)
                ->where('users.institution_id', Auth::user()->institution_id)
                ->select('users.*', 'roles.id AS role_id', 'roles.name AS role_name')
                ->first();

            // echo '<pre>';
            // print_r(Auth::user());
            // echo '<pre>';

            // die;
            // $data['all_roles']         = Role::where('institution_id',Auth::user()->role_id)->get();
            // $data['all_employees']     = User::where('institution_id',Auth::user()->user_id)->get();
            // $data['all_department']     = Department::where('institution_id',Auth::user()->department)->get();
            // $data['all_designation']     = Designation::where('institution_id',Auth::user()->designation)->get();
            // $data['all_division']     = Division::where('institution_id',Auth::user()->division)->get();
            // $data['all_institutions']     = Institutions::whereId(Auth::user()->institution_id)->get();
            $data['all_department'] = Department::where('parent_id', Auth::user()->user_category)->get();
            $data['all_roles']            = Role::where('institution_id', Auth::user()->institution_id)->get();
            $data['all_employees']        = User::where('institution_id', Auth::user()->institution_id)->get();
            $data['all_division']         = Division::where('institution_id', Auth::user()->institution_id)->get();
            $data['all_institutions']     = Institutions::where('id', Auth::user()->institution_id)->get();
            $data['all_designation']      = Designation::where('parent_id', Auth::user()->user_category)->get();
            // echo '<pre>';
            // print_r($data['all_institutions']);die;
            // echo '<pre>';


            // die;


            $departments = DB::table('user_departments')
                ->where('user_departments.user_id', $id)
                ->get();


            // $institutions = DB::table('institutions')
            //     ->where('institutions.id', $id)
            //     ->get();


            // print_r($data['all_designation'] );die;
            // $data['all_roles']         = Role::whereInstitutionId(Auth::user()->institution_id)->get();
            // $data['all_employees']     = User::whereInstitutionId(Auth::user()->institution_id)->get();
            // $data['all_department']    = Department::whereInstitutionId(Auth::user()->institution_id)->get();
            // $data['all_designation']   = Designation::whereInstitutionId(Auth::user()->institution_id)->get();
            // $data['all_division']      = Division::whereId(Auth::user()->institution_id)->get();
            // $data['all_institutions']     = Institutions::whereId(Auth::user()->institution_id)->get();
        }


        //     

        foreach ($departments as $rowpl) {
            $datapl[] = $rowpl->department_id;
        }
        if (count($datapl) != 0) {
            $data['user_departments'] = $datapl;
        } else {
            $data['user_departments'] = "";
        }
        $alternate_users = DB::table('alternate_users')
            ->where('alternate_users.user_id', $id)
            ->get();
        foreach ($alternate_users as $rowpl) {
            $datapl[] = $rowpl->alternate_user_id;
        }
        if (count($datapl) != 0) {
            $data['alternate_users'] = $datapl;
        } else {
            $data['alternate_users'] = "";
        }



        return view('admin.pages.user.edit_user', $data);
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
        //           print_r($request->permission_holder_id);
        //           die;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            // 'role' => 'required',
            // 'designation' => 'required',
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('user_images'), $imageName);
            $user->image = $imageName;
        }
        //        print_r($request->signature);
        if ($request->signature) {
            $imageName1 = time() . '.' . $request->signature->extension();
            $request->signature->move(public_path('user_images'), $imageName1);
            $user->signature = $imageName1;
        }

        $user->email = $request->email;
        $user->user_id = $request->user_id;
        $user->institution_id = $request->institution_id;
        $user->designation = $request->designation;
        $user->division = $request->division;
        $user->description = $request->description;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = $request->role;
        $user->user_type = $request->user_type;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        $user_role['role_id'] = $request->role;
        if ($request->role == '1') {
            $user->user_category = 1;
        } else if ($request->role == '9') {
            $user->user_category = 2;
        } else if ($request->role == '12') {
            $user->user_category = 3;
        } else if ($request->role == '13') {
            $user->user_category = 4;
        } else if ($request->role == '14') {
            $user->user_category = 5;
        } else if ($request->role == '15') {
            $user->user_category = 6;
        }
        $user_role['user_id'] = $user->id;

        DB::table('users_roles')
            // ->where('role_id', '=', $request->role)
            ->where('user_id', '=', $user->id)
            ->delete();

        $user_save = DB::table('users_roles')->insert($user_role);

        $permissions = DB::table('roles_permissions')
            ->where('role_id', $request->role)
            ->get();
        //       print_r($permissions);
        foreach ($permissions as $rowPermission) {
            DB::table('users_permissions')
                ->where('user_id', '=', $user->id)
                ->where('permission_id', '=', $rowPermission->permission_id)
                ->delete();
            $datasave['user_id'] = $user->id;
            $datasave['permission_id'] = $rowPermission->permission_id;
            DB::table('users_permissions')->insert($datasave);
        }
        // if ($request->permission_holder_id) {
        //     DB::table('user_leave_permission')
        //         ->where('user_id', '=', $user->id)
        //         //                    ->where('permision_holder_id','=',$rowId)
        //         ->delete();
        //     foreach ($request->permission_holder_id as $rowId) {
        //         $datasave1['user_id'] = $user->id;
        //         $datasave1['permision_holder_id'] = $rowId;
        //         $datasave1['created_by'] = Auth::user()->id;
        //         $datasave1['status'] = 1;
        //         DB::table('user_leave_permission')
        //             ->insert($datasave1);
        //     }
        // }

        if ($request->department_id) {
            DB::table('user_departments')
                ->where('user_id', '=', $user->id)
                ->delete();
            foreach ($request->department_id as $rowId) {
                $datasave2['user_id'] = $user->id;
                $datasave2['department_id'] = $rowId;
                DB::table('user_departments')->insert($datasave2);
            }
        }
        if ($request->alter_user_id) {
            DB::table('alternate_users')
                ->where('user_id', '=', $user->id)
                ->delete();
            foreach ($request->alter_user_id as $rowId) {
                $datasave3['user_id'] = $user->id;
                $datasave3['alternate_user_id'] = $rowId;
                $datasave3['status'] = 1;
                DB::table('alternate_users')->insert($datasave3);
            }
        }

        if ($user_save) {
            Session::put(['title' => 'Alert', 'message' => 'User has been updated successfully!']); //             
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
        $user = User::find($id);
        $user->delete();
        if ($user) {
            Session::put(['title' => 'Alert', 'message' => 'User has been deleted successfully!']); //             
        }

        return redirect('users');
    }

    /* onchange Authorise */

    public function userOnchange()
    {
        if (Auth::user()->user_category == 1) {
            $sub_forms = DB::table('roles')->where('id', 1)->get();
        } elseif (Auth::user()->user_category == 2) {
            $sub_forms = DB::table('roles')->where('id', 11)->get();
        } elseif (Auth::user()->user_category == 3) {
            $sub_forms = DB::table('roles')->where('id', 12)->get();
        } elseif (Auth::user()->user_category == 4) {
            $sub_forms = DB::table('roles')->where('id', 13)->get();
        } elseif (Auth::user()->user_category == 5) {
            $sub_forms = DB::table('roles')->where('id', 14)->get();
        } elseif (Auth::user()->user_category == 6) {
            $sub_forms = DB::table('roles')->where('id', 15)->get();
        }

        // $sub_forms = DB::table('roles')->where('id', Auth::user()->user_category)->get();
        //      print_r($request->all());
        $output = '';
        $output .= ' <option value="" selected disabled>Select</option>';
        foreach ($sub_forms as $row) {
            $output .= '<option value="' . $row->id . '"  selected>' . $row->name . '</option>';
        }
        return $output;
    }

    public function authOnchange()
    {

        if (Auth::user()->user_category == 1) {
            $sub_forms = DB::table('roles')->where('id', 11)->get();
        } elseif (Auth::user()->user_category == 2) {
            $sub_forms = DB::table('roles')->where('id', 12)->get();
        } elseif (Auth::user()->user_category == 3) {
            $sub_forms = DB::table('roles')->where('id', 13)->get();
        } elseif (Auth::user()->user_category == 4) {
            $sub_forms = DB::table('roles')->where('id', 14)->get();
        } elseif (Auth::user()->user_category == 5) {
            $sub_forms = DB::table('roles')->where('id', 15)->get();
        }

        //      print_r($request->all());
        $output = '';
        $output .= ' <option value="" selected disabled>Select</option>';
        foreach ($sub_forms as $row) {
            $output .= '<option value="' . $row->id . '"  selected>' . $row->name . '</option>';
        }
        return $output;
    }


    public function departmentOnchange()
    {

        $sub_forms = DB::table('departments')->where('parent_id', Auth::user()->user_category)->get();
        $output = '';
        // $output .= ' <option value=""  >Select</option>';
        foreach ($sub_forms as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        return $output;
    }
    public function departmentOnchangeAuth()
    {

        $sub_forms = DB::table('departments')->where('parent_id', Auth::user()->user_category + 1)->get();
        $output = '';
        // $output .= ' <option value=""  >Select</option>';
        foreach ($sub_forms as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        return $output;
    }

    public function designationOnchange()
    {

        $sub_forms = DB::table('designations')->where('parent_id', Auth::user()->user_category)->get();
        $output = '';
        // $output .= ' <option value=""  >Select</option>';
        foreach ($sub_forms as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        return $output;
    }
    public function designationOnchangeAuth()
    {

        $sub_forms = DB::table('designations')->where('parent_id', Auth::user()->user_category + 1)->get();
        $output = '';
        // $output .= ' <option value=""  >Select</option>';
        foreach ($sub_forms as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        return $output;
    }


    /* activateUserView */

    public function activateUserView($userId)
    {
        DB::table('users')->where('id', $userId)->update(['status' => true]);
        Session::put(['title' => 'Activation Alert', 'message' => 'ইউজার এক্টিভেট হয়েছে ']);
    }
    public function InactivateUserView($userId)
    {
        DB::table('users')->where('id', $userId)->update(['status' => false]);
        Session::put(['title' => 'InActivation Alert', 'message' => 'ইউজার ইনাক্টিভেটে হয়েছে ']);
    }
}