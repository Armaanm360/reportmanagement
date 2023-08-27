<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserForm extends Model
{

	protected $table = "user_forms";
	public $timestamps = false;

	// turn off only updated_at
	const UPDATED_AT = false;


	public function groupUser()
	{
		return $this->hasMany('GroupUser');
	}


	public function getDepartmentName($id)
	{

		if (Auth::user()->user_category == 1) {
			$id = Auth::user()->division;
			$getname = DB::table('divisions')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
		if (Auth::user()->user_category == 2) {
			$id = Auth::user()->ministry_department;
			$getname = DB::table('ministries')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
		if (Auth::user()->user_category == 3) {
			$id = Auth::user()->regulatory_authority;
			$getname = DB::table('regularityauthorities')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
		if (Auth::user()->user_category == 4) {
			$id = Auth::user()->institution_id;
			$getname = DB::table('institutions')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
		if (Auth::user()->user_category == 5) {
			$id = Auth::user()->organization_user;
			$getname = DB::table('offices')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
		if (Auth::user()->user_category == 6) {
			$id = Auth::user()->branch_user;
			$getname = DB::table('unit_offices')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
	}


	/* get back authorize user */


	public function getAuthorizeuser($id)
	{
		$id = Auth::user()->id;
		$a = $id - 1;
		$b = DB::table('users')->where('user_category', $a)->get();
		if (isset($b[0]->id)) {
			return $b[0]->id;
		}
	}


	public function getDeptNameUserWise($id)
	{


		$user = DB::table('users')->where('id', $id)->get();
		if (isset($user[0]->user_category)) {
			$user_category = $user[0]->user_category;
			if ($user_category == 1) {
				$dept_id   =	$user[0]->division;
				$dept_name = DB::table('divisions')->where('id', $dept_id)->get();
				if (isset($dept_name[0])) {
					return $dept_name[0]->name;
				}
			} elseif ($user_category == 2) {
				$dept_id   =	$user[0]->ministry_department;
				$dept_name = DB::table('ministries')->where('id', $dept_id)->get();
				if (isset($dept_name[0])) {
					return $dept_name[0]->name;
				}
			} elseif ($user_category == 3) {
				$dept_id   =	$user[0]->regulatory_authority;
				$dept_name = DB::table('regularityauthorities')->where('id', $dept_id)->get();
				if (isset($dept_name[0])) {
					return $dept_name[0]->name;
				}
			} elseif ($user_category == 4) {
				$dept_id   =	$user[0]->institution_id;
				$dept_name = DB::table('institutions')->where('id', $dept_id)->get();
				if (isset($dept_name[0])) {
					return $dept_name[0]->name;
				}
			} elseif ($user_category == 5) {
				$dept_id   =	$user[0]->organization_user;
				$dept_name = DB::table('offices')->where('id', $dept_id)->get();
				if (isset($dept_name[0])) {
					return $dept_name[0]->name;
				}
			} elseif ($user_category == 6) {
				$dept_id   =	$user[0]->branch_user;
				$dept_name = DB::table('unit_offices')->where('id', $dept_id)->get();
				if (isset($dept_name[0])) {
					return $dept_name[0]->name;
				}
			}
		}
	}
	public function getUserSignature($id)
	{



		$var = DB::table('users')->where('id', $id)->get();
		if (isset($var[0])) {
			return $var[0]->signature;
		}
	}

	public function getUserFormById($id)
	{
		$var = DB::table('forms')->where('id', $id)->get();

		if (isset($var[0])) {
			return $var[0]->form_name;
		}
	}


	public function getUserName($id)
	{
		$var = DB::table('users')->where('id', $id)->get();
		if (isset($var[0])) {
			return $var[0]->name;
		}
	}


	public function getUserCategory($id)
	{
		$var = DB::table('users')->where('id', $id)->get();
		if (isset($var[0])) {
			return $var[0]->user_category;
		}
	}


	public function getRole($id)
	{
		$var = DB::table('roles')->where('id', $id)->get();
		if (isset($var[0])) {
			return $var[0]->name;
		}
	}
	public function getRoleByUser($id)
	{
		$var = DB::table('users')->where('id', $id)->get();
		$role = $var[0]->role;
		$access_role = DB::table('alternative_role_levels')->where('role_id', $role)->get();
		if (isset($access_role[0])) {
			return $access_role[0]->role_name;
		}

	}


	public function getUserId($id)
	{
		$var = DB::table('users')->where('user_category', $id)->get();

		if (isset($var[0])) {
			return $var[0]->id;
		}
	}


	public function getDuration($formid, $person)
	{
		$var = DB::table('user_forms')->where('sub_form_id', $formid)->where('reciever_user_id', $person)->get();

		if (isset($var[0])) {
			return $var[0]->duration;
		}
	}


	public function getFormId($table_name)
	{
		$var = DB::table('form_tables')->where('table_name', $table_name)->get();

		if (isset($var[0])) {
			return $var[0]->form_id;
		}
	}


	public function getDesignation($user_id)
	{
		$var = DB::table('designations')->where('id', $user_id)->get();

		if (isset($var[0])) {
			return $var[0]->name;
		}
	}

	public function getDepartment($user_id)
	{
		if (Auth::user()->user_category == 1) {
			$id = Auth::user()->division;
			$getname = DB::table('divisions')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
		if (Auth::user()->user_category == 2) {
			$id = Auth::user()->ministry_department;
			$getname = DB::table('ministries')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
		if (Auth::user()->user_category == 3) {
			$id = Auth::user()->regulatory_authority;
			$getname = DB::table('regularityauthorities')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
		if (Auth::user()->user_category == 4) {
			$id = Auth::user()->institution_id;
			$getname = DB::table('institutions')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
		if (Auth::user()->user_category == 5) {
			$id = Auth::user()->organization_user;
			$getname = DB::table('offices')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
		if (Auth::user()->user_category == 6) {
			$id = Auth::user()->branch_user;
			$getname = DB::table('unit_offices')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->name;
			}
		}
	}
	public function getDepartmentId($user_id)
	{
		if (Auth::user()->user_category == 1) {
			$id = Auth::user()->division;
			$getname = DB::table('divisions')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->id;
			}
		}
		if (Auth::user()->user_category == 2) {
			$id = Auth::user()->ministry_department;
			$getname = DB::table('ministries')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->id;
			}
		}
		if (Auth::user()->user_category == 3) {
			$id = Auth::user()->regulatory_authority;
			$getname = DB::table('regularityauthorities')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->id;
			}
		}
		if (Auth::user()->user_category == 4) {
			$id = Auth::user()->institution_id;
			$getname = DB::table('institutions')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->id;
			}
		}
		if (Auth::user()->user_category == 5) {
			$id = Auth::user()->organization_user;
			$getname = DB::table('offices')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->id;
			}
		}
		if (Auth::user()->user_category == 6) {
			$id = Auth::user()->branch_user;
			$getname = DB::table('unit_offices')->where('id', $id)->get();
			if ($getname[0]) {
				return $getname[0]->id;
			}
		}
	}

	// public function getDivisionType($user_id)
	// {
	// 	if (Auth::user()->user_category == 1) {
	// 		return 'division';
	// 	}elseif(Auth::user()->user_category == 2){
	// 		return 'ministrydept';
	// 	} elseif (Auth::user()->user_category == 3) {
	// 		return 'regauthority';
	// 	} elseif (Auth::user()->user_category == 4) {
	// 		return 'institution_id';
	// 	} elseif (Auth::user()->user_category == 5) {
	// 		return 'orguser';
	// 	} elseif (Auth::user()->user_category == 6) {
	// 		return 'branch';
	// 	}

	// }


	public function getDivisionType($user_id)
	{
		if (Auth::user()->user_category == 1) {
			return 'division';
		} elseif (Auth::user()->user_category == 2) {
			return 'ministry_department';
		} elseif (Auth::user()->user_category == 3) {
			return 'regauthority';
		} elseif (Auth::user()->user_category == 4) {
			return 'institution_id';
		} elseif (Auth::user()->user_category == 5) {
			return 'orguser';
		} elseif (Auth::user()->user_category == 6) {
			return 'branch';
		}
	}


	public function creatorGet($id)
	{
		//$var = DB::table('users')->where('id', $user_id)->get();
		$var = DB::table('users')->where('id', Auth::user()->id)->get();

		if (isset($var[0])) {
			return $var[0]->user_creator;
		}
	}
	public function getEntryUser($user_id)
	{
		//$var = DB::table('users')->where('id', $user_id)->get();
		$var = DB::table('users')->where('user_creator', $user_id)->where('user_type', 'ENTRY_USER')->get();

		if (isset($var[0])) {
			return $var[0]->id;
		}
	}

	public function getBlanck($tableid, $userId)
	{
		$var = DB::table($tableid)->where('created_by', $userId)->get();

		if (isset($var[0])) {
			return $var[0]->created_by;
		}
	}


	public function insertValueAtPosition($arr, $insertedArray, $position)
	{
		$i = 0;
		$new_array = [];
		foreach ($arr as $key => $value) {
			if ($i == $position) {
				foreach ($insertedArray as $ikey => $ivalue) {
					$new_array[$ikey] = $ivalue;
				}
			}
			$new_array[$key] = $value;
			$i++;
		}
		return $new_array;
	}

	 public function getDivisionName($user_category)
	{

		if ($user_category == 1) {
			return 'ICT CELL';
		}elseif ($user_category == 2) {
			return 'Ministry Deparment';
		}elseif ($user_category == 3) {
			return 'All Regulatory';
		}elseif ($user_category == 4) {
			return 'All Organization Head';
		}elseif ($user_category == 5) {
			return 'Organization User';
		}elseif ($user_category == 6) {
			return 'Branch User';
		}
		
	}


	
	public function getDepartmentUser($user_id)
	{
		$user = DB::table('users')->where('id',$user_id)->get();
		 $category = $user[0]->user_category;
          if ($category == 1) {
						$ict =  DB::table('divisions')->get();
						return $ict[0]->name;
					}elseif($category == 2){
			      $ict =  DB::table('ministries')->get();
			      return $ict[0]->name;
					}elseif($category == 3){
			     $ict =  DB::table('regularityauthorities')->get();
			     return $ict[0]->name;
					}elseif($category == 4){
			     $ict =  DB::table('institutions')->get();
			     return $ict[0]->name;
					}elseif($category == 5){
		       $ict =  DB::table('offices')->get();
			     return $ict[0]->name;
					}elseif($category == 6){
			     $ict =  DB::table('unit_offices')->get();
			     return $ict[0]->name;
					}


		// if (isset($category) == 1) {
		// return DB::table('');
		// } elseif (isset($category) == 2) {
		// 	return 'miami';
		// } elseif (isset($category) == 3) {
		// 	return 'fanfj';
		// } elseif (isset($category) == 4) {
		// 	return 'fhfequjqfefjq';
		// } elseif (isset($category) == 5) {
		// return 'eefoeek';
		// } elseif (isset($category) == 6) {
		// 	return 'homely';
		// }

	}
	
}