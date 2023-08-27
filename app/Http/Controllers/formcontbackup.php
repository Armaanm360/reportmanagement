<?php

namespace App\Http\Controllers;

use App\Events\Notification;
use App\Http\Controllers\Admin\CommonController;
use App\Models\AnnualPerformanceAgreenment;
use App\Models\AnnualPerformanceAgreenmentTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\AnnualPerformanceQuarterly;
use App\Models\AppendixOneLines;
use App\Models\AppendixOneTableka;
use App\Models\AppendixOneTablekha;
use App\Models\AutonomousAndOtherInstitutions;
use App\Models\AutonomousAndOtherInstitutionsSub;
use App\Models\BudgetBranchRelevantAPAReportFormat;
use App\Models\BudgetBranchRelevantBudgetAPAReportFormat;
use App\Models\CommonModel;
use App\Models\ComplaintRedressalActionPlan;
use App\Models\NationalIntegrityStrategyActionPlanModel;
use App\Models\Department;
use App\Models\DevelopmentProjectAnnualProgram;
use App\Models\Division;
use App\Models\EGovernanceInnovationActionPlan;
use App\Models\ExcludingAnnualDevelopmentPrograms;
use App\Models\ExcludingAnnualDevelopmentProgramsSub;
use App\Models\FinancialYeartheRightInformation;
use App\Models\FiscalYearBudgetImplementationProgress;
use App\Models\FourteenTable;
use App\Models\Group;
use App\Models\GroupUser;
use App\Models\ImplementServiceDeliveryCommitments;
use App\Models\Institutions;
use App\Models\Ministry;
use App\Models\Office;
use App\Models\RelevantBudgetAPAReportFormat;
use App\Models\SectionThreeFirstPart;
use App\Models\SectionThreeFirstPartSub;
use App\Models\SectionThreeSecondPart;
use App\Models\SectionThreeSecondPartSub;
use App\Models\TableTwenty;
use App\Models\TableTwo;
use App\Models\TableTwoSub;
use App\Models\TagList;
use App\Models\TotalManagementDevelopmentCosts;
use App\Models\TotalManagementDevelopmentCostsSub;
use App\Models\UnitOffice;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\VarDumper\Cloner\Data;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PDF;

$user = Auth::user();

class FormController extends Controller
{

    public function create_form()
    {
        return view('admin.pages.form.create');
    }

    // parameter form show 

    public function parameterForm($id)
    {
        SwitchLanguage(Session::get('language'));
        $data['dept'] = Department::all();
        $data['inst'] = Institutions::all();
        $data['form'] = DB::table('default_sub_forms')->where('id', $id)->get();
        return view('admin.pages.default_forms.parameters', $data);
    }


    /* test purpose */
    public  function get_test()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.test');
    }

    /* store budget branch */
    public  function form_budget_branch_submit(Request $request)
    {

        $format = 'form_' . date("is") . mt_rand(1000, 99999);

        for ($i = 1; $i <= 13; $i++) {
            $data = new RelevantBudgetAPAReportFormat();
            $serial = 'serial_' . $i;
            $subject = 'subject_' . $i;
            $sender = 'sender_' . $i;
            $report_monthly = 'report_monthly_' . $i;
            $report_quarterly = 'report_quarterly_' . $i;
            $report_half_yearly = 'report_half_yearly_' . $i;
            $report_yearly = 'report_yearly_' . $i;
            $report_instant = 'report_instant_' . $i;
            $appnedix = 'appnedix_' . $i;
            $data['serial'] = $request->$serial;
            $data['subject']   = $request->$subject;
            $data['sender']   = $request->$sender;
            $data['report_monthly']   = $request->$report_monthly;
            $data['report_quarterly']   = $request->$report_quarterly;
            $data['report_half_yearly']   = $request->$report_half_yearly;
            $data['report_yearly']   = $request->$report_yearly;
            $data['report_instant']   = $request->$report_instant;
            $data['appnedix']   = $request->$appnedix;
            $data['unique_form_id']   = $format;
            $data->save();
        }




        for ($i = 14; $i <= 20; $i++) {
            $data = new AnnualPerformanceAgreenmentTable();
            $serial = 'serial_' . $i;
            $subject = 'subject_' . $i;
            $sender = 'sender_' . $i;
            $report_monthly = 'report_monthly_' . $i;
            $report_quarterly = 'report_quarterly_' . $i;
            $report_half_yearly = 'report_half_yearly_' . $i;
            $report_yearly = 'report_yearly_' . $i;
            $report_instant = 'report_instant_' . $i;
            $appnedix = 'appnedix_' . $i;
            $data['serial'] = $request->$serial;
            $data['subject']   = $request->$subject;
            $data['sender']   = $request->$sender;
            $data['report_monthly']   = $request->$report_monthly;
            $data['report_quarterly']   = $request->$report_quarterly;
            $data['report_half_yearly']   = $request->$report_half_yearly;
            $data['report_yearly']   = $request->$report_yearly;
            $data['report_instant']   = $request->$report_instant;
            $data['appnedix']   = $request->$appnedix;
            $data['unique_form_id']   = $format;
            $data->save();
        }

        foreach ($request->apa as $value) {

            $data = new AnnualPerformanceAgreenment();
            $data['apa'] = $value;
            $data['unique_form_id']   = $format;
            $data->save();
        }

        foreach ($request->budget as $value) {

            $data = new BudgetBranchRelevantAPAReportFormat();
            $data['budget'] = $value;
            $data['unique_form_id']   = $format;
            $data->save();
        }
    }
    //end


    /* budget_branch_update */
    public function budget_branch_update(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);


        $bud = $request->budget_id;
        $apa =  $request->apa_id;
        $unique_form_id = $request->unique_form_id;

        for ($x = 1; $x <= $bud; $x += 1) {
            $a = 'budget_' . $x;
            $relevnt['budget'] = $request->$a;

            DB::table('budget_branch_relevant_apareportformat')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($relevnt);
        }



        for ($i = 1; $i <= $apa; $i += 1) {
            $inc = 'apa_' . $i;
            $relapa['apa'] = $request->$inc;
            DB::table('annual_performance_agreenment_apa')->where('id', '=', $i)->where('unique_form_id', '=', $unique_form_id)->update($relapa);
        }





        foreach ($request->row_id as $row) {
            $getid = 'getid_' . $row;
            $serial = 'serial_' . $row;
            $subject = 'subject_' . $row;
            $sender = 'sender_' . $row;
            $report_monthly = 'report_monthly_' . $row;
            $report_quarterly = 'report_quarterly_' . $row;
            $report_half_yearly = 'report_half_yearly_' . $row;
            $report_yearly = 'report_yearly_' . $row;
            $report_instant = 'report_instant_' . $row;
            $appnedix = 'appnedix_' . $row;
            $datasss['serial'] = $request->$serial;
            $datasss['subject']   = $request->$subject;
            $datasss['sender']   = $request->$sender;
            $datasss['report_monthly']   = $request->$report_monthly;
            $datasss['report_quarterly']   = $request->$report_quarterly;
            $datasss['report_half_yearly']   = $request->$report_half_yearly;
            $datasss['report_yearly']   = $request->$report_yearly;
            $datasss['report_instant']   = $request->$report_instant;
            $datasss['appnedix']   = $request->$appnedix;
            DB::table('relevant_budget_apa_report_format')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($datasss);
        }


        foreach ($request->row_id as $row) {

            $getid = 'getid_' . $row;
            $datasss = AnnualPerformanceAgreenmentTable::find($getid);
            $serial = 'serial_' . $row;
            $subject = 'subject_' . $row;
            $sender = 'sender_' . $row;
            $report_monthly = 'report_monthly_' . $row;
            $report_quarterly = 'report_quarterly_' . $row;
            $report_half_yearly = 'report_half_yearly_' . $row;
            $report_yearly = 'report_yearly_' . $row;
            $report_instant = 'report_instant_' . $row;
            $appnedix = 'appnedix_' . $row;
            $datasss['serial'] = $request->$serial;
            $datasss['subject']   = $request->$subject;
            $datasss['sender']   = $request->$sender;
            $datasss['report_monthly']   = $request->$report_monthly;
            $datasss['report_quarterly']   = $request->$report_quarterly;
            $datasss['report_half_yearly']   = $request->$report_half_yearly;
            $datasss['report_yearly']   = $request->$report_yearly;
            $datasss['report_instant']   = $request->$report_instant;
            $datasss['appnedix']   = $request->$appnedix;
            DB::table('annual_performance_agreenment_table')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($datasss);
        }
    }

    /* budget brunch store unique */
    /* unique store budget brunch*/
    public function form_budget_branch_store_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        for ($i = 1; $i <= 13; $i++) {
            $data = new RelevantBudgetAPAReportFormat();
            $serial = 'serial_' . $i;
            $subject = 'subject_' . $i;
            $sender = 'sender_' . $i;
            $report_monthly = 'report_monthly_' . $i;
            $report_quarterly = 'report_quarterly_' . $i;
            $report_half_yearly = 'report_half_yearly_' . $i;
            $report_yearly = 'report_yearly_' . $i;
            $report_instant = 'report_instant_' . $i;
            $appnedix = 'appnedix_' . $i;
            $data['serial'] = $request->$serial;
            $data['subject']   = $request->$subject;
            $data['sender']   = $request->$sender;
            $data['report_monthly']   = $request->$report_monthly;
            $data['report_quarterly']   = $request->$report_quarterly;
            $data['report_half_yearly']   = $request->$report_half_yearly;
            $data['report_yearly']   = $request->$report_yearly;
            $data['report_instant']   = $request->$report_instant;
            $data['appnedix']   = $request->$appnedix;
            $data['unique_form_id']   = $format;
            $data->save();
        }




        for ($i = 14; $i <= 20; $i++) {
            $data = new AnnualPerformanceAgreenmentTable();
            $serial = 'serial_' . $i;
            $subject = 'subject_' . $i;
            $sender = 'sender_' . $i;
            $report_monthly = 'report_monthly_' . $i;
            $report_quarterly = 'report_quarterly_' . $i;
            $report_half_yearly = 'report_half_yearly_' . $i;
            $report_yearly = 'report_yearly_' . $i;
            $report_instant = 'report_instant_' . $i;
            $appnedix = 'appnedix_' . $i;
            $data['serial'] = $request->$serial;
            $data['subject']   = $request->$subject;
            $data['sender']   = $request->$sender;
            $data['report_monthly']   = $request->$report_monthly;
            $data['report_quarterly']   = $request->$report_quarterly;
            $data['report_half_yearly']   = $request->$report_half_yearly;
            $data['report_yearly']   = $request->$report_yearly;
            $data['report_instant']   = $request->$report_instant;
            $data['appnedix']   = $request->$appnedix;
            $data['unique_form_id']   = $format;
            $data->save();
        }

        foreach ($request->apa as $value) {

            $data = new AnnualPerformanceAgreenment();
            $data['apa'] = $value;
            $data['unique_form_id']   = $format;
            $data->save();
        }

        foreach ($request->budget as $value) {

            $data = new BudgetBranchRelevantAPAReportFormat();
            $data['budget'] = $value;
            $data['unique_form_id']   = $format;
            $data->save();
        }
    }

    /* end of unique store 1.2.2 */
    /* ****** */



    /* end update */

    /* view_form_budget_branch_submit */
    public function view_form_budget_branch()
    {

        SwitchLanguage(Session::get('language'));
        $budget = BudgetBranchRelevantAPAReportFormat::all();
        $relapa = RelevantBudgetAPAReportFormat::all();
        $apa    = AnnualPerformanceAgreenment::all();
        $apat   = AnnualPerformanceAgreenmentTable::all();


        return view('admin.pages.default_forms.view_form.view_budget_branch', compact('budget', 'relapa', 'apa', 'apat'));
    }
    /* end form_budget_branch_submit */


  









   


    public function view_form_1_1_1()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = FiscalYearBudgetImplementationProgress::all();
        return view('admin.pages.default_forms.view_form.view_form_one_point_one_point_one', $data);
    }

    public function view_form_1_1_2()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = AutonomousAndOtherInstitutions::all();
        return view('admin.pages.default_forms.view_form.view_form_one_point_one_point_two', $data);
    }


    public function view_form_1_2_1()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = ExcludingAnnualDevelopmentPrograms::all();
        return view('admin.pages.default_forms.view_form.view_form_one_point_two_point_one', $data);
    }


    public function view_form_1_2_2()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = DevelopmentProjectAnnualProgram::all();
        return view('admin.pages.default_forms.view_form.view_form_one_point_two_point_two', $data);
    }

    public function view_form_1_3()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = TotalManagementDevelopmentCosts::all();
        return view('admin.pages.default_forms.view_form.view_form_one_point_three', $data);
    }

    public function view_form_2_1()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = AnnualPerformanceQuarterly::all();
        $data['division'] = Division::all();






        $years = AnnualPerformanceQuarterly::select('years')->take(1)->get();
        return view('admin.pages.default_forms.view_form.view_form_two_point_one', $data, compact('years'));
    }


    public function view_form_2_2_1()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = NationalIntegrityStrategyActionPlanModel::all();
        //        print_r($data);die;
        return view('admin.pages.default_forms.view_form.view_form_two_point_two_point_one', $data);
    }


    public function view_form_2_2_2()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = EGovernanceInnovationActionPlan::all();
        return view('admin.pages.default_forms.view_form.view_form_two_point_two_point_two', $data);
    }



    public function view_form_2_2_3()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = ComplaintRedressalActionPlan::all();
        return view('admin.pages.default_forms.view_form.view_form_two_point_two_point_three', $data);
    }


    public function CreateFormController()
    {
        return view('admin.pages.testform.view_form_test');
    }

    public function CreateFormControllerDemo()
    {
        return view('admin.pages.testform.view_form_test_demo');
    }


    // public function CreateFormControllerDemoSecond()
    // {
    //     return view('admin.pages.testform.view_form_test_demo_sec');
    // }
        public function addMore()
    {
        return view('admin.pages.testform.view_form_test_demo_sec');
    }


    public function addMorePost(Request $request)
    {
        $rules = [];


        // foreach($request->input('name') as $key => $value) {
        //     $rules["name.{$key}"] = 'required';
        // }


       // $validator = Validator::make($request->all(), $rules);

       $tabname = $request->name;


     Schema::create($tabname, function (Blueprint $table) {
        $table->increments('id');
        $table->timestamps();
        foreach ($variable as $key => $value) {
            # code...
        }
    });       
    

            
            // foreach($request->input('name') as $key => $value) {
            //    $addmore = new Taglist();
            //    $addmore['name'] = $value;
            //    $addmore->save();

            // }


             return response()->json(['success'=>'done']);
 


        // return response()->json(['error'=>$validator->errors()->all()]);
    }
          
            

    

    

    public function view_form_2_2_4()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = ImplementServiceDeliveryCommitments::all();
        return view('admin.pages.default_forms.view_form.view_form_two_point_two_point_four', $data);
    }

    public function view_form_2_2_5()
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = FinancialYeartheRightInformation::all();

        return view('admin.pages.default_forms.view_form.view_form_two_point_two_point_five', $data);
    }


    /* view_appendix_one */
    public function view_appendix_one()
    {

        SwitchLanguage(Session::get('language'));
        $lines        = AppendixOneLines::orderBy('id', 'DESC')->take(1)->get();
        $table_ka     = AppendixOneTableka::all();
        $table_kha    = AppendixOneTablekha::latest()->take(2)->get();
        return view('admin.pages.default_forms.view_form.view_appendix_one', compact('lines', 'table_ka', 'table_kha'));
    }
    /* end form_budget_branch_submit */

    /* view_appendix_two */
    public function view_appendix_two()
    {

        SwitchLanguage(Session::get('language'));
        $lines        = DB::table('appendix_two_mis')->take(1)->get();
        $table_ka     = DB::table('appendix_two_table_ka')->latest()->take(2)->get();
        $table_kha    = DB::table('appendix_two_table_kha')->latest()->take(2)->get();

        return view('admin.pages.default_forms.view_form.view_appendix_two', compact('lines', 'table_ka', 'table_kha'));
    }

    /* view form appendix three */
    public function view_appendix_three()
    {

        SwitchLanguage(Session::get('language'));
        $lines           = DB::table('appendix_three_mis')->latest()->take(2)->get();
        $table_three     = DB::table('appendix_three_table')->latest()->take(1)->get();

        return view('admin.pages.default_forms.view_form.view_appendix_three', compact('lines', 'table_three'));
    }
    /* end form_budget_branch_submit */

    /* view form appendix three */
    public function view_appendix_four()
    {
        SwitchLanguage(Session::get('language'));
        $lines           = DB::table('appendix_four_mis')->latest()->take(2)->get();
        $table_three     = DB::table('appendix_four_table')->latest()->take(3)->get();

        return view('admin.pages.default_forms.view_form.view-appendix_four', compact('lines', 'table_three'));
    }
    /* end form_budget_branch_submit */


    /* view form appendix five */
    public function view_appendix_five(Request $request)
    {
        SwitchLanguage(Session::get('language'));
        $data['mis8']           = DB::table('appendix_five_mis')->whereNotNull('budget_sub8')->take(1)->get();
        $data['mis9']           = DB::table('appendix_five_mis')->whereNotNull('budget_sub9')->take(1)->get();
        $data['mis2009']        = DB::table('appendix_five_mis')->whereNotNull('budget_sub2009')->take(1)->get();
        $data['tab5']           = DB::table('appendix_five_table')->get();
        return view('admin.pages.default_forms.view_form.view-appendix_five', $data);
    }
    /* end of view */

    /* view form appendix six */
    public function view_appendix_six()
    {
        SwitchLanguage(Session::get('language'));
        $lines           = DB::table('appendix_six_claims')->latest()->get();
        $head1           = DB::table('appendix_six_claims')->whereNotNull('claim_1_head')->take(1)->get();
        $head2           = DB::table('appendix_six_claims')->whereNotNull('claim_2_head')->take(1)->get();
        $head3           = DB::table('appendix_six_claims')->whereNotNull('claim_3_head')->take(1)->get();
        $claim_1         = DB::table('appendix_six_claims')->whereNotNull('claim_1')->take(7)->get();
        $claim_3         = DB::table('appendix_six_claims')->whereNotNull('claim_3')->take(10)->get();
        $claim_3_1       = DB::table('appendix_six_claims')->whereNotNull('claim_3_1')->take(5)->get();
        $budget_sub      = DB::table('appendix_six_claims')->whereNotNull('budget_sub')->take(2)->get();
        $lines           = DB::table('appendix_six_claims')->latest()->get();
        $table_six       = DB::table('appendix_six_claims_table')->take(4)->get();
        return view('admin.pages.default_forms.view_form.view-appendix_six', compact('lines', 'table_six', 'head1', 'head2', 'head3', 'claim_1', 'claim_3', 'claim_3_1', 'budget_sub'));
    }
    /* end appendix six */

    /* view appendix seven */
    // public function view_appendix_seven()
    // {
    //     SwitchLanguage(Session::get('language'));
    //     $data['budget_sub']          = DB::table('appendix_seven_points')->whereNotNull('budget_sub')->take(3)->get();
    //     $data['point_1_0']           = DB::table('appendix_seven_points')->whereNotNull('point_1_0')->take(1)->get();
    //     $data['point_1_0']           = DB::table('appendix_seven_points')->whereNotNull('point_1_0')->take(1)->get();
    //     $data['point_1_0']           = DB::table('appendix_seven_points')->whereNotNull('point_1_0')->take(1)->get();
    //     $data['point_1_1']           = DB::table('appendix_seven_points')->whereNotNull('point_1_1')->take(1)->get();
    //     return view('admin.pages.default_forms.view_form.view_appendix_seven', $data);
    // }


    /* view form appendix eight */

    public function view_appendix_eight(Request $request)
    {
        SwitchLanguage(Session::get('language'));
        $data['first_part']           = DB::table('section_three_first_part_appeight')->take(1)->get();
        $data['second_part']           = DB::table('section_three_second_part_appeight')->take(1)->get();
        $data['outcomes']           = DB::table('section_two_outcome_eight')->take(1)->get();
        $data['budget_sub']           = DB::table('appendix_eight_mis')->take(3)->get();
        return view('admin.pages.default_forms.view_form.view_appendix_eight', $data);
    }
    /* end of view appendix eight */


    /* view form appendix nine */

    public function view_appendix_nine(Request $request)
    {
        SwitchLanguage(Session::get('language'));
        $data['all_columuns'] = SectionThreeFirstPart::all();
        $data['strategic'] = SectionThreeSecondPart::all();
        $data['outcomes']           = DB::table('section_two_outcome')->take(5)->get();
        $data['budget_sub']           = DB::table('appendix_nine_mis')->take(3)->get();
        return view('admin.pages.default_forms.view_form.view_appendix_nine', $data);
    }
    /* end of view appendix nine */



    /* hauffan */
    public function form_budget_branch()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_budget_branch');
    }
    /* appendix 1 */



    /* .faifja */

    public function form_one_point_one_point_one()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_one_point_one_point_one');
    }


    /* form 1.1.1 store */
    public function form_one_point_one_point_one_store(Request $request)
    {
        $years = 2021;
        $format = 'form_' . date("is") . mt_rand(1000, 99999);
        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $fiscal_year_budget_implementation_progress = new FiscalYearBudgetImplementationProgress();
            $activities               = 'activities_' . $i;
            $budget                   = 'budget_' . $i;
            $target_expense           = 'target_expense_' . $i;
            $first_quarter            = 'first_quarter_' . $i;
            $second_quarter           = 'second_quarter_' . $i;
            $third_quarter            = 'third_quarter_' . $i;
            $fourth_quarter           = 'fourth_quarter_' . $i;
            $first_to_fourth_quarter  = 'first_to_fourth_quarter_' . $i;
            $fiscal_year_budget_implementation_progress['activities'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget'] = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense'] = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter'] = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter'] = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter'] = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter'] = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter'] = $request->$first_to_fourth_quarter;
            $fiscal_year_budget_implementation_progress['years'] = $years;
            $fiscal_year_budget_implementation_progress['unique_form_id'] = $format;
            $fiscal_year_budget_implementation_progress->save();



            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities      = 'activities_' . $i . '_' . $k;
                    $sub_budget          = 'budget_' . $i . '_' . $k;
                    $sub_target_expense  = 'target_expense_' . $i . '_' . $k;
                    $sub_first_quarter   = 'first_quarter_' . $i . '_' . $k;
                    $sub_second_quarter  = 'second_quarter_' . $i . '_' . $k;
                    $sub_third_quarter   = 'third_quarter_' . $i . '_' . $k;
                    $sub_fourth_quarter  = 'fourth_quarter_' . $i . '_' . $k;
                    $sub_first_to_fourth_quarter = 'first_to_fourth_quarter_' . $i . '_' . $k;
                    $sub_data['row_id']   = $fiscal_year_budget_implementation_progress->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['budget']   = $request->$sub_budget;
                    $sub_data['target_expense']   = $request->$sub_target_expense;
                    $sub_data['first_quarter']   = $request->$sub_first_quarter;
                    $sub_data['second_quarter']   = $request->$sub_second_quarter;
                    $sub_data['third_quarter']   = $request->$sub_third_quarter;
                    $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
                    $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id'] = $format;
                    DB::table('fiscal_year_budget_implementation_progress_sub_rows')->insert($sub_data);
                }
            }
        }
    }

    /* end of store */


    /* form 1.1.1 update */
    public function update_form_1_1_1(Request $request)
    {

        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);

        foreach ($request->row_id as $row) {
            $unique_form_id = $request->unique_form_id;
            $activities = 'activities_' . $row;
            $budget = 'budget_' . $row;
            $target_expense = 'target_expense_' . $row;
            $first_quarter = 'first_quarter_' . $row;
            $second_quarter = 'second_quarter_' . $row;
            $third_quarter = 'third_quarter_' . $row;
            $fourth_quarter = 'fourth_quarter_' . $row;
            $first_to_fourth_quarter = 'first_to_fourth_quarter_' . $row;
            $fiscal_year_budget_implementation_progress['activities']   = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget']   = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense']   = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter']   = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter']   = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter']   = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter']   = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter']   = $request->$first_to_fourth_quarter;
            // if ($request->years) {
            //     $fiscal_year_budget_implementation_progress['years']   = $request->years;
            // } else {
            //     $fiscal_year_budget_implementation_progress['years']   =
            //         $fiscal_year_budget_implementation_progress['years'];
            // }
            DB::table('fiscal_year_budget_implementation_progress')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($fiscal_year_budget_implementation_progress);
        }


        foreach ($request->sub_row_id as $subRow) {
            // $sub_data = \App\Models\FiscalYearBudgetImplementationProgressSub::find($subRow);
            $sub_activities = 'sub_row_activities_' . $subRow;
            $sub_budget = 'sub_row_budget_' . $subRow;
            $sub_target_expense = 'sub_row_target_expense_' . $subRow;
            $sub_first_quarter = 'sub_row_first_quarter_' . $subRow;
            $sub_second_quarter = 'sub_row_second_quarter_' . $subRow;
            $sub_third_quarter = 'sub_row_third_quarter_' . $subRow;
            $sub_fourth_quarter = 'sub_row_fourth_quarter_' . $subRow;
            $sub_first_to_fourth_quarter = 'sub_row_first_to_fourth_quarter_' . $subRow;
            $sub_data['activities']   = $request->$sub_activities;
            $sub_data['budget']   = $request->$sub_budget;
            $sub_data['target_expense']   = $request->$sub_target_expense;
            $sub_data['first_quarter']   = $request->$sub_first_quarter;
            $sub_data['second_quarter']   = $request->$sub_second_quarter;
            $sub_data['third_quarter']   = $request->$sub_third_quarter;
            $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
            $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
            $sub_data['years']   = $request->years;
            DB::table('fiscal_year_budget_implementation_progress_sub_rows')->where('id', '=', $subRow)->where('unique_form_id', '=', $unique_form_id)->update($sub_data);
        }
    }

    /* unique store 1.1.1 */
    public function form_one_point_one_point_one_store_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        for ($i = 1; $i <= $rows; $i++) {
            $fiscal_year_budget_implementation_progress = new FiscalYearBudgetImplementationProgress();
            $activities               = 'activities_' . $i;
            $budget                   = 'budget_' . $i;
            $target_expense           = 'target_expense_' . $i;
            $first_quarter            = 'first_quarter_' . $i;
            $second_quarter           = 'second_quarter_' . $i;
            $third_quarter            = 'third_quarter_' . $i;
            $fourth_quarter           = 'fourth_quarter_' . $i;
            $first_to_fourth_quarter  = 'first_to_fourth_quarter_' . $i;
            $fiscal_year_budget_implementation_progress['activities'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget'] = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense'] = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter'] = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter'] = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter'] = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter'] = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter'] = $request->$first_to_fourth_quarter;
            $fiscal_year_budget_implementation_progress['years'] = $years;
            $fiscal_year_budget_implementation_progress['unique_form_id'] = $format;
            $fiscal_year_budget_implementation_progress->save();



            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities      = 'activities_' . $i . '_' . $k;
                    $sub_budget          = 'budget_' . $i . '_' . $k;
                    $sub_target_expense  = 'target_expense_' . $i . '_' . $k;
                    $sub_first_quarter   = 'first_quarter_' . $i . '_' . $k;
                    $sub_second_quarter  = 'second_quarter_' . $i . '_' . $k;
                    $sub_third_quarter   = 'third_quarter_' . $i . '_' . $k;
                    $sub_fourth_quarter  = 'fourth_quarter_' . $i . '_' . $k;
                    $sub_first_to_fourth_quarter = 'first_to_fourth_quarter_' . $i . '_' . $k;
                    $sub_data['row_id']   = $fiscal_year_budget_implementation_progress->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['budget']   = $request->$sub_budget;
                    $sub_data['target_expense']   = $request->$sub_target_expense;
                    $sub_data['first_quarter']   = $request->$sub_first_quarter;
                    $sub_data['second_quarter']   = $request->$sub_second_quarter;
                    $sub_data['third_quarter']   = $request->$sub_third_quarter;
                    $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
                    $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id'] = $format;
                    DB::table('fiscal_year_budget_implementation_progress_sub_rows')->insert($sub_data);
                }
            }
        }
    }

    /* end of unique store 1.1.1 */

    /* end of update */

    public function form_one_point_one_point_two()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_one_point_one_point_two');
    }

    /* form 1.1.2 */
    public function form_one_point_one_point_two_store(Request $request)
    {
        $years = 2021;
        $format = 'form_' . date("is") . mt_rand(1000, 99999);
        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $fiscal_year_budget_implementation_progress = new AutonomousAndOtherInstitutions();
            $activities               = 'activities_' . $i;
            $budget                   = 'budget_' . $i;
            $target_expense           = 'target_expense_' . $i;
            $first_quarter            = 'first_quarter_' . $i;
            $second_quarter           = 'second_quarter_' . $i;
            $third_quarter            = 'third_quarter_' . $i;
            $fourth_quarter           = 'fourth_quarter_' . $i;
            $first_to_fourth_quarter  = 'first_to_fourth_quarter_' . $i;
            $fiscal_year_budget_implementation_progress['activities'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget'] = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense'] = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter'] = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter'] = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter'] = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter'] = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter'] = $request->$first_to_fourth_quarter;
            $fiscal_year_budget_implementation_progress['years'] = $years;
            $fiscal_year_budget_implementation_progress['unique_form_id'] = $format;
            $fiscal_year_budget_implementation_progress->save();



            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities      = 'activities_' . $i . '_' . $k;
                    $sub_budget          = 'budget_' . $i . '_' . $k;
                    $sub_target_expense  = 'target_expense_' . $i . '_' . $k;
                    $sub_first_quarter   = 'first_quarter_' . $i . '_' . $k;
                    $sub_second_quarter  = 'second_quarter_' . $i . '_' . $k;
                    $sub_third_quarter   = 'third_quarter_' . $i . '_' . $k;
                    $sub_fourth_quarter  = 'fourth_quarter_' . $i . '_' . $k;
                    $sub_first_to_fourth_quarter = 'first_to_fourth_quarter_' . $i . '_' . $k;
                    $sub_data['row_id']   = $fiscal_year_budget_implementation_progress->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['budget']   = $request->$sub_budget;
                    $sub_data['target_expense']   = $request->$sub_target_expense;
                    $sub_data['first_quarter']   = $request->$sub_first_quarter;
                    $sub_data['second_quarter']   = $request->$sub_second_quarter;
                    $sub_data['third_quarter']   = $request->$sub_third_quarter;
                    $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
                    $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('autonomous_and_other_institutions_sub_rows')->insert($sub_data);
                }
            }
        }
    }

    /* form 1.1.2 update */
    public function update_form_1_1_2(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);

        foreach ($request->row_id as $row) {
            $unique_form_id = $request->unique_form_id;
            $activities = 'activities_' . $row;
            $budget = 'budget_' . $row;
            $target_expense = 'target_expense_' . $row;
            $first_quarter = 'first_quarter_' . $row;
            $second_quarter = 'second_quarter_' . $row;
            $third_quarter = 'third_quarter_' . $row;
            $fourth_quarter = 'fourth_quarter_' . $row;
            $first_to_fourth_quarter = 'first_to_fourth_quarter_' . $row;
            $fiscal_year_budget_implementation_progress['activities']   = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget']   = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense']   = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter']   = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter']   = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter']   = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter']   = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter']   = $request->$first_to_fourth_quarter;
            DB::table('autonomous_and_other_institutions')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($fiscal_year_budget_implementation_progress);
        }


        foreach ($request->sub_row_id as $subRow) {
            $sub_activities = 'sub_row_activities_' . $subRow;
            $sub_budget = 'sub_row_budget_' . $subRow;
            $sub_target_expense = 'sub_row_target_expense_' . $subRow;
            $sub_first_quarter = 'sub_row_first_quarter_' . $subRow;
            $sub_second_quarter = 'sub_row_second_quarter_' . $subRow;
            $sub_third_quarter = 'sub_row_third_quarter_' . $subRow;
            $sub_fourth_quarter = 'sub_row_fourth_quarter_' . $subRow;
            $sub_first_to_fourth_quarter = 'sub_row_first_to_fourth_quarter_' . $subRow;
            $sub_data['activities']   = $request->$sub_activities;
            $sub_data['budget']   = $request->$sub_budget;
            $sub_data['target_expense']   = $request->$sub_target_expense;
            $sub_data['first_quarter']   = $request->$sub_first_quarter;
            $sub_data['second_quarter']   = $request->$sub_second_quarter;
            $sub_data['third_quarter']   = $request->$sub_third_quarter;
            $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
            $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
            $sub_data['years']   = $request->years;
            DB::table('autonomous_and_other_institutions_sub_rows')->where('id', '=', $subRow)->where('unique_form_id', '=', $unique_form_id)->update($sub_data);
        }
    }

    /* end of update */

    /* unique store 1.1.2 */
    public function form_one_point_one_point_two_store_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        for ($i = 1; $i <= $rows; $i++) {
            $fiscal_year_budget_implementation_progress = new AutonomousAndOtherInstitutions();
            $activities               = 'activities_' . $i;
            $budget                   = 'budget_' . $i;
            $target_expense           = 'target_expense_' . $i;
            $first_quarter            = 'first_quarter_' . $i;
            $second_quarter           = 'second_quarter_' . $i;
            $third_quarter            = 'third_quarter_' . $i;
            $fourth_quarter           = 'fourth_quarter_' . $i;
            $first_to_fourth_quarter  = 'first_to_fourth_quarter_' . $i;
            $fiscal_year_budget_implementation_progress['activities'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget'] = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense'] = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter'] = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter'] = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter'] = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter'] = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter'] = $request->$first_to_fourth_quarter;
            $fiscal_year_budget_implementation_progress['years'] = $years;
            $fiscal_year_budget_implementation_progress['unique_form_id'] = $format;
            $fiscal_year_budget_implementation_progress->save();



            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities      = 'activities_' . $i . '_' . $k;
                    $sub_budget          = 'budget_' . $i . '_' . $k;
                    $sub_target_expense  = 'target_expense_' . $i . '_' . $k;
                    $sub_first_quarter   = 'first_quarter_' . $i . '_' . $k;
                    $sub_second_quarter  = 'second_quarter_' . $i . '_' . $k;
                    $sub_third_quarter   = 'third_quarter_' . $i . '_' . $k;
                    $sub_fourth_quarter  = 'fourth_quarter_' . $i . '_' . $k;
                    $sub_first_to_fourth_quarter = 'first_to_fourth_quarter_' . $i . '_' . $k;
                    $sub_data['row_id']   = $fiscal_year_budget_implementation_progress->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['budget']   = $request->$sub_budget;
                    $sub_data['target_expense']   = $request->$sub_target_expense;
                    $sub_data['first_quarter']   = $request->$sub_first_quarter;
                    $sub_data['second_quarter']   = $request->$sub_second_quarter;
                    $sub_data['third_quarter']   = $request->$sub_third_quarter;
                    $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
                    $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('autonomous_and_other_institutions_sub_rows')->insert($sub_data);
                }
            }
        }
    }

    /* end of unique store 1.1.1 */


    public function form_one_point_two_point_one()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_one_point_two_point_one');
    }

    /* form 1.2.1 */
    public function form_one_point_two_point_one_store(Request $request)
    {
        $years = 2021;
        $format = 'form_' . date("is") . mt_rand(1000, 99999);

        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $fiscal_year_budget_implementation_progress = new ExcludingAnnualDevelopmentPrograms();
            $activities               = 'activities_' . $i;
            $budget                   = 'budget_' . $i;
            $target_expense           = 'target_expense_' . $i;
            $first_quarter            = 'first_quarter_' . $i;
            $second_quarter           = 'second_quarter_' . $i;
            $third_quarter            = 'third_quarter_' . $i;
            $fourth_quarter           = 'fourth_quarter_' . $i;
            $first_to_fourth_quarter  = 'first_to_fourth_quarter_' . $i;
            $fiscal_year_budget_implementation_progress['activities'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget'] = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense'] = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter'] = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter'] = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter'] = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter'] = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter'] = $request->$first_to_fourth_quarter;
            $fiscal_year_budget_implementation_progress['years'] = $years;
            $fiscal_year_budget_implementation_progress['unique_form_id'] = $format;
            $fiscal_year_budget_implementation_progress->save();



            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities      = 'activities_' . $i . '_' . $k;
                    $sub_budget          = 'budget_' . $i . '_' . $k;
                    $sub_target_expense  = 'target_expense_' . $i . '_' . $k;
                    $sub_first_quarter   = 'first_quarter_' . $i . '_' . $k;
                    $sub_second_quarter  = 'second_quarter_' . $i . '_' . $k;
                    $sub_third_quarter   = 'third_quarter_' . $i . '_' . $k;
                    $sub_fourth_quarter  = 'fourth_quarter_' . $i . '_' . $k;
                    $sub_first_to_fourth_quarter = 'first_to_fourth_quarter_' . $i . '_' . $k;
                    $sub_data['row_id']   = $fiscal_year_budget_implementation_progress->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['budget']   = $request->$sub_budget;
                    $sub_data['target_expense']   = $request->$sub_target_expense;
                    $sub_data['first_quarter']   = $request->$sub_first_quarter;
                    $sub_data['second_quarter']   = $request->$sub_second_quarter;
                    $sub_data['third_quarter']   = $request->$sub_third_quarter;
                    $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
                    $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('excluding_annual_development_programs_sub_rows')->insert($sub_data);
                }
            }
        }
    }


    /* form 1.2.1 update */
    public function update_form_1_2_1(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);

        foreach ($request->row_id as $row) {
            $fiscal_year_budget_implementation_progress = ExcludingAnnualDevelopmentPrograms::find($row);
            $unique_form_id = $request->unique_form_id;
            $activities = 'activities_' . $row;
            $budget = 'budget_' . $row;
            $target_expense = 'target_expense_' . $row;
            $first_quarter = 'first_quarter_' . $row;
            $second_quarter = 'second_quarter_' . $row;
            $third_quarter = 'third_quarter_' . $row;
            $fourth_quarter = 'fourth_quarter_' . $row;
            $first_to_fourth_quarter = 'first_to_fourth_quarter_' . $row;
            $fiscal_year_budget_implementation_progress['activities']   = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget']   = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense']   = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter']   = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter']   = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter']   = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter']   = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter']   = $request->$first_to_fourth_quarter;

            // if ($request->years) {
            //     $fiscal_year_budget_implementation_progress['years']   = $request->years;
            // } else {
            //     $fiscal_year_budget_implementation_progress['years']   = $fiscal_year_budget_implementation_progress['years'];
            // }

            DB::table('excluding_annual_development_programs')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($fiscal_year_budget_implementation_progress);
        }


        foreach ($request->sub_row_id as $subRow) {
            $sub_data = \App\Models\ExcludingAnnualDevelopmentProgramsSub::find($subRow);
            $sub_activities = 'sub_row_activities_' . $subRow;
            $sub_budget = 'sub_row_budget_' . $subRow;
            $sub_target_expense = 'sub_row_target_expense_' . $subRow;
            $sub_first_quarter = 'sub_row_first_quarter_' . $subRow;
            $sub_second_quarter = 'sub_row_second_quarter_' . $subRow;
            $sub_third_quarter = 'sub_row_third_quarter_' . $subRow;
            $sub_fourth_quarter = 'sub_row_fourth_quarter_' . $subRow;
            $sub_first_to_fourth_quarter = 'sub_row_first_to_fourth_quarter_' . $subRow;
            $sub_data['activities']   = $request->$sub_activities;
            $sub_data['budget']   = $request->$sub_budget;
            $sub_data['target_expense']   = $request->$sub_target_expense;
            $sub_data['first_quarter']   = $request->$sub_first_quarter;
            $sub_data['second_quarter']   = $request->$sub_second_quarter;
            $sub_data['third_quarter']   = $request->$sub_third_quarter;
            $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
            $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
            $sub_data['years']   = $request->years;
            DB::table('excluding_annual_development_programs_sub_rows')->where('id', '=', $subRow)->where('unique_form_id', '=', $unique_form_id)->update($sub_data);
        }
    }

    /* end of update */
    /* unique store 1.2.1 */
    public function form_one_point_two_point_one_store_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        for ($i = 1; $i <= $rows; $i++) {
            $fiscal_year_budget_implementation_progress = new ExcludingAnnualDevelopmentPrograms();
            $activities               = 'activities_' . $i;
            $budget                   = 'budget_' . $i;
            $target_expense           = 'target_expense_' . $i;
            $first_quarter            = 'first_quarter_' . $i;
            $second_quarter           = 'second_quarter_' . $i;
            $third_quarter            = 'third_quarter_' . $i;
            $fourth_quarter           = 'fourth_quarter_' . $i;
            $first_to_fourth_quarter  = 'first_to_fourth_quarter_' . $i;
            $fiscal_year_budget_implementation_progress['activities'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget'] = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense'] = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter'] = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter'] = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter'] = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter'] = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter'] = $request->$first_to_fourth_quarter;
            $fiscal_year_budget_implementation_progress['years'] = $years;
            $fiscal_year_budget_implementation_progress['unique_form_id'] = $format;
            $fiscal_year_budget_implementation_progress->save();



            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities      = 'activities_' . $i . '_' . $k;
                    $sub_budget          = 'budget_' . $i . '_' . $k;
                    $sub_target_expense  = 'target_expense_' . $i . '_' . $k;
                    $sub_first_quarter   = 'first_quarter_' . $i . '_' . $k;
                    $sub_second_quarter  = 'second_quarter_' . $i . '_' . $k;
                    $sub_third_quarter   = 'third_quarter_' . $i . '_' . $k;
                    $sub_fourth_quarter  = 'fourth_quarter_' . $i . '_' . $k;
                    $sub_first_to_fourth_quarter = 'first_to_fourth_quarter_' . $i . '_' . $k;
                    $sub_data['row_id']   = $fiscal_year_budget_implementation_progress->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['budget']   = $request->$sub_budget;
                    $sub_data['target_expense']   = $request->$sub_target_expense;
                    $sub_data['first_quarter']   = $request->$sub_first_quarter;
                    $sub_data['second_quarter']   = $request->$sub_second_quarter;
                    $sub_data['third_quarter']   = $request->$sub_third_quarter;
                    $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
                    $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('excluding_annual_development_programs_sub_rows')->insert($sub_data);
                }
            }
        }
    }

    /* end of unique store 1.1.1 */


    public function form_one_point_two_point_two()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_one_point_two_point_two');
    }

    /* form 1.2.2 store */

    public function form_one_point_two_point_two_store(Request $request)
    {
        $years = 2021;
        $format = 'form_' . date("is") . mt_rand(1000, 99999);
        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $fiscal_year_budget_implementation_progress = new DevelopmentProjectAnnualProgram();
            $activities               = 'activities_' . $i;
            $budget                   = 'budget_' . $i;
            $target_expense           = 'target_expense_' . $i;
            $first_quarter            = 'first_quarter_' . $i;
            $second_quarter           = 'second_quarter_' . $i;
            $third_quarter            = 'third_quarter_' . $i;
            $fourth_quarter           = 'fourth_quarter_' . $i;
            $first_to_fourth_quarter  = 'first_to_fourth_quarter_' . $i;
            $fiscal_year_budget_implementation_progress['activities'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget'] = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense'] = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter'] = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter'] = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter'] = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter'] = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter'] = $request->$first_to_fourth_quarter;
            $fiscal_year_budget_implementation_progress['years'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['unique_form_id'] = $format;
            $fiscal_year_budget_implementation_progress->save();



            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities      = 'activities_' . $i . '_' . $k;
                    $sub_budget          = 'budget_' . $i . '_' . $k;
                    $sub_target_expense  = 'target_expense_' . $i . '_' . $k;
                    $sub_first_quarter   = 'first_quarter_' . $i . '_' . $k;
                    $sub_second_quarter  = 'second_quarter_' . $i . '_' . $k;
                    $sub_third_quarter   = 'third_quarter_' . $i . '_' . $k;
                    $sub_fourth_quarter  = 'fourth_quarter_' . $i . '_' . $k;
                    $sub_first_to_fourth_quarter = 'first_to_fourth_quarter_' . $i . '_' . $k;
                    $sub_data['row_id']   = $fiscal_year_budget_implementation_progress->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['budget']   = $request->$sub_budget;
                    $sub_data['target_expense']   = $request->$sub_target_expense;
                    $sub_data['first_quarter']   = $request->$sub_first_quarter;
                    $sub_data['second_quarter']   = $request->$sub_second_quarter;
                    $sub_data['third_quarter']   = $request->$sub_third_quarter;
                    $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
                    $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('development_project_annual_program_sub_rows')->insert($sub_data);
                }
            }
        }
    }

    /* end of 1.2.2 */


    /* update form 1.2.2 */
    /* form 1.1.2 update */
    public function update_form_1_2_2(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);


        // $OldyearTextInput = DevelopmentProjectAnnualProgram::select('years')->take(1)->get();
        foreach ($request->row_id as $row) {
            $activities = 'activities_' . $row;
            $unique_form_id = $request->unique_form_id;
            $budget = 'budget_' . $row;
            $target_expense = 'target_expense_' . $row;
            $first_quarter = 'first_quarter_' . $row;
            $second_quarter = 'second_quarter_' . $row;
            $third_quarter = 'third_quarter_' . $row;
            $fourth_quarter = 'fourth_quarter_' . $row;
            $first_to_fourth_quarter = 'first_to_fourth_quarter_' . $row;
            $fiscal_year_budget_implementation_progress['activities']   = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget']   = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense']   = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter']   = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter']   = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter']   = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter']   = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter']   = $request->$first_to_fourth_quarter;
            // if ($request->years) {
            //     $fiscal_year_budget_implementation_progress['years']   = $request->years;
            // } else {
            //     $fiscal_year_budget_implementation_progress['years']   = $fiscal_year_budget_implementation_progress['years'];
            // }
            DB::table('development_project_annual_program')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($fiscal_year_budget_implementation_progress);
        }


        foreach ($request->sub_row_id as $subRow) {
            $sub_data = \App\Models\DevelopmentProjectAnnualProgramSub::find($subRow);
            $sub_activities = 'sub_row_activities_' . $subRow;
            $sub_budget = 'sub_row_budget_' . $subRow;
            $sub_target_expense = 'sub_row_target_expense_' . $subRow;
            $sub_first_quarter = 'sub_row_first_quarter_' . $subRow;
            $sub_second_quarter = 'sub_row_second_quarter_' . $subRow;
            $sub_third_quarter = 'sub_row_third_quarter_' . $subRow;
            $sub_fourth_quarter = 'sub_row_fourth_quarter_' . $subRow;
            $sub_first_to_fourth_quarter = 'sub_row_first_to_fourth_quarter_' . $subRow;
            $sub_data['activities']   = $request->$sub_activities;
            $sub_data['budget']   = $request->$sub_budget;
            $sub_data['target_expense']   = $request->$sub_target_expense;
            $sub_data['first_quarter']   = $request->$sub_first_quarter;
            $sub_data['second_quarter']   = $request->$sub_second_quarter;
            $sub_data['third_quarter']   = $request->$sub_third_quarter;
            $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
            $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
            $sub_data['years']   = $request->years;
            DB::table('development_project_annual_program_sub_rows')->where('id', '=', $subRow)->where('unique_form_id', '=', $unique_form_id)->update($sub_data);
            $sub_data->update();
        }
    }

    /* end of update */
    /* unique store 1.2.2 */
    public function form_one_point_two_point_two_store_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        for ($i = 1; $i <= $rows; $i++) {
            $fiscal_year_budget_implementation_progress = new DevelopmentProjectAnnualProgram();
            $activities               = 'activities_' . $i;
            $budget                   = 'budget_' . $i;
            $target_expense           = 'target_expense_' . $i;
            $first_quarter            = 'first_quarter_' . $i;
            $second_quarter           = 'second_quarter_' . $i;
            $third_quarter            = 'third_quarter_' . $i;
            $fourth_quarter           = 'fourth_quarter_' . $i;
            $first_to_fourth_quarter  = 'first_to_fourth_quarter_' . $i;
            $fiscal_year_budget_implementation_progress['activities'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget'] = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense'] = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter'] = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter'] = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter'] = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter'] = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter'] = $request->$first_to_fourth_quarter;
            $fiscal_year_budget_implementation_progress['years'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['unique_form_id'] = $format;
            $fiscal_year_budget_implementation_progress->save();



            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities      = 'activities_' . $i . '_' . $k;
                    $sub_budget          = 'budget_' . $i . '_' . $k;
                    $sub_target_expense  = 'target_expense_' . $i . '_' . $k;
                    $sub_first_quarter   = 'first_quarter_' . $i . '_' . $k;
                    $sub_second_quarter  = 'second_quarter_' . $i . '_' . $k;
                    $sub_third_quarter   = 'third_quarter_' . $i . '_' . $k;
                    $sub_fourth_quarter  = 'fourth_quarter_' . $i . '_' . $k;
                    $sub_first_to_fourth_quarter = 'first_to_fourth_quarter_' . $i . '_' . $k;
                    $sub_data['row_id']   = $fiscal_year_budget_implementation_progress->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['budget']   = $request->$sub_budget;
                    $sub_data['target_expense']   = $request->$sub_target_expense;
                    $sub_data['first_quarter']   = $request->$sub_first_quarter;
                    $sub_data['second_quarter']   = $request->$sub_second_quarter;
                    $sub_data['third_quarter']   = $request->$sub_third_quarter;
                    $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
                    $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('development_project_annual_program_sub_rows')->insert($sub_data);
                }
            }
        }
    }

    /* end of unique store 1.2.2 */
    /* end of 1.2.2 */

    public function form_one_point_three()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_one_point_three');
    }

    /* form 1.3 store */
    public function form_one_point_three_store(Request $request)
    {

        $years = 2021;
        $format = 'form_' . date("is") . mt_rand(1000, 99999);
        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $fiscal_year_budget_implementation_progress = new TotalManagementDevelopmentCosts();
            $activities               = 'activities_' . $i;
            $budget                   = 'budget_' . $i;
            $target_expense           = 'target_expense_' . $i;
            $first_quarter            = 'first_quarter_' . $i;
            $second_quarter           = 'second_quarter_' . $i;
            $third_quarter            = 'third_quarter_' . $i;
            $fourth_quarter           = 'fourth_quarter_' . $i;
            $first_to_fourth_quarter  = 'first_to_fourth_quarter_' . $i;
            $fiscal_year_budget_implementation_progress['activities'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget'] = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense'] = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter'] = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter'] = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter'] = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter'] = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter'] = $request->$first_to_fourth_quarter;
            $fiscal_year_budget_implementation_progress['years'] = $years;
            $fiscal_year_budget_implementation_progress['unique_form_id'] = $format;
            $fiscal_year_budget_implementation_progress->save();



            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities      = 'activities_' . $i . '_' . $k;
                    $sub_budget          = 'budget_' . $i . '_' . $k;
                    $sub_target_expense  = 'target_expense_' . $i . '_' . $k;
                    $sub_first_quarter   = 'first_quarter_' . $i . '_' . $k;
                    $sub_second_quarter  = 'second_quarter_' . $i . '_' . $k;
                    $sub_third_quarter   = 'third_quarter_' . $i . '_' . $k;
                    $sub_fourth_quarter  = 'fourth_quarter_' . $i . '_' . $k;
                    $sub_first_to_fourth_quarter = 'first_to_fourth_quarter_' . $i . '_' . $k;
                    $sub_data['row_id']   = $fiscal_year_budget_implementation_progress->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['budget']   = $request->$sub_budget;
                    $sub_data['target_expense']   = $request->$sub_target_expense;
                    $sub_data['first_quarter']   = $request->$sub_first_quarter;
                    $sub_data['second_quarter']   = $request->$sub_second_quarter;
                    $sub_data['third_quarter']   = $request->$sub_third_quarter;
                    $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
                    $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('total_management_development_costs_sub_rows')->insert($sub_data);
                }
            }
        }
    }
    /* end of store */
    /* form 1.3 update */
    public function update_form_1_3(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);

        foreach ($request->row_id as $row) {
            // $fiscal_year_budget_implementation_progress = TotalManagementDevelopmentCosts::find($row);
            $activities = 'activities_' . $row;
            $unique_form_id = $request->unique_form_id;
            $budget = 'budget_' . $row;
            $target_expense = 'target_expense_' . $row;
            $first_quarter = 'first_quarter_' . $row;
            $second_quarter = 'second_quarter_' . $row;
            $third_quarter = 'third_quarter_' . $row;
            $fourth_quarter = 'fourth_quarter_' . $row;
            $first_to_fourth_quarter = 'first_to_fourth_quarter_' . $row;
            $fiscal_year_budget_implementation_progress['activities']   = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget']   = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense']   = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter']   = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter']   = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter']   = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter']   = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter']   = $request->$first_to_fourth_quarter;
            // if ($request->years) {
            //     $fiscal_year_budget_implementation_progress['years'] = $request->years;
            // } else {
            //     $fiscal_year_budget_implementation_progress['years'] = $fiscal_year_budget_implementation_progress['years'];
            // }
            DB::table('total_management_development_costs')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($fiscal_year_budget_implementation_progress);
        }


        foreach ($request->sub_row_id as $subRow) {
            // $sub_data = \App\Models\TotalManagementDevelopmentCostsSub::find($subRow);
            $sub_activities = 'sub_row_activities_' . $subRow;
            $sub_budget = 'sub_row_budget_' . $subRow;
            $sub_target_expense = 'sub_row_target_expense_' . $subRow;
            $sub_first_quarter = 'sub_row_first_quarter_' . $subRow;
            $sub_second_quarter = 'sub_row_second_quarter_' . $subRow;
            $sub_third_quarter = 'sub_row_third_quarter_' . $subRow;
            $sub_fourth_quarter = 'sub_row_fourth_quarter_' . $subRow;
            $sub_first_to_fourth_quarter = 'sub_row_first_to_fourth_quarter_' . $subRow;
            $sub_data['activities']   = $request->$sub_activities;
            $sub_data['budget']   = $request->$sub_budget;
            $sub_data['target_expense']   = $request->$sub_target_expense;
            $sub_data['first_quarter']   = $request->$sub_first_quarter;
            $sub_data['second_quarter']   = $request->$sub_second_quarter;
            $sub_data['third_quarter']   = $request->$sub_third_quarter;
            $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
            $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
            $sub_data['years']   = $request->years;
            DB::table('total_management_development_costs_sub_rows')->where('id', '=', $subRow)->where('unique_form_id', '=', $unique_form_id)->update($sub_data);
        }
    }
    /* unique store 1.3 */
    public function form_one_point_three_store_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        for ($i = 1; $i <= $rows; $i++) {
            $fiscal_year_budget_implementation_progress = new TotalManagementDevelopmentCosts();
            $activities               = 'activities_' . $i;
            $budget                   = 'budget_' . $i;
            $target_expense           = 'target_expense_' . $i;
            $first_quarter            = 'first_quarter_' . $i;
            $second_quarter           = 'second_quarter_' . $i;
            $third_quarter            = 'third_quarter_' . $i;
            $fourth_quarter           = 'fourth_quarter_' . $i;
            $first_to_fourth_quarter  = 'first_to_fourth_quarter_' . $i;
            $fiscal_year_budget_implementation_progress['activities'] = $request->$activities;
            $fiscal_year_budget_implementation_progress['budget'] = $request->$budget;
            $fiscal_year_budget_implementation_progress['target_expense'] = $request->$target_expense;
            $fiscal_year_budget_implementation_progress['first_quarter'] = $request->$first_quarter;
            $fiscal_year_budget_implementation_progress['second_quarter'] = $request->$second_quarter;
            $fiscal_year_budget_implementation_progress['third_quarter'] = $request->$third_quarter;
            $fiscal_year_budget_implementation_progress['fourth_quarter'] = $request->$fourth_quarter;
            $fiscal_year_budget_implementation_progress['first_to_fourth_quarter'] = $request->$first_to_fourth_quarter;
            $fiscal_year_budget_implementation_progress['years'] = $years;
            $fiscal_year_budget_implementation_progress['unique_form_id'] = $format;
            $fiscal_year_budget_implementation_progress->save();



            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities      = 'activities_' . $i . '_' . $k;
                    $sub_budget          = 'budget_' . $i . '_' . $k;
                    $sub_target_expense  = 'target_expense_' . $i . '_' . $k;
                    $sub_first_quarter   = 'first_quarter_' . $i . '_' . $k;
                    $sub_second_quarter  = 'second_quarter_' . $i . '_' . $k;
                    $sub_third_quarter   = 'third_quarter_' . $i . '_' . $k;
                    $sub_fourth_quarter  = 'fourth_quarter_' . $i . '_' . $k;
                    $sub_first_to_fourth_quarter = 'first_to_fourth_quarter_' . $i . '_' . $k;
                    $sub_data['row_id']   = $fiscal_year_budget_implementation_progress->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['budget']   = $request->$sub_budget;
                    $sub_data['target_expense']   = $request->$sub_target_expense;
                    $sub_data['first_quarter']   = $request->$sub_first_quarter;
                    $sub_data['second_quarter']   = $request->$sub_second_quarter;
                    $sub_data['third_quarter']   = $request->$sub_third_quarter;
                    $sub_data['fourth_quarter']   = $request->$sub_fourth_quarter;
                    $sub_data['first_to_fourth_quarter']   = $request->$sub_first_to_fourth_quarter;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('total_management_development_costs_sub_rows')->insert($sub_data);
                }
            }
        }
    }

    /* end of unique store 1.3 */
    /* end of update */
    // two point forms

    public function form_two_point_one()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_two_point_one');
    }







    public function form_two_point_two_point_one()
    {
        SwitchLanguage(Session::get('language'));
        $dept = Department::all();
        $inst = Institutions::all();
        return view('admin.pages.default_forms.form_two_point_two_point_one', compact('dept', 'inst'));
    }

    //form_two_point_one_store

    public function form_two_point_one_store(Request $request)
    {
        $years   = 2021;
        echo "<pre>";

        $format = 'form_' . date("is") . mt_rand(1000, 99999);
        $rows = $request->row_id;
        for ($i = 1; $i <= $rows; $i++) {
            //      echo $i;
            $annual_performance_quarterly = new AnnualPerformanceQuarterly();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $annual_performance_quarterly['activities']   = $request->$activities;
            $annual_performance_quarterly['performance_index']   = $request->$performance_index;
            $annual_performance_quarterly['unit']   = $request->$unit;
            $annual_performance_quarterly['performance_index_values']   = $request->$performance_index_values;
            $annual_performance_quarterly['annual_target']   = $request->$annual_target;
            $annual_performance_quarterly['acquisition1']   = $request->$acquisition1;
            $annual_performance_quarterly['acquisition2']   = $request->$acquisition2;
            $annual_performance_quarterly['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            $annual_performance_quarterly['years']   = $years;
            $annual_performance_quarterly['unique_form_id'] = $format;
            $annual_performance_quarterly->save();
            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities = 'activities_' . $i . '_' . $k;
                    $sub_performance_index = 'performance_index_' . $i . '_' . $k;
                    $sub_unit = 'unit_' . $i . '._' . $k;
                    $sub_performance_index_values = 'performance_index_values_' . $i . '_' . $k;
                    $sub_annual_target = 'annual_target_' . $i . '_' . $k;
                    $sub_acquisition1 = 'acquisition1_' . $i . '_' . $k;
                    $sub_acquisition2 = 'acquisition2_' . $i . '_' . $k;
                    $sub_branch_responsible_implementation = 'branch_responsible_implementation_' . $i . '_' . $k;

                    $sub_data['row_id']   = $annual_performance_quarterly->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['performance_index']   = $request->$sub_performance_index;
                    $sub_data['unit']   = $request->$sub_unit;
                    $sub_data['performance_index_values']   = $request->$sub_performance_index_values;
                    $sub_data['annual_target']   = $request->$sub_annual_target;
                    $sub_data['acquisition1']   = $request->$sub_acquisition1;
                    $sub_data['acquisition2']   = $request->$sub_acquisition2;
                    $sub_data['branch_responsible_implementation']   = $request->$sub_branch_responsible_implementation;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('annual_performance_agreement_quarterly_sub_rows')->insert($sub_data);
                }
            }
        }
    }

    /* update form 2.1 */
    public function update_form_2_1(Request $request)
    {

        $req = Auth::user()->id;


        foreach ($request->row_id as $row) {
            $unique_form_id = $request->unique_form_id;
            $author_id      = $request->author_id;
            $updated_time  = Carbon::now()->format('Y-m-d');
            $def_data['status'] = 1;
            $def_data['updated_at'] = $updated_time;
            DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', Auth::user()->id)->update($def_data);


            $unique_form_id = $request->unique_form_id;
            $activities = 'activities_' . $row;
            $performance_index = 'performance_index_' . $row;
            $unit = 'unit_' . $row;
            $performance_index_values = 'performance_index_values_' . $row;
            $annual_target = 'annual_target_' . $row;
            $acquisition1 = 'acquisition1_' . $row;
            $acquisition2 = 'acquisition2_' . $row;
            $acquisition3 = 'acquisition3_' . $row;
            $acquisition4 = 'acquisition4_' . $row;
            $total_sum_value = 'total_sum_value_' . $row;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $row;
            $annual_performance_quarterly['activities']   = $request->$activities;
            $annual_performance_quarterly['performance_index']   = $request->$performance_index;
            $annual_performance_quarterly['unit']   = $request->$unit;
            $annual_performance_quarterly['performance_index_values']   = $request->$performance_index_values;
            $annual_performance_quarterly['annual_target']   = $request->$annual_target;
            $annual_performance_quarterly['acquisition1']   = $request->$acquisition1;
            $annual_performance_quarterly['acquisition2']   = $request->$acquisition2;
            $annual_performance_quarterly['acquisition3']   = $request->$acquisition3;
            $annual_performance_quarterly['acquisition4']   = $request->$acquisition4;
            $annual_performance_quarterly['total_sum_value']   = $request->$total_sum_value;
            $annual_performance_quarterly['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            // if ($request->years) {
            //     $annual_performance_quarterly['years'] = $request->years;
            // } else {
            //     $annual_performance_quarterly['years'] = $annual_performance_quarterly['years'];
            // }
            DB::table('annual_performance_agreement_quarterly')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($annual_performance_quarterly);
        }


        if ($request->sub_row_id == 1) {
            foreach ($request->sub_row_id as $subRow) {
                $sub_activities = 'sub_row_activities_' . $subRow;
                $sub_performance_index = 'sub_row_performance_index_' . $subRow;
                $sub_unit = 'sub_row_unit_' . $subRow;
                $sub_performance_index_values = 'sub_row_performance_index_values_' . $subRow;
                $sub_annual_target = 'sub_row_annual_target_' . $subRow;
                $sub_acquisition1 = 'sub_row_acquisition1_' . $subRow;
                $sub_acquisition2 = 'sub_row_acquisition2_' . $subRow;
                $sub_acquisition3 = 'sub_row_acquisition3_' . $subRow;
                $sub_acquisition4 = 'sub_row_acquisition4_' . $subRow;
                $sub_total_sum_value = 'sub_row_total_sum_value_' . $subRow;
                $sub_branch_responsible_implementation = 'sub_row_branch_responsible_implementation_' . $subRow;
                //   $sub_data['row_id']   = $annual_performance_quarterly->id;
                $sub_data['activities']   = $request->$sub_activities;
                $sub_data['performance_index']   = $request->$sub_performance_index;
                $sub_data['unit']   = $request->$sub_unit;
                $sub_data['performance_index_values']   = $request->$sub_performance_index_values;
                $sub_data['annual_target']   = $request->$sub_annual_target;
                $sub_data['acquisition1']   = $request->$sub_acquisition1;
                $sub_data['acquisition2']   = $request->$sub_acquisition2;
                $sub_data['acquisition3']   = $request->$sub_acquisition3;
                $sub_data['acquisition4']   = $request->$sub_acquisition4;
                $sub_data['total_sum_value']   = $request->$sub_total_sum_value;
                $sub_data['branch_responsible_implementation']   = $request->$sub_branch_responsible_implementation;
                $sub_data['years']   = $request->years;
                DB::table('annual_performance_agreement_quarterly_sub_rows')->where('id', '=', $subRow)->where('unique_form_id', '=', $unique_form_id)->update($sub_data);
            }
        }
        Session::put(['title' => 'Alert', 'message' => 'Form has been updated successfully!']);



        if (Auth::user()->id == $req) {
            $named = DB::table('user_forms')->where('sub_form_id_unique_id', $unique_form_id)->where('reciever_user_id', Auth::user()->id)->get();
            $to_user_data = User::find($named[0]->sender_user_id);
            $sendNotification = Auth::user()->name . " has updated the form.";
            $link = 'http://localhost/report-management/indiv-stored-forms/' . '1' . '/' . $unique_form_id;
            event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
            Session::put(['title' => 'Alert', 'message' =>  'Form has been updated successfully!']);
        }
    }

    public function form_two_point_one_store_unique(Request $request)
    {
        //        print_r($request->all());die;
        $years   = $request->form_year;
        //        echo "<pre>";
        //       print_r($request -> all());die;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;





        for ($i = 1; $i <= $rows; $i++) {
            //      echo $i;
            $annual_performance_quarterly = new AnnualPerformanceQuarterly();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $acquisition3 = 'acquisition3_' . $i;
            $acquisition4 = 'acquisition4_' . $i;
            $total_sum_value = 'total_sum_value_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $annual_performance_quarterly['activities']   = $request->$activities;
            $annual_performance_quarterly['performance_index']   = $request->$performance_index;
            $annual_performance_quarterly['unit']   = $request->$unit;
            $annual_performance_quarterly['performance_index_values']   = $request->$performance_index_values;
            $annual_performance_quarterly['annual_target']   = $request->$annual_target;
            $annual_performance_quarterly['acquisition1']   = $request->$acquisition1;
            $annual_performance_quarterly['acquisition2']   = $request->$acquisition2;
            $annual_performance_quarterly['acquisition3']   = $request->$acquisition3;
            $annual_performance_quarterly['acquisition4']   = $request->$acquisition4;
            $annual_performance_quarterly['total_sum_value']   = $request->$total_sum_value;
            $annual_performance_quarterly['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            $annual_performance_quarterly['years']   = $years;
            $annual_performance_quarterly['unique_form_id'] = $format;
            $annual_performance_quarterly->save();
            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities = 'activities_' . $i . '_' . $k;
                    $sub_performance_index = 'performance_index_' . $i . '_' . $k;
                    $sub_unit = 'unit_' . $i . '._' . $k;
                    $sub_performance_index_values = 'performance_index_values_' . $i . '_' . $k;
                    $sub_annual_target = 'annual_target_' . $i . '_' . $k;
                    $sub_acquisition1 = 'acquisition1_' . $i . '_' . $k;
                    $sub_acquisition2 = 'acquisition2_' . $i . '_' . $k;
                    $sub_acquisition3 = 'acquisition3_' . $i . '_' . $k;
                    $sub_acquisition4 = 'acquisition4_' . $i . '_' . $k;
                    $sub_total_sum_value = 'total_sum_value_' . $i . '_' . $k;
                    $sub_branch_responsible_implementation = 'branch_responsible_implementation_' . $i . '_' . $k;
                    $sub_data['row_id']   = $annual_performance_quarterly->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['performance_index']   = $request->$sub_performance_index;
                    $sub_data['unit']   = $request->$sub_unit;
                    $sub_data['performance_index_values']   = $request->$sub_performance_index_values;
                    $sub_data['annual_target']   = $request->$sub_annual_target;
                    $sub_data['acquisition1']   = $request->$sub_acquisition1;
                    $sub_data['acquisition2']   = $request->$sub_acquisition2;
                    $sub_data['acquisition3']   = $request->$sub_acquisition3;
                    $sub_data['acquisition4']   = $request->$sub_acquisition4;
                    $sub_data['total_sum_value']   = $request->$sub_total_sum_value;
                    $sub_data['branch_responsible_implementation']   = $request->$sub_branch_responsible_implementation;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('annual_performance_agreement_quarterly_sub_rows')->insert($sub_data);
                }
            }
            //   echo $i;
            // print_r($data);

        }
    }
    /* end of update 2.1 */




    /* form 2.2.1 store */
    public function form_two_point_two_point_one_store(Request $request)
    {


        $years   = 2021;
        echo "<pre>";
        $data = [];

        $format = 'form_' . date("is") . mt_rand(1000, 99999);
        $rows = $request->row_id;
        for ($i = 1; $i <= $rows; $i++) {

            $national_strategy_action_plan = new NationalIntegrityStrategyActionPlanModel();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $national_strategy_action_plan['activities']   = $request->$activities;
            $national_strategy_action_plan['performance_index']   = $request->$performance_index;
            $national_strategy_action_plan['unit']   = $request->$unit;
            $national_strategy_action_plan['performance_index_values']   = $request->$performance_index_values;
            $national_strategy_action_plan['annual_target']   = $request->$annual_target;
            $national_strategy_action_plan['acquisition1']   = $request->$acquisition1;
            $national_strategy_action_plan['acquisition2']   = $request->$acquisition2;
            $national_strategy_action_plan['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            $national_strategy_action_plan['years']   = $years;
            $national_strategy_action_plan['unique_form_id'] = $format;
            $national_strategy_action_plan->save();
            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_annual_target = 'annual_target_' . $i . '_' . $k;
                    $sub_data['row_id']   = $national_strategy_action_plan->id;
                    $sub_data['annual_target']   = $request->$sub_annual_target;
                    $sub_data['unique_form_id']   = $format;

                    DB::table('national_integrity_trategy_action_plan_sub_rows')->insert($sub_data);
                }
            }
        }
    }



    /* end form store 2.2.1 */


    /* unique store 2.2.1 */
    public function form_two_point_two_point_one_store_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;
        for ($i = 1; $i <= $rows; $i++) {
            $national_strategy_action_plan = new NationalIntegrityStrategyActionPlanModel();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $national_strategy_action_plan['activities']   = $request->$activities;
            $national_strategy_action_plan['performance_index']   = $request->$performance_index;
            $national_strategy_action_plan['unit']   = $request->$unit;
            $national_strategy_action_plan['performance_index_values']   = $request->$performance_index_values;
            $national_strategy_action_plan['annual_target']   = $request->$annual_target;
            $national_strategy_action_plan['acquisition1']   = $request->$acquisition1;
            $national_strategy_action_plan['acquisition2']   = $request->$acquisition2;
            $national_strategy_action_plan['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            $national_strategy_action_plan['years']   = $years;
            $national_strategy_action_plan['unique_form_id'] = $format;
            $national_strategy_action_plan->save();
            for ($k = 1; $k <= 2; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_annual_target = 'annual_target_' . $i . '_' . $k;
                    $sub_data['row_id']   = $national_strategy_action_plan->id;
                    $sub_data['annual_target']   = $request->$sub_annual_target;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('national_integrity_trategy_action_plan_sub_rows')->insert($sub_data);
                }
            }
        }
    }

    /* end of unique store 2.2.1 */



    /* form 2.2.1 update */
    public function update_form_2_2_1(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);

        foreach ($request->row_id as $row) {
            // $national_strategy_action_plan = NationalIntegrityStrategyActionPlanModel::find($row);
            $unique_form_id = $request->unique_form_id;
            $activities = 'activities_' . $row;
            $performance_index = 'performance_index_' . $row;
            $unit = 'unit_' . $row;
            $performance_index_values = 'performance_index_values_' . $row;
            $annual_target = 'annual_target_' . $row;
            $acquisition1 = 'acquisition1_' . $row;
            $acquisition2 = 'acquisition2_' . $row;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $row;
            $national_strategy_action_plan['activities']   = $request->$activities;
            $national_strategy_action_plan['performance_index']   = $request->$performance_index;
            $national_strategy_action_plan['unit']   = $request->$unit;
            $national_strategy_action_plan['performance_index_values']   = $request->$performance_index_values;
            $national_strategy_action_plan['annual_target']   = $request->$annual_target;
            $national_strategy_action_plan['acquisition1']   = $request->$acquisition1;
            $national_strategy_action_plan['acquisition2']   = $request->$acquisition2;
            $national_strategy_action_plan['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            // if ($request->years) {
            //     $national_strategy_action_plan['years'] = $request->years;
            // } else {
            //     $national_strategy_action_plan['years'] = $national_strategy_action_plan['years'];
            // }
            DB::table('national_integrity_trategy_action_plan')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($national_strategy_action_plan);
        }

        foreach ($request->sub_row_id as $subRow) {
            // $sub_data = \App\Models\NationalIntegrityStrategyActionPlanSub::find($subRow);
            $sub_activities = 'sub_row_activities_' . $subRow;
            $sub_performance_index = 'sub_row_performance_index_' . $subRow;
            $sub_unit = 'sub_row_unit_' . $subRow;
            $sub_performance_index_values = 'sub_row_performance_index_values_' . $subRow;
            $sub_annual_target = 'sub_row_annual_target_' . $subRow;
            $sub_acquisition1 = 'sub_row_acquisition1_' . $subRow;
            $sub_acquisition2 = 'sub_row_acquisition2_' . $subRow;
            $sub_branch_responsible_implementation = 'sub_row_branch_responsible_implementation_' . $subRow;
            $sub_data['activities']   = $request->$sub_activities;
            $sub_data['performance_index']   = $request->$sub_performance_index;
            $sub_data['unit']   = $request->$sub_unit;
            $sub_data['performance_index_values']   = $request->$sub_performance_index_values;
            $sub_data['annual_target']   = $request->$sub_annual_target;
            $sub_data['acquisition1']   = $request->$sub_acquisition1;
            $sub_data['acquisition2']   = $request->$sub_acquisition2;
            $sub_data['branch_responsible_implementation']   = $request->$sub_branch_responsible_implementation;
            $sub_data['years']   = $request->years;
            DB::table('national_integrity_trategy_action_plan_sub_rows')->where('id', '=', $subRow)->where('unique_form_id', '=', $unique_form_id)->update($sub_data);
        }
    }
    /* end of update 2.2.1 */





    public function form_two_point_two_point_two()
    {
        SwitchLanguage(Session::get('language'));
        $dept = Department::all();
        $inst = Institutions::all();
        return view('admin.pages.default_forms.form_two_point_two_point_two', compact('dept', 'inst'));
    }

    public function form_two_point_two_point_two_store(Request $request)
    {
        $years   = 2021;
        echo "<pre>";
        //       print_r($request -> all());die;
        $format = 'form_' . date("is") . mt_rand(1000, 99999);
        $rows = $request->row_id;
        for ($i = 1; $i <= $rows; $i++) {
            //      echo $i;
            $egovernance_innovation_action_plan = new EGovernanceInnovationActionPlan();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $egovernance_innovation_action_plan['activities']   = $request->$activities;
            $egovernance_innovation_action_plan['performance_index']   = $request->$performance_index;
            $egovernance_innovation_action_plan['unit']   = $request->$unit;
            $egovernance_innovation_action_plan['performance_index_values']   = $request->$performance_index_values;
            $egovernance_innovation_action_plan['annual_target']   = $request->$annual_target;
            $egovernance_innovation_action_plan['acquisition1']   = $request->$acquisition1;
            $egovernance_innovation_action_plan['acquisition2']   = $request->$acquisition2;
            $egovernance_innovation_action_plan['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            $egovernance_innovation_action_plan['years']   = $years;
            $egovernance_innovation_action_plan['unique_form_id']   = $format;
            $egovernance_innovation_action_plan->save();
            for ($k = 1; $k <= 6; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities = 'activities_' . $i . '_' . $k;
                    $sub_performance_index = 'performance_index_' . $i . '_' . $k;
                    $sub_unit = 'unit_' . $i . '._' . $k;
                    $sub_performance_index_values = 'performance_index_values_' . $i . '_' . $k;
                    $sub_annual_target = 'annual_target_' . $i . '_' . $k;
                    $sub_acquisition1 = 'acquisition1_' . $i . '_' . $k;
                    $sub_acquisition2 = 'acquisition2_' . $i . '_' . $k;
                    $sub_branch_responsible_implementation = 'branch_responsible_implementation_' . $i . '_' . $k;
                    $sub_data['row_id']   = $egovernance_innovation_action_plan->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['performance_index']   = $request->$sub_performance_index;
                    $sub_data['unit']   = $request->$sub_unit;
                    $sub_data['performance_index_values']   = $request->$sub_performance_index_values;
                    $sub_data['annual_target']   = $request->$sub_annual_target;
                    $sub_data['acquisition1']   = $request->$sub_acquisition1;
                    $sub_data['acquisition2']   = $request->$sub_acquisition2;
                    $sub_data['branch_responsible_implementation']   = $request->$sub_branch_responsible_implementation;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('egovernance_innovation_action_plan_sub_rows')->insert($sub_data);
                }
            }
        }
    }



    /* update form 2.2.2 */
    public function update_form_2_2_2(Request $request)
    {

        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);


        foreach ($request->row_id as $row) {
            $unique_form_id = $request->unique_form_id;
            // $egovernance_innovation_action_plan = EGovernanceInnovationActionPlan::find($row)->where('unique_form_id','=', $unique_form_id);
            $activities = 'activities_' . $row;

            $performance_index = 'performance_index_' . $row;
            $unit = 'unit_' . $row;
            $performance_index_values = 'performance_index_values_' . $row;
            $annual_target = 'annual_target_' . $row;
            $acquisition1 = 'acquisition1_' . $row;
            $acquisition2 = 'acquisition2_' . $row;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $row;
            $egovernance_innovation_action_plan['activities']   = $request->$activities;
            $egovernance_innovation_action_plan['performance_index']   = $request->$performance_index;
            $egovernance_innovation_action_plan['unit']   = $request->$unit;
            $egovernance_innovation_action_plan['performance_index_values']   = $request->$performance_index_values;
            $egovernance_innovation_action_plan['annual_target']   = $request->$annual_target;
            $egovernance_innovation_action_plan['acquisition1']   = $request->$acquisition1;
            $egovernance_innovation_action_plan['acquisition2']   = $request->$acquisition2;
            $egovernance_innovation_action_plan['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            // if ($request->years) {
            //     $egovernance_innovation_action_plan['years'] = $request->years;
            // } else {
            //     $egovernance_innovation_action_plan['years'] = $egovernance_innovation_action_plan['years'];
            // }


            DB::table('egovernance_innovation_action_plan')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($egovernance_innovation_action_plan);
        }

        foreach ($request->sub_row_id as $subRow) {
            // $sub_data = \App\Models\EGovernanceInnovationActionPlanSub::find($subRow)->where('unique_form_id','=', $unique_form_id);
            $sub_activities = 'sub_row_activities_' . $subRow;
            $sub_performance_index = 'sub_row_performance_index_' . $subRow;
            $sub_unit = 'sub_row_unit_' . $subRow;
            $sub_performance_index_values = 'sub_row_performance_index_values_' . $subRow;
            $sub_annual_target = 'sub_row_annual_target_' . $subRow;
            $sub_acquisition1 = 'sub_row_acquisition1_' . $subRow;
            $sub_acquisition2 = 'sub_row_acquisition2_' . $subRow;
            $sub_branch_responsible_implementation = 'sub_row_branch_responsible_implementation_' . $subRow;
            $sub_data['activities']   = $request->$sub_activities;
            $sub_data['performance_index']   = $request->$sub_performance_index;
            $sub_data['unit']   = $request->$sub_unit;
            $sub_data['performance_index_values']   = $request->$sub_performance_index_values;
            $sub_data['annual_target']   = $request->$sub_annual_target;
            $sub_data['acquisition1']   = $request->$sub_acquisition1;
            $sub_data['acquisition2']   = $request->$sub_acquisition2;
            $sub_data['branch_responsible_implementation']   = $request->$sub_branch_responsible_implementation;
            DB::table('egovernance_innovation_action_plan_sub_rows')->where('id', '=', $subRow)->where('unique_form_id', '=', $unique_form_id)->update($sub_data);
        }
    }

    /* form 2.2.2 unique store */
    public function form_two_point_two_point_two_store_unique(Request $request)
    {
        //        print_r($request->all());die;
        $years   = $request->form_year;
        //        echo "<pre>";
        //       print_r($request -> all());die;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;
        for ($i = 1; $i <= $rows; $i++) {
            //      echo $i;
            $egovernance_innovation_action_plan = new EGovernanceInnovationActionPlan();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $egovernance_innovation_action_plan['activities']   = $request->$activities;
            $egovernance_innovation_action_plan['performance_index']   = $request->$performance_index;
            $egovernance_innovation_action_plan['unit']   = $request->$unit;
            $egovernance_innovation_action_plan['performance_index_values']   = $request->$performance_index_values;
            $egovernance_innovation_action_plan['annual_target']   = $request->$annual_target;
            $egovernance_innovation_action_plan['acquisition1']   = $request->$acquisition1;
            $egovernance_innovation_action_plan['acquisition2']   = $request->$acquisition2;
            $egovernance_innovation_action_plan['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            $egovernance_innovation_action_plan['years']   = $years;
            $egovernance_innovation_action_plan['unique_form_id']   = $format;
            $egovernance_innovation_action_plan->save();
            for ($k = 1; $k <= 6; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $sub_activities = 'activities_' . $i . '_' . $k;
                    $sub_performance_index = 'performance_index_' . $i . '_' . $k;
                    $sub_unit = 'unit_' . $i . '._' . $k;
                    $sub_performance_index_values = 'performance_index_values_' . $i . '_' . $k;
                    $sub_annual_target = 'annual_target_' . $i . '_' . $k;
                    $sub_acquisition1 = 'acquisition1_' . $i . '_' . $k;
                    $sub_acquisition2 = 'acquisition2_' . $i . '_' . $k;
                    $sub_branch_responsible_implementation = 'branch_responsible_implementation_' . $i . '_' . $k;
                    $sub_data['row_id']   = $egovernance_innovation_action_plan->id;
                    $sub_data['activities']   = $request->$sub_activities;
                    $sub_data['performance_index']   = $request->$sub_performance_index;
                    $sub_data['unit']   = $request->$sub_unit;
                    $sub_data['performance_index_values']   = $request->$sub_performance_index_values;
                    $sub_data['annual_target']   = $request->$sub_annual_target;
                    $sub_data['acquisition1']   = $request->$sub_acquisition1;
                    $sub_data['acquisition2']   = $request->$sub_acquisition2;
                    $sub_data['branch_responsible_implementation']   = $request->$sub_branch_responsible_implementation;
                    $sub_data['years']   = $years;
                    $sub_data['unique_form_id']   = $format;
                    DB::table('egovernance_innovation_action_plan_sub_rows')->insert($sub_data);
                }
            }
        }
    }
    /* good */

    /* end of update form 2.2.2 */

    public function form_two_point_two_point_three()
    {
        SwitchLanguage(Session::get('language'));
        $dept = Department::all();
        $inst = Institutions::all();
        return view('admin.pages.default_forms.form_two_point_two_point_three', compact('dept', 'inst'));
    }

    /* form 2.2.3 store */
    public function form_two_point_two_point_three_store(Request $request)
    {



        $format = date("i_s") . '_' . mt_rand(1000, 99999);

        $rows =  $request->row_id;

        for ($i = 1; $i <= $rows; $i++) {

            $complaint_redressal_action_plan = new ComplaintRedressalActionPlan();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $complaint_redressal_action_plan['activities'] = $request->$activities;
            $complaint_redressal_action_plan['performance_index'] = $request->$performance_index;
            $complaint_redressal_action_plan['unit'] = $request->$unit;
            $complaint_redressal_action_plan['performance_index_values'] = $request->$performance_index_values;
            $complaint_redressal_action_plan['annual_target'] = $request->$annual_target;
            $complaint_redressal_action_plan['acquisition1'] = $request->$acquisition1;
            $complaint_redressal_action_plan['acquisition2'] = $request->$acquisition2;
            $complaint_redressal_action_plan['unique_form_id']   = $format;
            $complaint_redressal_action_plan['branch_responsible_implementation'] = $request->$branch_responsible_implementation;
            $complaint_redressal_action_plan->save();
        }
    }


    public function update_form_2_2_3(Request $request)
    {
        $req =  Auth::user()->id;
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);

        $years   = 2021;
        $data = [];



        foreach ($request->row_id as $row) {
            $unique_form_id = $request->unique_form_id;
            $activities = 'activities_' . $row;
            $performance_index = 'performance_index_' . $row;
            $unit = 'unit_' . $row;
            $performance_index_values = 'performance_index_values_' . $row;
            $annual_target = 'annual_target_' . $row;
            $acquisition1 = 'acquisition1_' . $row;
            $acquisition2 = 'acquisition2_' . $row;
            $acquisition3 = 'acquisition3_' . $row;
            $acquisition4 = 'acquisition4_' . $row;
            $total_sum_value = 'total_sum_value_' . $row;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $row;
            $national_strategy_action_plan['activities']   = $request->$activities;
            $national_strategy_action_plan['performance_index']   = $request->$performance_index;
            $national_strategy_action_plan['unit']   = $request->$unit;
            $national_strategy_action_plan['annual_target']   = $request->$annual_target;
            $national_strategy_action_plan['performance_index_values']   = $request->$performance_index_values;
            $annual_performance_quarterly['acquisition1']   = $request->$acquisition1;
            $annual_performance_quarterly['acquisition2']   = $request->$acquisition2;
            $annual_performance_quarterly['acquisition3']   = $request->$acquisition3;
            $annual_performance_quarterly['acquisition4']   = $request->$acquisition4;
            $annual_performance_quarterly['total_sum_value']   = $request->$total_sum_value;
            $annual_performance_quarterly['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            DB::table('complaint_redressal_action_plan')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($annual_performance_quarterly);
        }

        if (Auth::user()->id == $req) {


            $named = DB::table('user_forms')->where('sub_form_id_unique_id', $unique_form_id)->where('reciever_user_id', Auth::user()->id)->get();
            $to_user_data = User::find($named[0]->sender_user_id);
            $sendNotification = Auth::user()->name . " has updated the form.";
            $link = 'http://localhost/report-management/indiv-stored-forms/' . '5' . '/' . $unique_form_id;
            event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
        }
    }


    public function form_two_point_two_point_three_store_unique(Request $request)
    {
        //        print_r($request->all());die;
        $years   = $request->form_year;
        //        echo "<pre>";
        //       print_r($request -> all());die;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;
        for ($i = 1; $i <= $rows; $i++) {
            $complaint_redressal_action_plan = new ComplaintRedressalActionPlan();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $acquisition3 = 'acquisition3_' . $i;
            $acquisition4 = 'acquisition4_' . $i;
            $total_sum_value = 'total_sum_value_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $complaint_redressal_action_plan['activities'] = $request->$activities;
            $complaint_redressal_action_plan['performance_index'] = $request->$performance_index;
            $complaint_redressal_action_plan['unit'] = $request->$unit;
            $complaint_redressal_action_plan['performance_index_values'] = $request->$performance_index_values;
            $complaint_redressal_action_plan['annual_target'] = $request->$annual_target;
            $complaint_redressal_action_plan['acquisition1'] = $request->$acquisition1;
            $complaint_redressal_action_plan['acquisition2'] = $request->$acquisition2;
            $complaint_redressal_action_plan['acquisition3'] = $request->$acquisition3;
            $complaint_redressal_action_plan['acquisition4'] = $request->$acquisition4;
            $complaint_redressal_action_plan['total_sum_value'] = $request->$total_sum_value;
            $complaint_redressal_action_plan['unique_form_id']   = $format;
            $complaint_redressal_action_plan['branch_responsible_implementation'] = $request->$branch_responsible_implementation;
            $complaint_redressal_action_plan->save();
        }
    }








    public function form_two_point_two_point_four()
    {
        SwitchLanguage(Session::get('language'));
        $dept = Department::all();
        $inst = Institutions::all();
        return view('admin.pages.default_forms.form_two_point_two_point_four', compact('dept', 'inst'));
    }


    public function form_two_point_two_point_four_store(Request $request)
    {

        $format = date("i_s") . '_' . mt_rand(1000, 99999);



        $rows =  $request->row_id;

        for ($i = 1; $i <= $rows; $i++) {

            $implement_service_delivery_commitments = new ImplementServiceDeliveryCommitments();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $implement_service_delivery_commitments['activities'] = $request->$activities;
            $implement_service_delivery_commitments['performance_index'] = $request->$performance_index;
            $implement_service_delivery_commitments['unit'] = $request->$unit;
            $implement_service_delivery_commitments['performance_index_values'] = $request->$performance_index_values;
            $implement_service_delivery_commitments['annual_target'] = $request->$annual_target;
            $implement_service_delivery_commitments['acquisition1'] = $request->$acquisition1;
            $implement_service_delivery_commitments['acquisition2'] = $request->$acquisition2;
            $implement_service_delivery_commitments['branch_responsible_implementation'] = $request->$branch_responsible_implementation;
            if ($request->years) {
                $implement_service_delivery_commitments['years'] = $request->years;
            } else {
                $implement_service_delivery_commitments['years'] = $implement_service_delivery_commitments['years'];
            }
            $implement_service_delivery_commitments['unique_form_id']   = $format;
            $implement_service_delivery_commitments->save();
        }
    }

    public function update_form_2_2_4(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);



        foreach ($request->row_id as $row) {
            $activities = 'activities_' . $row;
            $unique_form_id =  $request->unique_form_id;
            $performance_index = 'performance_index_' . $row;
            $unit = 'unit_' . $row;
            $performance_index_values = 'performance_index_values_' . $row;
            $annual_target = 'annual_target_' . $row;
            $acquisition1 = 'acquisition1_' . $row;
            $acquisition2 = 'acquisition2_' . $row;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $row;
            $implement_service_delivery_commitments['activities']   = $request->$activities;
            $implement_service_delivery_commitments['performance_index']   = $request->$performance_index;
            $implement_service_delivery_commitments['unit']   = $request->$unit;
            $implement_service_delivery_commitments['performance_index_values']   = $request->$performance_index_values;
            $implement_service_delivery_commitments['annual_target']   = $request->$annual_target;
            $implement_service_delivery_commitments['acquisition1']   = $request->$acquisition1;
            $implement_service_delivery_commitments['acquisition2']   = $request->$acquisition2;
            $implement_service_delivery_commitments['years']   = '2021';
            $implement_service_delivery_commitments['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            // if ($request->years) {
            //     $implement_service_delivery_commitments['years'] = $request->years;
            // } else {
            //     $implement_service_delivery_commitments['years'] = $implement_service_delivery_commitments['years'];
            // }
            DB::table('implement_service_delivery_commitments')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($implement_service_delivery_commitments);
        }
    }




    /* store unique form 2.2.4 */
    /* unique store 2.2.4 */
    public function form_two_point_two_point_four_store_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        for ($i = 1; $i <= $rows; $i++) {

            $implement_service_delivery_commitments = new ImplementServiceDeliveryCommitments();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $implement_service_delivery_commitments['activities'] = $request->$activities;
            $implement_service_delivery_commitments['performance_index'] = $request->$performance_index;
            $implement_service_delivery_commitments['unit'] = $request->$unit;
            $implement_service_delivery_commitments['performance_index_values'] = $request->$performance_index_values;
            $implement_service_delivery_commitments['annual_target'] = $request->$annual_target;
            $implement_service_delivery_commitments['acquisition1'] = $request->$acquisition1;
            $implement_service_delivery_commitments['acquisition2'] = $request->$acquisition2;
            $implement_service_delivery_commitments['branch_responsible_implementation'] = $request->$branch_responsible_implementation;
            $implement_service_delivery_commitments['unique_form_id']   = $format;
            $implement_service_delivery_commitments['years']   = $years;
            $implement_service_delivery_commitments->save();
        }
    }

    /* end of unique store 2.2.4 */
    /*  */
    public function form_two_point_two_point_five()
    {
        SwitchLanguage(Session::get('language'));
        $dept = Department::all();
        $inst = Institutions::all();
        return view('admin.pages.default_forms.form_two_point_two_point_five', compact('dept', 'inst'));
    }


    public function form_two_point_two_point_five_store(Request $request)
    {



        $years = 2021;

        $row = $request->row_id;
        $format = date("i_s") . '_' . mt_rand(1000, 99999);

        for ($i = 1; $i <= $row; $i++) {
            $financial_year_right_information = new FinancialYeartheRightInformation();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;

            $financial_year_right_information['activities'] = $request->$activities;
            $financial_year_right_information['performance_index']   = $request->$performance_index;
            $financial_year_right_information['unit']   = $request->$unit;
            $financial_year_right_information['performance_index_values']   = $request->$performance_index_values;
            $financial_year_right_information['annual_target']   = $request->$annual_target;
            $financial_year_right_information['acquisition1']   = $request->$acquisition1;
            $financial_year_right_information['acquisition2']   = $request->$acquisition2;
            $financial_year_right_information['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            $financial_year_right_information['years']   = $years;
            $financial_year_right_information['unique_form_id']   = $format;
            $financial_year_right_information->save();
        }
    }

    /* unique store 2.2.5 */
    public function form_two_point_two_point_five_store_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        for ($i = 1; $i <= $rows; $i++) {
            $financial_year_right_information = new FinancialYeartheRightInformation();
            $activities = 'activities_' . $i;
            $performance_index = 'performance_index_' . $i;
            $unit = 'unit_' . $i;
            $performance_index_values = 'performance_index_values_' . $i;
            $annual_target = 'annual_target_' . $i;
            $acquisition1 = 'acquisition1_' . $i;
            $acquisition2 = 'acquisition2_' . $i;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $i;
            $financial_year_right_information['activities'] = $request->$activities;
            $financial_year_right_information['performance_index']   = $request->$performance_index;
            $financial_year_right_information['unit']   = $request->$unit;
            $financial_year_right_information['performance_index_values']   = $request->$performance_index_values;
            $financial_year_right_information['annual_target']   = $request->$annual_target;
            $financial_year_right_information['acquisition1']   = $request->$acquisition1;
            $financial_year_right_information['acquisition2']   = $request->$acquisition2;
            $financial_year_right_information['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            $financial_year_right_information['years']   = $years;
            $financial_year_right_information['unique_form_id']   = $format;
            $financial_year_right_information->save();
        }
    }

    /* end of unique store 2.2.4 */


    public function update_form_2_2_5(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);

        $years   = 2021;
        $data = [];



        foreach ($request->row_id as $row) {
            $unique_form_id = $request->unique_form_id;
            $activities = 'activities_' . $row;
            $performance_index = 'performance_index_' . $row;
            $unit = 'unit_' . $row;
            $performance_index_values = 'performance_index_values_' . $row;
            $annual_target = 'annual_target_' . $row;
            $acquisition1 = 'acquisition1_' . $row;
            $acquisition2 = 'acquisition2_' . $row;
            $branch_responsible_implementation = 'branch_responsible_implementation_' . $row;
            $financial_year_right_information['activities']   = $request->$activities;
            $financial_year_right_information['performance_index']   = $request->$performance_index;
            $financial_year_right_information['unit']   = $request->$unit;
            $financial_year_right_information['performance_index_values']   = $request->$performance_index_values;
            $financial_year_right_information['annual_target']   = $request->$annual_target;
            $financial_year_right_information['acquisition1']   = $request->$acquisition1;
            $financial_year_right_information['acquisition2']   = $request->$acquisition2;
            $financial_year_right_information['branch_responsible_implementation']   = $request->$branch_responsible_implementation;
            $financial_year_right_information['years']   = $request->years;
            DB::table('financial_year_right_information')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($financial_year_right_information);
        }
    }

    /* form appendix one */
    public function form_appendix_one()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_appendix_one');
    }
    /* form appendix one store */
    public function form_appendix_one_store(Request $request)
    {
        $format = date("i_s") . '_' . mt_rand(1000, 99999);

        foreach ($request->appendix_one_subject as $a) {
            $mod['appendix_one_subject'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_one_mis')->insert($mod);
        }

        foreach ($request->appendix_two_subject as $a) {
            $mod['appendix_two_subject'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_one_mis')->insert($mod);
        }

        foreach ($request->appendix_one_ka as $a) {
            $mod['appendix_one_ka']      = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_one_mis')->insert($mod);
        }

        foreach ($request->appendix_one_kha as $a) {
            $mod['appendix_one_kha'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_one_mis')->insert($mod);
        }

        for ($i = 1; $i <= 1; $i++) {
            $ministry = 'ministry_' . $i;
            $budget = 'budget_' . $i;
            $revised = 'revised_' . $i;
            $proposed_budget = 'proposed_budget_' . $i;
            $projection_1 = 'projection_1_' . $i;
            $projection_2 = 'projection_2_' . $i;
            $data['ministry'] = $request->$ministry;
            $data['budget']   = $request->$budget;
            $data['revised']   = $request->$revised;
            $data['proposed_budget']   = $request->$proposed_budget;
            $data['projection_1']   = $request->$projection_1;
            $data['projection_2']   = $request->$projection_2;
            $data['unique_form_id']   = $format;
            DB::table('appendix_one_table_ka')->insert($data);
        }


        for ($i = 10; $i <= 11; $i++) {
            $ministry = 'ministry_' . $i;
            $budget   = 'budget_' . $i;
            $revised  = 'revised_' . $i;
            $revenue  = 'revenue_' . $i;
            $gob_1    = 'gob_1' . $i;
            $gob_2    = 'gob_2' . $i;
            $rpa_1    = 'rpa_1' . $i;
            $dpa_1    = 'dpa_1' . $i;
            $total    = 'total_' . $i;
            $projection_1    = 'projection_1_' . $i;
            $projection_2    = 'projection_2_' . $i;
            $datas['ministryss'] = $request->$ministry;
            $datas['budget']   = $request->$budget;
            $datas['revised']   = $request->$revised;
            $datas['revenue']   = $request->$revenue;
            $datas['gob_1']   = $request->$gob_1;
            $datas['gob_2']   = $request->$gob_2;
            $datas['rpa_1']   = $request->$rpa_1;
            $datas['dpa_1']   = $request->$dpa_1;
            $datas['total']   = $request->$total;
            $datas['projection_1']   = $request->$projection_1;
            $datas['projection_2']   = $request->$projection_2;
            $datas['unique_form_id']   = $format;
            DB::table('appendix_one_table_kha')->insert($datas);
        }
    }


    public function form_appendix_one_update(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);




        foreach ($request->row_id_l1 as $row) {
            $appendix_one_subject = 'appendix_one_subject_' . $row;
            $line['appendix_one_subject'] = $request->$appendix_one_subject;
            $unique_form_id = $request->unique_form_id;
            $line['status'] = true;
            DB::table('appendix_one_mis')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($line);
        }


        foreach ($request->row_id_l2 as $row) {
            $appendix_two_subject = 'appendix_two_subject_' . $row;
            $apptwo['appendix_two_subject'] = $request->$appendix_two_subject;
            $apptwo['status'] = true;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_one_mis')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($apptwo);
        }


        foreach ($request->row_id_ka as $row) {
            $unique_form_id = $request->unique_form_id;
            $ministry = 'ministry_' . $row;
            $budget = 'budget_' . $row;
            $revised = 'revised_' . $row;
            $proposed_budget = 'proposed_budget_' . $row;
            $projection_1 = 'projection_1_' . $row;
            $projection_2 = 'projection_2_' . $row;
            $data['ministry'] = $request->$ministry;
            $data['budget']   = $request->$budget;
            $data['revised']   = $request->$revised;
            $data['proposed_budget']   = $request->$proposed_budget;
            $data['projection_1']   = $request->$projection_1;
            $data['projection_2']   = $request->$projection_2;
            $data['status'] = true;
            DB::table('appendix_one_table_ka')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($data);
        }

        foreach ($request->row_id_kha as $row) {
            $unique_form_id = $request->unique_form_id;
            $ministry = 'ministryss_' . $row;
            $budget = 'budget_' . $row;
            $revised = 'revised_' . $row;
            $revenue = 'revenue_' . $row;
            $gob_1 = 'gob_1_' . $row;
            $gob_2 = 'gob_2_' . $row;
            $rpa_1 = 'rpa_1_' . $row;
            $dpa_1 = 'dpa_1_' . $row;
            $total = 'total_' . $row;
            $projection_1 = 'projection_1_' . $row;
            $projection_2 = 'projection_2_' . $row;
            $datasss['ministryss']   = $request->$ministry;
            $datasss['budget']   = $request->$budget;
            $datasss['revised']   = $request->$revised;
            $datasss['revenue']   = $request->$revenue;
            $datasss['gob_1']   = $request->$gob_1;
            $datasss['gob_2']   = $request->$gob_2;
            $datasss['rpa_1']   = $request->$rpa_1;
            $datasss['dpa_1']   = $request->$dpa_1;
            $datasss['total']   = $request->$total;
            $datasss['projection_1']   = $request->$projection_1;
            $datasss['projection_2']   = $request->$projection_2;
            $data['status'] = true;
            DB::table('appendix_one_table_kha')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($datasss);
        }
    }

    /* end of appendix 1 */

    /* appendix one store unique */
    public function form_store_appendix_one_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        foreach ($request->appendix_one_subject as $a) {
            $mod['appendix_one_subject'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_one_mis')->insert($mod);
        }

        foreach ($request->appendix_two_subject as $a) {
            $mod['appendix_two_subject'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_one_mis')->insert($mod);
        }

        foreach ($request->appendix_one_ka as $a) {
            $mod['appendix_one_ka']      = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_one_mis')->insert($mod);
        }

        foreach ($request->appendix_one_kha as $a) {
            $mod['appendix_one_kha'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_one_mis')->insert($mod);
        }

        for ($i = 1; $i <= 1; $i++) {
            $ministry = 'ministry_' . $i;
            $budget = 'budget_' . $i;
            $revised = 'revised_' . $i;
            $proposed_budget = 'proposed_budget_' . $i;
            $projection_1 = 'projection_1_' . $i;
            $projection_2 = 'projection_2_' . $i;
            $data['ministry'] = $request->$ministry;
            $data['budget']   = $request->$budget;
            $data['revised']   = $request->$revised;
            $data['proposed_budget']   = $request->$proposed_budget;
            $data['projection_1']   = $request->$projection_1;
            $data['projection_2']   = $request->$projection_2;
            $data['unique_form_id']   = $format;
            DB::table('appendix_one_table_ka')->insert($data);
        }


        for ($i = 10; $i <= 11; $i++) {
            $ministry = 'ministry_' . $i;
            $budget   = 'budget_' . $i;
            $revised  = 'revised_' . $i;
            $revenue  = 'revenue_' . $i;
            $gob_1    = 'gob_1' . $i;
            $gob_2    = 'gob_2' . $i;
            $rpa_1    = 'rpa_1' . $i;
            $dpa_1    = 'dpa_1' . $i;
            $total    = 'total_' . $i;
            $projection_1    = 'projection_1_' . $i;
            $projection_2    = 'projection_2_' . $i;
            $datas['ministryss'] = $request->$ministry;
            $datas['budget']   = $request->$budget;
            $datas['revised']   = $request->$revised;
            $datas['revenue']   = $request->$revenue;
            $datas['gob_1']   = $request->$gob_1;
            $datas['gob_2']   = $request->$gob_2;
            $datas['rpa_1']   = $request->$rpa_1;
            $datas['dpa_1']   = $request->$dpa_1;
            $datas['total']   = $request->$total;
            $datas['projection_1']   = $request->$projection_1;
            $datas['projection_2']   = $request->$projection_2;
            $datas['unique_form_id']   = $format;
            DB::table('appendix_one_table_kha')->insert($datas);
        }
    }
    /* end unique store */

    /* form appendix one */
    public function form_appendix_two()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_appendix_two');
    }

    /* form appendix one store */
    public function form_appendix_two_store(Request $request)
    {
        $format = date("i_s") . '_' . mt_rand(1000, 99999);

        foreach ($request->appendix_one_subject as $a) {
            $mod['appendix_one_subject'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_two_mis')->insert($mod);
        }

        foreach ($request->appendix_two_subject as $a) {
            $mod['appendix_two_subject'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_two_mis')->insert($mod);
        }

        foreach ($request->appendix_one_ka as $a) {
            $mod['appendix_one_ka']      = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_two_mis')->insert($mod);
        }

        foreach ($request->appendix_one_kha as $a) {
            $mod['appendix_one_kha'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_two_mis')->insert($mod);
        }

        for ($i = 1; $i <= 1; $i++) {
            $ministry = 'ministry_' . $i;
            $budget = 'budget_' . $i;
            $revised = 'revised_' . $i;
            $proposed_budget = 'proposed_budget_' . $i;
            $projection_1 = 'projection_1_' . $i;
            $projection_2 = 'projection_2_' . $i;
            $data['ministry'] = $request->$ministry;
            $data['budget']   = $request->$budget;
            $data['revised']   = $request->$revised;
            $data['proposed_budget']   = $request->$proposed_budget;
            $data['projection_1']   = $request->$projection_1;
            $data['projection_2']   = $request->$projection_2;
            $data['unique_form_id']   = $format;
            DB::table('appendix_two_table_ka')->insert($data);
        }


        for ($i = 10; $i <= 11; $i++) {
            $ministry = 'ministry_' . $i;
            $budget   = 'budget_' . $i;
            $revised  = 'revised_' . $i;
            $revenue  = 'revenue_' . $i;
            $gob_1    = 'gob_1' . $i;
            $gob_2    = 'gob_2' . $i;
            $rpa_1    = 'rpa_1' . $i;
            $dpa_1    = 'dpa_1' . $i;
            $total    = 'total_' . $i;
            $projection_1    = 'projection_1_' . $i;
            $projection_2    = 'projection_2_' . $i;
            $datas['ministryss'] = $request->$ministry;
            $datas['budget']   = $request->$budget;
            $datas['revised']   = $request->$revised;
            $datas['revenue']   = $request->$revenue;
            $datas['gob_1']   = $request->$gob_1;
            $datas['gob_2']   = $request->$gob_2;
            $datas['rpa_1']   = $request->$rpa_1;
            $datas['dpa_1']   = $request->$dpa_1;
            $datas['total']   = $request->$total;
            $datas['projection_1']   = $request->$projection_1;
            $datas['projection_2']   = $request->$projection_2;
            $datas['unique_form_id']   = $format;
            DB::table('appendix_two_table_kha')->insert($datas);
        }
    }


    public function form_appendix_two_update(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);


        foreach ($request->row_id_l1 as $row) {
            $appendix_one_subject = 'appendix_one_subject_' . $row;
            $line['appendix_one_subject'] = $request->$appendix_one_subject;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_two_mis')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($line);
        }


        foreach ($request->row_id_l2 as $row) {
            $appendix_two_subject = 'appendix_two_subject_' . $row;
            $apptwo['appendix_two_subject'] = $request->$appendix_two_subject;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_two_mis')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($apptwo);
        }


        foreach ($request->row_id_ka as $row) {
            $unique_form_id = $request->unique_form_id;
            $ministry = 'ministry_' . $row;
            $budget = 'budget_' . $row;
            $revised = 'revised_' . $row;
            $proposed_budget = 'proposed_budget_' . $row;
            $projection_1 = 'projection_1_' . $row;
            $projection_2 = 'projection_2_' . $row;
            $data['ministry'] = $request->$ministry;
            $data['budget']   = $request->$budget;
            $data['revised']   = $request->$revised;
            $data['proposed_budget']   = $request->$proposed_budget;
            $data['projection_1']   = $request->$projection_1;
            $data['projection_2']   = $request->$projection_2;
            DB::table('appendix_two_table_ka')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($data);
        }

        foreach ($request->row_id_kha as $row) {
            $unique_form_id = $request->unique_form_id;
            $ministry = 'ministryss_' . $row;
            $budget = 'budget_' . $row;
            $revised = 'revised_' . $row;
            $revenue = 'revenue_' . $row;
            $gob_1 = 'gob_1_' . $row;
            $gob_2 = 'gob_2_' . $row;
            $rpa_1 = 'rpa_1_' . $row;
            $dpa_1 = 'dpa_1_' . $row;
            $total = 'total_' . $row;
            $projection_1 = 'projection_1_' . $row;
            $projection_2 = 'projection_2_' . $row;
            $datasss['ministryss']   = $request->$ministry;
            $datasss['budget']   = $request->$budget;
            $datasss['revised']   = $request->$revised;
            $datasss['revenue']   = $request->$revenue;
            $datasss['gob_1']   = $request->$gob_1;
            $datasss['gob_2']   = $request->$gob_2;
            $datasss['rpa_1']   = $request->$rpa_1;
            $datasss['dpa_1']   = $request->$dpa_1;
            $datasss['total']   = $request->$total;
            $datasss['projection_1']   = $request->$projection_1;
            $datasss['projection_2']   = $request->$projection_2;
            DB::table('appendix_two_table_kha')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($datasss);
        }
    }

    /* appendix two store unique */
    public function form_store_appendix_two_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        foreach ($request->appendix_one_subject as $a) {
            $mod['appendix_one_subject'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_two_mis')->insert($mod);
        }

        foreach ($request->appendix_two_subject as $a) {
            $mod['appendix_two_subject'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_two_mis')->insert($mod);
        }

        foreach ($request->appendix_one_ka as $a) {
            $mod['appendix_one_ka']      = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_two_mis')->insert($mod);
        }

        foreach ($request->appendix_one_kha as $a) {
            $mod['appendix_one_kha'] = $a;
            $mod['unique_form_id']       = $format;
            DB::table('appendix_two_mis')->insert($mod);
        }

        for ($i = 1; $i <= 1; $i++) {
            $ministry = 'ministry_' . $i;
            $budget = 'budget_' . $i;
            $revised = 'revised_' . $i;
            $proposed_budget = 'proposed_budget_' . $i;
            $projection_1 = 'projection_1_' . $i;
            $projection_2 = 'projection_2_' . $i;
            $data['ministry'] = $request->$ministry;
            $data['budget']   = $request->$budget;
            $data['revised']   = $request->$revised;
            $data['proposed_budget']   = $request->$proposed_budget;
            $data['projection_1']   = $request->$projection_1;
            $data['projection_2']   = $request->$projection_2;
            $data['unique_form_id']   = $format;
            DB::table('appendix_two_table_ka')->insert($data);
        }


        for ($i = 10; $i <= 11; $i++) {
            $ministry = 'ministry_' . $i;
            $budget   = 'budget_' . $i;
            $revised  = 'revised_' . $i;
            $revenue  = 'revenue_' . $i;
            $gob_1    = 'gob_1' . $i;
            $gob_2    = 'gob_2' . $i;
            $rpa_1    = 'rpa_1' . $i;
            $dpa_1    = 'dpa_1' . $i;
            $total    = 'total_' . $i;
            $projection_1    = 'projection_1_' . $i;
            $projection_2    = 'projection_2_' . $i;
            $datas['ministryss'] = $request->$ministry;
            $datas['budget']   = $request->$budget;
            $datas['revised']   = $request->$revised;
            $datas['revenue']   = $request->$revenue;
            $datas['gob_1']   = $request->$gob_1;
            $datas['gob_2']   = $request->$gob_2;
            $datas['rpa_1']   = $request->$rpa_1;
            $datas['dpa_1']   = $request->$dpa_1;
            $datas['total']   = $request->$total;
            $datas['projection_1']   = $request->$projection_1;
            $datas['projection_2']   = $request->$projection_2;
            $datas['unique_form_id']   = $format;
            DB::table('appendix_two_table_kha')->insert($datas);
        }
    }
    /* end unique store */


    /* appendix 3 */
    public function form_appendix_three()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_appendix_three');
    }
    /* appendix three store */

    public function form_appendix_three_store(Request $request)
    {

        $format = date("i_s") . '_' . mt_rand(1000, 99999);
        foreach ($request->budget_sub as $value) {
            $datass['budget'] = $value;
            $datass['unique_form_id']   = $format;
            DB::table('appendix_three_mis')->insert($datass);
        }

        for ($i = 1; $i <= 1; $i++) {
            $branch = 'branch_' . $i;
            $budget = 'budget_' . $i;
            $target = 'target_' . $i;
            $first_quarter = 'first_quarter_' . $i;
            $second_quarter = 'second_quarter_' . $i;
            $third_quarter = 'third_quarter_' . $i;
            $fourth_quarter = 'fourth_quarter_' . $i;
            $first_fourth_quarter = 'first_fourth_quarter_' . $i;
            $data['branch'] = $request->$branch;
            $data['budget']   = $request->$budget;
            $data['target']   = $request->$target;
            $data['first_quarter']   = $request->$first_quarter;
            $data['second_quarter']   = $request->$second_quarter;
            $data['third_quarter']   = $request->$third_quarter;
            $data['fourth_quarter']   = $request->$fourth_quarter;
            $data['first_fourth_quarter']   = $request->$first_fourth_quarter;
            $data['unique_form_id']   = $format;
            DB::table('appendix_three_table')->insert($data);
        }
    }


    public function form_appendix_three_update(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);
        $format = date("i_s") . '_' . mt_rand(1000, 99999);

        $bud = $request->budget_id;


        for ($x = 1; $x <= $bud; $x += 1) {
            $a = 'budget_sub_' . $x;
            $relevnt['budget'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_three_mis')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($relevnt);
        }


        foreach ($request->row_id as $row) {
            $unique_form_id = $request->unique_form_id;
            $branch = 'branch_' . $row;
            $budget = 'budget_' . $row;
            $target = 'target_' . $row;
            $first_quarter = 'first_quarter_' . $row;
            $second_quarter = 'second_quarter_' . $row;
            $third_quarter = 'third_quarter_' . $row;
            $fourth_quarter = 'fourth_quarter_' . $row;
            $first_fourth_quarter = 'first_fourth_quarter_' . $row;
            $data['branch'] = $request->$branch;
            $data['budget']   = $request->$budget;
            $data['target']   = $request->$target;
            $data['first_quarter']   = $request->$first_quarter;
            $data['second_quarter']   = $request->$second_quarter;
            $data['first_quarter']   = $request->$first_quarter;
            $data['third_quarter']   = $request->$third_quarter;
            $data['fourth_quarter']   = $request->$fourth_quarter;
            $data['first_fourth_quarter']   = $request->$first_fourth_quarter;
            DB::table('appendix_three_table')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($data);
        }
    }


    /* appendix three store unique */
    public function form_store_appendix_three_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        foreach ($request->budget_sub as $value) {
            $datass['budget'] = $value;
            $datass['unique_form_id']   = $format;
            DB::table('appendix_three_mis')->insert($datass);
        }

        for ($i = 1; $i <= 1; $i++) {
            $branch = 'branch_' . $i;
            $budget = 'budget_' . $i;
            $target = 'target_' . $i;
            $first_quarter = 'first_quarter_' . $i;
            $second_quarter = 'second_quarter_' . $i;
            $third_quarter = 'third_quarter_' . $i;
            $fourth_quarter = 'fourth_quarter_' . $i;
            $first_fourth_quarter = 'first_fourth_quarter_' . $i;
            $data['branch'] = $request->$branch;
            $data['budget']   = $request->$budget;
            $data['target']   = $request->$target;
            $data['first_quarter']   = $request->$first_quarter;
            $data['second_quarter']   = $request->$second_quarter;
            $data['third_quarter']   = $request->$third_quarter;
            $data['fourth_quarter']   = $request->$fourth_quarter;
            $data['first_fourth_quarter']   = $request->$first_fourth_quarter;
            $data['unique_form_id']   = $format;
            DB::table('appendix_three_table')->insert($data);
        }
    }
    /* end unique store */



    /* end of appendix 3 */

    /* appendix 4 */
    public function form_appendix_four()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_appendix_four');
    }

    public function form_appendix_four_store(Request $request)
    {

        $format = date("i_s") . '_' . mt_rand(1000, 99999);


        foreach ($request->budget_sub as $value) {
            $datass['budget'] = $value;
            $datass['unique_form_id']   = $format;
            DB::table('appendix_four_mis')->insert($datass);
        }

        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $branch = 'branch_' . $i;
            $budget = 'budget_' . $i;
            $target = 'target_' . $i;
            $first_quarter = 'first_quarter_' . $i;
            $second_quarter = 'second_quarter_' . $i;
            $third_quarter = 'third_quarter_' . $i;
            $fourth_quarter = 'fourth_quarter_' . $i;
            $first_fourth_quarter = 'first_fourth_quarter_' . $i;
            $data['branch'] = $request->$branch;
            $data['budget']   = $request->$budget;
            $data['target']   = $request->$target;
            $data['first_quarter']   = $request->$first_quarter;
            $data['second_quarter']   = $request->$second_quarter;
            $data['third_quarter']   = $request->$third_quarter;
            $data['fourth_quarter']   = $request->$fourth_quarter;
            $data['first_fourth_quarter']   = $request->$first_fourth_quarter;
            $data['unique_form_id']   = $format;
            DB::table('appendix_four_table')->insert($data);
        }
    }


    public function form_appendix_four_update(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);


        $bud = $request->budget_id;


        for ($x = 1; $x <= $bud; $x += 1) {
            $unique_form_id = $request->unique_form_id;
            $a = 'budget_sub_' . $x;
            $relevnt['budget'] = $request->$a;
            DB::table('appendix_four_mis')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($relevnt);
        }






        foreach ($request->row_id as $row) {
            $unique_form_id = $request->unique_form_id;
            $branch = 'branch_' . $row;
            $budget = 'budget_' . $row;
            $target = 'target_' . $row;
            $first_quarter = 'first_quarter_' . $row;
            $second_quarter = 'second_quarter_' . $row;
            $third_quarter = 'third_quarter_' . $row;
            $fourth_quarter = 'fourth_quarter_' . $row;
            $first_fourth_quarter = 'first_fourth_quarter_' . $row;
            $data['branch'] = $request->$branch;
            $data['budget']   = $request->$budget;
            $data['target']   = $request->$target;
            $data['first_quarter']   = $request->$first_quarter;
            $data['second_quarter']   = $request->$second_quarter;
            $data['first_quarter']   = $request->$first_quarter;
            $data['third_quarter']   = $request->$third_quarter;
            $data['fourth_quarter']   = $request->$fourth_quarter;
            $data['first_fourth_quarter']   = $request->$first_fourth_quarter;
            DB::table('appendix_four_table')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($data);
        }
    }


    /* appendix four store unique */
    public function form_store_appendix_four_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;


        foreach ($request->budget_sub as $value) {
            $datass['budget'] = $value;
            $datass['unique_form_id']   = $format;
            DB::table('appendix_four_mis')->insert($datass);
        }

        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $branch = 'branch_' . $i;
            $budget = 'budget_' . $i;
            $target = 'target_' . $i;
            $first_quarter = 'first_quarter_' . $i;
            $second_quarter = 'second_quarter_' . $i;
            $third_quarter = 'third_quarter_' . $i;
            $fourth_quarter = 'fourth_quarter_' . $i;
            $first_fourth_quarter = 'first_fourth_quarter_' . $i;
            $data['branch'] = $request->$branch;
            $data['budget']   = $request->$budget;
            $data['target']   = $request->$target;
            $data['first_quarter']   = $request->$first_quarter;
            $data['second_quarter']   = $request->$second_quarter;
            $data['third_quarter']   = $request->$third_quarter;
            $data['fourth_quarter']   = $request->$fourth_quarter;
            $data['first_fourth_quarter']   = $request->$first_fourth_quarter;
            $data['unique_form_id']   = $format;
            DB::table('appendix_four_table')->insert($data);
        }
    }
    /* end unique store */

    /* appendix 5 store */
    public function form_appendix_five()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_appendix_five');
    }

    public function form_appendix_five_store(Request $request)
    {
        $format = 'form_' . date("is") . mt_rand(1000, 99999);
        foreach ($request->budget_sub8 as $value) {
            $data8['budget_sub8'] = $value;
            $data8['unique_form_id']   = $format;
            DB::table('appendix_five_mis')->insert($data8);
        }
        foreach ($request->budget_sub9 as $value) {
            $data9['budget_sub9'] = $value;
            $data9['unique_form_id']   = $format;
            DB::table('appendix_five_mis')->insert($data9);
        }
        foreach ($request->budget_sub2009 as $value) {
            $data2009['budget_sub2009'] = $value;
            $data2009['unique_form_id']   = $format;
            DB::table('appendix_five_mis')->insert($data2009);
        }

        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $fiscal_year = 'fiscal_year_' . $i;
            $activity = 'activity_' . $i;
            $improvement = 'improvement_' . $i;
            $implemented = 'implemented_' . $i;
            $data['fiscal_year'] = $request->$fiscal_year;
            $data['activity']   = $request->$activity;
            $data['improvement']   = $request->$improvement;
            $data['implemented']   = $request->$implemented;
            $data['unique_form_id']   = $format;
            DB::table('appendix_five_table')->insert($data);
        }
    }
    //appendix five update
    public function form_appendix_five_update(Request $request)
    {





        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;



        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);





        $budget_sub9_id = $request->nine_id;
        for ($x = 1; $x <= $budget_sub9_id; $x += 1) {
            $a = 'budget_sub9_' . $x;
            $bud9['budget_sub9'] = $request->$a;
            $bud9['status'] = true;
            $test5['status'] = true;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_five_mis')->where('id', '=', $budget_sub9_id)->where('unique_form_id', '=', $unique_form_id)->update($bud9);
        }

        $budget_sub2009_id = $request->nine2009_id;
        for ($y = 1; $y <= $budget_sub2009_id; $y += 1) {
            $b = 'budget_sub2009_' . $y;
            $bud2009['budget_sub2009'] = $request->$b;
            $unique_form_id = $request->unique_form_id;
            $bud2009['status'] = true;
            DB::table('appendix_five_mis')->where('id', '=', $budget_sub2009_id)->where('unique_form_id', '=', $unique_form_id)->update($bud2009);
        }

        $budget_sub8_id = $request->eight_id;
        for ($z = 1; $z <= $budget_sub8_id; $z += 1) {
            $c = 'budget_sub8_' . $z;
            $bud8['budget_sub8'] = $request->$c;
            $unique_form_id = $request->unique_form_id;
            $bud8['status'] = true;
            DB::table('appendix_five_mis')->where('id', '=', $budget_sub8_id)->where('unique_form_id', '=', $unique_form_id)->update($bud8);
        }


        foreach ($request->row_id as $row) {
            $unique_form_id = $request->unique_form_id;
            $fiscal_year = 'fiscal_year_' . $row;
            $activity = 'activity_' . $row;
            $improvement = 'improvement_' . $row;
            $implemented = 'implemented_' . $row;
            $data['fiscal_year'] = $request->$fiscal_year;
            $data['activity']   = $request->$activity;
            $data['improvement']   = $request->$improvement;
            $data['implemented']   = $request->$implemented;
            $data['status'] = true;
            DB::table('appendix_five_table')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($data);
        }
    }

    /* appendix 5 unique store */
    public function form_store_appendix_five_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        foreach ($request->budget_sub8 as $value) {
            $data8['budget_sub8'] = $value;
            $data8['unique_form_id']   = $format;
            DB::table('appendix_five_mis')->insert($data8);
        }
        foreach ($request->budget_sub9 as $value) {
            $data9['budget_sub9'] = $value;
            $data9['unique_form_id']   = $format;
            DB::table('appendix_five_mis')->insert($data9);
        }
        foreach ($request->budget_sub2009 as $value) {
            $data2009['budget_sub2009'] = $value;
            $data2009['unique_form_id']   = $format;
            DB::table('appendix_five_mis')->insert($data2009);
        }

        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $fiscal_year = 'fiscal_year_' . $i;
            $activity = 'activity_' . $i;
            $improvement = 'improvement_' . $i;
            $implemented = 'implemented_' . $i;
            $data['fiscal_year'] = $request->$fiscal_year;
            $data['activity']   = $request->$activity;
            $data['improvement']   = $request->$improvement;
            $data['implemented']   = $request->$implemented;
            $data['unique_form_id']   = $format;
            DB::table('appendix_five_table')->insert($data);
        }
    }
    /* end of 5 unique store */
    /* end of 5 */

    /* appendix 6 */
    public function form_appendix_six()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_appendix_six');
    }
    public function form_appendix_six_store(Request $request)
    {


        $format = date("i_s") . '_' . mt_rand(1000, 99999);

        foreach ($request->budget_sub as $budget_sub) {
            $budget['budget_sub'] = $budget_sub;
            $budget['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($budget);
        }

        foreach ($request->claim_1_head as $dat1) {
            $data1['claim_1_head'] = $dat1;
            $data1['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($data1);
        }
        foreach ($request->claim_2_head as $dat2) {
            $data2['claim_2_head'] = $dat2;
            $data2['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($data2);
        }
        foreach ($request->claim_3_head as $dat3) {
            $data3['claim_3_head'] = $dat3;
            $data3['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($data3);
        }

        foreach ($request->claim_1 as $value) {
            $datass['claim_1'] = $value;
            $datass['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($datass);
        }

        foreach ($request->claim_3 as $value) {
            $datass['claim_3'] = $value;
            $datass['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($datass);
        }

        foreach ($request->claim_31 as $value) {
            $datass['claim_3_1'] = $value;
            $datass['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($datass);
        }


        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $fiscal_year = 'fiscal_year_' . $i;
            $topic = 'topic_' . $i;
            $operating = 'operating_' . $i;
            $development = 'development_' . $i;
            $total = 'total_' . $i;
            $recurring = 'recurring_' . $i;
            $capital = 'capital_' . $i;
            $asset = 'asset_' . $i;
            $liability = 'liability_' . $i;
            $data['fiscal_year'] = $request->$fiscal_year;
            $data['topic']   = $request->$topic;
            $data['operating']   = $request->$operating;
            $data['development']   = $request->$development;
            $data['total']   = $request->$total;
            $data['recurring']   = $request->$recurring;
            $data['capital']   = $request->$capital;
            $data['asset']   = $request->$asset;
            $data['liability']   = $request->$liability;
            $data['unique_form_id']   = $format;
            DB::table('appendix_six_claims_table')->insert($data);
        }
    }

    public function form_appendix_six_update(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);

        $bud = $request->budget_sub_id;
        for ($x = 1; $x <= $bud; $x += 1) {
            $a = 'budget_sub_' . $x;
            $relevnt['budget_sub'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_six_claims')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($relevnt);
        }

        $claim_1 = $request->claim_1_id;
        for ($y = 1; $y <= $claim_1; $y += 1) {
            $b = 'claim_1_' . $y;
            $claim_one['claim_1'] = $request->$b;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_six_claims')->where('id', '=', $y)->where('unique_form_id', '=', $unique_form_id)->update($claim_one);
        }

        $claim_3 = $request->claim_3_id;

        for ($z = 1; $z <= $claim_3; $z += 1) {
            $c = 'claim_3_' . $z;
            $claim_three['claim_3'] = $request->$c;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_six_claims')->where('id', '=', $z)->where('unique_form_id', '=', $unique_form_id)->update($claim_three);
        }

        $claim_3_1 = $request->claim_3_1_id;
        for ($u = 1; $u <= $claim_3_1; $u += 1) {
            $d = 'claim_3_1_' . $u;
            $claim31['claim_3_1'] = $request->$d;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_six_claims')->where('id', '=', $u)->where('unique_form_id', '=', $unique_form_id)->update($claim31);
        }



        foreach ($request->claim_1_head as $dat1) {
            $damn = $request->head_id_1;
            $data1['claim_1_head'] = $dat1;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_six_claims')->where('id', '=', $damn)->where('unique_form_id', '=', $unique_form_id)->update($data1);
        }

        foreach ($request->claim_2_head as $dat2) {
            $damn = $request->head_id_2;
            $data2['claim_2_head'] = $dat2;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_six_claims')->where('id', '=', $damn)->where('unique_form_id', '=', $unique_form_id)->update($data2);
        }

        foreach ($request->claim_3_head as $dat3) {
            $damn = $request->head_id_3;
            $data3['claim_3_head'] = $dat3;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_six_claims')->where('id', '=', $damn)->where('unique_form_id', '=', $unique_form_id)->update($data3);
        }

        foreach ($request->row_id as $row) {
            $unique_form_id = $request->unique_form_id;
            $fiscal_year = 'fiscal_year_' . $row;
            $topic = 'topic_' . $row;
            $operating = 'operating_' . $row;
            $development = 'development_' . $row;
            $total = 'total_' . $row;
            $recurring = 'recurring_' . $row;
            $capital = 'capital_' . $row;
            $asset = 'asset_' . $row;
            $liability = 'liability_' . $row;
            $data['fiscal_year'] = $request->$fiscal_year;
            $data['topic']   = $request->$topic;
            $data['operating']   = $request->$operating;
            $data['development']   = $request->$development;
            $data['total']   = $request->$total;
            $data['recurring']   = $request->$recurring;
            $data['capital']   = $request->$capital;
            $data['asset']   = $request->$asset;
            $data['liability']   = $request->$liability;
            DB::table('appendix_six_claims_table')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($data);
        }
    }

    /* appendix six store unique */
    public function form_store_appendix_six_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        foreach ($request->budget_sub as $budget_sub) {
            $budget['budget_sub'] = $budget_sub;
            $budget['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($budget);
        }

        foreach ($request->claim_1_head as $dat1) {
            $data1['claim_1_head'] = $dat1;
            $data1['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($data1);
        }
        foreach ($request->claim_2_head as $dat2) {
            $data2['claim_2_head'] = $dat2;
            $data2['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($data2);
        }
        foreach ($request->claim_3_head as $dat3) {
            $data3['claim_3_head'] = $dat3;
            $data3['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($data3);
        }

        foreach ($request->claim_1 as $value) {
            $datass['claim_1'] = $value;
            $datass['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($datass);
        }

        foreach ($request->claim_3 as $value) {
            $datass['claim_3'] = $value;
            $datass['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($datass);
        }

        foreach ($request->claim_31 as $value) {
            $datass['claim_3_1'] = $value;
            $datass['unique_form_id']   = $format;
            DB::table('appendix_six_claims')->insert($datass);
        }


        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $fiscal_year = 'fiscal_year_' . $i;
            $topic = 'topic_' . $i;
            $operating = 'operating_' . $i;
            $development = 'development_' . $i;
            $total = 'total_' . $i;
            $recurring = 'recurring_' . $i;
            $capital = 'capital_' . $i;
            $asset = 'asset_' . $i;
            $liability = 'liability_' . $i;
            $data['fiscal_year'] = $request->$fiscal_year;
            $data['topic']   = $request->$topic;
            $data['operating']   = $request->$operating;
            $data['development']   = $request->$development;
            $data['total']   = $request->$total;
            $data['recurring']   = $request->$recurring;
            $data['capital']   = $request->$capital;
            $data['asset']   = $request->$asset;
            $data['liability']   = $request->$liability;
            $data['unique_form_id']   = $format;
            DB::table('appendix_six_claims_table')->insert($data);
        }
    }
    /* end unique store */


    /* appendix 6 end */

    /* appendix 7 */
    public function form_appendix_seven(Request $request)
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_appendix_seven');
    }
    /* appendix 7 store */
    public function form_appendix_seven_store(Request $request)
    {
        // $format = date("i_s") . '_' . mt_rand(1000, 99999);
        // foreach ($request->point_1_0 as $p_1) {
        //     $point_1_0['point_1_0'] = $p_1;
        //     $point_1_0['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_1_0);
        // }
        // foreach ($request->point_1_1 as $p_1_1) {
        //     $point_1_1['point_1_1'] = $p_1_1;
        //     $point_1_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_1_1);
        // }
        // foreach ($request->point_1_1_line as $p_1_1_line) {
        //     $point_1_1_line['point_1_1_line'] = $p_1_1_line;
        //     $point_1_1_line['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_1_1_line);
        // }
        // foreach ($request->point_1_2 as $p_1_2) {
        //     $point_1_2['point_1_2'] = $p_1_2;
        //     $point_1_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_1_2);
        // }
        // foreach ($request->point_1_2_lines as $p_1_2_lines) {
        //     $point_1_2_lines['point_1_2_lines'] = $p_1_2_lines;
        //     $point_1_2_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_1_2_lines);
        // }

        // foreach ($request->heading_financial_1 as $head_fin_1) {
        //     $heading_financial_1['heading_financial_1'] = $head_fin_1;
        //     $heading_financial_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($heading_financial_1);
        // }


        // foreach ($request->heading_financial_2 as $head_fin_2) {
        //     $heading_financial_2['heading_financial_2'] = $head_fin_2;
        //     $heading_financial_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($heading_financial_2);
        // }


        // foreach ($request->point_2_0 as $p_2_0) {
        //     $point_2_0['point_2_0'] = $p_2_0;
        //     $point_2_0['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_2_0);
        // }

        // foreach ($request->point_3_0 as $p_3_0) {
        //     $point_3_0['point_3_0'] = $p_3_0;
        //     $point_3_0['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_0);
        // }

        // foreach ($request->point_3_1 as $p_3_1) {
        //     $point_3_1['point_3_1'] = $p_3_1;
        //     $point_3_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1);
        // }


        // foreach ($request->point_3_1_1 as $p_3_1_1) {
        //     $point_3_1_1['point_3_1_1'] = $p_3_1_1;
        //     $point_3_1_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_1);
        // }

        // foreach ($request->point_3_1_1_lines as $p_3_1_1_lines) {
        //     $point_3_1_1_lines['point_3_1_1_lines'] = $p_3_1_1_lines;
        //     $point_3_1_1_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_1_lines);
        // }

        // foreach ($request->point_3_1_2_lines as $p_3_1_2_lines) {
        //     $point_3_1_2_lines['point_3_1_2_lines'] = $p_3_1_2_lines;
        //     $point_3_1_2_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_2_lines);
        // }

        // foreach ($request->point_3_1_3_lines as $p_3_1_3_lines) {
        //     $point_3_1_3_lines['point_3_1_3_lines'] = $p_3_1_3_lines;
        //     $point_3_1_3_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_3_lines);
        // }

        // foreach ($request->point_3_1_4_lines as $p_3_1_4_lines) {
        //     $point_3_1_4_lines['point_3_1_4_lines'] = $p_3_1_4_lines;
        //     $point_3_1_4_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_4_lines);
        // }

        // foreach ($request->point_3_1_5_lines as $p_3_1_5_lines) {
        //     $point_3_1_5_lines['point_3_1_5_lines'] = $p_3_1_5_lines;
        //     $point_3_1_5_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_5_lines);
        // }

        // foreach ($request->point_3_1_2 as $p_3_1_2) {
        //     $point_3_1_2['point_3_1_2'] = $p_3_1_2;
        //     $point_3_1_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_2);
        // }

        // foreach ($request->point_3_1_3 as $p_3_1_3) {
        //     $point_3_1_3['point_3_1_3'] = $p_3_1_3;
        //     $point_3_1_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_3);
        // }

        // foreach ($request->point_3_1_4 as $p_3_1_4) {
        //     $point_3_1_4['point_3_1_4'] = $p_3_1_4;
        //     $point_3_1_4['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_4);
        // }

        // foreach ($request->point_3_1_5 as $p_3_1_5) {
        //     $point_3_1_5['point_3_1_5'] = $p_3_1_5;
        //     $point_3_1_5['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_5);
        // }

        // foreach ($request->point_3_2 as $p_3_2) {
        //     $point_3_2['point_3_2'] = $p_3_2;
        //     $point_3_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_2);
        // }


        // foreach ($request->point_4_1 as $p_4_1) {
        //     $point_4_1['point_4_1'] = $p_4_1;
        //     $point_4_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_4_1);
        // }

        // foreach ($request->point_4_2 as $p_4_2) {
        //     $point_4_2['point_4_2'] = $p_4_2;
        //     $point_4_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_4_2);
        // }

        // foreach ($request->point_4_2_1 as $p_2_1) {
        //     $point_4_2_1['point_4_2_1'] = $p_2_1;
        //     $point_4_2_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_4_2_1);
        // }

        // foreach ($request->point_4_2_2 as $p_4_2_2) {
        //     $point_4_2_2['point_4_2_2'] = $p_4_2_2;
        //     $point_4_2_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_4_2_2);
        // }

        // foreach ($request->point_5_0 as $p_5_0) {
        //     $point_5_0['point_5_0'] = $p_5_0;
        //     $point_5_0['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_5_0);
        // }

        // foreach ($request->point_6_0 as $p_6_0) {
        //     $point_6_0['point_6_0'] = $p_6_0;
        //     $point_6_0['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_0);
        // }

        // foreach ($request->point_6_1 as $p_6_1) {
        //     $point_6_1['point_6_1'] = $p_6_1;
        //     $point_6_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_1);
        // }


        // foreach ($request->point_6_1_1 as $p_6_1_1) {
        //     $point_6_1_1['point_6_1_1'] = $p_6_1_1;
        //     $point_6_1_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_1_1);
        // }

        // foreach ($request->point_6_1_2 as $p_6_1_2) {
        //     $point_6_1_2['point_6_1_2'] = $p_6_1_2;
        //     $point_6_1_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_1_2);
        // }

        // foreach ($request->point_6_1_3 as $p_6_1_3) {
        //     $point_6_1_3['point_6_1_3'] = $p_6_1_3;
        //     $point_6_1_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_1_3);
        // }

        // foreach ($request->point_6_2 as $p_6_2) {
        //     $point_6_2['point_6_2'] = $p_6_2;
        //     $point_6_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_2);
        // }

        // foreach ($request->point_6_2_1 as $p_6_2_1) {
        //     $point_6_2_1['point_6_2_1'] = $p_6_2_1;
        //     $point_6_2_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_2_1);
        // }


        // foreach ($request->point_6_2_2 as $p_6_2_2) {
        //     $point_6_2_2['point_6_2_2'] = $p_6_2_2;
        //     $point_6_2_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_2_2);
        // }

        // foreach ($request->point_6_2_3 as $p_6_2_3) {
        //     $point_6_2_3['point_6_2_3'] = $p_6_2_3;
        //     $point_6_2_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_2_3);
        // }


        // foreach ($request->point_6_3 as $p_6_3) {
        //     $point_6_3['point_6_3'] = $p_6_3;
        //     $point_6_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_3);
        // }

        // foreach ($request->point_6_3_1 as $p_6_3_1) {
        //     $point_6_3_1['point_6_3_1'] = $p_6_3_1;
        //     $point_6_3_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_3_1);
        // }

        // foreach ($request->point_6_3_2 as $p_6_3_2) {
        //     $point_6_3_2['point_6_3_2'] = $p_6_3_2;
        //     $point_6_3_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_3_1);
        // }

        // foreach ($request->point_6_3_3 as $p_6_3_3) {
        //     $point_6_3_3['point_6_3_3'] = $p_6_3_3;
        //     $point_6_3_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_3_3);
        // }

        // foreach ($request->point_6_4 as $p_6_4) {
        //     $point_6_4['point_6_4'] = $p_6_4;
        //     $point_6_4['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_4);
        // }


        // foreach ($request->point_6_4_1 as $p_6_4_1) {
        //     $point_6_4_1['point_6_4_1'] = $p_6_4_1;
        //     $point_6_4_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_4_1);
        // }

        // foreach ($request->point_6_4_2 as $p_6_4_2) {
        //     $point_6_4_2['point_6_4_2'] = $p_6_4_2;
        //     $point_6_4_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_4_2);
        // }

        // foreach ($request->point_6_4_3 as $p_6_4_3) {
        //     $point_6_4_3['point_6_4_3'] = $p_6_4_3;
        //     $point_6_4_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_4_3);
        // }

        // foreach ($request->point_6_5 as $p_6_5) {
        //     $point_6_5['point_6_5'] = $p_6_5;
        //     $point_6_5['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_5);
        // }

        // foreach ($request->point_6_5_1 as $p_6_5_1) {
        //     $point_6_5_1['point_6_5_1'] = $p_6_5_1;
        //     $point_6_5_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_5_1);
        // }

        // foreach ($request->point_6_5_2 as $p_6_5_2) {
        //     $point_6_5_2['point_6_5_2'] = $p_6_5_2;
        //     $point_6_5_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_5_2);
        // }

        // foreach ($request->point_6_5_3 as $p_6_5_3) {
        //     $point_6_5_3['point_6_5_3'] = $p_6_5_3;
        //     $point_6_5_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_5_3);
        // }


        // foreach ($request->point_6_6 as $p_6_6) {
        //     $point_6_6['point_6_6'] = $p_6_6;
        //     $point_6_6['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_6);
        // }

        // foreach ($request->point_6_6_1 as $p_6_6_1) {
        //     $point_6_6_1['point_6_6_1'] = $p_6_6_1;
        //     $point_6_6_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_6_1);
        // }

        // foreach ($request->point_6_6_2 as $p_6_6_2) {
        //     $point_6_6_2['point_6_6_2'] = $p_6_6_2;
        //     $point_6_6_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_6_2);
        // }

        // foreach ($request->point_6_6_3 as $p_6_6_3) {
        //     $point_6_6_3['point_6_6_3'] = $p_6_6_3;
        //     $point_6_6_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_6_3);
        // }

        // foreach ($request->point_6_7 as $p_6_7) {
        //     $point_6_7['point_6_7'] = $p_6_7;
        //     $point_6_7['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_7);
        // }

        // foreach ($request->point_6_7_1 as $p_6_7_1) {
        //     $point_6_7_1['point_6_7_1'] = $p_6_7_1;
        //     $point_6_7_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_7_1);
        // }

        // foreach ($request->point_6_7_2 as $p_6_7_2) {
        //     $point_6_7_2['point_6_7_2'] = $p_6_7_2;
        //     $point_6_7_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_7_2);
        // }

        // foreach ($request->point_6_7_3 as $p_6_7_3) {
        //     $point_6_7_3['point_6_7_3'] = $p_6_7_3;
        //     $point_6_7_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_7_3);
        // }

        // foreach ($request->budget_sub as $b_sub) {
        //     $budget_sub['budget_sub'] = $b_sub;
        //     $budget_sub['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($budget_sub);
        // }



        // foreach ($request->amount as $amnt) {
        //     $amount['amount'] = $amnt;
        //     $amount['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($amount);
        // }


        // foreach ($request->amount as $amnt) {
        //     $amount['amount'] = $amnt;
        //     $amount['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($amount);
        // }

        // 

        // $one_row_id = $request->one_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $one_row_id; $x += 1) {
        //     $description_one = 'description_one_' . $x;
        //     $budget_one      = 'budget_one_' . $x;
        //     $projection1_one = 'projection1_one_' . $x;
        //     $projection2_one = 'projection2_one_' . $x;
        //     $one_store['description_one'] = $request->$description_one;
        //     $one_store['budget_one'] = $request->$budget_one;
        //     $one_store['projection1_one'] = $request->$projection1_one;
        //     $one_store['projection2_one'] = $request->$projection2_one;
        //     $one_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_1')->insert($one_store);
        // }

        // $four_row_id = $request->four_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $four_row_id; $x += 1) {
        //     $priority_expenditure     = 'priority_expenditure_' . $x;
        //     $corresponding_objectives = 'corresponding_objectives_' . $x;
        //     $four_store['priority_expenditure'] = $request->$priority_expenditure;
        //     $four_store['corresponding_objectives'] = $request->$corresponding_objectives;
        //     $four_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_4')->insert($four_store);
        // }

        // $seven_row_id = $request->seven_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $seven_row_id; $x += 1) {
        //     $indicative     = 'indicative_' . $x;
        //     $related_strategic_objectives     = 'related_strategic_objectives_' . $x;
        //     $unit_measurement     = 'unit_measurement_' . $x;
        //     $revised_target = 'revised_target_' . $x;
        //     $actual_achievement = 'actual_achievement_' . $x;
        //     $goals = 'goals_' . $x;
        //     $revised_goals = 'revised_goals_' . $x;
        //     $medium_term_targets = 'medium_term_targets_' . $x;
        //     $medium_term_targets1 = 'medium_term_targets1_' . $x;
        //     $medium_term_targets2 = 'medium_term_targets2_' . $x;
        //     $seven_store['indicative'] = $request->$indicative;
        //     $seven_store['related_strategic_objectives'] = $request->$related_strategic_objectives;
        //     $seven_store['unit_measurement'] = $request->$unit_measurement;
        //     $seven_store['revised_target'] = $request->$revised_target;
        //     $seven_store['actual_achievement'] = $request->$actual_achievement;
        //     $seven_store['goals'] = $request->$goals;
        //     $seven_store['revised_goals'] = $request->$revised_goals;
        //     $seven_store['medium_term_targets'] = $request->$medium_term_targets;
        //     $seven_store['medium_term_targets1'] = $request->$medium_term_targets1;
        //     $seven_store['medium_term_targets2'] = $request->$medium_term_targets2;
        //     $seven_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_7')->insert($seven_store);
        // }


        // $eight_row_id = $request->eight_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $eight_row_id; $x += 1) {
        //     $pursuit     = 'pursuit_' . $x;
        //     $results_indicative     = 'results_indicative_' . $x;
        //     $sequence_respective_strategic     = 'sequence_respective_strategic_' . $x;
        //     $measurement_unit = 'measurement_unit_' . $x;
        //     $revised_targets_eight = 'revised_targets_eight_' . $x;
        //     $actual_achievement_eight = 'actual_achievement_eight_' . $x;
        //     $goals_eight = 'goals_eight_' . $x;
        //     $revised_targets_eight_two = '	revised_targets_eight_two_' . $x;
        //     $medium_term_targets_eight = 'medium_term_targets_eight_' . $x;
        //     $medium_term_targets_eight1 = 'medium_term_targets_eight1_' . $x;
        //     $medium_term_targets_eight2 = 'medium_term_targets_eight2_' . $x;
        //     $eight_store['pursuit'] = $request->$pursuit;
        //     $eight_store['results_indicative'] = $request->$results_indicative;
        //     $eight_store['sequence_respective_strategic'] = $request->$sequence_respective_strategic;
        //     $eight_store['measurement_unit'] = $request->$measurement_unit;
        //     $eight_store['revised_targets_eight'] = $request->$revised_targets_eight;
        //     $eight_store['actual_achievement_eight'] = $request->$actual_achievement_eight;
        //     $eight_store['goals_eight'] = $request->$goals_eight;
        //     $eight_store['revised_targets_eight_two'] = $request->$revised_targets_eight_two;
        //     $eight_store['medium_term_targets_eight'] = $request->$medium_term_targets_eight;
        //     $eight_store['medium_term_targets_eight1'] = $request->$medium_term_targets_eight1;
        //     $eight_store['medium_term_targets_eight2'] = $request->$medium_term_targets_eight2;
        //     $eight_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_8')->insert($eight_store);
        // }
        // $nine_row_id = $request->nine_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $nine_row_id; $x += 1) {
        //     $operation_name     = 'operation_name_' . $x;
        //     $related_activities     = 'related_activities_' . $x;
        //     $authentic     = 'authentic_' . $x;
        //     $budget_nine = 'budget_nine_' . $x;
        //     $revised_budget_nine    = 'revised_budget_nine_' . $x;
        //     $estimate_nine = 'estimate_nine_' . $x;
        //     $estimate_nine_1 = 'estimate_nine_1_' . $x;
        //     $estimate_nine_2 = 'estimate_nine_2_' . $x;
        //     $nine_store['operation_name'] = $request->$operation_name;
        //     $nine_store['related_activities'] = $request->$related_activities;
        //     $nine_store['authentic'] = $request->$authentic;
        //     $nine_store['budget_nine'] = $request->$budget_nine;
        //     $nine_store['revised_budget_nine'] = $request->$revised_budget_nine;
        //     $nine_store['estimate_nine'] = $request->$estimate_nine;
        //     $nine_store['estimate_nine_1'] = $request->$estimate_nine_1;
        //     $nine_store['estimate_nine_2'] = $request->$estimate_nine_2;
        //     $nine_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_9')->insert($nine_store);
        // }


        // $ten_row_id = $request->ten_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $ten_row_id; $x += 1) {
        //     $activities_ten     = 'activities_ten_' . $x;
        //     $results_indicative_ten     = 'results_indicative_ten_' . $x;
        //     $respective_strategic_ten     = 'respective_strategic_ten_' . $x;
        //     $unit_measurement_ten = 'unit_measurement_ten_' . $x;
        //     $revised_targets1_ten    = 'revised_targets1_ten_' . $x;
        //     $actual_achievement_ten = 'actual_achievement_ten_' . $x;
        //     $revised_targets2_ten = 'revised_targets2_ten_' . $x;
        //     $goals_ten = 'goals_ten_' . $x;
        //     $medium_target_ten = 'medium_target_ten_' . $x;
        //     $medium_target1_ten = 'medium_target1_ten_' . $x;
        //     $medium_target2_ten = 'medium_target2_ten_' . $x;
        //     $ten_store['activities_ten'] = $request->$activities_ten;
        //     $ten_store['results_indicative_ten'] = $request->$results_indicative_ten;
        //     $ten_store['respective_strategic_ten'] = $request->$respective_strategic_ten;
        //     $ten_store['unit_measurement_ten'] = $request->$unit_measurement_ten;
        //     $ten_store['revised_targets1_ten'] = $request->$revised_targets1_ten;
        //     $ten_store['revised_targets2_ten'] = $request->$revised_targets2_ten;
        //     $ten_store['actual_achievement_ten'] = $request->$actual_achievement_ten;
        //     $ten_store['goals_ten'] = $request->$goals_ten;
        //     $ten_store['medium_target_ten'] = $request->$medium_target_ten;
        //     $ten_store['medium_target1_ten'] = $request->$medium_target1_ten;
        //     $ten_store['medium_target2_ten'] = $request->$medium_target2_ten;
        //     $ten_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_10')->insert($ten_store);
        // }

        // $twel_row_id = $request->twel_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $twel_row_id; $x += 1) {
        //     $activities_twel     = 'activities_twel_' . $x;
        //     $results_indicative_twel     = 'results_indicative_twel_' . $x;
        //     $respective_strategic_twel     = 'respective_strategic_twel_' . $x;
        //     $unit_measurement_twel = 'unit_measurement_twel_' . $x;
        //     $revised_targets1_twel    = 'revised_targets1_twel_' . $x;
        //     $actual_achievement_twel = 'actual_achievement_twel_' . $x;
        //     $revised_targets2_twel = 'revised_targets2_twel_' . $x;
        //     $goals_twel = 'goals_twel_' . $x;
        //     $medium_target_twel = 'medium_target_twel_' . $x;
        //     $medium_target1_twel = 'medium_target1_twel_' . $x;
        //     $medium_target2_twel = 'medium_target2_twel_' . $x;
        //     $twel_store['activities_twel'] = $request->$activities_twel;
        //     $twel_store['results_indicative_twel'] = $request->$results_indicative_twel;
        //     $twel_store['respective_strategic_twel'] = $request->$respective_strategic_twel;
        //     $twel_store['unit_measurement_twel'] = $request->$unit_measurement_twel;
        //     $twel_store['revised_targets1_twel'] = $request->$revised_targets1_twel;
        //     $twel_store['revised_targets2_twel'] = $request->$revised_targets2_twel;
        //     $twel_store['actual_achievement_twel'] = $request->$actual_achievement_twel;
        //     $twel_store['goals_twel'] = $request->$goals_twel;
        //     $twel_store['medium_target_twel'] = $request->$medium_target_twel;
        //     $twel_store['medium_target1_twel'] = $request->$medium_target1_twel;
        //     $twel_store['medium_target2_twel'] = $request->$medium_target2_twel;
        //     $twel_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_12')->insert($twel_store);
        // }



        // $eleven_row_id = $request->eleven_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $eleven_row_id; $x += 1) {
        //     $operation_eleven     = 'operation_eleven_' . $x;
        //     $activities_eleven     = 'activities_eleven_' . $x;
        //     $authentic_eleven = 'authentic_eleven_' . $x;
        //     $budget_eleven    = 'budget_eleven_' . $x;
        //     $revised_budget_eleven = 'revised_budget_eleven_' . $x;
        //     $estimate_eleven = 'estimate_eleven_' . $x;
        //     $estimate_eleven_1 = 'estimate_eleven_1_' . $x;
        //     $estimate_eleven_2 = 'estimate_eleven_2_' . $x;
        //     $eleven_store['operation_eleven'] = $request->$operation_eleven;
        //     $eleven_store['activities_eleven'] = $request->$activities_eleven;
        //     $eleven_store['authentic_eleven'] = $request->$authentic_eleven;
        //     $eleven_store['budget_eleven'] = $request->$budget_eleven;
        //     $eleven_store['revised_budget_eleven'] = $request->$revised_budget_eleven;
        //     $eleven_store['estimate_eleven'] = $request->$estimate_eleven;
        //     $eleven_store['estimate_eleven_1'] = $request->$estimate_eleven_1;
        //     $eleven_store['estimate_eleven_2'] = $request->$estimate_eleven_2;
        //     $eleven_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_11')->insert($eleven_store);
        // }

        // $thirteen_row_id = $request->thirteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $thirteen_row_id; $x += 1) {
        //     $operation_thirteen     = 'operation_thirteen_' . $x;
        //     $activities_thirteen     = 'activities_thirteen_' . $x;
        //     $authentic_thirteen = 'authentic_thirteen_' . $x;
        //     $budget_thirteen    = 'budget_thirteen_' . $x;
        //     $revised_budget_thirteen = 'revised_budget_thirteen_' . $x;
        //     $estimate_thirteen = 'estimate_thirteen_' . $x;
        //     $estimate_thirteen_1 = 'estimate_thirteen_1_' . $x;
        //     $estimate_thirteen_2 = 'estimate_thirteen_2_' . $x;
        //     $thirteen_store['operation_thirteen'] = $request->$operation_thirteen;
        //     $thirteen_store['activities_thirteen'] = $request->$activities_thirteen;
        //     $thirteen_store['authentic_thirteen'] = $request->$authentic_thirteen;
        //     $thirteen_store['budget_thirteen'] = $request->$budget_thirteen;
        //     $thirteen_store['revised_budget_thirteen'] = $request->$revised_budget_thirteen;
        //     $thirteen_store['estimate_thirteen'] = $request->$estimate_thirteen;
        //     $thirteen_store['estimate_thirteen_1'] = $request->$estimate_thirteen_1;
        //     $thirteen_store['estimate_thirteen_2'] = $request->$estimate_thirteen_2;
        //     $thirteen_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_13')->insert($thirteen_store);
        // }

        // $fifteen_row_id = $request->fifteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $fifteen_row_id; $x += 1) {
        //     $operation_fifteen     = 'operation_fifteen_' . $x;
        //     $activities_fifteen     = 'activities_fifteen_' . $x;
        //     $authentic_fifteen = 'authentic_fifteen_' . $x;
        //     $budget_fifteen    = 'budget_fifteen_' . $x;
        //     $revised_budget_fifteen = 'revised_budget_fifteen_' . $x;
        //     $estimate_fifteen = 'estimate_fifteen_' . $x;
        //     $estimate_fifteen_1 = 'estimate_fifteen_1_' . $x;
        //     $estimate_fifteen_2 = 'estimate_fifteen_2_' . $x;
        //     $fifteen_store['operation_fifteen'] = $request->$operation_fifteen;
        //     $fifteen_store['activities_fifteen'] = $request->$activities_fifteen;
        //     $fifteen_store['authentic_fifteen'] = $request->$authentic_fifteen;
        //     $fifteen_store['budget_fifteen'] = $request->$budget_fifteen;
        //     $fifteen_store['revised_budget_fifteen'] = $request->$revised_budget_fifteen;
        //     $fifteen_store['estimate_fifteen'] = $request->$estimate_fifteen;
        //     $fifteen_store['estimate_fifteen_1'] = $request->$estimate_fifteen_1;
        //     $fifteen_store['estimate_fifteen_2'] = $request->$estimate_fifteen_2;
        //     $fifteen_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_15')->insert($fifteen_store);
        // }

        // $seventeen_row_id = $request->seventeen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $seventeen_row_id; $x += 1) {
        //     $operation_seventeen     = 'operation_seventeen_' . $x;
        //     $activities_seventeen     = 'activities_seventeen_' . $x;
        //     $authentic_seventeen = 'authentic_seventeen_' . $x;
        //     $budget_seventeen    = 'budget_seventeen_' . $x;
        //     $revised_budget_seventeen = 'revised_budget_seventeen_' . $x;
        //     $estimate_seventeen = 'estimate_seventeen_' . $x;
        //     $estimate_seventeen_1 = 'estimate_seventeen_1_' . $x;
        //     $estimate_seventeen_2 = 'estimate_seventeen_2_' . $x;
        //     $seventeen_store['operation_seventeen'] = $request->$operation_seventeen;
        //     $seventeen_store['activities_seventeen'] = $request->$activities_seventeen;
        //     $seventeen_store['authentic_seventeen'] = $request->$authentic_seventeen;
        //     $seventeen_store['budget_seventeen'] = $request->$budget_seventeen;
        //     $seventeen_store['revised_budget_seventeen'] = $request->$revised_budget_seventeen;
        //     $seventeen_store['estimate_seventeen'] = $request->$estimate_seventeen;
        //     $seventeen_store['estimate_seventeen_1'] = $request->$estimate_seventeen_1;
        //     $seventeen_store['estimate_seventeen_2'] = $request->$estimate_seventeen_2;
        //     $seventeen_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_17')->insert($seventeen_store);
        // }

        // $nineteen_row_id = $request->nineteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $nineteen_row_id; $x += 1) {
        //     $operation_nineteen = 'operation_nineteen_' . $x;
        //     $activities_nineteen = 'activities_nineteen_' . $x;
        //     $authentic_nineteen = 'authentic_nineteen_' . $x;
        //     $budget_nineteen = 'budget_nineteen_' . $x;
        //     $revised_budget_nineteen = 'revised_budget_nineteen_' . $x;
        //     $estimate_nineteen = 'estimate_nineteen_' . $x;
        //     $estimate_nineteen_1 = 'estimate_nineteen_1_' . $x;
        //     $estimate_nineteen_2 = 'estimate_nineteen_2_' . $x;
        //     $nineteen_store['operation_nineteen'] = $request->$operation_nineteen;
        //     $nineteen_store['activities_nineteen'] = $request->$activities_nineteen;
        //     $nineteen_store['authentic_nineteen'] = $request->$authentic_nineteen;
        //     $nineteen_store['budget_nineteen'] = $request->$budget_nineteen;
        //     $nineteen_store['revised_budget_nineteen'] = $request->$revised_budget_nineteen;
        //     $nineteen_store['estimate_nineteen'] = $request->$estimate_nineteen;
        //     $nineteen_store['estimate_nineteen_1'] = $request->$estimate_nineteen_1;
        //     $nineteen_store['estimate_nineteen_2'] = $request->$estimate_nineteen_2;
        //     $nineteen_store['unique_form_id'] = $format;
        //     DB::table('appendix_seven_table_19')->insert($nineteen_store);
        // }

        // $twentyone_row_id = $request->twentyone_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $twentyone_row_id; $x += 1) {
        //     $operation_twentyone = 'operation_twentyone_' . $x;
        //     $activities_twentyone = 'activities_twentyone_' . $x;
        //     $authentic_twentyone = 'authentic_twentyone_' . $x;
        //     $budget_twentyone = 'budget_twentyone_' . $x;
        //     $revised_budget_twentyone = 'revised_budget_twentyone_' . $x;
        //     $estimate_twentyone = 'estimate_twentyone_' . $x;
        //     $estimate_twentyone_1 = 'estimate_twentyone_1_' . $x;
        //     $estimate_twentyone_2 = 'estimate_twentyone_2_' . $x;
        //     $twentyone_store['operation_twentyone'] = $request->$operation_twentyone;
        //     $twentyone_store['activities_twentyone'] = $request->$activities_twentyone;
        //     $twentyone_store['authentic_twentyone'] = $request->$authentic_twentyone;
        //     $twentyone_store['budget_twentyone'] = $request->$budget_twentyone;
        //     $twentyone_store['revised_budget_twentyone'] = $request->$revised_budget_twentyone;
        //     $twentyone_store['estimate_twentyone'] = $request->$estimate_twentyone;
        //     $twentyone_store['estimate_twentyone_1'] = $request->$estimate_twentyone_1;
        //     $twentyone_store['estimate_twentyone_2'] = $request->$estimate_twentyone_2;
        //     $twentyone_store['unique_form_id'] = $format;
        //     DB::table('appendix_seven_table_21')->insert($twentyone_store);
        // }

        // $three_row_id = $request->three_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $three_row_id; $x += 1) {
        //     $description_three     = 'description_three_' . $x;
        //     $budget_three = 'budget_three_' . $x;
        //     $projection1_three     = 'projection1_three_' . $x;
        //     $projection2_three     = 'projection2_three_' . $x;
        //     $three_store['description_three'] = $request->$description_three;
        //     $three_store['budget_three'] = $request->$budget_three;
        //     $three_store['projection1_three'] = $request->$projection1_three;
        //     $three_store['projection2_three'] = $request->$projection2_three;
        //     $three_store['unique_form_id'] = $format;
        //     DB::table('appendix_seven_table_3')->insert($three_store);
        // }


        // $five_row_id = $request->five_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $five_row_id; $x += 1) {
        //     $description_five     = 'description_five_' . $x;
        //     $budget_five = 'budget_five_' . $x;
        //     $revised_budget_five     = 'revised_budget_five_' . $x;
        //     $budget2_five     = 'budget2_five_' . $x;
        //     $projection1_five     = 'projection1_five_' . $x;
        //     $projection2_five     = 'projection2_five_' . $x;
        //     $five_store['description_five'] = $request->$description_five;
        //     $five_store['budget_five'] = $request->$budget_five;
        //     $five_store['revised_budget_five'] = $request->$revised_budget_five;
        //     $five_store['budget2_five'] = $request->$budget2_five;
        //     $five_store['projection1_five'] = $request->$projection1_five;
        //     $five_store['projection2_five'] = $request->$projection2_five;
        //     $five_store['unique_form_id'] = $format;
        //     DB::table('appendix_seven_table_5')->insert($five_store);
        // }


        // $six_row_id = $request->six_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $six_row_id; $x += 1) {
        //     $ecconomic_group_code     = 'ecconomic_group_code_' . $x;
        //     $description_six = 'description_six_' . $x;
        //     $budget_six     = 'budget_six_' . $x;
        //     $revised_budget_six     = 'revised_budget_six_' . $x;
        //     $budget2_six     = 'budget2_six_' . $x;
        //     $projection1_six     = 'projection1_six_' . $x;
        //     $projection2_six     = 'projection2_six_' . $x;
        //     $six_store['ecconomic_group_code'] = $request->$ecconomic_group_code;
        //     $six_store['description_six'] = $request->$description_six;
        //     $six_store['budget_six'] = $request->$budget_six;
        //     $six_store['revised_budget_six'] = $request->$revised_budget_six;
        //     $six_store['budget2_six'] = $request->$budget2_six;
        //     $six_store['projection1_six'] = $request->$projection1_six;
        //     $six_store['projection2_six'] = $request->$projection2_six;
        //     $six_store['unique_form_id'] = $format;
        //     DB::table('appendix_seven_table_6')->insert($six_store);
        // }

        // $sixteen_row_id = $request->sixteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($i = 1; $i <= $sixteen_row_id; $i++) {
        //     $activities_sixteen = 'activities_sixteen_' . $i;
        //     $results_indicative_sixteen = 'results_indicative_sixteen_' . $i;
        //     $respective_strategic_sixteen = 'respective_strategic_sixteen_' . $i;
        //     $unit_measurement_sixteen = 'unit_measurement_sixteen_' . $i;
        //     $revised_targets1_sixteen = 'revised_targets1_sixteen_' . $i;
        //     $revised_targets2_sixteen = 'revised_targets2_sixteen_' . $i;
        //     $actual_achievement_sixteen = 'actual_achievement_sixteen_' . $i;
        //     $goals_sixteen = 'goals_sixteen_' . $i;
        //     $medium_target_sixteen = 'medium_target_sixteen_' . $i;
        //     $medium_target1_sixteen = 'medium_target1_sixteen_' . $i;
        //     $medium_target2_sixteen = 'medium_target2_sixteen_' . $i;
        //     $table_sixteen['activities_sixteen']   = $request->$activities_sixteen;
        //     $table_sixteen['results_indicative_sixteen']   = $request->$results_indicative_sixteen;
        //     $table_sixteen['unit_measurement_sixteen']   = $request->$unit_measurement_sixteen;
        //     $table_sixteen['respective_strategic_sixteen']   = $request->$respective_strategic_sixteen;
        //     $table_sixteen['revised_targets1_sixteen']   = $request->$revised_targets1_sixteen;
        //     $table_sixteen['revised_targets2_sixteen']   = $request->$revised_targets2_sixteen;
        //     $table_sixteen['actual_achievement_sixteen']   = $request->$actual_achievement_sixteen;
        //     $table_sixteen['goals_sixteen']   = $request->$goals_sixteen;
        //     $table_sixteen['medium_target_sixteen']   = $request->$medium_target_sixteen;
        //     $table_sixteen['medium_target1_sixteen']   = $request->$medium_target1_sixteen;
        //     $table_sixteen['medium_target2_sixteen']   = $request->$medium_target2_sixteen;
        //     $table_sixteen['unique_form_id']   = $format;
        //     DB::table('appendix_seven_table_16')->insert($table_sixteen);
        // }


        // $eighteen_row_id = $request->eighteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($i = 1; $i <= $eighteen_row_id; $i++) {
        //     $activities_eighteen = 'activities_eighteen_' . $i;
        //     $results_indicative_eighteen = 'results_indicative_eighteen_' . $i;
        //     $respective_strategic_eighteen = 'respective_strategic_eighteen_' . $i;
        //     $unit_measurement_eighteen = 'unit_measurement_eighteen_' . $i;
        //     $revised_targets1_eighteen = 'revised_targets1_eighteen_' . $i;
        //     $revised_targets2_eighteen = 'revised_targets2_eighteen_' . $i;
        //     $actual_achievement_eighteen = 'actual_achievement_eighteen_' . $i;
        //     $goals_eighteen = 'goals_eighteen_' . $i;
        //     $medium_target_eighteen = 'medium_target_eighteen_' . $i;
        //     $medium_target1_eighteen = 'medium_target1_eighteen_' . $i;
        //     $medium_target2_eighteen = 'medium_target2_eighteen_' . $i;
        //     $table_eighteen['activities_eighteen']   = $request->$activities_eighteen;
        //     $table_eighteen['results_indicative_eighteen']   = $request->$results_indicative_eighteen;
        //     $table_eighteen['unit_measurement_eighteen']   = $request->$unit_measurement_eighteen;
        //     $table_eighteen['respective_strategic_eighteen']   = $request->$respective_strategic_eighteen;
        //     $table_eighteen['revised_targets1_eighteen']   = $request->$revised_targets1_eighteen;
        //     $table_eighteen['revised_targets2_eighteen']   = $request->$revised_targets2_eighteen;
        //     $table_eighteen['actual_achievement_eighteen']   = $request->$actual_achievement_eighteen;
        //     $table_eighteen['goals_eighteen']   = $request->$goals_eighteen;
        //     $table_eighteen['medium_target_eighteen']   = $request->$medium_target_eighteen;
        //     $table_eighteen['medium_target1_eighteen']   = $request->$medium_target1_eighteen;
        //     $table_eighteen['medium_target2_eighteen']   = $request->$medium_target2_eighteen;
        //     $table_eighteen['unique_form_id']   = $format;
        //     DB::table('appendix_seven_table_18')->insert($table_eighteen);
        // }



        // $two_row_id = $request->two_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($i = 1; $i <= $two_row_id; $i++) {
        //     $store_two = new TableTwo();
        //     $purpose_two = 'purpose_two_' . $i;
        //     $activities_two = 'activities_two_' . $i;
        //     $agency_two = 'agency_two_' . $i;
        //     $store_two['purpose_two']   = $request->$purpose_two;
        //     $store_two['activities_two']   = $request->$activities_two;
        //     $store_two['agency_two']   = $request->$agency_two;
        //     $store_two['unique_form_id']   = $format;
        //     $store_two->save();
        //     for ($k = 1; $k <= 2; $k++) {
        //         $sub_row = 'two_row_id_' . $i . '_' . $k;
        //         $subRows = $request->$sub_row;
        //         if ($subRows) {
        //             $sub_purpose_two = 'purpose_two_' . $i . '_' . $k;
        //             $sub_activities_two = 'activities_two_' . $i . '_' . $k;
        //             $sub_agency_two = 'agency_two_' . $i . '._' . $k;
        //             $sub_data_two['two_row_id']   = $request->two_row_id;
        //             $sub_data_two['purpose_two']   = $request->$sub_purpose_two;
        //             $sub_data_two['activities_two']   = $request->$sub_activities_two;
        //             $sub_data_two['agency_two']   = $request->$sub_agency_two;
        //             $sub_data_two['unique_form_id']   = $format;
        //             DB::table('appendix_seven_table_2_sub')->insert($sub_data_two);
        //         }
        //     }
        // }



        // $twenty_one_row_id = $request->twenty_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($i = 1; $i <= $twenty_one_row_id; $i++) {
        //     $table_twenty_one = new TableTwenty();
        //     $activities_twenty = 'activities_twenty_' . $i;
        //     $results_indicative_twenty = 'results_indicative_twenty_' . $i;
        //     $respective_strategic_twenty = 'respective_strategic_twenty_' . $i;
        //     $unit_measurement_twenty = 'unit_measurement_twenty_' . $i;
        //     $revised_targets1_twenty = 'revised_targets1_twenty_' . $i;
        //     $revised_targets2_twenty = 'revised_targets2_twenty_' . $i;
        //     $actual_achievement_twenty = 'actual_achievement_twenty_' . $i;
        //     $goals_twenty = 'goals_twenty_' . $i;
        //     $medium_target_twenty = 'medium_target_twenty_' . $i;
        //     $medium_target1_twenty = 'medium_target1_twenty_' . $i;
        //     $medium_target2_twenty = 'medium_target2_twenty_' . $i;
        //     $table_twenty_one['activities_twenty']   = $request->$activities_twenty;
        //     $table_twenty_one['results_indicative_twenty']   = $request->$results_indicative_twenty;
        //     $table_twenty_one['unit_measurement_twenty']   = $request->$unit_measurement_twenty;
        //     $table_twenty_one['respective_strategic_twenty']   = $request->$respective_strategic_twenty;
        //     $table_twenty_one['revised_targets1_twenty']   = $request->$revised_targets1_twenty;
        //     $table_twenty_one['revised_targets2_twenty']   = $request->$revised_targets2_twenty;
        //     $table_twenty_one['actual_achievement_twenty']   = $request->$actual_achievement_twenty;
        //     $table_twenty_one['goals_twenty']   = $request->$goals_twenty;
        //     $table_twenty_one['medium_target_twenty']   = $request->$medium_target_twenty;
        //     $table_twenty_one['medium_target1_twenty']   = $request->$medium_target1_twenty;
        //     $table_twenty_one['medium_target2_twenty']   = $request->$medium_target2_twenty;
        //     $table_twenty_one['unique_form_id']   = $format;
        //     $table_twenty_one->save();
        //     for ($k = 1; $k <= 2; $k++) {
        //         $sub_row = 'twenty_one_row_id_' . $i . '_' . $k;
        //         $subRows = $request->$sub_row;
        //         if ($subRows) {
        //             $sub_activities_twenty = 'activities_twenty_' . $i . '_' . $k;
        //             $sub_results_indicative_twenty = 'results_indicative_twenty_' . $i . '_' . $k;
        //             $sub_respective_strategic_twenty = 'respective_strategic_twenty_' . $i . '._' . $k;
        //             $sub_unit_measurement_twenty = 'unit_measurement_twenty_' . $i . '_' . $k;
        //             $sub_revised_targets1_twenty = 'revised_targets1_twenty_' . $i . '_' . $k;
        //             $sub_revised_targets2_twenty = 'revised_targets2_twenty_' . $i . '_' . $k;
        //             $sub_actual_achievement_twenty = 'actual_achievement_twenty_' . $i . '_' . $k;
        //             $sub_goals_twenty = 'goals_twenty_' . $i . '_' . $k;
        //             $sub_medium_target_twenty = 'medium_target_twenty_' . $i . '_' . $k;
        //             $sub_medium_target1_twenty = 'medium_target1_twenty_' . $i . '_' . $k;
        //             $sub_medium_target2_twenty = 'medium_target2_twenty_' . $i . '_' . $k;
        //             $sub_data_one['twenty_row_id']   = $table_twenty->id;
        //             $sub_data_one['activities_twenty']   = $request->$sub_activities_twenty;
        //             $sub_data_one['results_indicative_twenty']   = $request->$sub_results_indicative_twenty;
        //             $sub_data_one['respective_strategic_twenty']   = $request->$sub_respective_strategic_twenty;
        //             $sub_data_one['unit_measurement_twenty']   = $request->$sub_unit_measurement_twenty;
        //             $sub_data_one['actual_achievement_twenty']   = $request->$sub_actual_achievement_twenty;
        //             $sub_data_one['revised_targets1_twenty']   = $request->$sub_revised_targets1_twenty;
        //             $sub_data_one['revised_targets2_twenty']   = $request->$sub_revised_targets2_twenty;
        //             $sub_data_one['goals_twenty']              = $request->$sub_goals_twenty;
        //             $sub_data_one['medium_target_twenty']      = $request->$sub_medium_target_twenty;
        //             $sub_data_one['medium_target1_twenty']     = $request->$sub_medium_target1_twenty;
        //             $sub_data_one['medium_target2_twenty']     = $request->$sub_medium_target2_twenty;;
        //             $sub_data_one['unique_form_id']   = $format;
        //             DB::table('appendix_seven_table_21_sub')->insert($sub_data_one);
        //         }
        //     }
        // }


        /* table 14 */
        // $fourteen_row_id = $request->fourteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($i = 1; $i <= $fourteen_row_id; $i++) {
        //     $store_fourteen = new FourteenTable();
        //     $activities_fourteen = 'activities_fourteen_' . $i;
        //     $results_indicative_fourteen = 'results_indicative_fourteen_' . $i;
        //     $respective_strategic_fourteen = 'respective_strategic_fourteen_' . $i;
        //     $unit_measurement_fourteen = 'unit_measurement_fourteen_' . $i;
        //     $revised_targets1_fourteen = 'revised_targets1_fourteen_' . $i;
        //     $revised_targets2_fourteen = 'revised_targets2_fourteen_' . $i;
        //     $actual_achievement_fourteen = 'actual_achievement_fourteen_' . $i;
        //     $goals_fourteen = 'goals_fourteen_' . $i;
        //     $medium_target_fourteen = 'medium_target_fourteen_' . $i;
        //     $medium_target1_fourteen = 'medium_target1_fourteen_' . $i;
        //     $medium_target2_fourteen = 'medium_target2_fourteen_' . $i;
        //     $store_fourteen['activities_fourteen']   = $request->$activities_fourteen;
        //     $store_fourteen['results_indicative_fourteen']   = $request->$results_indicative_fourteen;
        //     $store_fourteen['respective_strategic_fourteen']   = $request->$respective_strategic_fourteen;
        //     $store_fourteen['respective_strategic_fourteen']   = $request->$respective_strategic_fourteen;
        //     $store_fourteen['unit_measurement_fourteen']   = $request->$unit_measurement_fourteen;
        //     $store_fourteen['revised_targets1_fourteen']   = $request->$revised_targets1_fourteen;
        //     $store_fourteen['revised_targets2_fourteen']   = $request->$revised_targets2_fourteen;
        //     $store_fourteen['actual_achievement_fourteen']   = $request->$actual_achievement_fourteen;
        //     $store_fourteen['goals_fourteen']   = $request->$goals_fourteen;
        //     $store_fourteen['medium_target_fourteen']   = $request->$medium_target_fourteen;
        //     $store_fourteen['medium_target1_fourteen']   = $request->$medium_target1_fourteen;
        //     $store_fourteen['medium_target2_fourteen']   = $request->$medium_target2_fourteen;
        //     $store_fourteen['unique_form_id']   = $format;
        //     $store_fourteen->save();
        //     for ($k = 1; $k <= 2; $k++) {
        //         $sub_row_fourteen = 'fourteen_row_id_' . $i . '_' . $k;
        //         $subRows = $request->$sub_row_fourteen;
        //         if ($subRows) {
        //             $sub_activities_fourteen = 'activities_fourteen_' . $i . '_' . $k;
        //             $sub_results_indicative_fourteen = 'results_indicative_fourteen_' . $i . '_' . $k;
        //             $sub_respective_strategic_fourteen = 'respective_strategic_fourteen_' . $i . '._' . $k;
        //             $sub_unit_measurement_fourteen = 'unit_measurement_fourteen_' . $i . '_' . $k;
        //             $sub_revised_targets1_fourteen = 'revised_targets1_fourteen_' . $i . '_' . $k;
        //             $sub_revised_targets2_fourteen = 'revised_targets2_fourteen_' . $i . '_' . $k;
        //             $sub_actual_achievement_fourteen = 'actual_achievement_fourteen_' . $i . '_' . $k;
        //             $sub_goals_fourteen = 'goals_fourteen_' . $i . '_' . $k;
        //             $sub_medium_target_fourteen = 'medium_target_fourteen_' . $i . '_' . $k;
        //             $sub_medium_target1_fourteen = 'medium_target1_fourteen_' . $i . '_' . $k;
        //             $sub_medium_target2_fourteen = 'medium_target2_fourteen_' . $i . '_' . $k;
        //             $sub_data_one['fourteen_row_id']   = $store_fourteen->id;
        //             $sub_data_one['activities_fourteen']   = $request->$sub_activities_fourteen;
        //             $sub_data_one['results_indicative_fourteen']   = $request->$sub_results_indicative_fourteen;
        //             $sub_data_one['respective_strategic_fourteen']   = $request->$sub_respective_strategic_fourteen;
        //             $sub_data_one['unit_measurement_fourteen']   = $request->$sub_unit_measurement_fourteen;
        //             $sub_data_one['actual_achievement_fourteen']   = $request->$sub_actual_achievement_fourteen;
        //             $sub_data_one['revised_targets1_fourteen']   = $request->$sub_revised_targets1_fourteen;
        //             $sub_data_one['revised_targets2_fourteen']   = $request->$sub_revised_targets2_fourteen;
        //             $sub_data_one['goals_fourteen']              = $request->$sub_goals_fourteen;
        //             $sub_data_one['medium_target_fourteen']      = $request->$sub_medium_target_fourteen;
        //             $sub_data_one['medium_target1_fourteen']     = $request->$sub_medium_target1_fourteen;
        //             $sub_data_one['medium_target2_fourteen']     = $request->$sub_medium_target2_fourteen;;
        //             $sub_data_one['unique_form_id']   = $format;
        //             DB::table('appendix_seven_table_14_sub')->insert($sub_data_one);
        //         }
        //     }
        // }
    }

    public function view_appendix_seven()
    {
        SwitchLanguage(Session::get('language'));
        $data['budget_sub']          = DB::table('appendix_seven_points')->whereNotNull('budget_sub')->take(3)->get();
        $data['amount']              = DB::table('appendix_seven_points')->whereNotNull('amount')->take(1)->get();
        $data['heading_financial_1'] = DB::table('appendix_seven_points')->whereNotNull('heading_financial_1')->take(1)->get();
        $data['heading_financial_2'] = DB::table('appendix_seven_points')->whereNotNull('heading_financial_2')->take(1)->get();
        $data['point_1_0']           = DB::table('appendix_seven_points')->whereNotNull('point_1_0')->take(1)->get();
        $data['point_1_1']           = DB::table('appendix_seven_points')->whereNotNull('point_1_1')->take(1)->get();
        $data['point_1_1_line']      = DB::table('appendix_seven_points')->whereNotNull('point_1_1_line')->take(1)->get();
        $data['point_1_2']           = DB::table('appendix_seven_points')->whereNotNull('point_1_2')->take(1)->get();
        $data['point_1_2_lines']     = DB::table('appendix_seven_points')->whereNotNull('point_1_2_lines')->take(8)->get();
        $data['point_2_0']           = DB::table('appendix_seven_points')->whereNotNull('point_2_0')->take(1)->get();
        $data['point_3_0']           = DB::table('appendix_seven_points')->whereNotNull('point_3_0')->take(1)->get();
        $data['point_3_1']           = DB::table('appendix_seven_points')->whereNotNull('point_3_1')->take(1)->get();
        $data['point_3_1_1']         = DB::table('appendix_seven_points')->whereNotNull('point_3_1_1')->take(1)->get();
        $data['point_3_1_2']         = DB::table('appendix_seven_points')->whereNotNull('point_3_1_2')->take(1)->get();
        $data['point_3_1_3']         = DB::table('appendix_seven_points')->whereNotNull('point_3_1_3')->take(1)->get();
        $data['point_3_1_4']         = DB::table('appendix_seven_points')->whereNotNull('point_3_1_4')->take(1)->get();
        $data['point_3_1_5']         = DB::table('appendix_seven_points')->whereNotNull('point_3_1_5')->take(1)->get();
        $data['point_3_1_1_lines']   = DB::table('appendix_seven_points')->whereNotNull('point_3_1_1_lines')->take(2)->get();
        $data['point_3_1_2_lines']   = DB::table('appendix_seven_points')->whereNotNull('point_3_1_2_lines')->take(2)->get();
        $data['point_3_1_3_lines']   = DB::table('appendix_seven_points')->whereNotNull('point_3_1_3_lines')->take(2)->get();
        $data['point_3_1_4_lines']   = DB::table('appendix_seven_points')->whereNotNull('point_3_1_4_lines')->take(2)->get();
        $data['point_3_1_5_lines']   = DB::table('appendix_seven_points')->whereNotNull('point_3_1_5_lines')->take(2)->get();
        $data['point_3_2']           = DB::table('appendix_seven_points')->whereNotNull('point_3_2')->take(1)->get();
        $data['point_4_1']           = DB::table('appendix_seven_points')->whereNotNull('point_4_1')->take(1)->get();
        $data['point_4_2']           = DB::table('appendix_seven_points')->whereNotNull('point_4_2')->take(1)->get();
        $data['point_4_2_1']         = DB::table('appendix_seven_points')->whereNotNull('point_4_2_1')->take(1)->get();
        $data['point_4_2_2']         = DB::table('appendix_seven_points')->whereNotNull('point_4_2_2')->take(1)->get();
        $data['point_5_0']           = DB::table('appendix_seven_points')->whereNotNull('point_5_0')->take(1)->get();
        $data['point_6_0']           = DB::table('appendix_seven_points')->whereNotNull('point_6_0')->take(1)->get();
        $data['point_6_1']           = DB::table('appendix_seven_points')->whereNotNull('point_6_1')->take(1)->get();
        $data['point_6_1_1']         = DB::table('appendix_seven_points')->whereNotNull('point_6_1_1')->take(1)->get();
        $data['point_6_1_2']         = DB::table('appendix_seven_points')->whereNotNull('point_6_1_2')->take(1)->get();
        $data['point_6_1_3']         = DB::table('appendix_seven_points')->whereNotNull('point_6_1_3')->take(1)->get();
        $data['point_6_2']           = DB::table('appendix_seven_points')->whereNotNull('point_6_2')->take(1)->get();
        $data['point_6_2_1']         = DB::table('appendix_seven_points')->whereNotNull('point_6_2_1')->take(1)->get();
        $data['point_6_2_2']         = DB::table('appendix_seven_points')->whereNotNull('point_6_2_2')->take(1)->get();
        $data['point_6_2_3']         = DB::table('appendix_seven_points')->whereNotNull('point_6_2_3')->take(1)->get();
        $data['point_6_3']           = DB::table('appendix_seven_points')->whereNotNull('point_6_3')->take(1)->get();
        $data['point_6_3_1']         = DB::table('appendix_seven_points')->whereNotNull('point_6_3_1')->take(1)->get();
        $data['point_6_3_2']         = DB::table('appendix_seven_points')->whereNotNull('point_6_3_2')->take(1)->get();
        $data['point_6_3_3']         = DB::table('appendix_seven_points')->whereNotNull('point_6_3_3')->take(1)->get();
        $data['point_6_4']           = DB::table('appendix_seven_points')->whereNotNull('point_6_4')->take(1)->get();
        $data['point_6_4_1']         = DB::table('appendix_seven_points')->whereNotNull('point_6_4_1')->take(1)->get();
        $data['point_6_4_2']         = DB::table('appendix_seven_points')->whereNotNull('point_6_4_2')->take(1)->get();
        $data['point_6_4_3']         = DB::table('appendix_seven_points')->whereNotNull('point_6_4_3')->take(1)->get();
        $data['point_6_5']           = DB::table('appendix_seven_points')->whereNotNull('point_6_5')->take(1)->get();
        $data['point_6_5_1']         = DB::table('appendix_seven_points')->whereNotNull('point_6_5_1')->take(1)->get();
        $data['point_6_5_2']         = DB::table('appendix_seven_points')->whereNotNull('point_6_5_2')->take(1)->get();
        $data['point_6_5_3']         = DB::table('appendix_seven_points')->whereNotNull('point_6_5_3')->take(1)->get();
        $data['point_6_6']           = DB::table('appendix_seven_points')->whereNotNull('point_6_6')->take(1)->get();
        $data['point_6_6_1']         = DB::table('appendix_seven_points')->whereNotNull('point_6_6_1')->take(1)->get();
        $data['point_6_6_2']         = DB::table('appendix_seven_points')->whereNotNull('point_6_6_2')->take(1)->get();
        $data['point_6_6_3']         = DB::table('appendix_seven_points')->whereNotNull('point_6_6_3')->take(1)->get();
        $data['point_6_7']           = DB::table('appendix_seven_points')->whereNotNull('point_6_7')->take(1)->get();
        $data['point_6_7_1']         = DB::table('appendix_seven_points')->whereNotNull('point_6_7_1')->take(1)->get();
        $data['point_6_7_2']         = DB::table('appendix_seven_points')->whereNotNull('point_6_7_2')->take(1)->get();
        $data['point_6_7_3']         = DB::table('appendix_seven_points')->whereNotNull('point_6_7_3')->take(1)->get();
        $data['one_row_id']          = DB::table('appendix_seven_table_1')->get();
        $data['two_row_id']          = TableTwo::all();
        $data['three_row_id']        = DB::table('appendix_seven_table_3')->get();
        $data['four_row_id']         = DB::table('appendix_seven_table_4')->get();
        $data['five_row_id']         = DB::table('appendix_seven_table_5')->get();
        $data['six_row_id']          = DB::table('appendix_seven_table_6')->get();
        $data['seven_row_id']        = DB::table('appendix_seven_table_7')->get();
        $data['eight_row_id']        = DB::table('appendix_seven_table_8')->get();
        $data['nine_row_id']         = DB::table('appendix_seven_table_9')->get();
        $data['ten_row_id']          = DB::table('appendix_seven_table_10')->get();
        $data['twel_row_id']         = DB::table('appendix_seven_table_12')->get();
        $data['eleven_row_id']       = DB::table('appendix_seven_table_11')->get();
        $data['thirteen_row_id']     = DB::table('appendix_seven_table_13')->get();
        $data['fourteen_row_id']     = FourteenTable::all();
        $data['fifteen_row_id']      = DB::table('appendix_seven_table_15')->get();
        $data['sixteen_row_id']      = DB::table('appendix_seven_table_16')->get();
        $data['seventeen_row_id']    = DB::table('appendix_seven_table_17')->get();
        $data['eighteen_row_id']     = DB::table('appendix_seven_table_18')->get();
        $data['nineteen_row_id']     = DB::table('appendix_seven_table_19')->get();
        $data['twenty_row_id']       = TableTwenty::all();
        $data['twentyone_row_id']    = DB::table('appendix_seven_table_21')->get();

        return view('admin.pages.default_forms.view_form.view_appendix_seven', $data);
    }
    /* appendix view  */
    public function form_appendix_seven_update(Request $request)
    {

        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);

        $p_1_0 = $request->point_1_0_id;
        for ($x = 1; $x <= $p_1_0; $x += 1) {
            $a = 'point_1_0_' . $x;
            $point_1_0['point_1_0'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_1_0);
        }

        $p_1_1 = $request->point_1_1_id;
        for ($x = 2; $x <= $p_1_1; $x += 1) {
            $a = 'point_1_1_' . $x;
            $point_1_1['point_1_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_1_1);
        }

        $b_sub = $request->budget_sub_id;
        for ($x = 3; $x <= $b_sub; $x += 1) {
            $a = 'budget_sub_' . $x;
            $budget_sub['budget_sub'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($budget_sub);
        }

        $p_1_1_line = $request->point_1_1_line_id;
        for ($x = 4; $x <= $p_1_1_line; $x += 1) {
            $a = 'p_1_1_line_' . $x;
            $point_1_1_line['point_1_1_line'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_1_1_line);
        }

        $p_1_2 = $request->point_1_2_id;
        for ($x = 5; $x <= $p_1_2; $x += 1) {
            $a = 'point_1_2_' . $x;
            $point_1_2['point_1_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_1_2);
        }

        $p_1_2_lines = $request->point_1_2_lines_id;
        for ($x = 6; $x <= $p_1_2_lines; $x += 1) {
            $a = 'point_1_2_lines_' . $x;
            $point_1_2_lines['point_1_2_lines'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_1_2_lines);
        }

        $p_2_0 = $request->point_2_0_id;
        for ($x = 15; $x <= $p_2_0; $x += 1) {
            $a = 'point_2_0_' . $x;
            $point_2_0['point_2_0'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_2_0);
        }

        $p_3_0 = $request->point_3_0_id;
        for ($x = 16; $x <= $p_3_0; $x += 1) {
            $a = 'point_3_0_' . $x;
            $point_3_0['point_3_0'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_0);
        }

        $p_3_1  = $request->point_3_1_id;
        for ($x = 17; $x <= $p_3_1; $x += 1) {
            $a = 'point_3_1_' . $x;
            $point_3_1['point_3_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1);
        }

        $p_3_1_1  = $request->point_3_1_1_id;
        for ($x = 18; $x <= $p_3_1_1; $x += 1) {
            $a = 'point_3_1_1_' . $x;
            $point_3_1_1['point_3_1_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1_1);
        }

        $p_3_1_2  = $request->point_3_1_2_id;
        for ($x = 19; $x <= $p_3_1_2; $x += 1) {
            $a = 'point_3_1_2_' . $x;
            $point_3_1_2['point_3_1_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1_2);
        }


        $p_3_1_3  = $request->point_3_1_3_id;
        for ($x = 20; $x <= $p_3_1_3; $x += 1) {
            $a = 'point_3_1_3_' . $x;
            $point_3_1_3['point_3_1_3'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1_3);
        }

        $p_3_1_4  = $request->point_3_1_4_id;
        for ($x = 21; $x <= $p_3_1_4; $x += 1) {
            $a = 'point_3_1_4_' . $x;
            $point_3_1_4['point_3_1_4'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1_4);
        }

        $p_3_1_5  = $request->point_3_1_5_id;
        for ($x = 22; $x <= $p_3_1_5; $x += 1) {
            $a = 'point_3_1_5_' . $x;
            $point_3_1_5['point_3_1_5'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1_5);
        }

        $p_3_1_1_lines  = $request->point_3_1_1_lines_id;
        for ($x = 23; $x <= $p_3_1_1_lines; $x += 1) {
            $a = 'point_3_1_1_lines_' . $x;
            $point_3_1_1_lines['point_3_1_1_lines'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1_1_lines);
        }

        $p_3_1_2_lines  = $request->point_3_1_2_lines_id;
        for ($x = 26; $x <= $p_3_1_2_lines; $x += 1) {
            $a = 'point_3_1_2_lines_' . $x;
            $point_3_1_2_lines['point_3_1_2_lines'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1_2_lines);
        }


        $p_3_1_3_lines  = $request->point_3_1_3_lines_id;
        for ($x = 27; $x <= $p_3_1_3_lines; $x += 1) {
            $a = 'point_3_1_3_lines_' . $x;
            $point_3_1_3_lines['point_3_1_3_lines'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1_3_lines);
        }

        $p_3_1_4_lines  = $request->point_3_1_4_lines_id;
        for ($x = 30; $x <= $p_3_1_4_lines; $x += 1) {
            $a = 'point_3_1_4_lines_' . $x;
            $point_3_1_4_lines['point_3_1_4_lines'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1_4_lines);
        }

        $p_3_1_5_lines  = $request->point_3_1_5_lines_id;
        for ($x = 34; $x <= $p_3_1_5_lines; $x += 1) {
            $a = 'point_3_1_5_lines_' . $x;
            $point_3_1_5_lines['point_3_1_5_lines'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_1_5_lines);
        }

        $p_3_2  = $request->point_3_2_id;
        for ($x = 35; $x <= $p_3_2; $x += 1) {
            $a = 'point_3_2_' . $x;
            $point_3_2['point_3_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_3_2);
        }

        $p_4_1  = $request->point_4_1_id;
        for ($x = 36; $x <= $p_4_1; $x += 1) {
            $a = 'point_4_1_' . $x;
            $point_4_1['point_4_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_4_1);
        }

        $p_4_2  = $request->point_4_2_id;
        for ($x = 37; $x <= $p_4_2; $x += 1) {
            $a = 'point_4_2_' . $x;
            $point_4_2['point_4_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_4_2);
        }

        $p_4_2_1  = $request->point_4_2_1_id;
        for ($x = 38; $x <= $p_4_2_1; $x += 1) {
            $a = 'point_4_2_1_' . $x;
            $point_4_2_1['point_4_2_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_4_2_1);
        }

        $p_4_2_2  = $request->point_4_2_2_id;
        for ($x = 39; $x <= $p_4_2_2; $x += 1) {
            $a = 'point_4_2_2_' . $x;
            $point_4_2_2['point_4_2_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_4_2_2);
        }
        $p_5_0  = $request->point_5_0_id;
        for ($x = 40; $x <= $p_5_0; $x += 1) {
            $a = 'point_5_0_' . $x;
            $point_5_0['point_5_0'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_5_0);
        }


        $p_6_0  = $request->point_6_0_id;
        for ($x = 41; $x <= $p_6_0; $x += 1) {
            $a = 'point_6_0_' . $x;
            $point_6_0['point_6_0'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_0);
        }


        $p_6_1  = $request->point_6_1_id;
        for ($x = 42; $x <= $p_6_1; $x += 1) {
            $a = 'point_6_0_' . $x;
            $point_6_1['point_6_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_1);
        }

        $p_6_1_1  = $request->point_6_1_1_id;
        for ($x = 43; $x <= $p_6_1_1; $x += 1) {
            $a = 'point_6_1_1_' . $x;
            $point_6_1_1['point_6_1_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_1_1);
        }


        $p_6_1_2  = $request->point_6_1_2_id;
        for ($x = 44; $x <= $p_6_1_2; $x += 1) {
            $a = 'point_6_1_2_' . $x;
            $point_6_1_2['point_6_1_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_1_2);
        }


        $p_6_1_3  = $request->point_6_1_3_id;
        for ($x = 45; $x <= $p_6_1_3; $x += 1) {
            $a = 'point_6_1_3_' . $x;
            $point_6_1_3['point_6_1_3'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_1_3);
        }


        $p_6_2  = $request->point_6_2_id;
        for ($x = 46; $x <= $p_6_2; $x += 1) {
            $a = 'point_6_2_' . $x;
            $point_6_2['point_6_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_2);
        }

        $p_6_2_1  = $request->point_6_2_1_id;
        for ($x = 47; $x <= $p_6_2_1; $x += 1) {
            $a = 'point_6_2_1_' . $x;
            $point_6_2_1['point_6_2_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_2_1);
        }

        $p_6_2_2  = $request->point_6_2_2_id;
        for ($x = 48; $x <= $p_6_2_2; $x += 1) {
            $a = 'point_6_2_2_' . $x;
            $point_6_2_2['point_6_2_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_2_2);
        }

        $p_6_2_3  = $request->point_6_2_3_id;
        for ($x = 49; $x <= $p_6_2_3; $x += 1) {
            $a = 'point_6_2_3_' . $x;
            $point_6_2_3['point_6_2_3'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_2_3);
        }

        $p_6_3  = $request->point_6_3_id;
        for ($x = 50; $x <= $p_6_3; $x += 1) {
            $a = 'point_6_3_' . $x;
            $point_6_3['point_6_3'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_3);
        }


        $p_6_3_1  = $request->point_6_3_1_id;
        for ($x = 51; $x <= $p_6_3_1; $x += 1) {
            $a = 'point_6_3_1_' . $x;
            $point_6_3_1['point_6_3_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_3_1);
        }

        $p_6_3_2  = $request->point_6_3_2_id;
        for ($x = 52; $x <= $p_6_3_2; $x += 1) {
            $a = 'point_6_3_2_' . $x;
            $point_6_3_2['point_6_3_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_3_2);
        }

        $p_6_3_3  = $request->point_6_3_3_id;
        for ($x = 53; $x <= $p_6_3_3; $x += 1) {
            $a = 'point_6_3_3_' . $x;
            $point_6_3_3['point_6_3_3'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_3_3);
        }

        $p_6_4  = $request->point_6_4_id;
        for ($x = 53; $x <= $p_6_4; $x += 1) {
            $a = 'point_6_4_' . $x;
            $point_6_4['point_6_4'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_4);
        }

        $p_6_4_1  = $request->point_6_4_1_id;
        for ($x = 54; $x <= $p_6_4_1; $x += 1) {
            $a = 'point_6_4_1_' . $x;
            $point_6_4_1['point_6_4_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_4_1);
        }

        $p_6_4_2  = $request->point_6_4_2_id;
        for ($x = 55; $x <= $p_6_4_2; $x += 1) {
            $a = 'point_6_4_2_' . $x;
            $point_6_4_2['point_6_4_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_4_2);
        }

        $p_6_4_3  = $request->point_6_4_3_id;
        for ($x = 56; $x <= $p_6_4_3; $x += 1) {
            $a = 'point_6_4_3_' . $x;
            $point_6_4_3['point_6_4_3'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_4_3);
        }


        $p_6_5  = $request->point_6_5_id;
        for ($x = 57; $x <= $p_6_5; $x += 1) {
            $a = 'point_6_5_' . $x;
            $point_6_5['point_6_5'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_5);
        }

        $p_6_5_1  = $request->point_6_5_1_id;
        for ($x = 58; $x <= $p_6_5_1; $x += 1) {
            $a = 'point_6_5_1_' . $x;
            $point_6_5_1['point_6_5_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_5_1);
        }

        $p_6_5_2  = $request->point_6_5_2_id;
        for ($x = 59; $x <= $p_6_5_2; $x += 1) {
            $a = 'point_6_5_2_' . $x;
            $point_6_5_2['point_6_5_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_5_2);
        }

        $p_6_5_3  = $request->point_6_5_3_id;
        for ($x = 60; $x <= $p_6_5_3; $x += 1) {
            $a = 'point_6_5_3_' . $x;
            $point_6_5_3['point_6_5_3'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_5_3);
        }

        $p_6_6  = $request->point_6_6_id;
        for ($x = 61; $x <= $p_6_6; $x += 1) {
            $a = 'point_6_6_' . $x;
            $point_6_6['point_6_6'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_6);
        }

        $p_6_6_1  = $request->point_6_6_1_id;
        for ($x = 62; $x <= $p_6_6_1; $x += 1) {
            $a = 'point_6_6_1_' . $x;
            $point_6_6_1['point_6_6_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_6_1);
        }
        $p_6_6_2  = $request->point_6_6_2_id;
        for ($x = 63; $x <= $p_6_6_2; $x += 1) {
            $a = 'point_6_6_2_' . $x;
            $point_6_6_2['point_6_6_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_6_2);
        }

        $p_6_6_3  = $request->point_6_6_3_id;
        for ($x = 64; $x <= $p_6_6_3; $x += 1) {
            $a = 'point_6_6_3_' . $x;
            $point_6_6_3['point_6_6_3'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_6_3);
        }

        $p_6_7  = $request->point_6_7_id;
        for ($x = 65; $x <= $p_6_7; $x += 1) {
            $a = 'point_6_7_' . $x;
            $point_6_7['point_6_7'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_7);
        }

        $p_6_7_1  = $request->point_6_7_1_id;
        for ($x = 66; $x <= $p_6_7_1; $x += 1) {
            $a = 'point_6_7_1_' . $x;
            $point_6_7_1['point_6_7_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_7_1);
        }

        $p_6_7_2  = $request->point_6_7_2_id;
        for ($x = 67; $x <= $p_6_7_2; $x += 1) {
            $a = 'point_6_7_2_' . $x;
            $point_6_7_2['point_6_7_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_7_2);
        }

        $p_6_7_3  = $request->point_6_7_3_id;
        for ($x = 68; $x <= $p_6_7_3; $x += 1) {
            $a = 'point_6_7_3_' . $x;
            $point_6_7_3['point_6_7_3'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($point_6_7_3);
        }


        $amnt  = $request->amount_id;
        for ($x = 69; $x <= $amnt; $x += 1) {
            $a = 'amount_' . $x;
            $amount['amount'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($amount);
        }

        $head_fin_1  = $request->heading_financial_1_id;
        for ($x = 70; $x <= $head_fin_1; $x += 1) {
            $a = 'heading_financial_1_' . $x;
            $heading_financial_1['heading_financial_1'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($heading_financial_1);
        }

        $head_fin_2  = $request->heading_financial_id;
        for ($x = 71; $x <= $head_fin_2; $x += 1) {
            $a = 'heading_financial_2_' . $x;
            $heading_financial_2['heading_financial_2'] = $request->$a;
            $unique_form_id = $request->unique_form_id;
            DB::table('appendix_seven_points')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($heading_financial_2);
        }


        foreach ($request->four_row_id as $four_row_id) {
            $unique_form_id = $four_row_id->unique_form_id;
            $priority_expenditure = 'priority_expenditure_' . $four_row_id;
            $corresponding_objectives     = 'corresponding_objectives_' . $four_row_id;
            $four_update['priority_expenditure']   = $request->$priority_expenditure;
            $four_update['corresponding_objectives']   = $request->$corresponding_objectives;
            DB::table('appendix_seven_table_4')->where('id', '=', $four_row_id)->where('unique_form_id', '=', $unique_form_id)->update($four_update);
        }


        foreach ($request->seven_row_id as $seven_row_id) {
            $unique_form_id = $seven_row_id->unique_form_id;
            $indicative = 'indicative_' . $seven_row_id;
            $related_strategic_objectives = 'related_strategic_objectives_' . $seven_row_id;
            $unit_measurement             = 'unit_measurement_' . $seven_row_id;
            $revised_target              = 'revised_target_' . $seven_row_id;
            $actual_achievement           = 'actual_achievement_' . $seven_row_id;
            $goals                        = 'goals_' . $seven_row_id;
            $revised_goals                = 'revised_goals_' . $seven_row_id;
            $medium_term_targets          = 'medium_term_targets_' . $seven_row_id;
            $medium_term_targets1         = 'medium_term_targets1_' . $seven_row_id;
            $medium_term_targets2         = 'medium_term_targets2_' . $seven_row_id;
            $seven_update['indicative']   = $request->$indicative;
            $seven_update['related_strategic_objectives']   = $request->$related_strategic_objectives;
            $seven_update['unit_measurement']   = $request->$unit_measurement;
            $seven_update['revised_target']   = $request->$revised_target;
            $seven_update['actual_achievement']   = $request->$actual_achievement;
            $seven_update['goals']   = $request->$goals;
            $seven_update['revised_goals']   = $request->$revised_goals;
            $seven_update['medium_term_targets']   = $request->$medium_term_targets;
            $seven_update['medium_term_targets1']   = $request->$medium_term_targets1;
            $seven_update['medium_term_targets2']   = $request->$medium_term_targets2;
            DB::table('appendix_seven_table_7')->where('id', '=', $seven_row_id)->where('unique_form_id', '=', $unique_form_id)->update($seven_update);
        }


        foreach ($request->eight_row_id as $eight_row_id) {
            $unique_form_id = $eight_row_id->unique_form_id;
            $pursuit = 'pursuit_' . $eight_row_id;
            $results_indicative = 'results_indicative_' . $eight_row_id;
            $sequence_respective_strategic             = 'sequence_respective_strategic_' . $eight_row_id;
            $measurement_unit              = 'measurement_unit_' . $eight_row_id;
            $revised_targets_eight           = 'revised_targets_eight_' . $eight_row_id;
            $actual_achievement_eight                        = 'actual_achievement_eight_' . $eight_row_id;
            $goals_eight                = 'goals_eight_' . $eight_row_id;
            $revised_targets_eight_two          = 'revised_targets_eight_two_' . $eight_row_id;
            $medium_term_targets_eight         = 'medium_term_targets_eight_' . $eight_row_id;
            $medium_term_targets_eight1         = 'medium_term_targets_eight1_' . $eight_row_id;
            $medium_term_targets_eight2         = 'medium_term_targets_eight2_' . $eight_row_id;
            $eight_update['pursuit']   = $request->$pursuit;
            $eight_update['results_indicative']   = $request->$results_indicative;
            $eight_update['sequence_respective_strategic']   = $request->$sequence_respective_strategic;
            $eight_update['measurement_unit']   = $request->$measurement_unit;
            $eight_update['revised_targets_eight']   = $request->$revised_targets_eight;
            $eight_update['actual_achievement_eight']   = $request->$actual_achievement_eight;
            $eight_update['goals_eight']   = $request->$goals_eight;
            $eight_update['revised_targets_eight_two']   = $request->$revised_targets_eight_two;
            $eight_update['medium_term_targets_eight']   = $request->$medium_term_targets_eight;
            $eight_update['medium_term_targets_eight1']   = $request->$medium_term_targets_eight1;
            $eight_update['medium_term_targets_eight2']   = $request->$medium_term_targets_eight2;
            DB::table('appendix_seven_table_8')->where('id', '=', $eight_row_id)->where('unique_form_id', '=', $unique_form_id)->update($eight_update);
        }

        foreach ($request->nine_row_id as $nine_row_id) {
            $unique_form_id = $nine_row_id->unique_form_id;
            $operation_name = 'operation_name_' . $nine_row_id;
            $related_activities = 'related_activities_' . $nine_row_id;
            $authentic             = 'authentic_' . $nine_row_id;
            $budget_nine              = 'budget_nine_' . $nine_row_id;
            $revised_budget_nine           = 'revised_budget_nine_' . $nine_row_id;
            $estimate_nine                        = 'estimate_nine_' . $nine_row_id;
            $estimate_nine_1                = 'estimate_nine_1_' . $nine_row_id;
            $estimate_nine_2          = 'estimate_nine_2_' . $nine_row_id;
            $nine_update['operation_name']   = $request->$operation_name;
            $nine_update['related_activities']   = $request->$related_activities;
            $nine_update['authentic']   = $request->$authentic;
            $nine_update['budget_nine']   = $request->$budget_nine;
            $nine_update['revised_budget_nine']   = $request->$revised_budget_nine;
            $nine_update['estimate_nine']   = $request->$estimate_nine;
            $nine_update['estimate_nine_1']   = $request->$estimate_nine_1;
            $nine_update['estimate_nine_2']   = $request->$estimate_nine_2;
            DB::table('appendix_seven_table_9')->where('id', '=', $nine_row_id)->where('unique_form_id', '=', $unique_form_id)->update($nine_update);
        }
        foreach ($request->ten_row_id as $ten_row_id) {
            $unique_form_id = $ten_row_id->unique_form_id;
            $activities_ten     = 'activities_ten_' . $ten_row_id;
            $results_indicative_ten     = 'results_indicative_ten_' . $ten_row_id;
            $respective_strategic_ten     = 'respective_strategic_ten_' . $ten_row_id;
            $unit_measurement_ten = 'unit_measurement_ten_' . $ten_row_id;
            $revised_targets1_ten    = 'revised_targets1_ten_' . $ten_row_id;
            $actual_achievement_ten = 'actual_achievement_ten_' . $ten_row_id;
            $revised_targets2_ten = 'revised_targets2_ten_' . $ten_row_id;
            $goals_ten = 'goals_ten_' . $ten_row_id;
            $medium_target_ten = 'medium_target_ten_' . $ten_row_id;
            $medium_target1_ten = 'medium_target1_ten_' . $ten_row_id;
            $medium_target2_ten = 'medium_target2_ten_' . $ten_row_id;
            $ten_store['activities_ten'] = $request->$activities_ten;
            $ten_store['results_indicative_ten'] = $request->$results_indicative_ten;
            $ten_store['respective_strategic_ten'] = $request->$respective_strategic_ten;
            $ten_store['unit_measurement_ten'] = $request->$unit_measurement_ten;
            $ten_store['revised_targets1_ten'] = $request->$revised_targets1_ten;
            $ten_store['revised_targets2_ten'] = $request->$revised_targets2_ten;
            $ten_store['actual_achievement_ten'] = $request->$actual_achievement_ten;
            $ten_store['goals_ten'] = $request->$goals_ten;
            $ten_store['medium_target_ten'] = $request->$medium_target_ten;
            $ten_store['medium_target1_ten'] = $request->$medium_target1_ten;
            $ten_store['medium_target2_ten'] = $request->$medium_target2_ten;
            DB::table('appendix_seven_table_10')->where('id', '=', $ten_row_id)->where('unique_form_id', '=', $unique_form_id)->update($ten_store);
        }

        foreach ($request->twel_row_id as $twel_row_id) {
            $unique_form_id = $twel_row_id->unique_form_id;
            $activities_twel = 'activities_twel_' . $twel_row_id;
            $results_indicative_twel = 'results_indicative_twel_' . $twel_row_id;
            $respective_strategic_twel = 'respective_strategic_twel_' . $twel_row_id;
            $unit_measurement_twel = 'unit_measurement_twel_' . $twel_row_id;
            $revised_targets1_twel = 'revised_targets1_twel_' . $twel_row_id;
            $actual_achievement_twel = 'actual_achievement_twel_' . $twel_row_id;
            $revised_targets2_twel = 'revised_targets2_twel_' . $twel_row_id;
            $goals_twel = 'goals_twel_' . $twel_row_id;
            $medium_target_twel = 'medium_target_twel_' . $twel_row_id;
            $medium_target1_twel = 'medium_target1_twel_' . $twel_row_id;
            $medium_target2_twel = 'medium_target2_twel_' . $twel_row_id;
            $twel_store['activities_twel'] = $request->$activities_twel;
            $twel_store['results_indicative_twel'] = $request->$results_indicative_twel;
            $twel_store['respective_strategic_twel'] = $request->$respective_strategic_twel;
            $twel_store['unit_measurement_twel'] = $request->$unit_measurement_twel;
            $twel_store['revised_targets1_twel'] = $request->$revised_targets1_twel;
            $twel_store['actual_achievement_twel'] = $request->$actual_achievement_twel;
            $twel_store['revised_targets2_twel'] = $request->$revised_targets2_twel;
            $twel_store['goals_twel'] = $request->$goals_twel;
            $twel_store['medium_target_twel'] = $request->$medium_target_twel;
            $twel_store['medium_target1_twel'] = $request->$medium_target1_twel;
            $twel_store['medium_target2_twel'] = $request->$medium_target2_twel;
            DB::table('appendix_seven_table_12')->where('id', '=', $twel_row_id)->where('unique_form_id', '=', $unique_form_id)->update($twel_store);
        }

        /* table 11 */
        foreach ($request->eleven_row_id as $eleven_row_id) {
            $unique_form_id = $eleven_row_id->unique_form_id;
            $operation_eleven = 'operation_eleven_' . $eleven_row_id;
            $activities_eleven = 'activities_eleven_' . $eleven_row_id;
            $authentic_eleven = 'authentic_eleven_' . $eleven_row_id;
            $budget_eleven = 'budget_eleven_' . $eleven_row_id;
            $revised_budget_eleven = 'revised_budget_eleven_' . $eleven_row_id;
            $estimate_eleven = 'estimate_eleven_' . $eleven_row_id;
            $estimate_eleven_1 = 'estimate_eleven_1_' . $eleven_row_id;
            $estimate_eleven_2 = 'estimate_eleven_2_' . $eleven_row_id;
            $eleven_store['operation_eleven'] = $request->$operation_eleven;
            $eleven_store['activities_eleven'] = $request->$activities_eleven;
            $eleven_store['authentic_eleven'] = $request->$authentic_eleven;
            $eleven_store['budget_eleven'] = $request->$budget_eleven;
            $eleven_store['revised_budget_eleven'] = $request->$revised_budget_eleven;
            $eleven_store['estimate_eleven'] = $request->$estimate_eleven;
            $eleven_store['estimate_eleven_1'] = $request->$estimate_eleven_1;
            $eleven_store['estimate_eleven_2'] = $request->$estimate_eleven_2;
            DB::table('appendix_seven_table_11')->where('id', '=', $eleven_row_id)->where('unique_form_id', '=', $unique_form_id)->update($eleven_store);
        }


        /* table 13 */
        foreach ($request->thirteen_row_id as $thirteen_row_id) {
            $unique_form_id = $thirteen_row_id->unique_form_id;
            $operation_thirteen = 'operation_thirteen_' . $thirteen_row_id;
            $activities_thirteen = 'activities_thirteen_' . $thirteen_row_id;
            $authentic_thirteen = 'authentic_thirteen_' . $thirteen_row_id;
            $budget_thirteen = 'budget_thirteen_' . $thirteen_row_id;
            $revised_budget_thirteen = 'revised_budget_thirteen_' . $thirteen_row_id;
            $estimate_thirteen = 'estimate_thirteen_' . $thirteen_row_id;
            $estimate_thirteen_1 = 'estimate_thirteen_1_' . $thirteen_row_id;
            $estimate_thirteen_2 = 'estimate_thirteen_2_' . $thirteen_row_id;
            $thirteen_store['operation_thirteen'] = $request->$operation_thirteen;
            $thirteen_store['activities_thirteen'] = $request->$activities_thirteen;
            $thirteen_store['authentic_thirteen'] = $request->$authentic_thirteen;
            $thirteen_store['budget_thirteen'] = $request->$budget_thirteen;
            $thirteen_store['revised_budget_thirteen'] = $request->$revised_budget_thirteen;
            $thirteen_store['estimate_thirteen'] = $request->$estimate_thirteen;
            $thirteen_store['estimate_thirteen_1'] = $request->$estimate_thirteen_1;
            $thirteen_store['estimate_thirteen_2'] = $request->$estimate_thirteen_2;
            DB::table('appendix_seven_table_13')->where('id', '=', $thirteen_row_id)->where('unique_form_id', '=', $unique_form_id)->update($thirteen_store);
        }

        /* table 15 */
        foreach ($request->fifteen_row_id as $fifteen_row_id) {
            $unique_form_id = $fifteen_row_id->unique_form_id;
            $operation_fifteen = 'operation_fifteen_' . $fifteen_row_id;
            $activities_fifteen = 'activities_fifteen_' . $fifteen_row_id;
            $authentic_fifteen = 'authentic_fifteen_' . $fifteen_row_id;
            $budget_fifteen = 'budget_fifteen_' . $fifteen_row_id;
            $revised_budget_fifteen = 'revised_budget_fifteen_' . $fifteen_row_id;
            $estimate_fifteen = 'estimate_fifteen_' . $fifteen_row_id;
            $estimate_fifteen_1 = 'estimate_fifteen_1_' . $fifteen_row_id;
            $estimate_fifteen_2 = 'estimate_fifteen_2_' . $fifteen_row_id;
            $fifteen_store['operation_fifteen'] = $request->$operation_fifteen;
            $fifteen_store['activities_fifteen'] = $request->$activities_fifteen;
            $fifteen_store['authentic_fifteen'] = $request->$authentic_fifteen;
            $fifteen_store['budget_fifteen'] = $request->$budget_fifteen;
            $fifteen_store['revised_budget_fifteen'] = $request->$revised_budget_fifteen;
            $fifteen_store['estimate_fifteen'] = $request->$estimate_fifteen;
            $fifteen_store['estimate_fifteen_1'] = $request->$estimate_fifteen_1;
            $fifteen_store['estimate_fifteen_2'] = $request->$estimate_fifteen_2;
            DB::table('appendix_seven_table_15')->where('id', '=', $fifteen_row_id)->where('unique_form_id', '=', $unique_form_id)->update($fifteen_store);
        }


        /* table 17 */
        foreach ($request->seventeen_row_id as $seventeen_row_id) {
            $unique_form_id = $seventeen_row_id->unique_form_id;
            $operation_seventeen = 'operation_seventeen_' . $seventeen_row_id;
            $activities_seventeen = 'activities_seventeen_' . $seventeen_row_id;
            $authentic_seventeen = 'authentic_seventeen_' . $seventeen_row_id;
            $budget_seventeen = 'budget_seventeen_' . $seventeen_row_id;
            $revised_budget_seventeen = 'revised_budget_seventeen_' . $seventeen_row_id;
            $estimate_seventeen = 'estimate_seventeen_' . $seventeen_row_id;
            $estimate_seventeen_1 = 'estimate_seventeen_1_' . $seventeen_row_id;
            $estimate_seventeen_2 = 'estimate_seventeen_2_' . $seventeen_row_id;
            $seventeen_store['operation_seventeen'] = $request->$operation_seventeen;
            $seventeen_store['activities_seventeen'] = $request->$activities_seventeen;
            $seventeen_store['authentic_seventeen'] = $request->$authentic_seventeen;
            $seventeen_store['budget_seventeen'] = $request->$budget_seventeen;
            $seventeen_store['revised_budget_seventeen'] = $request->$revised_budget_seventeen;
            $seventeen_store['estimate_seventeen'] = $request->$estimate_seventeen;
            $seventeen_store['estimate_seventeen_1'] = $request->$estimate_seventeen_1;
            $seventeen_store['estimate_seventeen_2'] = $request->$estimate_seventeen_2;
            DB::table('appendix_seven_table_17')->where('id', '=', $seventeen_row_id)->where('unique_form_id', '=', $unique_form_id)->update($seventeen_store);
        }

        /* table 19 */
        foreach ($request->nineteen_row_id as $nineteen_row_id) {
            $unique_form_id = $nineteen_row_id->unique_form_id;
            $operation_nineteen = 'operation_nineteen_' . $nineteen_row_id;
            $activities_nineteen = 'activities_nineteen_' . $nineteen_row_id;
            $authentic_nineteen = 'authentic_nineteen_' . $nineteen_row_id;
            $budget_nineteen = 'budget_nineteen_' . $nineteen_row_id;
            $revised_budget_nineteen = 'revised_budget_nineteen_' . $nineteen_row_id;
            $estimate_nineteen = 'estimate_nineteen_' . $nineteen_row_id;
            $estimate_nineteen_1 = 'estimate_nineteen_1_' . $nineteen_row_id;
            $estimate_nineteen_2 = 'estimate_nineteen_2_' . $nineteen_row_id;
            $nineteen_store['operation_nineteen'] = $request->$operation_nineteen;
            $nineteen_store['activities_nineteen'] = $request->$activities_nineteen;
            $nineteen_store['authentic_nineteen'] = $request->$authentic_nineteen;
            $nineteen_store['budget_nineteen'] = $request->$budget_nineteen;
            $nineteen_store['revised_budget_nineteen'] = $request->$revised_budget_nineteen;
            $nineteen_store['estimate_nineteen'] = $request->$estimate_nineteen;
            $nineteen_store['estimate_nineteen_1'] = $request->$estimate_nineteen_1;
            $nineteen_store['estimate_nineteen_2'] = $request->$estimate_nineteen_2;
            DB::table('appendix_seven_table_19')->where('id', '=', $nineteen_row_id)->where('unique_form_id', '=', $unique_form_id)->update($nineteen_store);
        }


        /* table 21 */
        foreach ($request->twentyone_row_id as $twentyone_row_id) {
            $unique_form_id = $twentyone_row_id->unique_form_id;
            $operation_twentyone = 'operation_twentyone_' . $twentyone_row_id;
            $activities_twentyone = 'activities_twentyone_' . $twentyone_row_id;
            $authentic_twentyone = 'authentic_twentyone_' . $twentyone_row_id;
            $budget_twentyone = 'budget_twentyone_' . $twentyone_row_id;
            $revised_budget_twentyone = 'revised_budget_twentyone_' . $twentyone_row_id;
            $estimate_twentyone = 'estimate_twentyone_' . $twentyone_row_id;
            $estimate_twentyone_1 = 'estimate_twentyone_1_' . $twentyone_row_id;
            $estimate_twentyone_2 = 'estimate_twentyone_2_' . $twentyone_row_id;
            $twentyone_store['operation_twentyone'] = $request->$operation_twentyone;
            $twentyone_store['activities_twentyone'] = $request->$activities_twentyone;
            $twentyone_store['authentic_twentyone'] = $request->$authentic_twentyone;
            $twentyone_store['budget_twentyone'] = $request->$budget_twentyone;
            $twentyone_store['revised_budget_twentyone'] = $request->$revised_budget_twentyone;
            $twentyone_store['estimate_twentyone'] = $request->$estimate_twentyone;
            $twentyone_store['estimate_twentyone_1'] = $request->$estimate_twentyone_1;
            $twentyone_store['estimate_twentyone_2'] = $request->$estimate_twentyone_2;
            DB::table('appendix_seven_table_21')->where('id', '=', $twentyone_row_id)->where('unique_form_id', '=', $unique_form_id)->update($twentyone_store);
        }

        /* table 3 */
        foreach ($request->three_row_id as $three_row_id) {
            $unique_form_id = $three_row_id->unique_form_id;
            $description_three = 'description_three_' . $three_row_id;
            $budget_three = 'budget_three_' . $three_row_id;
            $projection1_three     = 'projection1_three	_' . $three_row_id;
            $projection2_three = 'projection2_three_' . $three_row_id;

            $three_store['description_three'] = $request->$description_three;
            $three_store['budget_three'] = $request->$budget_three;
            $three_store['projection1_three'] = $request->$projection1_three;
            $three_store['projection2_three'] = $request->$projection2_three;
            DB::table('appendix_seven_table_3')->where('id', '=', $three_row_id)->where('unique_form_id', '=', $unique_form_id)->update($three_store);
        }

        /* table 5 */
        foreach ($request->five_row_id as $five_row_id) {
            $unique_form_id = $five_row_id->unique_form_id;
            $description_five = 'description_five_' . $five_row_id;
            $budget_five = 'budget_five_' . $five_row_id;
            $revised_budget_five     = 'revised_budget_five_' . $five_row_id;
            $budget2_five = 'budget2_five_' . $five_row_id;
            $projection1_five = 'projection1_five_' . $five_row_id;
            $projection2_five = 'projection2_five_' . $five_row_id;

            $five_store['description_five'] = $request->$description_five;
            $five_store['budget_five'] = $request->$budget_five;
            $five_store['revised_budget_five'] = $request->$revised_budget_five;
            $five_store['budget2_five'] = $request->$budget2_five;
            $five_store['projection1_five'] = $request->$projection1_five;
            $five_store['projection2_five'] = $request->$projection2_five;
            DB::table('appendix_seven_table_5')->where('id', '=', $five_row_id)->where('unique_form_id', '=', $unique_form_id)->update($five_store);
        }


        /* table 6 */
        foreach ($request->six_row_id as $six_row_id) {
            $unique_form_id = $six_row_id->unique_form_id;
            $ecconomic_group_code = 'ecconomic_group_code_' . $six_row_id;
            $description_six = 'description_six_' . $six_row_id;
            $budget_six = 'budget_six_' . $six_row_id;
            $revised_budget_six     = 'revised_budget_six_' . $six_row_id;
            $budget2_six = 'budget2_six_' . $six_row_id;
            $projection1_six = 'projection1_six_' . $six_row_id;
            $projection2_six = 'projection2_six_' . $six_row_id;
            $six_store['ecconomic_group_code'] = $request->$ecconomic_group_code;
            $six_store['description_six'] = $request->$description_six;
            $six_store['budget_six'] = $request->$budget_six;
            $six_store['revised_budget_six'] = $request->$revised_budget_six;
            $six_store['budget2_six'] = $request->$budget2_six;
            $six_store['projection1_six'] = $request->$projection1_six;
            $six_store['projection2_six'] = $request->$projection2_six;
            DB::table('appendix_seven_table_6')->where('id', '=', $six_row_id)->where('unique_form_id', '=', $unique_form_id)->update($six_store);
        }


        /* table 1 */
        foreach ($request->one_row_id as $one_row_id) {
            $unique_form_id = $one_row_id->unique_form_id;
            $description_one = 'description_one_' . $one_row_id;
            $budget_one = 'budget_one_' . $one_row_id;
            $projection1_one = 'projection1_one_' . $one_row_id;
            $projection2_one = 'projection2_one_' . $one_row_id;
            $one_store['description_one'] = $request->$description_one;
            $one_store['budget_one'] = $request->$budget_one;
            $one_store['projection1_one'] = $request->$projection1_one;
            $one_store['projection2_one'] = $request->$projection2_one;
            DB::table('appendix_seven_table_1')->where('id', '=', $one_row_id)->where('unique_form_id', '=', $unique_form_id)->update($one_store);
        }

        /* table 2 */
        foreach ($request->two_row_id as $two_row_id) {
            $unique_form_id = $two_row_id->unique_form_id;
            $purpose_two    = 'purpose_two_' . $two_row_id;
            $activities_two = 'activities_two_' . $two_row_id;
            $agency_two     = 'agency_two_' . $two_row_id;
            $twoupdate['purpose_two'] = $request->$purpose_two;
            $twoupdate['activities_two'] = $request->$activities_two;
            $twoupdate['agency_two'] = $request->$agency_two;
            DB::table('appendix_seven_table_2')->where('id', '=', $two_row_id)->where('unique_form_id', '=', $unique_form_id)->update($twoupdate);
        }



        foreach ($request->sub_two_row_id as $subRow2af) {
            $unique_form_id = $subRow2af->unique_form_id;

            // $sub_purpose_two    = 'purpose_two_' . $subRow2;
            // $sub_activities_two = 'activities_two_' . $subRow2;
            // $sub_agency_two = 'agency_two_' . $subRow2;
            // $sub_two_update['purpose_two'] = $request->$sub_purpose_two;
            // $sub_two_update['activities_two'] = $request->$sub_activities_two;
            // $sub_two_update['agency_two'] = $request->$sub_agency_two;
            // DB::table('appendix_seven_table_2_sub')->where('id', '=', $subRow2)->where('unique_form_id','=', $unique_form_id)->update($sub_two_update);
        }



        /* table 20 update  */

        foreach ($request->twenty_row_id as $twenty_row_id) {
            $unique_form_id = $twenty_row_id->unique_form_id;
            $activities_twenty = 'activities_twenty_' . $twenty_row_id;
            $results_indicative_twenty = 'results_indicative_twenty_' . $twenty_row_id;
            $respective_strategic_twenty = 'respective_strategic_twenty_' . $twenty_row_id;
            $unit_measurement_twenty = 'unit_measurement_twenty_' . $twenty_row_id;
            $revised_targets1_twenty = 'revised_targets1_twenty_' . $twenty_row_id;
            $revised_targets2_twenty = 'revised_targets2_twenty_' . $twenty_row_id;
            $actual_achievement_twenty = 'actual_achievement_twenty_' . $twenty_row_id;
            $goals_twenty = 'goals_twenty_' . $twenty_row_id;
            $medium_target_twenty = 'medium_target_twenty_' . $twenty_row_id;
            $medium_target1_twenty = 'medium_target1_twenty_' . $twenty_row_id;
            $medium_target2_twenty = 'medium_target2_twenty_' . $twenty_row_id;
            $twentyupdate['activities_twenty']   = $request->$activities_twenty;
            $twentyupdate['results_indicative_twenty']   = $request->$results_indicative_twenty;
            $twentyupdate['respective_strategic_twenty']   = $request->$respective_strategic_twenty;
            $twentyupdate['unit_measurement_twenty']   = $request->$unit_measurement_twenty;
            $twentyupdate['revised_targets1_twenty']   = $request->$revised_targets1_twenty;
            $twentyupdate['revised_targets2_twenty']   = $request->$revised_targets2_twenty;
            $twentyupdate['actual_achievement_twenty']   = $request->$actual_achievement_twenty;
            $twentyupdate['goals_twenty']   = $request->$goals_twenty;
            $twentyupdate['medium_target_twenty']   = $request->$medium_target_twenty;
            $twentyupdate['medium_target1_twenty']   = $request->$medium_target1_twenty;
            $twentyupdate['medium_target2_twenty']   = $request->$medium_target2_twenty;
            DB::table('appendix_seven_table_20')->where('id', '=', $twenty_row_id)->where('unique_form_id', '=', $unique_form_id)->update($twentyupdate);
        }



        foreach ($request->sub_twenty_row_id as $subRow20) {
            $unique_form_id = $subRow20->unique_form_id;
            $sub_activities_twenty = 'sub_row_activities_twenty_' . $subRow20;
            $sub_results_indicative_twenty = 'sub_row_results_indicative_twenty_' . $subRow20;
            $sub_respective_strategic_twenty = 'sub_row_respective_strategic_twenty_' . $subRow20;
            $sub_unit_measurement_twenty = 'sub_row_unit_measurement_twenty_' . $subRow20;
            $sub_revised_targets1_twenty = 'sub_row_revised_targets1_twenty_' . $subRow20;
            $sub_revised_targets2_twenty = 'sub_row_revised_targets2_twenty_' . $subRow20;
            $sub_actual_achievement_twenty = 'sub_row_actual_achievement_twenty_' . $subRow20;
            $sub_goals_twenty = 'sub_row_goals_twenty_' . $subRow20;
            $sub_medium_target_twenty = 'sub_row_medium_target_twenty_' . $subRow20;
            $sub_medium_target1_twenty = 'sub_row_medium_target1_twenty_' . $subRow20;
            $sub_medium_target2_twenty = 'sub_row_medium_target2_twenty_' . $subRow20;
            $sub_twentyupdate['activities_twenty']   = $request->$sub_activities_twenty;
            $sub_twentyupdate['results_indicative_twenty']   = $request->$sub_results_indicative_twenty;
            $sub_twentyupdate['respective_strategic_twenty']   = $request->$sub_respective_strategic_twenty;
            $sub_twentyupdate['unit_measurement_twenty']   = $request->$sub_unit_measurement_twenty;
            $sub_twentyupdate['revised_targets1_twenty']   = $request->$sub_revised_targets1_twenty;
            $sub_twentyupdate['revised_targets2_twenty']   = $request->$sub_revised_targets2_twenty;
            $sub_twentyupdate['actual_achievement_twenty']   = $request->$sub_actual_achievement_twenty;
            $sub_twentyupdate['goals_twenty']   = $request->$sub_goals_twenty;
            $sub_twentyupdate['medium_target_twenty']   = $request->$sub_medium_target_twenty;
            $sub_twentyupdate['medium_target1_twenty']   = $request->$sub_medium_target1_twenty;
            $sub_twentyupdate['medium_target2_twenty']   = $request->$sub_medium_target2_twenty;
            DB::table('appendix_seven_table_20_sub')->where('id', '=', $subRow20)->where('unique_form_id', '=', $unique_form_id)->update($sub_twentyupdate);
        }

        /* table 16 */

        foreach ($request->sixteen_row_id as $sixteen_row_id) {
            $unique_form_id = $sixteen_row_id->unique_form_id;
            $activities_sixteen = 'activities_sixteen_' . $sixteen_row_id;
            $results_indicative_sixteen = 'results_indicative_sixteen_' . $sixteen_row_id;
            $respective_strategic_sixteen = 'respective_strategic_sixteen_' . $sixteen_row_id;
            $unit_measurement_sixteen = 'unit_measurement_sixteen_' . $sixteen_row_id;
            $revised_targets1_sixteen = 'revised_targets1_sixteen_' . $sixteen_row_id;
            $revised_targets2_sixteen = 'revised_targets2_sixteen_' . $sixteen_row_id;
            $actual_achievement_sixteen = 'actual_achievement_sixteen_' . $sixteen_row_id;
            $goals_sixteen = 'goals_sixteen_' . $sixteen_row_id;
            $medium_target_sixteen = 'medium_target_sixteen_' . $sixteen_row_id;
            $medium_target1_sixteen = 'medium_target1_sixteen_' . $sixteen_row_id;
            $medium_target2_sixteen = 'medium_target2_sixteen_' . $sixteen_row_id;
            $sixteenupdate['activities_sixteen'] = $request->$activities_sixteen;
            $sixteenupdate['results_indicative_sixteen'] = $request->$results_indicative_sixteen;
            $sixteenupdate['respective_strategic_sixteen'] = $request->$respective_strategic_sixteen;
            $sixteenupdate['unit_measurement_sixteen'] = $request->$unit_measurement_sixteen;
            $sixteenupdate['revised_targets1_sixteen'] = $request->$revised_targets1_sixteen;
            $sixteenupdate['revised_targets2_sixteen'] = $request->$revised_targets2_sixteen;
            $sixteenupdate['actual_achievement_sixteen'] = $request->$actual_achievement_sixteen;
            $sixteenupdate['goals_sixteen'] = $request->$goals_sixteen;
            $sixteenupdate['medium_target_sixteen'] = $request->$medium_target_sixteen;
            $sixteenupdate['medium_target1_sixteen'] = $request->$medium_target1_sixteen;
            $sixteenupdate['medium_target2_sixteen'] = $request->$medium_target2_sixteen;
            DB::table('appendix_seven_table_16')->where('id', '=', $sixteen_row_id)->where('unique_form_id', '=', $unique_form_id)->update($sixteenupdate);
        }



        /* table 18 */

        foreach ($request->eighteen_row_id as $eighteen_row_id) {
            $unique_form_id = $eighteen_row_id->unique_form_id;
            $activities_eighteen = 'activities_eighteen_' . $eighteen_row_id;
            $results_indicative_eighteen = 'results_indicative_eighteen_' . $eighteen_row_id;
            $respective_strategic_eighteen = 'respective_strategic_eighteen_' . $eighteen_row_id;
            $unit_measurement_eighteen = 'unit_measurement_eighteen_' . $eighteen_row_id;
            $revised_targets1_eighteen = 'revised_targets1_eighteen_' . $eighteen_row_id;
            $revised_targets2_eighteen = 'revised_targets2_eighteen_' . $eighteen_row_id;
            $actual_achievement_eighteen = 'actual_achievement_eighteen_' . $eighteen_row_id;
            $goals_eighteen = 'goals_eighteen_' . $eighteen_row_id;
            $medium_target_eighteen = 'medium_target_eighteen_' . $eighteen_row_id;
            $medium_target1_eighteen = 'medium_target1_eighteen_' . $eighteen_row_id;
            $medium_target2_eighteen = 'medium_target2_eighteen_' . $eighteen_row_id;
            $eighteenupdate['activities_eighteen'] = $request->$activities_eighteen;
            $eighteenupdate['results_indicative_eighteen'] = $request->$results_indicative_eighteen;
            $eighteenupdate['respective_strategic_eighteen'] = $request->$respective_strategic_eighteen;
            $eighteenupdate['unit_measurement_eighteen'] = $request->$unit_measurement_eighteen;
            $eighteenupdate['revised_targets1_eighteen'] = $request->$revised_targets1_eighteen;
            $eighteenupdate['revised_targets2_eighteen'] = $request->$revised_targets2_eighteen;
            $eighteenupdate['actual_achievement_eighteen'] = $request->$actual_achievement_eighteen;
            $eighteenupdate['goals_eighteen'] = $request->$goals_eighteen;
            $eighteenupdate['medium_target_eighteen'] = $request->$medium_target_eighteen;
            $eighteenupdate['medium_target1_eighteen'] = $request->$medium_target1_eighteen;
            $eighteenupdate['medium_target2_eighteen'] = $request->$medium_target2_eighteen;
            DB::table('appendix_seven_table_18')->where('id', '=', $eighteen_row_id)->where('unique_form_id', '=', $unique_form_id)->update($eighteenupdate);
        }

        /* table 14 */
        foreach ($request->fourteen_row_id as $fourteen_row_id) {
            $unique_form_id = $fourteen_row_id->unique_form_id;
            $activities_fourteen = 'activities_fourteen_' . $fourteen_row_id;
            $results_indicative_fourteen = 'results_indicative_fourteen_' . $fourteen_row_id;
            $respective_strategic_fourteen = 'respective_strategic_fourteen_' . $fourteen_row_id;
            $unit_measurement_fourteen = 'unit_measurement_fourteen_' . $fourteen_row_id;
            $revised_targets1_fourteen = 'revised_targets1_fourteen_' . $fourteen_row_id;
            $revised_targets2_fourteen = 'revised_targets2_fourteen_' . $fourteen_row_id;
            $actual_achievement_fourteen = 'actual_achievement_fourteen_' . $fourteen_row_id;
            $goals_fourteen = 'goals_fourteen_' . $fourteen_row_id;
            $medium_target_fourteen = 'medium_target_fourteen_' . $fourteen_row_id;
            $medium_target1_fourteen = 'medium_target1_fourteen_' . $fourteen_row_id;
            $medium_target2_fourteen = 'medium_target2_fourteen_' . $fourteen_row_id;
            $fourteenupdate['activities_fourteen'] = $request->$activities_fourteen;
            $fourteenupdate['results_indicative_fourteen'] = $request->$results_indicative_fourteen;
            $fourteenupdate['respective_strategic_fourteen'] = $request->$respective_strategic_fourteen;
            $fourteenupdate['unit_measurement_fourteen'] = $request->$unit_measurement_fourteen;
            $fourteenupdate['revised_targets1_fourteen'] = $request->$revised_targets1_fourteen;
            $fourteenupdate['revised_targets2_fourteen'] = $request->$revised_targets2_fourteen;
            $fourteenupdate['actual_achievement_fourteen'] = $request->$actual_achievement_fourteen;
            $fourteenupdate['goals_fourteen'] = $request->$goals_fourteen;
            $fourteenupdate['medium_target_fourteen'] = $request->$medium_target_fourteen;
            $fourteenupdate['medium_target1_fourteen'] = $request->$medium_target1_fourteen;
            $fourteenupdate['medium_target2_fourteen'] = $request->$medium_target2_fourteen;
            DB::table('appendix_seven_table_14')->where('id', '=', $fourteen_row_id)->where('unique_form_id', '=', $unique_form_id)->update($fourteenupdate);
        }



        foreach ($request->sub_fourteen_row_id as $subRow14) {
            $unique_form_id = $subRow14->unique_form_id;
            $sub_activities_fourteen = 'sub_row_activities_fourteen_' . $subRow14;
            $sub_results_indicative_fourteen = 'sub_row_results_indicative_fourteen_' . $subRow14;
            $sub_respective_strategic_fourteen = 'sub_row_respective_strategic_fourteen_' . $subRow14;
            $sub_unit_measurement_fourteen = 'sub_row_unit_measurement_fourteen_' . $subRow14;
            $sub_revised_targets1_fourteen = 'sub_row_revised_targets1_fourteen_' . $subRow14;
            $sub_revised_targets2_fourteen = 'sub_row_revised_targets2_fourteen_' . $subRow14;
            $sub_actual_achievement_fourteen = 'sub_row_actual_achievement_fourteen_' . $subRow14;
            $sub_goals_fourteen = 'sub_row_goals_fourteen_' . $subRow14;
            $sub_medium_target_fourteen = 'sub_row_medium_target_fourteen_' . $subRow14;
            $sub_medium_target1_fourteen = 'sub_row_medium_target1_fourteen_' . $subRow14;
            $sub_medium_target2_fourteen = 'sub_row_medium_target2_fourteen_' . $subRow14;
            $sub_fourteenupdate['activities_fourteen'] = $request->$sub_activities_fourteen;
            $sub_fourteenupdate['results_indicative_fourteen'] = $request->$sub_results_indicative_fourteen;
            $sub_fourteenupdate['respective_strategic_fourteen'] = $request->$sub_respective_strategic_fourteen;
            $sub_fourteenupdate['unit_measurement_fourteen'] = $request->$sub_unit_measurement_fourteen;
            $sub_fourteenupdate['revised_targets1_fourteen'] = $request->$sub_revised_targets1_fourteen;
            $sub_fourteenupdate['revised_targets2_fourteen'] = $request->$sub_revised_targets2_fourteen;
            $sub_fourteenupdate['actual_achievement_fourteen'] = $request->$sub_actual_achievement_fourteen;
            $sub_fourteenupdate['goals_fourteen'] = $request->$sub_goals_fourteen;
            $sub_fourteenupdate['medium_target_fourteen'] = $request->$sub_medium_target_fourteen;
            $sub_fourteenupdate['medium_target1_fourteen'] = $request->$sub_medium_target1_fourteen;
            $sub_fourteenupdate['medium_target2_fourteen'] = $request->$sub_medium_target2_fourteen;
            DB::table('appendix_seven_table_14_sub')->where('id', '=', $subRow14)->where('unique_form_id', '=', $unique_form_id)->update($sub_fourteenupdate);
        }
    }


    /* appendix seven store unique */
    public function form_store_appendix_seven_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        // $format = date("i_s") . '_' . mt_rand(1000, 99999);
        // foreach ($request->point_1_0 as $p_1) {
        //     $point_1_0['point_1_0'] = $p_1;
        //     $point_1_0['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_1_0);
        // }
        // foreach ($request->point_1_1 as $p_1_1) {
        //     $point_1_1['point_1_1'] = $p_1_1;
        //     $point_1_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_1_1);
        // }
        // foreach ($request->point_1_1_line as $p_1_1_line) {
        //     $point_1_1_line['point_1_1_line'] = $p_1_1_line;
        //     $point_1_1_line['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_1_1_line);
        // }
        // foreach ($request->point_1_2 as $p_1_2) {
        //     $point_1_2['point_1_2'] = $p_1_2;
        //     $point_1_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_1_2);
        // }
        // foreach ($request->point_1_2_lines as $p_1_2_lines) {
        //     $point_1_2_lines['point_1_2_lines'] = $p_1_2_lines;
        //     $point_1_2_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_1_2_lines);
        // }

        // foreach ($request->heading_financial_1 as $head_fin_1) {
        //     $heading_financial_1['heading_financial_1'] = $head_fin_1;
        //     $heading_financial_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($heading_financial_1);
        // }


        // foreach ($request->heading_financial_2 as $head_fin_2) {
        //     $heading_financial_2['heading_financial_2'] = $head_fin_2;
        //     $heading_financial_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($heading_financial_2);
        // }


        // foreach ($request->point_2_0 as $p_2_0) {
        //     $point_2_0['point_2_0'] = $p_2_0;
        //     $point_2_0['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_2_0);
        // }

        // foreach ($request->point_3_0 as $p_3_0) {
        //     $point_3_0['point_3_0'] = $p_3_0;
        //     $point_3_0['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_0);
        // }

        // foreach ($request->point_3_1 as $p_3_1) {
        //     $point_3_1['point_3_1'] = $p_3_1;
        //     $point_3_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1);
        // }


        // foreach ($request->point_3_1_1 as $p_3_1_1) {
        //     $point_3_1_1['point_3_1_1'] = $p_3_1_1;
        //     $point_3_1_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_1);
        // }

        // foreach ($request->point_3_1_1_lines as $p_3_1_1_lines) {
        //     $point_3_1_1_lines['point_3_1_1_lines'] = $p_3_1_1_lines;
        //     $point_3_1_1_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_1_lines);
        // }

        // foreach ($request->point_3_1_2_lines as $p_3_1_2_lines) {
        //     $point_3_1_2_lines['point_3_1_2_lines'] = $p_3_1_2_lines;
        //     $point_3_1_2_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_2_lines);
        // }

        // foreach ($request->point_3_1_3_lines as $p_3_1_3_lines) {
        //     $point_3_1_3_lines['point_3_1_3_lines'] = $p_3_1_3_lines;
        //     $point_3_1_3_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_3_lines);
        // }

        // foreach ($request->point_3_1_4_lines as $p_3_1_4_lines) {
        //     $point_3_1_4_lines['point_3_1_4_lines'] = $p_3_1_4_lines;
        //     $point_3_1_4_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_4_lines);
        // }

        // foreach ($request->point_3_1_5_lines as $p_3_1_5_lines) {
        //     $point_3_1_5_lines['point_3_1_5_lines'] = $p_3_1_5_lines;
        //     $point_3_1_5_lines['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_5_lines);
        // }

        // foreach ($request->point_3_1_2 as $p_3_1_2) {
        //     $point_3_1_2['point_3_1_2'] = $p_3_1_2;
        //     $point_3_1_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_2);
        // }

        // foreach ($request->point_3_1_3 as $p_3_1_3) {
        //     $point_3_1_3['point_3_1_3'] = $p_3_1_3;
        //     $point_3_1_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_3);
        // }

        // foreach ($request->point_3_1_4 as $p_3_1_4) {
        //     $point_3_1_4['point_3_1_4'] = $p_3_1_4;
        //     $point_3_1_4['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_4);
        // }

        // foreach ($request->point_3_1_5 as $p_3_1_5) {
        //     $point_3_1_5['point_3_1_5'] = $p_3_1_5;
        //     $point_3_1_5['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_1_5);
        // }

        // foreach ($request->point_3_2 as $p_3_2) {
        //     $point_3_2['point_3_2'] = $p_3_2;
        //     $point_3_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_3_2);
        // }


        // foreach ($request->point_4_1 as $p_4_1) {
        //     $point_4_1['point_4_1'] = $p_4_1;
        //     $point_4_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_4_1);
        // }

        // foreach ($request->point_4_2 as $p_4_2) {
        //     $point_4_2['point_4_2'] = $p_4_2;
        //     $point_4_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_4_2);
        // }

        // foreach ($request->point_4_2_1 as $p_2_1) {
        //     $point_4_2_1['point_4_2_1'] = $p_2_1;
        //     $point_4_2_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_4_2_1);
        // }

        // foreach ($request->point_4_2_2 as $p_4_2_2) {
        //     $point_4_2_2['point_4_2_2'] = $p_4_2_2;
        //     $point_4_2_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_4_2_2);
        // }

        // foreach ($request->point_5_0 as $p_5_0) {
        //     $point_5_0['point_5_0'] = $p_5_0;
        //     $point_5_0['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_5_0);
        // }

        // foreach ($request->point_6_0 as $p_6_0) {
        //     $point_6_0['point_6_0'] = $p_6_0;
        //     $point_6_0['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_0);
        // }

        // foreach ($request->point_6_1 as $p_6_1) {
        //     $point_6_1['point_6_1'] = $p_6_1;
        //     $point_6_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_1);
        // }


        // foreach ($request->point_6_1_1 as $p_6_1_1) {
        //     $point_6_1_1['point_6_1_1'] = $p_6_1_1;
        //     $point_6_1_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_1_1);
        // }

        // foreach ($request->point_6_1_2 as $p_6_1_2) {
        //     $point_6_1_2['point_6_1_2'] = $p_6_1_2;
        //     $point_6_1_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_1_2);
        // }

        // foreach ($request->point_6_1_3 as $p_6_1_3) {
        //     $point_6_1_3['point_6_1_3'] = $p_6_1_3;
        //     $point_6_1_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_1_3);
        // }

        // foreach ($request->point_6_2 as $p_6_2) {
        //     $point_6_2['point_6_2'] = $p_6_2;
        //     $point_6_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_2);
        // }

        // foreach ($request->point_6_2_1 as $p_6_2_1) {
        //     $point_6_2_1['point_6_2_1'] = $p_6_2_1;
        //     $point_6_2_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_2_1);
        // }


        // foreach ($request->point_6_2_2 as $p_6_2_2) {
        //     $point_6_2_2['point_6_2_2'] = $p_6_2_2;
        //     $point_6_2_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_2_2);
        // }

        // foreach ($request->point_6_2_3 as $p_6_2_3) {
        //     $point_6_2_3['point_6_2_3'] = $p_6_2_3;
        //     $point_6_2_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_2_3);
        // }


        // foreach ($request->point_6_3 as $p_6_3) {
        //     $point_6_3['point_6_3'] = $p_6_3;
        //     $point_6_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_3);
        // }

        // foreach ($request->point_6_3_1 as $p_6_3_1) {
        //     $point_6_3_1['point_6_3_1'] = $p_6_3_1;
        //     $point_6_3_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_3_1);
        // }

        // foreach ($request->point_6_3_2 as $p_6_3_2) {
        //     $point_6_3_2['point_6_3_2'] = $p_6_3_2;
        //     $point_6_3_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_3_1);
        // }

        // foreach ($request->point_6_3_3 as $p_6_3_3) {
        //     $point_6_3_3['point_6_3_3'] = $p_6_3_3;
        //     $point_6_3_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_3_3);
        // }

        // foreach ($request->point_6_4 as $p_6_4) {
        //     $point_6_4['point_6_4'] = $p_6_4;
        //     $point_6_4['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_4);
        // }


        // foreach ($request->point_6_4_1 as $p_6_4_1) {
        //     $point_6_4_1['point_6_4_1'] = $p_6_4_1;
        //     $point_6_4_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_4_1);
        // }

        // foreach ($request->point_6_4_2 as $p_6_4_2) {
        //     $point_6_4_2['point_6_4_2'] = $p_6_4_2;
        //     $point_6_4_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_4_2);
        // }

        // foreach ($request->point_6_4_3 as $p_6_4_3) {
        //     $point_6_4_3['point_6_4_3'] = $p_6_4_3;
        //     $point_6_4_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_4_3);
        // }

        // foreach ($request->point_6_5 as $p_6_5) {
        //     $point_6_5['point_6_5'] = $p_6_5;
        //     $point_6_5['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_5);
        // }

        // foreach ($request->point_6_5_1 as $p_6_5_1) {
        //     $point_6_5_1['point_6_5_1'] = $p_6_5_1;
        //     $point_6_5_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_5_1);
        // }

        // foreach ($request->point_6_5_2 as $p_6_5_2) {
        //     $point_6_5_2['point_6_5_2'] = $p_6_5_2;
        //     $point_6_5_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_5_2);
        // }

        // foreach ($request->point_6_5_3 as $p_6_5_3) {
        //     $point_6_5_3['point_6_5_3'] = $p_6_5_3;
        //     $point_6_5_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_5_3);
        // }


        // foreach ($request->point_6_6 as $p_6_6) {
        //     $point_6_6['point_6_6'] = $p_6_6;
        //     $point_6_6['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_6);
        // }

        // foreach ($request->point_6_6_1 as $p_6_6_1) {
        //     $point_6_6_1['point_6_6_1'] = $p_6_6_1;
        //     $point_6_6_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_6_1);
        // }

        // foreach ($request->point_6_6_2 as $p_6_6_2) {
        //     $point_6_6_2['point_6_6_2'] = $p_6_6_2;
        //     $point_6_6_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_6_2);
        // }

        // foreach ($request->point_6_6_3 as $p_6_6_3) {
        //     $point_6_6_3['point_6_6_3'] = $p_6_6_3;
        //     $point_6_6_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_6_3);
        // }

        // foreach ($request->point_6_7 as $p_6_7) {
        //     $point_6_7['point_6_7'] = $p_6_7;
        //     $point_6_7['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_7);
        // }

        // foreach ($request->point_6_7_1 as $p_6_7_1) {
        //     $point_6_7_1['point_6_7_1'] = $p_6_7_1;
        //     $point_6_7_1['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_7_1);
        // }

        // foreach ($request->point_6_7_2 as $p_6_7_2) {
        //     $point_6_7_2['point_6_7_2'] = $p_6_7_2;
        //     $point_6_7_2['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_7_2);
        // }

        // foreach ($request->point_6_7_3 as $p_6_7_3) {
        //     $point_6_7_3['point_6_7_3'] = $p_6_7_3;
        //     $point_6_7_3['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($point_6_7_3);
        // }

        // foreach ($request->budget_sub as $b_sub) {
        //     $budget_sub['budget_sub'] = $b_sub;
        //     $budget_sub['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($budget_sub);
        // }



        // foreach ($request->amount as $amnt) {
        //     $amount['amount'] = $amnt;
        //     $amount['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($amount);
        // }


        // foreach ($request->amount as $amnt) {
        //     $amount['amount'] = $amnt;
        //     $amount['unique_form_id']   = $format;
        //     DB::table('appendix_seven_points')->insert($amount);
        // }

        // 

        // $one_row_id = $request->one_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $one_row_id; $x += 1) {
        //     $description_one = 'description_one_' . $x;
        //     $budget_one      = 'budget_one_' . $x;
        //     $projection1_one = 'projection1_one_' . $x;
        //     $projection2_one = 'projection2_one_' . $x;
        //     $one_store['description_one'] = $request->$description_one;
        //     $one_store['budget_one'] = $request->$budget_one;
        //     $one_store['projection1_one'] = $request->$projection1_one;
        //     $one_store['projection2_one'] = $request->$projection2_one;
        //     $one_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_1')->insert($one_store);
        // }

        // $four_row_id = $request->four_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $four_row_id; $x += 1) {
        //     $priority_expenditure     = 'priority_expenditure_' . $x;
        //     $corresponding_objectives = 'corresponding_objectives_' . $x;
        //     $four_store['priority_expenditure'] = $request->$priority_expenditure;
        //     $four_store['corresponding_objectives'] = $request->$corresponding_objectives;
        //     $four_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_4')->insert($four_store);
        // }

        // $seven_row_id = $request->seven_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $seven_row_id; $x += 1) {
        //     $indicative     = 'indicative_' . $x;
        //     $related_strategic_objectives     = 'related_strategic_objectives_' . $x;
        //     $unit_measurement     = 'unit_measurement_' . $x;
        //     $revised_target = 'revised_target_' . $x;
        //     $actual_achievement = 'actual_achievement_' . $x;
        //     $goals = 'goals_' . $x;
        //     $revised_goals = 'revised_goals_' . $x;
        //     $medium_term_targets = 'medium_term_targets_' . $x;
        //     $medium_term_targets1 = 'medium_term_targets1_' . $x;
        //     $medium_term_targets2 = 'medium_term_targets2_' . $x;
        //     $seven_store['indicative'] = $request->$indicative;
        //     $seven_store['related_strategic_objectives'] = $request->$related_strategic_objectives;
        //     $seven_store['unit_measurement'] = $request->$unit_measurement;
        //     $seven_store['revised_target'] = $request->$revised_target;
        //     $seven_store['actual_achievement'] = $request->$actual_achievement;
        //     $seven_store['goals'] = $request->$goals;
        //     $seven_store['revised_goals'] = $request->$revised_goals;
        //     $seven_store['medium_term_targets'] = $request->$medium_term_targets;
        //     $seven_store['medium_term_targets1'] = $request->$medium_term_targets1;
        //     $seven_store['medium_term_targets2'] = $request->$medium_term_targets2;
        //     $seven_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_7')->insert($seven_store);
        // }


        // $eight_row_id = $request->eight_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $eight_row_id; $x += 1) {
        //     $pursuit     = 'pursuit_' . $x;
        //     $results_indicative     = 'results_indicative_' . $x;
        //     $sequence_respective_strategic     = 'sequence_respective_strategic_' . $x;
        //     $measurement_unit = 'measurement_unit_' . $x;
        //     $revised_targets_eight = 'revised_targets_eight_' . $x;
        //     $actual_achievement_eight = 'actual_achievement_eight_' . $x;
        //     $goals_eight = 'goals_eight_' . $x;
        //     $revised_targets_eight_two = '	revised_targets_eight_two_' . $x;
        //     $medium_term_targets_eight = 'medium_term_targets_eight_' . $x;
        //     $medium_term_targets_eight1 = 'medium_term_targets_eight1_' . $x;
        //     $medium_term_targets_eight2 = 'medium_term_targets_eight2_' . $x;
        //     $eight_store['pursuit'] = $request->$pursuit;
        //     $eight_store['results_indicative'] = $request->$results_indicative;
        //     $eight_store['sequence_respective_strategic'] = $request->$sequence_respective_strategic;
        //     $eight_store['measurement_unit'] = $request->$measurement_unit;
        //     $eight_store['revised_targets_eight'] = $request->$revised_targets_eight;
        //     $eight_store['actual_achievement_eight'] = $request->$actual_achievement_eight;
        //     $eight_store['goals_eight'] = $request->$goals_eight;
        //     $eight_store['revised_targets_eight_two'] = $request->$revised_targets_eight_two;
        //     $eight_store['medium_term_targets_eight'] = $request->$medium_term_targets_eight;
        //     $eight_store['medium_term_targets_eight1'] = $request->$medium_term_targets_eight1;
        //     $eight_store['medium_term_targets_eight2'] = $request->$medium_term_targets_eight2;
        //     $eight_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_8')->insert($eight_store);
        // }
        // $nine_row_id = $request->nine_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $nine_row_id; $x += 1) {
        //     $operation_name     = 'operation_name_' . $x;
        //     $related_activities     = 'related_activities_' . $x;
        //     $authentic     = 'authentic_' . $x;
        //     $budget_nine = 'budget_nine_' . $x;
        //     $revised_budget_nine    = 'revised_budget_nine_' . $x;
        //     $estimate_nine = 'estimate_nine_' . $x;
        //     $estimate_nine_1 = 'estimate_nine_1_' . $x;
        //     $estimate_nine_2 = 'estimate_nine_2_' . $x;
        //     $nine_store['operation_name'] = $request->$operation_name;
        //     $nine_store['related_activities'] = $request->$related_activities;
        //     $nine_store['authentic'] = $request->$authentic;
        //     $nine_store['budget_nine'] = $request->$budget_nine;
        //     $nine_store['revised_budget_nine'] = $request->$revised_budget_nine;
        //     $nine_store['estimate_nine'] = $request->$estimate_nine;
        //     $nine_store['estimate_nine_1'] = $request->$estimate_nine_1;
        //     $nine_store['estimate_nine_2'] = $request->$estimate_nine_2;
        //     $nine_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_9')->insert($nine_store);
        // }


        // $ten_row_id = $request->ten_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $ten_row_id; $x += 1) {
        //     $activities_ten     = 'activities_ten_' . $x;
        //     $results_indicative_ten     = 'results_indicative_ten_' . $x;
        //     $respective_strategic_ten     = 'respective_strategic_ten_' . $x;
        //     $unit_measurement_ten = 'unit_measurement_ten_' . $x;
        //     $revised_targets1_ten    = 'revised_targets1_ten_' . $x;
        //     $actual_achievement_ten = 'actual_achievement_ten_' . $x;
        //     $revised_targets2_ten = 'revised_targets2_ten_' . $x;
        //     $goals_ten = 'goals_ten_' . $x;
        //     $medium_target_ten = 'medium_target_ten_' . $x;
        //     $medium_target1_ten = 'medium_target1_ten_' . $x;
        //     $medium_target2_ten = 'medium_target2_ten_' . $x;
        //     $ten_store['activities_ten'] = $request->$activities_ten;
        //     $ten_store['results_indicative_ten'] = $request->$results_indicative_ten;
        //     $ten_store['respective_strategic_ten'] = $request->$respective_strategic_ten;
        //     $ten_store['unit_measurement_ten'] = $request->$unit_measurement_ten;
        //     $ten_store['revised_targets1_ten'] = $request->$revised_targets1_ten;
        //     $ten_store['revised_targets2_ten'] = $request->$revised_targets2_ten;
        //     $ten_store['actual_achievement_ten'] = $request->$actual_achievement_ten;
        //     $ten_store['goals_ten'] = $request->$goals_ten;
        //     $ten_store['medium_target_ten'] = $request->$medium_target_ten;
        //     $ten_store['medium_target1_ten'] = $request->$medium_target1_ten;
        //     $ten_store['medium_target2_ten'] = $request->$medium_target2_ten;
        //     $ten_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_10')->insert($ten_store);
        // }

        // $twel_row_id = $request->twel_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $twel_row_id; $x += 1) {
        //     $activities_twel     = 'activities_twel_' . $x;
        //     $results_indicative_twel     = 'results_indicative_twel_' . $x;
        //     $respective_strategic_twel     = 'respective_strategic_twel_' . $x;
        //     $unit_measurement_twel = 'unit_measurement_twel_' . $x;
        //     $revised_targets1_twel    = 'revised_targets1_twel_' . $x;
        //     $actual_achievement_twel = 'actual_achievement_twel_' . $x;
        //     $revised_targets2_twel = 'revised_targets2_twel_' . $x;
        //     $goals_twel = 'goals_twel_' . $x;
        //     $medium_target_twel = 'medium_target_twel_' . $x;
        //     $medium_target1_twel = 'medium_target1_twel_' . $x;
        //     $medium_target2_twel = 'medium_target2_twel_' . $x;
        //     $twel_store['activities_twel'] = $request->$activities_twel;
        //     $twel_store['results_indicative_twel'] = $request->$results_indicative_twel;
        //     $twel_store['respective_strategic_twel'] = $request->$respective_strategic_twel;
        //     $twel_store['unit_measurement_twel'] = $request->$unit_measurement_twel;
        //     $twel_store['revised_targets1_twel'] = $request->$revised_targets1_twel;
        //     $twel_store['revised_targets2_twel'] = $request->$revised_targets2_twel;
        //     $twel_store['actual_achievement_twel'] = $request->$actual_achievement_twel;
        //     $twel_store['goals_twel'] = $request->$goals_twel;
        //     $twel_store['medium_target_twel'] = $request->$medium_target_twel;
        //     $twel_store['medium_target1_twel'] = $request->$medium_target1_twel;
        //     $twel_store['medium_target2_twel'] = $request->$medium_target2_twel;
        //     $twel_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_12')->insert($twel_store);
        // }



        // $eleven_row_id = $request->eleven_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $eleven_row_id; $x += 1) {
        //     $operation_eleven     = 'operation_eleven_' . $x;
        //     $activities_eleven     = 'activities_eleven_' . $x;
        //     $authentic_eleven = 'authentic_eleven_' . $x;
        //     $budget_eleven    = 'budget_eleven_' . $x;
        //     $revised_budget_eleven = 'revised_budget_eleven_' . $x;
        //     $estimate_eleven = 'estimate_eleven_' . $x;
        //     $estimate_eleven_1 = 'estimate_eleven_1_' . $x;
        //     $estimate_eleven_2 = 'estimate_eleven_2_' . $x;
        //     $eleven_store['operation_eleven'] = $request->$operation_eleven;
        //     $eleven_store['activities_eleven'] = $request->$activities_eleven;
        //     $eleven_store['authentic_eleven'] = $request->$authentic_eleven;
        //     $eleven_store['budget_eleven'] = $request->$budget_eleven;
        //     $eleven_store['revised_budget_eleven'] = $request->$revised_budget_eleven;
        //     $eleven_store['estimate_eleven'] = $request->$estimate_eleven;
        //     $eleven_store['estimate_eleven_1'] = $request->$estimate_eleven_1;
        //     $eleven_store['estimate_eleven_2'] = $request->$estimate_eleven_2;
        //     $eleven_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_11')->insert($eleven_store);
        // }

        // $thirteen_row_id = $request->thirteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $thirteen_row_id; $x += 1) {
        //     $operation_thirteen     = 'operation_thirteen_' . $x;
        //     $activities_thirteen     = 'activities_thirteen_' . $x;
        //     $authentic_thirteen = 'authentic_thirteen_' . $x;
        //     $budget_thirteen    = 'budget_thirteen_' . $x;
        //     $revised_budget_thirteen = 'revised_budget_thirteen_' . $x;
        //     $estimate_thirteen = 'estimate_thirteen_' . $x;
        //     $estimate_thirteen_1 = 'estimate_thirteen_1_' . $x;
        //     $estimate_thirteen_2 = 'estimate_thirteen_2_' . $x;
        //     $thirteen_store['operation_thirteen'] = $request->$operation_thirteen;
        //     $thirteen_store['activities_thirteen'] = $request->$activities_thirteen;
        //     $thirteen_store['authentic_thirteen'] = $request->$authentic_thirteen;
        //     $thirteen_store['budget_thirteen'] = $request->$budget_thirteen;
        //     $thirteen_store['revised_budget_thirteen'] = $request->$revised_budget_thirteen;
        //     $thirteen_store['estimate_thirteen'] = $request->$estimate_thirteen;
        //     $thirteen_store['estimate_thirteen_1'] = $request->$estimate_thirteen_1;
        //     $thirteen_store['estimate_thirteen_2'] = $request->$estimate_thirteen_2;
        //     $thirteen_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_13')->insert($thirteen_store);
        // }

        // $fifteen_row_id = $request->fifteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $fifteen_row_id; $x += 1) {
        //     $operation_fifteen     = 'operation_fifteen_' . $x;
        //     $activities_fifteen     = 'activities_fifteen_' . $x;
        //     $authentic_fifteen = 'authentic_fifteen_' . $x;
        //     $budget_fifteen    = 'budget_fifteen_' . $x;
        //     $revised_budget_fifteen = 'revised_budget_fifteen_' . $x;
        //     $estimate_fifteen = 'estimate_fifteen_' . $x;
        //     $estimate_fifteen_1 = 'estimate_fifteen_1_' . $x;
        //     $estimate_fifteen_2 = 'estimate_fifteen_2_' . $x;
        //     $fifteen_store['operation_fifteen'] = $request->$operation_fifteen;
        //     $fifteen_store['activities_fifteen'] = $request->$activities_fifteen;
        //     $fifteen_store['authentic_fifteen'] = $request->$authentic_fifteen;
        //     $fifteen_store['budget_fifteen'] = $request->$budget_fifteen;
        //     $fifteen_store['revised_budget_fifteen'] = $request->$revised_budget_fifteen;
        //     $fifteen_store['estimate_fifteen'] = $request->$estimate_fifteen;
        //     $fifteen_store['estimate_fifteen_1'] = $request->$estimate_fifteen_1;
        //     $fifteen_store['estimate_fifteen_2'] = $request->$estimate_fifteen_2;
        //     $fifteen_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_15')->insert($fifteen_store);
        // }

        // $seventeen_row_id = $request->seventeen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $seventeen_row_id; $x += 1) {
        //     $operation_seventeen     = 'operation_seventeen_' . $x;
        //     $activities_seventeen     = 'activities_seventeen_' . $x;
        //     $authentic_seventeen = 'authentic_seventeen_' . $x;
        //     $budget_seventeen    = 'budget_seventeen_' . $x;
        //     $revised_budget_seventeen = 'revised_budget_seventeen_' . $x;
        //     $estimate_seventeen = 'estimate_seventeen_' . $x;
        //     $estimate_seventeen_1 = 'estimate_seventeen_1_' . $x;
        //     $estimate_seventeen_2 = 'estimate_seventeen_2_' . $x;
        //     $seventeen_store['operation_seventeen'] = $request->$operation_seventeen;
        //     $seventeen_store['activities_seventeen'] = $request->$activities_seventeen;
        //     $seventeen_store['authentic_seventeen'] = $request->$authentic_seventeen;
        //     $seventeen_store['budget_seventeen'] = $request->$budget_seventeen;
        //     $seventeen_store['revised_budget_seventeen'] = $request->$revised_budget_seventeen;
        //     $seventeen_store['estimate_seventeen'] = $request->$estimate_seventeen;
        //     $seventeen_store['estimate_seventeen_1'] = $request->$estimate_seventeen_1;
        //     $seventeen_store['estimate_seventeen_2'] = $request->$estimate_seventeen_2;
        //     $seventeen_store['unique_form_id'] =  $format;
        //     DB::table('appendix_seven_table_17')->insert($seventeen_store);
        // }

        // $nineteen_row_id = $request->nineteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $nineteen_row_id; $x += 1) {
        //     $operation_nineteen = 'operation_nineteen_' . $x;
        //     $activities_nineteen = 'activities_nineteen_' . $x;
        //     $authentic_nineteen = 'authentic_nineteen_' . $x;
        //     $budget_nineteen = 'budget_nineteen_' . $x;
        //     $revised_budget_nineteen = 'revised_budget_nineteen_' . $x;
        //     $estimate_nineteen = 'estimate_nineteen_' . $x;
        //     $estimate_nineteen_1 = 'estimate_nineteen_1_' . $x;
        //     $estimate_nineteen_2 = 'estimate_nineteen_2_' . $x;
        //     $nineteen_store['operation_nineteen'] = $request->$operation_nineteen;
        //     $nineteen_store['activities_nineteen'] = $request->$activities_nineteen;
        //     $nineteen_store['authentic_nineteen'] = $request->$authentic_nineteen;
        //     $nineteen_store['budget_nineteen'] = $request->$budget_nineteen;
        //     $nineteen_store['revised_budget_nineteen'] = $request->$revised_budget_nineteen;
        //     $nineteen_store['estimate_nineteen'] = $request->$estimate_nineteen;
        //     $nineteen_store['estimate_nineteen_1'] = $request->$estimate_nineteen_1;
        //     $nineteen_store['estimate_nineteen_2'] = $request->$estimate_nineteen_2;
        //     $nineteen_store['unique_form_id'] = $format;
        //     DB::table('appendix_seven_table_19')->insert($nineteen_store);
        // }

        // $twentyone_row_id = $request->twentyone_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $twentyone_row_id; $x += 1) {
        //     $operation_twentyone = 'operation_twentyone_' . $x;
        //     $activities_twentyone = 'activities_twentyone_' . $x;
        //     $authentic_twentyone = 'authentic_twentyone_' . $x;
        //     $budget_twentyone = 'budget_twentyone_' . $x;
        //     $revised_budget_twentyone = 'revised_budget_twentyone_' . $x;
        //     $estimate_twentyone = 'estimate_twentyone_' . $x;
        //     $estimate_twentyone_1 = 'estimate_twentyone_1_' . $x;
        //     $estimate_twentyone_2 = 'estimate_twentyone_2_' . $x;
        //     $twentyone_store['operation_twentyone'] = $request->$operation_twentyone;
        //     $twentyone_store['activities_twentyone'] = $request->$activities_twentyone;
        //     $twentyone_store['authentic_twentyone'] = $request->$authentic_twentyone;
        //     $twentyone_store['budget_twentyone'] = $request->$budget_twentyone;
        //     $twentyone_store['revised_budget_twentyone'] = $request->$revised_budget_twentyone;
        //     $twentyone_store['estimate_twentyone'] = $request->$estimate_twentyone;
        //     $twentyone_store['estimate_twentyone_1'] = $request->$estimate_twentyone_1;
        //     $twentyone_store['estimate_twentyone_2'] = $request->$estimate_twentyone_2;
        //     $twentyone_store['unique_form_id'] = $format;
        //     DB::table('appendix_seven_table_21')->insert($twentyone_store);
        // }

        // $three_row_id = $request->three_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $three_row_id; $x += 1) {
        //     $description_three     = 'description_three_' . $x;
        //     $budget_three = 'budget_three_' . $x;
        //     $projection1_three     = 'projection1_three_' . $x;
        //     $projection2_three     = 'projection2_three_' . $x;
        //     $three_store['description_three'] = $request->$description_three;
        //     $three_store['budget_three'] = $request->$budget_three;
        //     $three_store['projection1_three'] = $request->$projection1_three;
        //     $three_store['projection2_three'] = $request->$projection2_three;
        //     $three_store['unique_form_id'] = $format;
        //     DB::table('appendix_seven_table_3')->insert($three_store);
        // }


        // $five_row_id = $request->five_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $five_row_id; $x += 1) {
        //     $description_five     = 'description_five_' . $x;
        //     $budget_five = 'budget_five_' . $x;
        //     $revised_budget_five     = 'revised_budget_five_' . $x;
        //     $budget2_five     = 'budget2_five_' . $x;
        //     $projection1_five     = 'projection1_five_' . $x;
        //     $projection2_five     = 'projection2_five_' . $x;
        //     $five_store['description_five'] = $request->$description_five;
        //     $five_store['budget_five'] = $request->$budget_five;
        //     $five_store['revised_budget_five'] = $request->$revised_budget_five;
        //     $five_store['budget2_five'] = $request->$budget2_five;
        //     $five_store['projection1_five'] = $request->$projection1_five;
        //     $five_store['projection2_five'] = $request->$projection2_five;
        //     $five_store['unique_form_id'] = $format;
        //     DB::table('appendix_seven_table_5')->insert($five_store);
        // }


        // $six_row_id = $request->six_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($x = 1; $x <= $six_row_id; $x += 1) {
        //     $ecconomic_group_code     = 'ecconomic_group_code_' . $x;
        //     $description_six = 'description_six_' . $x;
        //     $budget_six     = 'budget_six_' . $x;
        //     $revised_budget_six     = 'revised_budget_six_' . $x;
        //     $budget2_six     = 'budget2_six_' . $x;
        //     $projection1_six     = 'projection1_six_' . $x;
        //     $projection2_six     = 'projection2_six_' . $x;
        //     $six_store['ecconomic_group_code'] = $request->$ecconomic_group_code;
        //     $six_store['description_six'] = $request->$description_six;
        //     $six_store['budget_six'] = $request->$budget_six;
        //     $six_store['revised_budget_six'] = $request->$revised_budget_six;
        //     $six_store['budget2_six'] = $request->$budget2_six;
        //     $six_store['projection1_six'] = $request->$projection1_six;
        //     $six_store['projection2_six'] = $request->$projection2_six;
        //     $six_store['unique_form_id'] = $format;
        //     DB::table('appendix_seven_table_6')->insert($six_store);
        // }

        // $sixteen_row_id = $request->sixteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($i = 1; $i <= $sixteen_row_id; $i++) {
        //     $activities_sixteen = 'activities_sixteen_' . $i;
        //     $results_indicative_sixteen = 'results_indicative_sixteen_' . $i;
        //     $respective_strategic_sixteen = 'respective_strategic_sixteen_' . $i;
        //     $unit_measurement_sixteen = 'unit_measurement_sixteen_' . $i;
        //     $revised_targets1_sixteen = 'revised_targets1_sixteen_' . $i;
        //     $revised_targets2_sixteen = 'revised_targets2_sixteen_' . $i;
        //     $actual_achievement_sixteen = 'actual_achievement_sixteen_' . $i;
        //     $goals_sixteen = 'goals_sixteen_' . $i;
        //     $medium_target_sixteen = 'medium_target_sixteen_' . $i;
        //     $medium_target1_sixteen = 'medium_target1_sixteen_' . $i;
        //     $medium_target2_sixteen = 'medium_target2_sixteen_' . $i;
        //     $table_sixteen['activities_sixteen']   = $request->$activities_sixteen;
        //     $table_sixteen['results_indicative_sixteen']   = $request->$results_indicative_sixteen;
        //     $table_sixteen['unit_measurement_sixteen']   = $request->$unit_measurement_sixteen;
        //     $table_sixteen['respective_strategic_sixteen']   = $request->$respective_strategic_sixteen;
        //     $table_sixteen['revised_targets1_sixteen']   = $request->$revised_targets1_sixteen;
        //     $table_sixteen['revised_targets2_sixteen']   = $request->$revised_targets2_sixteen;
        //     $table_sixteen['actual_achievement_sixteen']   = $request->$actual_achievement_sixteen;
        //     $table_sixteen['goals_sixteen']   = $request->$goals_sixteen;
        //     $table_sixteen['medium_target_sixteen']   = $request->$medium_target_sixteen;
        //     $table_sixteen['medium_target1_sixteen']   = $request->$medium_target1_sixteen;
        //     $table_sixteen['medium_target2_sixteen']   = $request->$medium_target2_sixteen;
        //     $table_sixteen['unique_form_id']   = $format;
        //     DB::table('appendix_seven_table_16')->insert($table_sixteen);
        // }


        // $eighteen_row_id = $request->eighteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($i = 1; $i <= $eighteen_row_id; $i++) {
        //     $activities_eighteen = 'activities_eighteen_' . $i;
        //     $results_indicative_eighteen = 'results_indicative_eighteen_' . $i;
        //     $respective_strategic_eighteen = 'respective_strategic_eighteen_' . $i;
        //     $unit_measurement_eighteen = 'unit_measurement_eighteen_' . $i;
        //     $revised_targets1_eighteen = 'revised_targets1_eighteen_' . $i;
        //     $revised_targets2_eighteen = 'revised_targets2_eighteen_' . $i;
        //     $actual_achievement_eighteen = 'actual_achievement_eighteen_' . $i;
        //     $goals_eighteen = 'goals_eighteen_' . $i;
        //     $medium_target_eighteen = 'medium_target_eighteen_' . $i;
        //     $medium_target1_eighteen = 'medium_target1_eighteen_' . $i;
        //     $medium_target2_eighteen = 'medium_target2_eighteen_' . $i;
        //     $table_eighteen['activities_eighteen']   = $request->$activities_eighteen;
        //     $table_eighteen['results_indicative_eighteen']   = $request->$results_indicative_eighteen;
        //     $table_eighteen['unit_measurement_eighteen']   = $request->$unit_measurement_eighteen;
        //     $table_eighteen['respective_strategic_eighteen']   = $request->$respective_strategic_eighteen;
        //     $table_eighteen['revised_targets1_eighteen']   = $request->$revised_targets1_eighteen;
        //     $table_eighteen['revised_targets2_eighteen']   = $request->$revised_targets2_eighteen;
        //     $table_eighteen['actual_achievement_eighteen']   = $request->$actual_achievement_eighteen;
        //     $table_eighteen['goals_eighteen']   = $request->$goals_eighteen;
        //     $table_eighteen['medium_target_eighteen']   = $request->$medium_target_eighteen;
        //     $table_eighteen['medium_target1_eighteen']   = $request->$medium_target1_eighteen;
        //     $table_eighteen['medium_target2_eighteen']   = $request->$medium_target2_eighteen;
        //     $table_eighteen['unique_form_id']   = $format;
        //     DB::table('appendix_seven_table_18')->insert($table_eighteen);
        // }



        // $two_row_id = $request->two_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($i = 1; $i <= $two_row_id; $i++) {
        //     $store_two = new TableTwo();
        //     $purpose_two = 'purpose_two_' . $i;
        //     $activities_two = 'activities_two_' . $i;
        //     $agency_two = 'agency_two_' . $i;
        //     $store_two['purpose_two']   = $request->$purpose_two;
        //     $store_two['activities_two']   = $request->$activities_two;
        //     $store_two['agency_two']   = $request->$agency_two;
        //     $store_two['unique_form_id']   = $format;
        //     $store_two->save();
        //     for ($k = 1; $k <= 2; $k++) {
        //         $sub_row = 'two_row_id_' . $i . '_' . $k;
        //         $subRows = $request->$sub_row;
        //         if ($subRows) {
        //             $sub_purpose_two = 'purpose_two_' . $i . '_' . $k;
        //             $sub_activities_two = 'activities_two_' . $i . '_' . $k;
        //             $sub_agency_two = 'agency_two_' . $i . '._' . $k;
        //             $sub_data_two['two_row_id']   = $request->two_row_id;
        //             $sub_data_two['purpose_two']   = $request->$sub_purpose_two;
        //             $sub_data_two['activities_two']   = $request->$sub_activities_two;
        //             $sub_data_two['agency_two']   = $request->$sub_agency_two;
        //             $sub_data_two['unique_form_id']   = $format;
        //             DB::table('appendix_seven_table_2_sub')->insert($sub_data_two);
        //         }
        //     }
        // }



        // $twenty_one_row_id = $request->twenty_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($i = 1; $i <= $twenty_one_row_id; $i++) {
        //     $table_twenty_one = new TableTwenty();
        //     $activities_twenty = 'activities_twenty_' . $i;
        //     $results_indicative_twenty = 'results_indicative_twenty_' . $i;
        //     $respective_strategic_twenty = 'respective_strategic_twenty_' . $i;
        //     $unit_measurement_twenty = 'unit_measurement_twenty_' . $i;
        //     $revised_targets1_twenty = 'revised_targets1_twenty_' . $i;
        //     $revised_targets2_twenty = 'revised_targets2_twenty_' . $i;
        //     $actual_achievement_twenty = 'actual_achievement_twenty_' . $i;
        //     $goals_twenty = 'goals_twenty_' . $i;
        //     $medium_target_twenty = 'medium_target_twenty_' . $i;
        //     $medium_target1_twenty = 'medium_target1_twenty_' . $i;
        //     $medium_target2_twenty = 'medium_target2_twenty_' . $i;
        //     $table_twenty_one['activities_twenty']   = $request->$activities_twenty;
        //     $table_twenty_one['results_indicative_twenty']   = $request->$results_indicative_twenty;
        //     $table_twenty_one['unit_measurement_twenty']   = $request->$unit_measurement_twenty;
        //     $table_twenty_one['respective_strategic_twenty']   = $request->$respective_strategic_twenty;
        //     $table_twenty_one['revised_targets1_twenty']   = $request->$revised_targets1_twenty;
        //     $table_twenty_one['revised_targets2_twenty']   = $request->$revised_targets2_twenty;
        //     $table_twenty_one['actual_achievement_twenty']   = $request->$actual_achievement_twenty;
        //     $table_twenty_one['goals_twenty']   = $request->$goals_twenty;
        //     $table_twenty_one['medium_target_twenty']   = $request->$medium_target_twenty;
        //     $table_twenty_one['medium_target1_twenty']   = $request->$medium_target1_twenty;
        //     $table_twenty_one['medium_target2_twenty']   = $request->$medium_target2_twenty;
        //     $table_twenty_one['unique_form_id']   = $format;
        //     $table_twenty_one->save();
        //     for ($k = 1; $k <= 2; $k++) {
        //         $sub_row = 'twenty_one_row_id_' . $i . '_' . $k;
        //         $subRows = $request->$sub_row;
        //         if ($subRows) {
        //             $sub_activities_twenty = 'activities_twenty_' . $i . '_' . $k;
        //             $sub_results_indicative_twenty = 'results_indicative_twenty_' . $i . '_' . $k;
        //             $sub_respective_strategic_twenty = 'respective_strategic_twenty_' . $i . '._' . $k;
        //             $sub_unit_measurement_twenty = 'unit_measurement_twenty_' . $i . '_' . $k;
        //             $sub_revised_targets1_twenty = 'revised_targets1_twenty_' . $i . '_' . $k;
        //             $sub_revised_targets2_twenty = 'revised_targets2_twenty_' . $i . '_' . $k;
        //             $sub_actual_achievement_twenty = 'actual_achievement_twenty_' . $i . '_' . $k;
        //             $sub_goals_twenty = 'goals_twenty_' . $i . '_' . $k;
        //             $sub_medium_target_twenty = 'medium_target_twenty_' . $i . '_' . $k;
        //             $sub_medium_target1_twenty = 'medium_target1_twenty_' . $i . '_' . $k;
        //             $sub_medium_target2_twenty = 'medium_target2_twenty_' . $i . '_' . $k;
        //             $sub_data_one['twenty_row_id']   = $table_twenty->id;
        //             $sub_data_one['activities_twenty']   = $request->$sub_activities_twenty;
        //             $sub_data_one['results_indicative_twenty']   = $request->$sub_results_indicative_twenty;
        //             $sub_data_one['respective_strategic_twenty']   = $request->$sub_respective_strategic_twenty;
        //             $sub_data_one['unit_measurement_twenty']   = $request->$sub_unit_measurement_twenty;
        //             $sub_data_one['actual_achievement_twenty']   = $request->$sub_actual_achievement_twenty;
        //             $sub_data_one['revised_targets1_twenty']   = $request->$sub_revised_targets1_twenty;
        //             $sub_data_one['revised_targets2_twenty']   = $request->$sub_revised_targets2_twenty;
        //             $sub_data_one['goals_twenty']              = $request->$sub_goals_twenty;
        //             $sub_data_one['medium_target_twenty']      = $request->$sub_medium_target_twenty;
        //             $sub_data_one['medium_target1_twenty']     = $request->$sub_medium_target1_twenty;
        //             $sub_data_one['medium_target2_twenty']     = $request->$sub_medium_target2_twenty;;
        //             $sub_data_one['unique_form_id']   = $format;
        //             DB::table('appendix_seven_table_21_sub')->insert($sub_data_one);
        //         }
        //     }
        // }


        /* table 14 */
        // $fourteen_row_id = $request->fourteen_row_id;
        // $format = 'form' . date("is") . mt_rand(1000, 99999);
        // for ($i = 1; $i <= $fourteen_row_id; $i++) {
        //     $store_fourteen = new FourteenTable();
        //     $activities_fourteen = 'activities_fourteen_' . $i;
        //     $results_indicative_fourteen = 'results_indicative_fourteen_' . $i;
        //     $respective_strategic_fourteen = 'respective_strategic_fourteen_' . $i;
        //     $unit_measurement_fourteen = 'unit_measurement_fourteen_' . $i;
        //     $revised_targets1_fourteen = 'revised_targets1_fourteen_' . $i;
        //     $revised_targets2_fourteen = 'revised_targets2_fourteen_' . $i;
        //     $actual_achievement_fourteen = 'actual_achievement_fourteen_' . $i;
        //     $goals_fourteen = 'goals_fourteen_' . $i;
        //     $medium_target_fourteen = 'medium_target_fourteen_' . $i;
        //     $medium_target1_fourteen = 'medium_target1_fourteen_' . $i;
        //     $medium_target2_fourteen = 'medium_target2_fourteen_' . $i;
        //     $store_fourteen['activities_fourteen']   = $request->$activities_fourteen;
        //     $store_fourteen['results_indicative_fourteen']   = $request->$results_indicative_fourteen;
        //     $store_fourteen['respective_strategic_fourteen']   = $request->$respective_strategic_fourteen;
        //     $store_fourteen['respective_strategic_fourteen']   = $request->$respective_strategic_fourteen;
        //     $store_fourteen['unit_measurement_fourteen']   = $request->$unit_measurement_fourteen;
        //     $store_fourteen['revised_targets1_fourteen']   = $request->$revised_targets1_fourteen;
        //     $store_fourteen['revised_targets2_fourteen']   = $request->$revised_targets2_fourteen;
        //     $store_fourteen['actual_achievement_fourteen']   = $request->$actual_achievement_fourteen;
        //     $store_fourteen['goals_fourteen']   = $request->$goals_fourteen;
        //     $store_fourteen['medium_target_fourteen']   = $request->$medium_target_fourteen;
        //     $store_fourteen['medium_target1_fourteen']   = $request->$medium_target1_fourteen;
        //     $store_fourteen['medium_target2_fourteen']   = $request->$medium_target2_fourteen;
        //     $store_fourteen['unique_form_id']   = $format;
        //     $store_fourteen->save();
        //     for ($k = 1; $k <= 2; $k++) {
        //         $sub_row_fourteen = 'fourteen_row_id_' . $i . '_' . $k;
        //         $subRows = $request->$sub_row_fourteen;
        //         if ($subRows) {
        //             $sub_activities_fourteen = 'activities_fourteen_' . $i . '_' . $k;
        //             $sub_results_indicative_fourteen = 'results_indicative_fourteen_' . $i . '_' . $k;
        //             $sub_respective_strategic_fourteen = 'respective_strategic_fourteen_' . $i . '._' . $k;
        //             $sub_unit_measurement_fourteen = 'unit_measurement_fourteen_' . $i . '_' . $k;
        //             $sub_revised_targets1_fourteen = 'revised_targets1_fourteen_' . $i . '_' . $k;
        //             $sub_revised_targets2_fourteen = 'revised_targets2_fourteen_' . $i . '_' . $k;
        //             $sub_actual_achievement_fourteen = 'actual_achievement_fourteen_' . $i . '_' . $k;
        //             $sub_goals_fourteen = 'goals_fourteen_' . $i . '_' . $k;
        //             $sub_medium_target_fourteen = 'medium_target_fourteen_' . $i . '_' . $k;
        //             $sub_medium_target1_fourteen = 'medium_target1_fourteen_' . $i . '_' . $k;
        //             $sub_medium_target2_fourteen = 'medium_target2_fourteen_' . $i . '_' . $k;
        //             $sub_data_one['fourteen_row_id']   = $store_fourteen->id;
        //             $sub_data_one['activities_fourteen']   = $request->$sub_activities_fourteen;
        //             $sub_data_one['results_indicative_fourteen']   = $request->$sub_results_indicative_fourteen;
        //             $sub_data_one['respective_strategic_fourteen']   = $request->$sub_respective_strategic_fourteen;
        //             $sub_data_one['unit_measurement_fourteen']   = $request->$sub_unit_measurement_fourteen;
        //             $sub_data_one['actual_achievement_fourteen']   = $request->$sub_actual_achievement_fourteen;
        //             $sub_data_one['revised_targets1_fourteen']   = $request->$sub_revised_targets1_fourteen;
        //             $sub_data_one['revised_targets2_fourteen']   = $request->$sub_revised_targets2_fourteen;
        //             $sub_data_one['goals_fourteen']              = $request->$sub_goals_fourteen;
        //             $sub_data_one['medium_target_fourteen']      = $request->$sub_medium_target_fourteen;
        //             $sub_data_one['medium_target1_fourteen']     = $request->$sub_medium_target1_fourteen;
        //             $sub_data_one['medium_target2_fourteen']     = $request->$sub_medium_target2_fourteen;;
        //             $sub_data_one['unique_form_id']   = $format;
        //             DB::table('appendix_seven_table_14_sub')->insert($sub_data_one);
        //         }
        //     }
        // } 
    }
    /* end unique store */
    /* appendix end */

    /* appendix 8 */
    public function form_appendix_eight()
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_appendix_eight');
    }

    public function form_appendix_eight_store(Request $request)
    {

        $format = 'form_' . date("is") . mt_rand(1000, 99999);

        foreach ($request->budget_sub as $budget_sub) {
            $budget['budget_sub'] = $budget_sub;
            $budget['unique_form_id']   = $format;
            DB::table('appendix_eight_mis')->insert($budget);
        }


        for ($i = 1; $i <= 1; $i++) {
            $purpose = 'purpose_' . $i;
            $purpose_value = 'purpose_value_' . $i;
            $activity = 'activity_' . $i;
            $indicator = 'indicator_' . $i;
            $unit = 'unit_' . $i;
            $indicator_value = 'indicator_value_' . $i;
            $achivement = 'achivement_' . $i;
            $achivement_star = 'achivement_star_' . $i;
            $target_extraordinary     = 'target_extraordinary_' . $i;
            $target_excellent     = 'target_excellent_' . $i;
            $target_fine      = 'target_fine_' . $i;
            $target_value     = 'target_value_' . $i;
            $target_below     = 'target_below_' . $i;
            $projection_first           = 'projection_first_' . $i;
            $projection_second         = 'projection_second_' . $i;
            $section_three_eight['purpose']   = $request->$purpose;
            $section_three_eight['purpose_value']   = $request->$purpose_value;
            $section_three_eight['activity']   = $request->$activity;
            $section_three_eight['indicator']   = $request->$indicator;
            $section_three_eight['unit']   = $request->$unit;
            $section_three_eight['indicator_value']   = $request->$indicator_value;
            $section_three_eight['achivement']   = $request->$achivement;
            $section_three_eight['achivement_star']   = $request->$achivement_star;
            $section_three_eight['target_extraordinary']   = $request->$target_extraordinary;
            $section_three_eight['target_excellent']   = $request->$target_excellent;
            $section_three_eight['target_fine']   = $request->$target_fine;
            $section_three_eight['target_value']   = $request->$target_value;
            $section_three_eight['target_below']   = $request->$target_below;
            $section_three_eight['projection_first']   = $request->$projection_first;
            $section_three_eight['projection_second']   = $request->$projection_second;
            $section_three_eight['unique_form_id'] = $format;
            DB::table('section_three_first_part_appeight')->insert($section_three_eight);
        }


        for ($i = 2; $i <= 2; $i++) {
            $strategic_purpose = 'strategic_purpose_' . $i;
            $strategic_purpose_value = 'strategic_purpose_value_' . $i;
            $strategic_activity = 'strategic_activity_' . $i;
            $strategic_indicator = 'strategic_indicator_' . $i;
            $strategic_unit = 'strategic_unit_' . $i;
            $strategic_indicator_value = 'strategic_indicator_value_' . $i;
            $strategic_target_extraordinary     = 'strategic_target_extraordinary_' . $i;
            $strategic_target_excellent    = 'strategic_target_excellent_' . $i;
            $strategic_target_fine         = 'strategic_target_fine_' . $i;
            $strategic_target_value        = 'strategic_target_value_' . $i;
            $strategic_target_below        = 'strategic_target_below_' . $i;
            $strategic_projection_first              = 'strategic_projection_first_' . $i;
            $strategic_projection_second         = 'strategic_projection_second_' . $i;
            $section_three_eight_second['strategic_purpose']   = $request->$strategic_purpose;
            $section_three_eight_second['strategic_purpose_value']   = $request->$strategic_purpose_value;
            $section_three_eight_second['strategic_activity']   = $request->$strategic_activity;
            $section_three_eight_second['strategic_indicator']   = $request->$strategic_indicator;
            $section_three_eight_second['strategic_unit']   = $request->$strategic_unit;
            $section_three_eight_second['strategic_indicator_value']   = $request->$strategic_indicator_value;
            $section_three_eight_second['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
            $section_three_eight_second['strategic_target_excellent']   = $request->$strategic_target_excellent;
            $section_three_eight_second['strategic_target_fine']   = $request->$strategic_target_fine;
            $section_three_eight_second['strategic_target_value']   = $request->$strategic_target_value;
            $section_three_eight_second['strategic_target_below']   = $request->$strategic_target_below;
            $section_three_eight_second['strategic_projection_first']   = $request->$strategic_projection_first;
            $section_three_eight_second['strategic_projection_second']   = $request->$strategic_projection_second;
            $section_three_eight_second['unique_form_id'] = $format;
            DB::table('section_three_second_part_appeight')->insert($section_three_eight_second);
        }


        for ($i = 3; $i <= 3; $i++) {
            $out_effect = 'out_effect_' . $i;
            $out_indicator = 'out_indicator_' . $i;
            $out_unit = 'out_unit_' . $i;
            $out_achivement = 'out_achivement_' . $i;
            $out_achivement_star     = 'out_achivement_star	_' . $i;
            $out_target = 'out_target_' . $i;
            $out_projection_one = 'out_projection_one_' . $i;
            $out_projection_two = 'out_projection_two_' . $i;
            $out_names = 'out_names_' . $i;
            $data['out_effect'] = $request->$out_effect;
            $data['out_indicator']   = $request->$out_indicator;
            $data['out_unit']   = $request->$out_unit;
            $data['out_achivement']   = $request->$out_achivement;
            $data['out_achivement_star']   = $request->$out_achivement_star;
            $data['out_target']   = $request->$out_target;
            $data['out_projection_one']   = $request->$out_projection_one;
            $data['out_projection_two']   = $request->$out_projection_two;
            $data['out_names']   = $request->$out_names;
            $data['unique_form_id']   = $format;
            DB::table('section_two_outcome_eight')->insert($data);
        }
    }

    public function form_appendix_eight_update(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);


        foreach ($request->first_part_id as $first_row) {
            $unique_form_id = $first_row->unique_form_id;
            $purpose = 'purpose_' . $first_row;
            $purpose_value = 'purpose_value_' . $first_row;
            $activity = 'activity_' . $first_row;
            $indicator = 'indicator_' . $first_row;
            $unit = 'unit_' . $first_row;
            $indicator_value = 'indicator_value_' . $first_row;
            $achivement = 'achivement_' . $first_row;
            $achivement_star = 'achivement_star_' . $first_row;
            $target_extraordinary     = 'target_extraordinary_' . $first_row;
            $target_excellent     = 'target_excellent_' . $first_row;
            $target_fine      = 'target_fine_' . $first_row;
            $target_value     = 'target_value_' . $first_row;
            $target_below     = 'target_below_' . $first_row;
            $projection_first           = 'projection_first_' . $first_row;
            $projection_second         = 'projection_second_' . $first_row;
            $section_three_eight['purpose']   = $request->$purpose;
            $section_three_eight['purpose_value']   = $request->$purpose_value;
            $section_three_eight['activity']   = $request->$activity;
            $section_three_eight['indicator']   = $request->$indicator;
            $section_three_eight['unit']   = $request->$unit;
            $section_three_eight['indicator_value']   = $request->$indicator_value;
            $section_three_eight['achivement']   = $request->$achivement;
            $section_three_eight['achivement_star']   = $request->$achivement_star;
            $section_three_eight['target_extraordinary']   = $request->$target_extraordinary;
            $section_three_eight['target_excellent']   = $request->$target_excellent;
            $section_three_eight['target_fine']   = $request->$target_fine;
            $section_three_eight['target_value']   = $request->$target_value;
            $section_three_eight['target_below']   = $request->$target_below;
            $section_three_eight['projection_first']   = $request->$projection_first;
            $section_three_eight['projection_second']   = $request->$projection_second;
            DB::table('section_three_first_part_appeight')->where('id', '=', $first_row)->where('unique_form_id', '=', $unique_form_id)->update($section_three_eight);
        }
        foreach ($request->second_part_id as $second_row) {
            $unique_form_id = $second_row->unique_form_id;
            $strategic_purpose = 'strategic_purpose_' . $second_row;
            $strategic_purpose_value = 'strategic_purpose_value_' . $second_row;
            $strategic_activity = 'strategic_activity_' . $second_row;
            $strategic_indicator = 'strategic_indicator_' . $second_row;
            $strategic_unit = 'strategic_unit_' . $second_row;
            $strategic_indicator_value = 'strategic_indicator_value_' . $second_row;
            $strategic_target_extraordinary     = 'strategic_target_extraordinary_' . $second_row;
            $strategic_target_excellent    = 'strategic_target_excellent_' . $second_row;
            $strategic_target_fine         = 'strategic_target_fine_' . $second_row;
            $strategic_target_value        = 'strategic_target_value_' . $second_row;
            $strategic_target_below        = 'strategic_target_below_' . $second_row;
            $strategic_projection_first              = 'strategic_projection_first_' . $second_row;
            $strategic_projection_second         = 'strategic_projection_second_' . $second_row;
            $section_three_eight_second['strategic_purpose']   = $request->$strategic_purpose;
            $section_three_eight_second['strategic_purpose_value']   = $request->$strategic_purpose_value;
            $section_three_eight_second['strategic_activity']   = $request->$strategic_activity;
            $section_three_eight_second['strategic_indicator']   = $request->$strategic_indicator;
            $section_three_eight_second['strategic_unit']   = $request->$strategic_unit;
            $section_three_eight_second['strategic_indicator_value']   = $request->$strategic_indicator_value;
            $section_three_eight_second['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
            $section_three_eight_second['strategic_target_excellent']   = $request->$strategic_target_excellent;
            $section_three_eight_second['strategic_target_fine']   = $request->$strategic_target_fine;
            $section_three_eight_second['strategic_target_value']   = $request->$strategic_target_value;
            $section_three_eight_second['strategic_target_below']   = $request->$strategic_target_below;
            $section_three_eight_second['strategic_projection_first']   = $request->$strategic_projection_first;
            $section_three_eight_second['strategic_projection_second']   = $request->$strategic_projection_second;
            DB::table('section_three_second_part_appeight')->where('id', '=', $second_row)->where('unique_form_id', '=', $unique_form_id)->update($section_three_eight_second);
        }

        foreach ($request->out_eight_id as $out_row) {
            $unique_form_id = $out_row->unique_form_id;
            $out_effect = 'out_effect_' . $out_row;
            $out_indicator = 'out_indicator_' . $out_row;
            $out_unit = 'out_unit_' . $out_row;
            $out_achivement = 'out_achivement_' . $out_row;
            $out_achivement_star     = 'out_achivement_star	_' . $out_row;
            $out_target = 'out_target_' . $out_row;
            $out_projection_one = 'out_projection_one_' . $out_row;
            $out_projection_two = 'out_projection_two_' . $out_row;
            $out_names = 'out_names_' . $out_row;
            $data['out_effect'] = $request->$out_effect;
            $data['out_indicator']   = $request->$out_indicator;
            $data['out_unit']   = $request->$out_unit;
            $data['out_achivement']   = $request->$out_achivement;
            $data['out_achivement_star']   = $request->$out_achivement_star;
            $data['out_target']   = $request->$out_target;
            $data['out_projection_one']   = $request->$out_projection_one;
            $data['out_projection_two']   = $request->$out_projection_two;
            $data['out_names']   = $request->$out_names;
            DB::table('section_two_outcome_eight')->where('id', '=', $out_row)->where('unique_form_id', '=', $unique_form_id)->update($data);
        }

        $bud = $request->budget_sub_id;

        for ($x = 1; $x <= $bud; $x += 1) {
            $a = 'budget_sub_' . $x;
            $budget_sub['budget_sub'] = $request->$a;
            $budget_sub['unique_form_id'] = $request->unique_form_id;

            DB::table('appendix_eight_mis')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($budget_sub);
        }
    }

    /* appendix eight store unique */
    public function form_store_appendix_eight_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $rows = $request->row_id;

        foreach ($request->budget_sub as $budget_sub) {
            $budget['budget_sub'] = $budget_sub;
            $budget['unique_form_id']   = $format;
            DB::table('appendix_eight_mis')->insert($budget);
        }


        for ($i = 1; $i <= 1; $i++) {
            $purpose = 'purpose_' . $i;
            $purpose_value = 'purpose_value_' . $i;
            $activity = 'activity_' . $i;
            $indicator = 'indicator_' . $i;
            $unit = 'unit_' . $i;
            $indicator_value = 'indicator_value_' . $i;
            $achivement = 'achivement_' . $i;
            $achivement_star = 'achivement_star_' . $i;
            $target_extraordinary     = 'target_extraordinary_' . $i;
            $target_excellent     = 'target_excellent_' . $i;
            $target_fine      = 'target_fine_' . $i;
            $target_value     = 'target_value_' . $i;
            $target_below     = 'target_below_' . $i;
            $projection_first           = 'projection_first_' . $i;
            $projection_second         = 'projection_second_' . $i;
            $section_three_eight['purpose']   = $request->$purpose;
            $section_three_eight['purpose_value']   = $request->$purpose_value;
            $section_three_eight['activity']   = $request->$activity;
            $section_three_eight['indicator']   = $request->$indicator;
            $section_three_eight['unit']   = $request->$unit;
            $section_three_eight['indicator_value']   = $request->$indicator_value;
            $section_three_eight['achivement']   = $request->$achivement;
            $section_three_eight['achivement_star']   = $request->$achivement_star;
            $section_three_eight['target_extraordinary']   = $request->$target_extraordinary;
            $section_three_eight['target_excellent']   = $request->$target_excellent;
            $section_three_eight['target_fine']   = $request->$target_fine;
            $section_three_eight['target_value']   = $request->$target_value;
            $section_three_eight['target_below']   = $request->$target_below;
            $section_three_eight['projection_first']   = $request->$projection_first;
            $section_three_eight['projection_second']   = $request->$projection_second;
            $section_three_eight['unique_form_id'] = $format;
            DB::table('section_three_first_part_appeight')->insert($section_three_eight);
        }


        for ($i = 2; $i <= 2; $i++) {
            $strategic_purpose = 'strategic_purpose_' . $i;
            $strategic_purpose_value = 'strategic_purpose_value_' . $i;
            $strategic_activity = 'strategic_activity_' . $i;
            $strategic_indicator = 'strategic_indicator_' . $i;
            $strategic_unit = 'strategic_unit_' . $i;
            $strategic_indicator_value = 'strategic_indicator_value_' . $i;
            $strategic_target_extraordinary     = 'strategic_target_extraordinary_' . $i;
            $strategic_target_excellent    = 'strategic_target_excellent_' . $i;
            $strategic_target_fine         = 'strategic_target_fine_' . $i;
            $strategic_target_value        = 'strategic_target_value_' . $i;
            $strategic_target_below        = 'strategic_target_below_' . $i;
            $strategic_projection_first              = 'strategic_projection_first_' . $i;
            $strategic_projection_second         = 'strategic_projection_second_' . $i;
            $section_three_eight_second['strategic_purpose']   = $request->$strategic_purpose;
            $section_three_eight_second['strategic_purpose_value']   = $request->$strategic_purpose_value;
            $section_three_eight_second['strategic_activity']   = $request->$strategic_activity;
            $section_three_eight_second['strategic_indicator']   = $request->$strategic_indicator;
            $section_three_eight_second['strategic_unit']   = $request->$strategic_unit;
            $section_three_eight_second['strategic_indicator_value']   = $request->$strategic_indicator_value;
            $section_three_eight_second['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
            $section_three_eight_second['strategic_target_excellent']   = $request->$strategic_target_excellent;
            $section_three_eight_second['strategic_target_fine']   = $request->$strategic_target_fine;
            $section_three_eight_second['strategic_target_value']   = $request->$strategic_target_value;
            $section_three_eight_second['strategic_target_below']   = $request->$strategic_target_below;
            $section_three_eight_second['strategic_projection_first']   = $request->$strategic_projection_first;
            $section_three_eight_second['strategic_projection_second']   = $request->$strategic_projection_second;
            $section_three_eight_second['unique_form_id'] = $format;
            DB::table('section_three_second_part_appeight')->insert($section_three_eight_second);
        }


        for ($i = 3; $i <= 3; $i++) {
            $out_effect = 'out_effect_' . $i;
            $out_indicator = 'out_indicator_' . $i;
            $out_unit = 'out_unit_' . $i;
            $out_achivement = 'out_achivement_' . $i;
            $out_achivement_star     = 'out_achivement_star	_' . $i;
            $out_target = 'out_target_' . $i;
            $out_projection_one = 'out_projection_one_' . $i;
            $out_projection_two = 'out_projection_two_' . $i;
            $out_names = 'out_names_' . $i;
            $data['out_effect'] = $request->$out_effect;
            $data['out_indicator']   = $request->$out_indicator;
            $data['out_unit']   = $request->$out_unit;
            $data['out_achivement']   = $request->$out_achivement;
            $data['out_achivement_star']   = $request->$out_achivement_star;
            $data['out_target']   = $request->$out_target;
            $data['out_projection_one']   = $request->$out_projection_one;
            $data['out_projection_two']   = $request->$out_projection_two;
            $data['out_names']   = $request->$out_names;
            $data['unique_form_id']   = $format;
            DB::table('section_two_outcome_eight')->insert($data);
        }
    }
    /* end unique store */
    /* appendix 8 end */

    /* appendix 9 */

    public function form_appendix_nine(Request $request)
    {
        SwitchLanguage(Session::get('language'));
        return view('admin.pages.default_forms.form_appendix_nine');
    }

    public function form_appendix_nine_store(Request $request)
    {
        $format = 'form_' . date("is") . mt_rand(1000, 99999);
        $row = $request->row_id;
        for ($i = 1; $i <= $row; $i++) {
            $section_three_first_part = new SectionThreeFirstPart();
            $purpose = 'purpose_' . $i;
            $purpose_value = 'purpose_value_' . $i;
            $activity = 'activity_' . $i;
            $indicator = 'indicator_' . $i;
            $unit = 'unit_' . $i;
            $indicator_value = 'indicator_value_' . $i;
            $achivement = 'achivement_' . $i;
            $achivement_star = 'achivement_star_' . $i;
            $target_extraordinary     = 'target_extraordinary_' . $i;
            $target_excellent     = 'target_excellent_' . $i;
            $target_fine      = 'target_fine_' . $i;
            $target_value     = 'target_value_' . $i;
            $target_below     = 'target_below_' . $i;
            $margin           = 'margin_' . $i;
            $responsible         = 'responsible_' . $i;
            $section_three_first_part['purpose']   = $request->$purpose;
            $section_three_first_part['purpose_value']   = $request->$purpose_value;
            $section_three_first_part['activity']   = $request->$activity;
            $section_three_first_part['indicator']   = $request->$indicator;
            $section_three_first_part['unit']   = $request->$unit;
            $section_three_first_part['indicator_value']   = $request->$indicator_value;
            $section_three_first_part['achivement']   = $request->$achivement;
            $section_three_first_part['achivement_star']   = $request->$achivement_star;
            $section_three_first_part['target_extraordinary']   = $request->$target_extraordinary;
            $section_three_first_part['target_excellent']   = $request->$target_excellent;
            $section_three_first_part['target_fine']   = $request->$target_fine;
            $section_three_first_part['target_value']   = $request->$target_value;
            $section_three_first_part['target_below']   = $request->$target_below;
            $section_three_first_part['margin']   = $request->$margin;
            $section_three_first_part['responsible']   = $request->$responsible;
            $section_three_first_part['unique_form_id'] = $format;
            $section_three_first_part->save();
            for ($k = 1; $k <= $row; $k++) {
                $sub_row = 'row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $purpose       = 'purpose_' . $i . '_' . $k;
                    $purpose_value = 'purpose_value_' . $i . '_' . $k;
                    $activity      = 'activity_' . $i . '._' . $k;
                    $indicator     = 'indicator_' . $i . '_' . $k;
                    $unit          = 'unit_' . $i . '_' . $k;
                    $indicator_value = 'indicator_value_' . $i . '_' . $k;
                    $achivement = 'achivement_' . $i . '_' . $k;
                    $achivement_star = 'achivement_star_' . $i . '_' . $k;
                    $target_extraordinary = 'target_extraordinary_' . $i . '_' . $k;
                    $target_excellent = 'target_excellent_' . $i . '_' . $k;
                    $target_fine = 'target_fine_' . $i . '_' . $k;
                    $target_value = 'target_value_' . $i . '_' . $k;
                    $target_below = 'target_below_' . $i . '_' . $k;
                    $margin = 'margin_' . $i . '_' . $k;
                    $responsible = 'responsible_' . $i . '_' . $k;
                    $sub_data = new SectionThreeFirstPartSub();
                    $sub_data['row_id']   = $section_three_first_part->id;
                    $sub_data['purpose']   = $request->$purpose;
                    $sub_data['purpose_value']   = $request->$purpose_value;
                    $sub_data['activity']   = $request->$activity;
                    $sub_data['indicator']   = $request->$indicator;
                    $sub_data['unit']   = $request->$unit;
                    $sub_data['indicator_value']   = $request->$indicator_value;
                    $sub_data['achivement']   = $request->$achivement;
                    $sub_data['achivement_star']   = $request->$achivement_star;
                    $sub_data['target_extraordinary']   = $request->$target_extraordinary;
                    $sub_data['target_excellent']   = $request->$target_excellent;
                    $sub_data['target_fine']   = $request->$target_fine;
                    $sub_data['target_value']   = $request->$target_value;
                    $sub_data['target_below']   = $request->$target_below;
                    $sub_data['margin']   = $request->$margin;
                    $sub_data['responsible']   = $request->$responsible;
                    $sub_data->save();
                    for ($j = 1; $j <= $row; $j++) {
                        $sub_row_2 = 'row_id_' . $i . '_' . $k . '_' . $j;
                        $subRows2 = $request->$sub_row_2;
                        if ($subRows2) {
                            $purpose       = 'purpose_' . $i . '_' . $k . '_' . $j;
                            $purpose_value = 'purpose_value_' . $i . '_' . $k . '_' . $j;
                            $activity      = 'activity_' .  $i . '_' . $k . '_' . $j;
                            $indicator     = 'indicator_' . $i . '_' . $k . '_' . $j;
                            $unit          = 'unit_' . $i . '_' . $k . '_' . $j;
                            $indicator_value = 'indicator_value_' . $i . '_' . $k . '_' . $j;
                            $achivement = 'achivement_' . $i . '_' . $k . '_' . $j;
                            $achivement_star = 'achivement_star_' . $i . '_' . $k . '_' . $j;
                            $target_extraordinary = 'target_extraordinary_' . $i . '_' . $k . '_' . $j;
                            $target_excellent = 'target_excellent_' . $i . '_' . $k . '_' . $j;
                            $target_fine = 'target_fine_' . $i . '_' . $k . '_' . $j;
                            $target_value = 'target_value_' . $i . '_' . $k . '_' . $j;
                            $target_below = 'target_below_' . $i . '_' . $k . '_' . $j;
                            $margin = 'margin_' . $i . '_' . $k . '_' . $j;
                            $responsible = 'responsible_' . $i . '_' . $k . '_' . $j;
                            $sub_data_two['row_id']   = $sub_data->id;
                            $sub_data_two['purpose']   = $request->$purpose;
                            $sub_data_two['purpose_value']   = $request->$purpose_value;
                            $sub_data_two['activity']   = $request->$activity;
                            $sub_data_two['indicator']   = $request->$indicator;
                            $sub_data_two['unit']   = $request->$unit;
                            $sub_data_two['indicator_value']   = $request->$indicator_value;
                            $sub_data_two['achivement']   = $request->$achivement;
                            $sub_data_two['achivement_star']   = $request->$achivement_star;
                            $sub_data_two['target_extraordinary']   = $request->$target_extraordinary;
                            $sub_data_two['target_excellent']   = $request->$target_excellent;
                            $sub_data_two['target_fine']   = $request->$target_fine;
                            $sub_data_two['target_value']   = $request->$target_value;
                            $sub_data_two['target_below']   = $request->$target_below;
                            $sub_data_two['margin']   = $request->$margin;
                            $sub_data_two['responsible']   = $request->$responsible;
                            DB::table('section_three_first_part_sub_2')->insert($sub_data_two);
                        }
                    }
                }
            }
        }

        /* second part */
        $row_two = $request->strategic_row_id;

        for ($i = 61; $i <= $row_two; $i++) {
            $section_three_second_part = new SectionThreeSecondPart();
            $strategic_purpose = 'strategic_purpose_' . $i;
            $strategic_purpose_value = 'strategic_purpose_value_' . $i;
            $strategic_activity = 'strategic_activity_' . $i;
            $strategic_indicator = 'strategic_indicator_' . $i;
            $strategic_unit = 'strategic_unit_' . $i;
            $strategic_indicator_value = 'strategic_indicator_value_' . $i;
            $strategic_target_extraordinary = 'strategic_target_extraordinary_' . $i;
            $strategic_target_excellent     = 'strategic_target_excellent_' . $i;
            $strategic_target_fine          = 'strategic_target_fine_' . $i;
            $strategic_target_value         = 'strategic_target_value_' . $i;
            $strategic_target_below         = 'strategic_target_below_' . $i;
            $strategic_margin               = 'strategic_margin_' . $i;
            $strategic_responsible          = 'strategic_responsible_' . $i;
            $section_three_second_part['strategic_purpose']   = $request->$strategic_purpose;
            $section_three_second_part['strategic_purpose_value']   = $request->$strategic_purpose_value;
            $section_three_second_part['strategic_activity']   = $request->$strategic_activity;
            $section_three_second_part['strategic_indicator']   = $request->$strategic_indicator;
            $section_three_second_part['strategic_unit']   = $request->$strategic_unit;
            $section_three_second_part['strategic_indicator_value']   = $request->$strategic_indicator_value;
            $section_three_second_part['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
            $section_three_second_part['strategic_target_excellent']   = $request->$strategic_target_excellent;
            $section_three_second_part['strategic_target_fine']   = $request->$strategic_target_fine;
            $section_three_second_part['strategic_target_value']   = $request->$strategic_target_value;
            $section_three_second_part['strategic_target_below']   = $request->$strategic_target_below;
            $section_three_second_part['strategic_margin']   = $request->$strategic_margin;
            $section_three_second_part['strategic_responsible']   = $request->$strategic_responsible;
            $section_three_second_part['unique_form_id'] = $format;
            $section_three_second_part->save();

            for ($k = 1; $k <= $row_two; $k++) {
                $sub_row = 'strategic_row_id_' . $i . '_' . $k;
                $subRows = $request->$sub_row;
                if ($subRows) {
                    $strategic_purpose = 'strategic_purpose_' . $i . '_' . $k;
                    $strategic_purpose_value = 'strategic_purpose_value_' . $i . '_' . $k;
                    $strategic_activity = 'strategic_activity_' . $i . '_' . $k;
                    $strategic_indicator = 'strategic_indicator_' . $i . '_' . $k;
                    $strategic_unit = 'strategic_unit_' . $i . '_' . $k;
                    $strategic_indicator_value = 'strategic_indicator_value_' . $i . '_' . $k;
                    $strategic_target_extraordinary     = 'strategic_target_extraordinary_' . $i . '_' . $k;
                    $strategic_target_excellent     = 'strategic_target_excellent_' . $i . '_' . $k;
                    $strategic_target_fine      = 'strategic_target_fine_' . $i . '_' . $k;
                    $strategic_target_value     = 'strategic_target_value_' . $i . '_' . $k;
                    $strategic_target_below     = 'strategic_target_below_' . $i . '_' . $k;
                    $strategic_margin           = 'strategic_margin_' . $i . '_' . $k;
                    $strategic_responsible         = 'strategic_responsible_' . $i . '_' . $k;
                    $strategic_sub   = new SectionThreeSecondPartSub();
                    $strategic_sub['strategic_row_id']   = $section_three_second_part->id;
                    $strategic_sub['strategic_purpose']   = $request->$strategic_purpose;
                    $strategic_sub['strategic_purpose_value']   = $request->$strategic_purpose_value;
                    $strategic_sub['strategic_activity']   = $request->$strategic_activity;
                    $strategic_sub['strategic_activity']   = $request->$strategic_indicator;
                    $strategic_sub['strategic_unit']   = $request->$strategic_unit;
                    $strategic_sub['strategic_indicator_value']   = $request->$strategic_indicator_value;
                    $strategic_sub['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
                    $strategic_sub['strategic_target_excellent']   = $request->$strategic_target_excellent;
                    $strategic_sub['strategic_target_fine']   = $request->$strategic_target_fine;
                    $strategic_sub['strategic_target_value']   = $request->$strategic_target_value;
                    $strategic_sub['strategic_target_below']   = $request->$strategic_target_below;
                    $strategic_sub['strategic_margin']   = $request->$strategic_margin;
                    $strategic_sub['strategic_responsible']   = $request->$strategic_responsible;
                    $strategic_sub->save();
                    for ($j = 1; $j <= $row_two; $j++) {
                        $sub_row_2 = 'strategic_row_id_' . $i . '_' . $k . '_' . $j;
                        $subRows2 = $request->$sub_row_2;
                        if ($subRows2) {
                            $strategic_purpose       = 'strategic_purpose_' . $i . '_' . $k . '_' . $j;
                            $strategic_purpose_value = 'strategic_purpose_value_' . $i . '_' . $k . '_' . $j;
                            $strategic_activity      = 'strategic_activity_' .  $i . '_' . $k . '_' . $j;
                            $strategic_indicator     = 'strategic_indicator_' . $i . '_' . $k . '_' . $j;
                            $strategic_unit          = 'strategic_unit_' . $i . '_' . $k . '_' . $j;
                            $strategic_indicator_value = 'strategic_indicator_value_' . $i . '_' . $k . '_' . $j;
                            $strategic_target_extraordinary = 'strategic_target_extraordinary_' . $i . '_' . $k . '_' . $j;
                            $strategic_target_excellent = 'strategic_target_excellent_' . $i . '_' . $k . '_' . $j;
                            $strategic_target_fine = 'strategic_target_fine_' . $i . '_' . $k . '_' . $j;
                            $strategic_target_value = 'strategic_target_value_' . $i . '_' . $k . '_' . $j;
                            $strategic_target_below = 'strategic_target_below_' . $i . '_' . $k . '_' . $j;
                            $strategic_margin = 'strategic_margin_' . $i . '_' . $k . '_' . $j;
                            $strategic_responsible = 'strategic_responsible_' . $i . '_' . $k . '_' . $j;
                            $strategic_sub_two['strategic_row_id']   = $strategic_sub->id;
                            $strategic_sub_two['strategic_purpose']   = $request->$strategic_purpose;
                            $strategic_sub_two['strategic_purpose_value']   = $request->$strategic_purpose_value;
                            $strategic_sub_two['strategic_activity']   = $request->$strategic_activity;
                            $strategic_sub_two['strategic_indicator']   = $request->$strategic_indicator;
                            $strategic_sub_two['strategic_unit']   = $request->$strategic_unit;
                            $strategic_sub_two['strategic_indicator_value']   = $request->$strategic_indicator_value;
                            $strategic_sub_two['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
                            $strategic_sub_two['strategic_target_excellent']   = $request->$strategic_target_excellent;
                            $strategic_sub_two['strategic_target_fine']   = $request->$strategic_target_fine;
                            $strategic_sub_two['strategic_target_value']   = $request->$strategic_target_value;
                            $strategic_sub_two['strategic_target_below']   = $request->$strategic_target_below;
                            $strategic_sub_two['strategic_margin']   = $request->$strategic_margin;
                            $strategic_sub_two['strategic_responsible']   = $request->$strategic_responsible;
                            DB::table('section_three_second_part_sub_2')->insert($strategic_sub_two);
                        }
                    }
                }
            }
        }



        foreach ($request->budget_sub as $budget_sub) {
            $budget['budget_sub'] = $budget_sub;
            $budget['unique_form_id']   = $format;
            DB::table('appendix_nine_mis')->insert($budget);
        }

        $outcome_id = $request->outcome_id;

        for ($i = 41; $i <= $outcome_id; $i++) {
            $impact = 'impact_' . $i;
            $indicator = 'indicator_' . $i;
            $unit = 'unit_' . $i;
            $achivement_star = 'achivement_star_' . $i;
            $target = 'target_' . $i;
            $achivement = 'achivement_' . $i;
            $comments = 'comments_' . $i;
            $outcome_data['impact'] = $request->$impact;
            $outcome_data['indicator']   = $request->$indicator;
            $outcome_data['unit']   = $request->$unit;
            $outcome_data['achivement_star']   = $request->$achivement_star;
            $outcome_data['target']   = $request->$target;
            $outcome_data['achivement']   = $request->$achivement;
            $outcome_data['comments']   = $request->$comments;
            $outcome_data['unique_form_id']   = $format;
            DB::table('section_two_outcome')->insert($outcome_data);
        }
    }


    public function form_appendix_nine_update(Request $request)
    {
        $unique_form_id = $request->unique_form_id;
        $author_id      = $request->author_id;
        $def_data['status'] = 1;
        DB::table('user_forms')->where('sub_form_id_unique_id', '=', $unique_form_id)->where('reciever_user_id', '=', $author_id)->update($def_data);

        foreach ($request->row_id as $row) {
            // $section_three_first_part = SectionThreeFirstPart::find($row);
            $unique_form_id = $request->unique_form_id;
            $purpose = 'purpose_' . $row;
            $purpose_value = 'purpose_value_' . $row;
            $activity = 'activity_' . $row;
            $indicator = 'indicator_' . $row;
            $unit = 'unit_' . $row;
            $indicator_value = 'indicator_value_' . $row;
            $achivement = 'achivement_' . $row;
            $achivement_star = 'achivement_star_' . $row;
            $target_extraordinary     = 'target_extraordinary_' . $row;
            $target_excellent     = 'target_excellent_' . $row;
            $target_fine      = 'target_fine_' . $row;
            $target_value     = 'target_value_' . $row;
            $target_below     = 'target_below_' . $row;
            $margin           = 'margin_' . $row;
            $responsible         = 'responsible_' . $row;
            $section_three_first_part['purpose']   = $request->$purpose;
            $section_three_first_part['purpose_value']   = $request->$purpose_value;
            $section_three_first_part['activity']   = $request->$activity;
            $section_three_first_part['indicator']   = $request->$indicator;
            $section_three_first_part['unit']   = $request->$unit;
            $section_three_first_part['indicator_value']   = $request->$indicator_value;
            $section_three_first_part['achivement']   = $request->$achivement;
            $section_three_first_part['achivement_star']   = $request->$achivement_star;
            $section_three_first_part['target_extraordinary']   = $request->$target_extraordinary;
            $section_three_first_part['target_excellent']   = $request->$target_excellent;
            $section_three_first_part['target_fine']   = $request->$target_fine;
            $section_three_first_part['target_value']   = $request->$target_value;
            $section_three_first_part['target_below']   = $request->$target_below;
            $section_three_first_part['margin']   = $request->$margin;
            $section_three_first_part['responsible']   = $request->$responsible;
            DB::table('section_three_first_part')->where('id', '=', $row)->where('unique_form_id', '=', $unique_form_id)->update($section_three_first_part);
        }

        foreach ($request->sub_row_id as $subRow) {
            $purpose       = 'purpose_' . $subRow;
            $purpose_value = 'purpose_value_' . $subRow;
            $activity      = 'activity_' . $subRow;
            $indicator     = 'indicator_' . $subRow;
            $unit          = 'unit_' . $subRow;
            $indicator_value = 'indicator_value_' . $subRow;
            $achivement = 'achivement_' . $subRow;
            $achivement_star = 'achivement_star_' . $subRow;
            $target_extraordinary = 'target_extraordinary_' . $subRow;
            $target_excellent = 'target_excellent_' . $subRow;
            $target_fine = 'target_fine_' . $subRow;
            $target_value = 'target_value_' . $subRow;
            $target_below = 'target_below_' . $subRow;
            $margin = 'margin_' . $subRow;
            $responsible = 'responsible_' . $subRow;
            $sub_data['purpose']   = $request->$purpose;
            $sub_data['purpose_value']   = $request->$purpose_value;
            $sub_data['activity']   = $request->$activity;
            $sub_data['indicator']   = $request->$indicator;
            $sub_data['unit']   = $request->$unit;
            $sub_data['indicator_value']   = $request->$indicator_value;
            $sub_data['achivement']   = $request->$achivement;
            $sub_data['achivement_star']   = $request->$achivement_star;
            $sub_data['target_extraordinary']   = $request->$target_extraordinary;
            $sub_data['target_excellent']   = $request->$target_excellent;
            $sub_data['target_fine']   = $request->$target_fine;
            $sub_data['target_value']   = $request->$target_value;
            $sub_data['target_below']   = $request->$target_below;
            $sub_data['margin']   = $request->$margin;
            $sub_data['responsible']   = $request->$responsible;
            DB::table('section_three_first_part_sub')->where('id', '=', $subRow)->where('unique_form_id', '=', $unique_form_id)->update($sub_data);
        }

        foreach ($request->sub_row_2_id as $subRowTwo) {
            $purpose       = 'purpose_' . $subRowTwo;
            $purpose_value = 'purpose_value_' . $subRowTwo;
            $activity      = 'activity_' . $subRowTwo;
            $indicator     = 'indicator_' . $subRowTwo;
            $unit          = 'unit_' . $subRowTwo;
            $indicator_value = 'indicator_value_' . $subRowTwo;
            $achivement = 'achivement_' . $subRowTwo;
            $achivement_star = 'achivement_star_' . $subRowTwo;
            $target_extraordinary = 'target_extraordinary_' . $subRowTwo;
            $target_excellent = 'target_excellent_' . $subRowTwo;
            $target_fine = 'target_fine_' . $subRowTwo;
            $target_value = 'target_value_' . $subRowTwo;
            $target_below = 'target_below_' . $subRowTwo;
            $margin = 'margin_' . $subRowTwo;
            $responsible = 'responsible_' . $subRowTwo;
            $sub_data_2['purpose']   = $request->$purpose;
            $sub_data_2['purpose_value']   = $request->$purpose_value;
            $sub_data_2['activity']   = $request->$activity;
            $sub_data_2['indicator']   = $request->$indicator;
            $sub_data_2['unit']   = $request->$unit;
            $sub_data_2['indicator_value']   = $request->$indicator_value;
            $sub_data_2['achivement']   = $request->$achivement;
            $sub_data_2['achivement_star']   = $request->$achivement_star;
            $sub_data_2['target_extraordinary']   = $request->$target_extraordinary;
            $sub_data_2['target_excellent']   = $request->$target_excellent;
            $sub_data_2['target_fine']   = $request->$target_fine;
            $sub_data_2['target_value']   = $request->$target_value;
            $sub_data_2['target_below']   = $request->$target_below;
            $sub_data_2['margin']   = $request->$margin;
            $sub_data_2['responsible']   = $request->$responsible;
            DB::table('section_three_first_part_sub_2')->where('id', '=', $subRowTwo)->where('unique_form_id', '=', $unique_form_id)->update($sub_data_2);
        }


        foreach ($request->outcome_id as $out_row) {
            $impact = 'impact_' . $out_row;
            $indicator = 'indicator_' . $out_row;
            $unit = 'unit_' . $out_row;
            $achivement_star = 'achivement_star_' . $out_row;
            $target = 'target_' . $out_row;
            $achivement = 'achivement_' . $out_row;
            $comments = 'comments_' . $out_row;
            $outcome_data['impact'] = $request->$impact;
            $outcome_data['indicator']   = $request->$indicator;
            $outcome_data['unit']   = $request->$unit;
            $outcome_data['achivement_star']   = $request->$achivement_star;
            $outcome_data['target']   = $request->$target;
            $outcome_data['achivement']   = $request->$achivement;
            $outcome_data['comments']   = $request->$comments;
            DB::table('section_two_outcome')->where('id', '=', $out_row)->where('unique_form_id', '=', $unique_form_id)->update($outcome_data);
        }

        $bud = $request->budget_sub_id;
        for ($x = 1; $x <= $bud; $x += 1) {
            $a = 'budget_sub_' . $x;
            $budget_sub['budget_sub'] = $request->$a;
            DB::table('appendix_nine_mis')->where('id', '=', $x)->where('unique_form_id', '=', $unique_form_id)->update($budget_sub);
        }

        /* part 2 table */

        foreach ($request->strategic_row_id as $strategic_row) {
            // $section_three_second_part =  SectionThreeSecondPart::find($strategic_row);
            $strategic_purpose = 'strategic_purpose_' . $strategic_row;
            $strategic_purpose_value = 'strategic_purpose_value_' . $strategic_row;
            $strategic_activity = 'strategic_activity_' . $strategic_row;
            $strategic_indicator = 'strategic_indicator_' . $strategic_row;
            $strategic_unit = 'strategic_unit_' . $strategic_row;
            $strategic_indicator_value = 'strategic_indicator_value_' . $strategic_row;
            $strategic_target_extraordinary  = 'strategic_target_extraordinary_' . $strategic_row;
            $strategic_target_excellent      = 'strategic_target_excellent_' . $strategic_row;
            $strategic_target_fine           = 'strategic_target_fine_' . $strategic_row;
            $strategic_target_value          = 'strategic_target_value_' . $strategic_row;
            $strategic_target_below          = 'strategic_target_below_' . $strategic_row;
            $strategic_margin                = 'strategic_margin_' . $strategic_row;
            $strategic_responsible                               = 'strategic_responsible_' . $strategic_row;
            $section_three_second_part['strategic_purpose']          = $request->$strategic_purpose;
            $section_three_second_part['strategic_purpose_value']   = $request->$strategic_purpose_value;
            $section_three_second_part['strategic_activity']         = $request->$strategic_activity;
            $section_three_second_part['strategic_indicator']   = $request->$strategic_indicator;
            $section_three_second_part['strategic_unit']   = $request->$strategic_unit;
            $section_three_second_part['strategic_indicator_value']   = $request->$strategic_indicator_value;
            $section_three_second_part['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
            $section_three_second_part['strategic_target_excellent']   = $request->$strategic_target_excellent;
            $section_three_second_part['strategic_target_fine']   = $request->$strategic_target_fine;
            $section_three_second_part['strategic_target_value']   = $request->$strategic_target_value;
            $section_three_second_part['strategic_target_below']   = $request->$strategic_target_below;
            $section_three_second_part['strategic_margin']         = $request->$strategic_margin;
            $section_three_second_part['strategic_responsible']    = $request->$strategic_responsible;
            DB::table('section_three_second_part')->where('id', '=', $strategic_row)->where('unique_form_id', '=', $unique_form_id)->update($section_three_second_part);
        }

        foreach ($request->strategic_sub_row_id as $subRowStra) {
            $strategic_purpose = 'strategic_purpose_' . $subRowStra;
            $strategic_purpose_value = 'strategic_purpose_value_' . $subRowStra;
            $strategic_activity = 'strategic_activity_' . $subRowStra;
            $strategic_indicator = 'strategic_indicator_' . $subRowStra;
            $strategic_unit = 'strategic_unit_' . $subRowStra;
            $strategic_indicator_value = 'strategic_indicator_value_' . $subRowStra;
            $strategic_target_extraordinary     = 'strategic_target_extraordinary_' . $subRowStra;
            $strategic_target_excellent     = 'strategic_target_excellent_' . $subRowStra;
            $strategic_target_fine      = 'strategic_target_fine_' . $subRowStra;
            $strategic_target_value     = 'strategic_target_value_' . $subRowStra;
            $strategic_target_below     = 'strategic_target_below_' . $subRowStra;
            $strategic_margin           = 'strategic_margin_' . $subRowStra;
            $strategic_responsible         = 'strategic_responsible_' . $subRowStra;
            $section_three_second_part_sub['strategic_purpose']   = $request->$strategic_purpose;
            $section_three_second_part_sub['strategic_purpose_value']   = $request->$strategic_purpose_value;
            $section_three_second_part_sub['strategic_activity']   = $request->$strategic_activity;
            $section_three_second_part_sub['strategic_indicator']   = $request->$strategic_indicator;
            $section_three_second_part_sub['strategic_unit']   = $request->$strategic_unit;
            $section_three_second_part_sub['strategic_indicator_value']   = $request->$strategic_indicator_value;
            $section_three_second_part_sub['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
            $section_three_second_part_sub['strategic_target_excellent']   = $request->$strategic_target_excellent;
            $section_three_second_part_sub['strategic_target_fine']   = $request->$strategic_target_fine;
            $section_three_second_part_sub['strategic_target_value']   = $request->$strategic_target_value;
            $section_three_second_part_sub['strategic_target_below']   = $request->$strategic_target_below;
            $section_three_second_part_sub['strategic_margin']   = $request->$strategic_margin;
            $section_three_second_part_sub['strategic_responsible']   = $request->$strategic_responsible;
            DB::table('section_three_second_part_sub')->where('id', '=', $subRowStra)->where('unique_form_id', '=', $unique_form_id)->update($section_three_second_part_sub);
        }


        foreach ($request->strategic_sub_row_2_id as $subRowStraTwo) {
            $strategic_purpose = 'strategic_purpose_' . $subRowStraTwo;
            $strategic_purpose_value = 'strategic_purpose_value_' . $subRowStraTwo;
            $strategic_activity = 'strategic_activity_' . $subRowStraTwo;
            $strategic_indicator = 'strategic_indicator_' . $subRowStraTwo;
            $strategic_unit = 'strategic_unit_' . $subRowStraTwo;
            $strategic_indicator_value = 'strategic_indicator_value_' . $subRowStraTwo;
            $strategic_target_extraordinary     = 'strategic_target_extraordinary_' . $subRowStraTwo;
            $strategic_target_excellent     = 'strategic_target_excellent_' . $subRowStraTwo;
            $strategic_target_fine      = 'strategic_target_fine_' . $subRowStraTwo;
            $strategic_target_value     = 'strategic_target_value_' . $subRowStraTwo;
            $strategic_target_below     = 'strategic_target_below_' . $subRowStraTwo;
            $strategic_margin           = 'strategic_margin_' . $subRowStraTwo;
            $strategic_responsible         = 'strategic_responsible_' . $subRowStraTwo;
            $section_three_second_part_sub_two['strategic_purpose']   = $request->$strategic_purpose;
            $section_three_second_part_sub_two['strategic_purpose_value']   = $request->$strategic_purpose_value;
            $section_three_second_part_sub_two['strategic_activity']   = $request->$strategic_activity;
            $section_three_second_part_sub_two['strategic_indicator']   = $request->$strategic_indicator;
            $section_three_second_part_sub_two['strategic_unit']   = $request->$strategic_unit;
            $section_three_second_part_sub_two['strategic_indicator_value']   = $request->$strategic_indicator_value;
            $section_three_second_part_sub_two['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
            $section_three_second_part_sub_two['strategic_target_excellent']   = $request->$strategic_target_excellent;
            $section_three_second_part_sub_two['strategic_target_fine']   = $request->$strategic_target_fine;
            $section_three_second_part_sub_two['strategic_target_value']   = $request->$strategic_target_value;
            $section_three_second_part_sub_two['strategic_target_below']   = $request->$strategic_target_below;
            $section_three_second_part_sub_two['strategic_margin']   = $request->$strategic_margin;
            $section_three_second_part_sub_two['strategic_responsible']   = $request->$strategic_responsible;
            DB::table('section_three_second_part_sub_2')->where('id', '=', $subRowStraTwo)->update($section_three_second_part_sub_two);
        }
    }

    /* appendix nine store unique */
    public function form_store_appendix_nine_unique(Request $request)
    {
        $years   = $request->form_year;
        $format = $request->form_unique_id;
        $unit_office_to = $request->unit_office_to;
        $unit_office = $request->unit_office;
        $office = $request->office;
        $department = $request->department;
        $ministry = $request->ministry;
        $form_id = $request->form_id;
        $row = $request->row_id;
        // for ($i = 1; $i <= $row; $i++) {
        //     $section_three_first_part = new SectionThreeFirstPart();
        //     $purpose = 'purpose_' . $i;
        //     $purpose_value = 'purpose_value_' . $i;
        //     $activity = 'activity_' . $i;
        //     $indicator = 'indicator_' . $i;
        //     $unit = 'unit_' . $i;
        //     $indicator_value = 'indicator_value_' . $i;
        //     $achivement = 'achivement_' . $i;
        //     $achivement_star = 'achivement_star_' . $i;
        //     $target_extraordinary     = 'target_extraordinary_' . $i;
        //     $target_excellent     = 'target_excellent_' . $i;
        //     $target_fine      = 'target_fine_' . $i;
        //     $target_value     = 'target_value_' . $i;
        //     $target_below     = 'target_below_' . $i;
        //     $margin           = 'margin_' . $i;
        //     $responsible         = 'responsible_' . $i;
        //     $section_three_first_part['purpose']   = $request->$purpose;
        //     $section_three_first_part['purpose_value']   = $request->$purpose_value;
        //     $section_three_first_part['activity']   = $request->$activity;
        //     $section_three_first_part['indicator']   = $request->$indicator;
        //     $section_three_first_part['unit']   = $request->$unit;
        //     $section_three_first_part['indicator_value']   = $request->$indicator_value;
        //     $section_three_first_part['achivement']   = $request->$achivement;
        //     $section_three_first_part['achivement_star']   = $request->$achivement_star;
        //     $section_three_first_part['target_extraordinary']   = $request->$target_extraordinary;
        //     $section_three_first_part['target_excellent']   = $request->$target_excellent;
        //     $section_three_first_part['target_fine']   = $request->$target_fine;
        //     $section_three_first_part['target_value']   = $request->$target_value;
        //     $section_three_first_part['target_below']   = $request->$target_below;
        //     $section_three_first_part['margin']   = $request->$margin;
        //     $section_three_first_part['responsible']   = $request->$responsible;
        //     $section_three_first_part['unique_form_id'] = $format;
        //     $section_three_first_part->save();
        //     for ($k = 1; $k <= $row; $k++) {
        //         $sub_row = 'row_id_' . $i . '_' . $k;
        //         $subRows = $request->$sub_row;
        //         if ($subRows) {
        //             $purpose       = 'purpose_' . $i . '_' . $k;
        //             $purpose_value = 'purpose_value_' . $i . '_' . $k;
        //             $activity      = 'activity_' . $i . '._' . $k;
        //             $indicator     = 'indicator_' . $i . '_' . $k;
        //             $unit          = 'unit_' . $i . '_' . $k;
        //             $indicator_value = 'indicator_value_' . $i . '_' . $k;
        //             $achivement = 'achivement_' . $i . '_' . $k;
        //             $achivement_star = 'achivement_star_' . $i . '_' . $k;
        //             $target_extraordinary = 'target_extraordinary_' . $i . '_' . $k;
        //             $target_excellent = 'target_excellent_' . $i . '_' . $k;
        //             $target_fine = 'target_fine_' . $i . '_' . $k;
        //             $target_value = 'target_value_' . $i . '_' . $k;
        //             $target_below = 'target_below_' . $i . '_' . $k;
        //             $margin = 'margin_' . $i . '_' . $k;
        //             $responsible = 'responsible_' . $i . '_' . $k;
        //             $sub_data = new SectionThreeFirstPartSub();
        //             $sub_data['row_id']   = $section_three_first_part->id;
        //             $sub_data['purpose']   = $request->$purpose;
        //             $sub_data['purpose_value']   = $request->$purpose_value;
        //             $sub_data['activity']   = $request->$activity;
        //             $sub_data['indicator']   = $request->$indicator;
        //             $sub_data['unit']   = $request->$unit;
        //             $sub_data['indicator_value']   = $request->$indicator_value;
        //             $sub_data['achivement']   = $request->$achivement;
        //             $sub_data['achivement_star']   = $request->$achivement_star;
        //             $sub_data['target_extraordinary']   = $request->$target_extraordinary;
        //             $sub_data['target_excellent']   = $request->$target_excellent;
        //             $sub_data['target_fine']   = $request->$target_fine;
        //             $sub_data['target_value']   = $request->$target_value;
        //             $sub_data['target_below']   = $request->$target_below;
        //             $sub_data['margin']   = $request->$margin;
        //             $sub_data['responsible']   = $request->$responsible;
        //             $sub_data->save();
        //             for ($j = 1; $j <= $row; $j++) {
        //                 $sub_row_2 = 'row_id_' . $i . '_' . $k . '_' . $j;
        //                 $subRows2 = $request->$sub_row_2;
        //                 if ($subRows2) {
        //                     $purpose       = 'purpose_' . $i . '_' . $k . '_' . $j;
        //                     $purpose_value = 'purpose_value_' . $i . '_' . $k . '_' . $j;
        //                     $activity      = 'activity_' .  $i . '_' . $k . '_' . $j;
        //                     $indicator     = 'indicator_' . $i . '_' . $k . '_' . $j;
        //                     $unit          = 'unit_' . $i . '_' . $k . '_' . $j;
        //                     $indicator_value = 'indicator_value_' . $i . '_' . $k . '_' . $j;
        //                     $achivement = 'achivement_' . $i . '_' . $k . '_' . $j;
        //                     $achivement_star = 'achivement_star_' . $i . '_' . $k . '_' . $j;
        //                     $target_extraordinary = 'target_extraordinary_' . $i . '_' . $k . '_' . $j;
        //                     $target_excellent = 'target_excellent_' . $i . '_' . $k . '_' . $j;
        //                     $target_fine = 'target_fine_' . $i . '_' . $k . '_' . $j;
        //                     $target_value = 'target_value_' . $i . '_' . $k . '_' . $j;
        //                     $target_below = 'target_below_' . $i . '_' . $k . '_' . $j;
        //                     $margin = 'margin_' . $i . '_' . $k . '_' . $j;
        //                     $responsible = 'responsible_' . $i . '_' . $k . '_' . $j;
        //                     $sub_data_two['row_id']   = $sub_data->id;
        //                     $sub_data_two['purpose']   = $request->$purpose;
        //                     $sub_data_two['purpose_value']   = $request->$purpose_value;
        //                     $sub_data_two['activity']   = $request->$activity;
        //                     $sub_data_two['indicator']   = $request->$indicator;
        //                     $sub_data_two['unit']   = $request->$unit;
        //                     $sub_data_two['indicator_value']   = $request->$indicator_value;
        //                     $sub_data_two['achivement']   = $request->$achivement;
        //                     $sub_data_two['achivement_star']   = $request->$achivement_star;
        //                     $sub_data_two['target_extraordinary']   = $request->$target_extraordinary;
        //                     $sub_data_two['target_excellent']   = $request->$target_excellent;
        //                     $sub_data_two['target_fine']   = $request->$target_fine;
        //                     $sub_data_two['target_value']   = $request->$target_value;
        //                     $sub_data_two['target_below']   = $request->$target_below;
        //                     $sub_data_two['margin']   = $request->$margin;
        //                     $sub_data_two['responsible']   = $request->$responsible;
        //                     DB::table('section_three_first_part_sub_2')->insert($sub_data_two);
        //                 }
        //             }
        //         }
        //     }
        // }

        // /* second part */
        // $row_two = $request->strategic_row_id;

        // for ($i = 61; $i <= $row_two; $i++) {
        //     $section_three_second_part = new SectionThreeSecondPart();
        //     $strategic_purpose = 'strategic_purpose_' . $i;
        //     $strategic_purpose_value = 'strategic_purpose_value_' . $i;
        //     $strategic_activity = 'strategic_activity_' . $i;
        //     $strategic_indicator = 'strategic_indicator_' . $i;
        //     $strategic_unit = 'strategic_unit_' . $i;
        //     $strategic_indicator_value = 'strategic_indicator_value_' . $i;
        //     $strategic_target_extraordinary = 'strategic_target_extraordinary_' . $i;
        //     $strategic_target_excellent     = 'strategic_target_excellent_' . $i;
        //     $strategic_target_fine          = 'strategic_target_fine_' . $i;
        //     $strategic_target_value         = 'strategic_target_value_' . $i;
        //     $strategic_target_below         = 'strategic_target_below_' . $i;
        //     $strategic_margin               = 'strategic_margin_' . $i;
        //     $strategic_responsible          = 'strategic_responsible_' . $i;
        //     $section_three_second_part['strategic_purpose']   = $request->$strategic_purpose;
        //     $section_three_second_part['strategic_purpose_value']   = $request->$strategic_purpose_value;
        //     $section_three_second_part['strategic_activity']   = $request->$strategic_activity;
        //     $section_three_second_part['strategic_indicator']   = $request->$strategic_indicator;
        //     $section_three_second_part['strategic_unit']   = $request->$strategic_unit;
        //     $section_three_second_part['strategic_indicator_value']   = $request->$strategic_indicator_value;
        //     $section_three_second_part['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
        //     $section_three_second_part['strategic_target_excellent']   = $request->$strategic_target_excellent;
        //     $section_three_second_part['strategic_target_fine']   = $request->$strategic_target_fine;
        //     $section_three_second_part['strategic_target_value']   = $request->$strategic_target_value;
        //     $section_three_second_part['strategic_target_below']   = $request->$strategic_target_below;
        //     $section_three_second_part['strategic_margin']   = $request->$strategic_margin;
        //     $section_three_second_part['strategic_responsible']   = $request->$strategic_responsible;
        //     $section_three_second_part['unique_form_id'] = $format;
        //     $section_three_second_part->save();

        //     for ($k = 1; $k <= $row_two; $k++) {
        //         $sub_row = 'strategic_row_id_' . $i . '_' . $k;
        //         $subRows = $request->$sub_row;
        //         if ($subRows) {
        //             $strategic_purpose = 'strategic_purpose_' . $i . '_' . $k;
        //             $strategic_purpose_value = 'strategic_purpose_value_' . $i . '_' . $k;
        //             $strategic_activity = 'strategic_activity_' . $i . '_' . $k;
        //             $strategic_indicator = 'strategic_indicator_' . $i . '_' . $k;
        //             $strategic_unit = 'strategic_unit_' . $i . '_' . $k;
        //             $strategic_indicator_value = 'strategic_indicator_value_' . $i . '_' . $k;
        //             $strategic_target_extraordinary     = 'strategic_target_extraordinary_' . $i . '_' . $k;
        //             $strategic_target_excellent     = 'strategic_target_excellent_' . $i . '_' . $k;
        //             $strategic_target_fine      = 'strategic_target_fine_' . $i . '_' . $k;
        //             $strategic_target_value     = 'strategic_target_value_' . $i . '_' . $k;
        //             $strategic_target_below     = 'strategic_target_below_' . $i . '_' . $k;
        //             $strategic_margin           = 'strategic_margin_' . $i . '_' . $k;
        //             $strategic_responsible         = 'strategic_responsible_' . $i . '_' . $k;
        //             $strategic_sub   = new SectionThreeSecondPartSub();
        //             $strategic_sub['strategic_row_id']   = $section_three_second_part->id;
        //             $strategic_sub['strategic_purpose']   = $request->$strategic_purpose;
        //             $strategic_sub['strategic_purpose_value']   = $request->$strategic_purpose_value;
        //             $strategic_sub['strategic_activity']   = $request->$strategic_activity;
        //             $strategic_sub['strategic_activity']   = $request->$strategic_indicator;
        //             $strategic_sub['strategic_unit']   = $request->$strategic_unit;
        //             $strategic_sub['strategic_indicator_value']   = $request->$strategic_indicator_value;
        //             $strategic_sub['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
        //             $strategic_sub['strategic_target_excellent']   = $request->$strategic_target_excellent;
        //             $strategic_sub['strategic_target_fine']   = $request->$strategic_target_fine;
        //             $strategic_sub['strategic_target_value']   = $request->$strategic_target_value;
        //             $strategic_sub['strategic_target_below']   = $request->$strategic_target_below;
        //             $strategic_sub['strategic_margin']   = $request->$strategic_margin;
        //             $strategic_sub['strategic_responsible']   = $request->$strategic_responsible;
        //             $strategic_sub->save();
        //             for ($j = 1; $j <= $row_two; $j++) {
        //                 $sub_row_2 = 'strategic_row_id_' . $i . '_' . $k . '_' . $j;
        //                 $subRows2 = $request->$sub_row_2;
        //                 if ($subRows2) {
        //                     $strategic_purpose       = 'strategic_purpose_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_purpose_value = 'strategic_purpose_value_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_activity      = 'strategic_activity_' .  $i . '_' . $k . '_' . $j;
        //                     $strategic_indicator     = 'strategic_indicator_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_unit          = 'strategic_unit_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_indicator_value = 'strategic_indicator_value_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_target_extraordinary = 'strategic_target_extraordinary_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_target_excellent = 'strategic_target_excellent_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_target_fine = 'strategic_target_fine_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_target_value = 'strategic_target_value_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_target_below = 'strategic_target_below_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_margin = 'strategic_margin_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_responsible = 'strategic_responsible_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_sub_two['strategic_row_id']   = $strategic_sub->id;
        //                     $strategic_sub_two['strategic_purpose']   = $request->$strategic_purpose;
        //                     $strategic_sub_two['strategic_purpose_value']   = $request->$strategic_purpose_value;
        //                     $strategic_sub_two['strategic_activity']   = $request->$strategic_activity;
        //                     $strategic_sub_two['strategic_indicator']   = $request->$strategic_indicator;
        //                     $strategic_sub_two['strategic_unit']   = $request->$strategic_unit;
        //                     $strategic_sub_two['strategic_indicator_value']   = $request->$strategic_indicator_value;
        //                     $strategic_sub_two['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
        //                     $strategic_sub_two['strategic_target_excellent']   = $request->$strategic_target_excellent;
        //                     $strategic_sub_two['strategic_target_fine']   = $request->$strategic_target_fine;
        //                     $strategic_sub_two['strategic_target_value']   = $request->$strategic_target_value;
        //                     $strategic_sub_two['strategic_target_below']   = $request->$strategic_target_below;
        //                     $strategic_sub_two['strategic_margin']   = $request->$strategic_margin;
        //                     $strategic_sub_two['strategic_responsible']   = $request->$strategic_responsible;
        //                     DB::table('section_three_second_part_sub_2')->insert($strategic_sub_two);
        //                 }
        //             }
        //         }
        //     }
        // }



        foreach ($request->budget_sub as $budget_sub) {
            $budget['budget_sub'] = $budget_sub;
            $budget['unique_form_id']   = $format;
            DB::table('appendix_nine_mis')->insert($budget);
        }

        $outcome_id = $request->outcome_id;

        // for ($i = 41; $i <= $outcome_id; $i++) {
        //     $impact = 'impact_' . $i;
        //     $indicator = 'indicator_' . $i;
        //     $unit = 'unit_' . $i;
        //     $achivement_star = 'achivement_star_' . $i;
        //     $target = 'target_' . $i;
        //     $achivement = 'achivement_' . $i;
        //     $comments = 'comments_' . $i;
        //     $outcome_data['impact'] = $request->$impact;
        //     $outcome_data['indicator']   = $request->$indicator;
        //     $outcome_data['unit']   = $request->$unit;
        //     $outcome_data['achivement_star']   = $request->$achivement_star;
        //     $outcome_data['target']   = $request->$target;
        //     $outcome_data['achivement']   = $request->$achivement;
        //     $outcome_data['comments']   = $request->$comments;
        //     $outcome_data['unique_form_id']   = $format;
        //     DB::table('section_two_outcome')->insert($outcome_data);
        // }
        // /* second part */
        // $row_two = $request->strategic_row_id;

        // for ($i = 61; $i <= $row_two; $i++) {
        //     $section_three_second_part = new SectionThreeSecondPart();
        //     $strategic_purpose = 'strategic_purpose_' . $i;
        //     $strategic_purpose_value = 'strategic_purpose_value_' . $i;
        //     $strategic_activity = 'strategic_activity_' . $i;
        //     $strategic_indicator = 'strategic_indicator_' . $i;
        //     $strategic_unit = 'strategic_unit_' . $i;
        //     $strategic_indicator_value = 'strategic_indicator_value_' . $i;
        //     $strategic_target_extraordinary = 'strategic_target_extraordinary_' . $i;
        //     $strategic_target_excellent     = 'strategic_target_excellent_' . $i;
        //     $strategic_target_fine          = 'strategic_target_fine_' . $i;
        //     $strategic_target_value         = 'strategic_target_value_' . $i;
        //     $strategic_target_below         = 'strategic_target_below_' . $i;
        //     $strategic_margin               = 'strategic_margin_' . $i;
        //     $strategic_responsible          = 'strategic_responsible_' . $i;
        //     $section_three_second_part['strategic_purpose']   = $request->$strategic_purpose;
        //     $section_three_second_part['strategic_purpose_value']   = $request->$strategic_purpose_value;
        //     $section_three_second_part['strategic_activity']   = $request->$strategic_activity;
        //     $section_three_second_part['strategic_indicator']   = $request->$strategic_indicator;
        //     $section_three_second_part['strategic_unit']   = $request->$strategic_unit;
        //     $section_three_second_part['strategic_indicator_value']   = $request->$strategic_indicator_value;
        //     $section_three_second_part['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
        //     $section_three_second_part['strategic_target_excellent']   = $request->$strategic_target_excellent;
        //     $section_three_second_part['strategic_target_fine']   = $request->$strategic_target_fine;
        //     $section_three_second_part['strategic_target_value']   = $request->$strategic_target_value;
        //     $section_three_second_part['strategic_target_below']   = $request->$strategic_target_below;
        //     $section_three_second_part['strategic_margin']   = $request->$strategic_margin;
        //     $section_three_second_part['strategic_responsible']   = $request->$strategic_responsible;
        //     $section_three_second_part['unique_form_id'] = $format;
        //     $section_three_second_part->save();

        //     for ($k = 1; $k <= $row_two; $k++) {
        //         $sub_row = 'strategic_row_id_' . $i . '_' . $k;
        //         $subRows = $request->$sub_row;
        //         if ($subRows) {
        //             $strategic_purpose = 'strategic_purpose_' . $i . '_' . $k;
        //             $strategic_purpose_value = 'strategic_purpose_value_' . $i . '_' . $k;
        //             $strategic_activity = 'strategic_activity_' . $i . '_' . $k;
        //             $strategic_indicator = 'strategic_indicator_' . $i . '_' . $k;
        //             $strategic_unit = 'strategic_unit_' . $i . '_' . $k;
        //             $strategic_indicator_value = 'strategic_indicator_value_' . $i . '_' . $k;
        //             $strategic_target_extraordinary     = 'strategic_target_extraordinary_' . $i . '_' . $k;
        //             $strategic_target_excellent     = 'strategic_target_excellent_' . $i . '_' . $k;
        //             $strategic_target_fine      = 'strategic_target_fine_' . $i . '_' . $k;
        //             $strategic_target_value     = 'strategic_target_value_' . $i . '_' . $k;
        //             $strategic_target_below     = 'strategic_target_below_' . $i . '_' . $k;
        //             $strategic_margin           = 'strategic_margin_' . $i . '_' . $k;
        //             $strategic_responsible         = 'strategic_responsible_' . $i . '_' . $k;
        //             $strategic_sub   = new SectionThreeSecondPartSub();
        //             $strategic_sub['strategic_row_id']   = $section_three_second_part->id;
        //             $strategic_sub['strategic_purpose']   = $request->$strategic_purpose;
        //             $strategic_sub['strategic_purpose_value']   = $request->$strategic_purpose_value;
        //             $strategic_sub['strategic_activity']   = $request->$strategic_activity;
        //             $strategic_sub['strategic_activity']   = $request->$strategic_indicator;
        //             $strategic_sub['strategic_unit']   = $request->$strategic_unit;
        //             $strategic_sub['strategic_indicator_value']   = $request->$strategic_indicator_value;
        //             $strategic_sub['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
        //             $strategic_sub['strategic_target_excellent']   = $request->$strategic_target_excellent;
        //             $strategic_sub['strategic_target_fine']   = $request->$strategic_target_fine;
        //             $strategic_sub['strategic_target_value']   = $request->$strategic_target_value;
        //             $strategic_sub['strategic_target_below']   = $request->$strategic_target_below;
        //             $strategic_sub['strategic_margin']   = $request->$strategic_margin;
        //             $strategic_sub['strategic_responsible']   = $request->$strategic_responsible;
        //             $strategic_sub->save();
        //             for ($j = 1; $j <= $row_two; $j++) {
        //                 $sub_row_2 = 'strategic_row_id_' . $i . '_' . $k . '_' . $j;
        //                 $subRows2 = $request->$sub_row_2;
        //                 if ($subRows2) {
        //                     $strategic_purpose       = 'strategic_purpose_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_purpose_value = 'strategic_purpose_value_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_activity      = 'strategic_activity_' .  $i . '_' . $k . '_' . $j;
        //                     $strategic_indicator     = 'strategic_indicator_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_unit          = 'strategic_unit_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_indicator_value = 'strategic_indicator_value_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_target_extraordinary = 'strategic_target_extraordinary_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_target_excellent = 'strategic_target_excellent_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_target_fine = 'strategic_target_fine_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_target_value = 'strategic_target_value_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_target_below = 'strategic_target_below_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_margin = 'strategic_margin_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_responsible = 'strategic_responsible_' . $i . '_' . $k . '_' . $j;
        //                     $strategic_sub_two['strategic_row_id']   = $strategic_sub->id;
        //                     $strategic_sub_two['strategic_purpose']   = $request->$strategic_purpose;
        //                     $strategic_sub_two['strategic_purpose_value']   = $request->$strategic_purpose_value;
        //                     $strategic_sub_two['strategic_activity']   = $request->$strategic_activity;
        //                     $strategic_sub_two['strategic_indicator']   = $request->$strategic_indicator;
        //                     $strategic_sub_two['strategic_unit']   = $request->$strategic_unit;
        //                     $strategic_sub_two['strategic_indicator_value']   = $request->$strategic_indicator_value;
        //                     $strategic_sub_two['strategic_target_extraordinary']   = $request->$strategic_target_extraordinary;
        //                     $strategic_sub_two['strategic_target_excellent']   = $request->$strategic_target_excellent;
        //                     $strategic_sub_two['strategic_target_fine']   = $request->$strategic_target_fine;
        //                     $strategic_sub_two['strategic_target_value']   = $request->$strategic_target_value;
        //                     $strategic_sub_two['strategic_target_below']   = $request->$strategic_target_below;
        //                     $strategic_sub_two['strategic_margin']   = $request->$strategic_margin;
        //                     $strategic_sub_two['strategic_responsible']   = $request->$strategic_responsible;
        //                     DB::table('section_three_second_part_sub_2')->insert($strategic_sub_two);
        //                 }
        //             }
        //         }
        //     }
        // }
    }
    /* end unique store */


    /* appendix 9  end */

    public function list_of_form()
    {

        $data['forms'] = DB::table('forms')->orderBy('id', 'desc')->get();
        return view('admin.pages.form.list_of_form', $data);
    }


    public function list_of_submitted_reports()
    {



        $present = Auth::user()->id;
        $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', $present)->where('status', true)->latest()->get();
        return view('admin.pages.form.list_of_submitted_reports', $data);
    }


    public function list_of_pending_reports()
    {

        $pending = Auth::user()->id;
        $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', $pending)->where('status', false)->latest()->get();
        return view('admin.pages.form.list_of_pending_reports', $data);
    }





		    public function create_form_table(Request $request)
    {
    //   print_r($request->all());die;
        $form_id = DB::table('forms')->insertGetId(['form_name' => $request->form_name, 'form_id' => $request->form_id, 'html_form' => $request->html_form]);
        $sl = 1;
				//return $request->table_name;

	
        foreach ($request->table_name as $rowTable) {

					//  $first_row = str_replace(' ','_',$rowTable);
					//  $final_row = str_replace('-','_',$first_row);

			// 		$first_row = str_replace( array( '\'', '"',
      // ',' , ';', '<', '>'), ' ', $rowTable);
			      $first_row = str_replace( array( '\'', '"',
      ',' , ';', '<', '>','(','%',')','-','=','+'), ' ', $rowTable);
		      	$final_row = str_replace(' ','_',$first_row);
            DB::table('form_tables')->insert(['form_id' => $form_id, 'table_name' => $final_row,'table_headline' => $request->table_headline]);
            $columns = '';
            $columnData = 'table_' . $sl . '_column_name';
            foreach ($request->$columnData as $rowColumn) {
							$first = str_replace(' ', '_',$rowColumn);
							$second = str_replace('-', '_',$first);
              $columns .=   $second . '  VARCHAR(250)  DEFAULT NULL, ';
            }

           

    $createTableSqlString = "CREATE TABLE $final_row (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        table_name varchar(250) ,
       $columns
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

            DB::statement($createTableSqlString);

            $sl++;
        }
        return $form_id;
    }




		/* passSomeData */


	 public function passSomeData($id){
			  $data['form'] = DB::table('forms')->where('id', $id)->get();
        $data['form_tables'] = DB::table('form_tables')->where('form_id', $id)->get();
				$data['table_info'] = $data['form_tables'][0]->table_name;
				// print_r($data['table_info']); die;
	    	$data['data_value'] = DB::table($data['table_info'])->orderBy('id','desc')->get();
				return response()->json($data['data_value'][0]->id);



	 }

	 

	 public function select_user_id($id){

		$data['form'] = DB::table('users')->where('id', $id)->get();
	
			return response()->json($data['form'][0]->name);


	 }
		


		public function tableCreate(Request $request){
  // echo '<pre>';
	// 	print_r($request->all()); die;
	    $tough = $request->all();
			$array = array_slice($tough,4,-1);
      $tablename = $request->db_table_name;
	    $keys   =	array_keys($array);
	    $values = array_values($array);


			// echo '<pre>';
			// print_r($splice_values);die;
			$nnc = implode("`,`",$keys);
			$bbc = implode("','",$values);

			
	  	$sql = "INSERT INTO `$tablename` (`$nnc`) VALUES ('$bbc')";
    	DB::statement($sql);

			return redirect()->back();
		 
		}

    /* ****** */

    public function submit_form($id, $def = null)
    {
        SwitchLanguage(Session::get('language'));
        $data['form'] = DB::table('default_sub_forms')->where('id', $id)->get();
        $data['dept'] = Department::all();
        $data['inst'] = Institutions::all();
        $data['ministry'] = Ministry::all();
        $data['office'] = Office::all();
        $data['unitoffice'] = UnitOffice::all();
        $data['group_get_pro'] = GroupUser::get();

        // $data['get_the_test'] = GroupUser::where('user_id', Auth::user()->id)->get();
        // $data['user_get_pro'] = DB::table('user_forms')->where('sub_form_id', '=', $id)->where('method', 'user')->where('reciever_user_id', Auth::user()->id)->get();
        // $data['group_get_pro'] = DB::table('user_forms')->where('sub_form_id', '=', $id)->where('method', 'group')->get();
        $data['userforms'] = DB::table('user_forms')->where('reciever_user_id', Auth::user()->id)->where('sub_form_id', '=', $id)->get();
        // $damn =  GroupUser::where('user_id', Auth::user()->id)->get();


        // echo '<pre>';
        // print_r($data['group_get_pro']);
        // die;
        // $group_user = GroupUser::where('user_id', Auth::user()->id)->get();
        // $group = Group::where('id', $group_user[0]->group_id)->get();
        // $data['group_get_pro'] = DB::table('user_forms')
        //     ->whereNotNull('sub_form_id_unique_id')
        //     // ->where('method', 'group')
        //     // ->where('group_id', $group[0]->id)
        //     ->where('sub_form_id', $id)
        //     ->get();
        // // echo '<pre>';
        // // print_r($data['group_get_pro']);
        // // die;


        return view('admin.pages.form.submit_form.submit_form', $data);
    }

		/* created submitted form */
		public function created_submit_form($id,$def = null){


			  $data['userforms'] = DB::table('user_forms')->where('reciever_user_id', Auth::user()->id)->orWhere('sender_user_id',Auth::user()->id)->where('sub_form_id', '=', $id)->get();
				 $get_created_form_id = $data['userforms'][0]->sub_form_id;
				$data['form_tables'] = DB::table('form_tables')->where('form_id', $id)->get();
				$data['generated_form'] = DB::table('forms')->where('id', $id)->get();
				$data['table_info'] = $data['form_tables'][0]->table_name;
	    	$data['data_value'] = DB::table($data['table_info'])->latest()->get();
      //   echo '<pre>';
			// print_r($data['data_value']); die;
				return view('admin.pages.form.submit_form.created_submit_form', $data);
		}


		/* view form */

		 public function view_form($id,$def = null){
        SwitchLanguage(Session::get('language'));
        $data['form'] = DB::table('forms')->where('id', $id)->get();
        $data['form_tables'] = DB::table('form_tables')->where('form_id', $id)->get();
			
				$data['table_info'] = $data['form_tables'][0]->table_name;
	    	$data['data_value'] = DB::table($data['table_info'])->latest()->get();
				$data['data_rem'] =json_decode(json_encode($data['data_value'] ,true),true);
						//print_r($data['data_value']);die;
        return view('admin.pages.form.view', $data);
    }


    // pdf generate

    public function generate_pdf()
    {
      $data = [
        'foo' => 'bar'
      ];
      $pdf = PDF::loadView('myPDF', $data);
       return $pdf->download('document.pdf');
    }
		

		public function generated_update(Request $request){

	     	

			// $tough = $request->all();
			// $array = array_slice($tough,2,-1);
      // $tablename = $request->db_table_name;
	    // $keys   =	array_keys($array);
	    // $values = array_values($array);


			
			// // print_r($splice_values);die;
			// $nnc = implode("`,`",$keys);
			// $bbc = implode("','",$values);
    //  echo '<pre>';
		// 	print_r($dam);die;

			
	  	// $sql = "INSERT INTO `$tablename` (`$nnc`) VALUES ('$bbc')";


				  // $data[''] =

					


				//$kulta = Auth::user()->id;

					// $base_url = URL::to('/');

 			  	// $laaz = array_slice($dam,3);
          
					// echo '<pre>'; 
				  // print_r($laaz);die;
					 
				//  print_r($laaz);
          //  DB::table($request->table_name)->insert($laaz);
          //  DB::table($request->table_name)->insert(['user_update_by' => $kulta]);
          //  DB::table('user_forms')->where('sub_form_id',$request->form_id_get)->update(['status' => false]);
			
          //  $named = DB::table('user_forms')->where('sub_form_id',$request->form_id_get)->where('reciever_user_id',Auth::user()->id)->orWhere('sender_user_id',Auth::user()->id)->get();
							  	// $laaz = array_slice($dam,3);

						//    DB::table('development_project_annual_program_sub_rows')->where('id', '=', $subRow)->where('unique_form_id', '=', $unique_form_id)->update($sub_data);
            // $sub_data->update();			
  $dam = $request->all();


							
										        DB::table($request->table_name)->update($dam);
			
   



           $named = DB::table('user_forms')->where('sub_form_id',$request->form_id_get)->where('reciever_user_id',Auth::user()->id)->orWhere('sender_user_id',Auth::user()->id)->get();
            $to_user_data = User::find($named[0]->sender_user_id);
            $sendNotification = Auth::user()->name . " has updated the form.";
            $link = URL::to('/').'/created-submit-form/' . $request->form_id_get . '';
            event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
            Session::put(['title' => 'Alert', 'message' =>  'Form has been submitted successfully!']);

						return redirect()->back();

		}




		/* end */

    public function stored_form($id, $datas)
    {


        SwitchLanguage(Session::get('language'));
        $data['form'] = DB::table('default_sub_forms')->where('id', $id)->get();
        $data['dept'] = Department::all();
        $data['inst'] = Institutions::all();
        $data['ministry'] = Ministry::all();
        $data['office'] = Office::all();
        $data['unitoffice'] = UnitOffice::all();
        $data['datas'] = $datas;
        $data['userforms'] = DB::table('user_forms')->where('reciever_user_id', Auth::user()->id)->where('sub_form_id', '=', $id)->get();
        $data['alluniques']  = DB::table('annual_performance_agreement_quarterly')->where('form_id', $id)->distinct()->get(['unique_form_id']);




        return view('admin.pages.form.stored_unique_form.stored_forms_unique', $data);
    }


    public function indiv_stored_form($id)
    {





        SwitchLanguage(Session::get('language'));
        $data['form'] = DB::table('default_sub_forms')->where('id', $id)->get();
        $data['dept'] = Department::all();
        $data['inst'] = Institutions::all();
        $data['ministry'] = Ministry::all();
        $data['office'] = Office::all();
        $data['unitoffice'] = UnitOffice::all();
        // $data['userforms'] = DB::table('user_forms')->where('reciever_user_id', Auth::user()->id)->where('sub_form_id', '=', $id)->get();
        // $data['alluniques']  = DB::table('annual_performance_agreement_quarterly')->where('form_id', $id)->distinct()->get(['unique_form_id']);

        $data['parameter'] = DB::table('parameter')->where('form_id', $id)->latest()->get();




        return view('admin.pages.form.stored_unique_form.stored_forms_unique', $data);
    }

    // public function testBand()
    // {

    //     $damn = Auth::user();

    //     foreach ($damn as $damn) {
    //         return $damn->role_info->name;
    //     }
    // }


    public function create_unique_form($id)
    {
        SwitchLanguage(Session::get('language'));
        $data['form'] = DB::table('default_sub_forms')->where('id', $id)->get();
        $data['dept'] = Department::all();
        $data['inst'] = Institutions::all();
        $data['ministry'] = Ministry::all();
        $data['office'] = Office::all();
        $data['unitoffice'] = UnitOffice::all();
        return view('admin.pages.form.store_form.store_form', $data);
    }

    // public function testBand(Request $request)
    // {
    //     return $request->all();
    // }




    public function get_form_for_submit(Request $request)
    {
        $data['form'] = DB::table('default_sub_forms')->where('id', $request->form_id)->get();


        $getuser = $request->reciever_user_id;
        $unique_form_id_get = $request->unique_form_id_get;
        $uni_id = $request->useridget;
        $usersubform = $request->usersubform;
        $uniques_id  = $request->uniques_id;
        $group_id  = $request->group_id;
        $method  = $request->method;


        // $group_user = GroupUser::where('user_id', Auth::user()->id)->get();

        // $group = Group::where('id', $group_user[0]->group_id)->get();




        // $group_get_pro = DB::table('user_forms')
        //     ->whereNotNull('sub_form_id_unique_id')
        //     ->where('method', 'group')
        //     ->where('group_id', $group_id)
        //     ->where('sub_form_id', $usersubform)
        //     ->get();
        // $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', 1)->get();

        // echo '<pre>';
        // print_r($data['userforms']);
        // die;

        // $dam = DB::table('group_user')->where('user_id', Auth::user()->id)->get();
        // $nam = Group::where('id', '')->get();
        // $dam = GroupUser::where('user_id', Auth::user()->id)->get();
        // $data['kala'] = Group::where('id', $dam[0]->group_id)->get();

        $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();

        // $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('method', 'group')->where('group_id', 23)->get();
        // $dam = GroupUser::where('user_id', Auth::user()->id)->get();
        // $great = Group::where('id', $dam[0]->group_id)->get();
        // // return $what = $great[0]->id;
        // echo '<pre>';
        // print_r($dam);
        // die;


/* test purpose */


        if ($request->form_id == 3) {

            $data['all_columuns'] = NationalIntegrityStrategyActionPlanModel::where('form_id', '=', '3')->where('unique_form_id', '=', $uni_id)->get();
            $years = NationalIntegrityStrategyActionPlanModel::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_one', $data, compact('years'));
        }



        // $land = Group::where('id', $dam[0]->)->get();





        // foreach ($dam as  $meow) {
        //     return $meow->group;
        // }


        // $dam->group;

        // $array = $dam;
        // foreach ($dam as $dam) {
        //     $array[] = $dam;
        // }
        // print_r($array);
        // die;





        // echo '<pre>';
        // print_r($data['userforms']);
        // die;



        if ($request->form_id == 1) {

            $data['all_columuns'] = AnnualPerformanceQuarterly::where('form_id', '=', $request->form_id)->where('unique_form_id', '=', $uni_id)->get();
            $years = AnnualPerformanceQuarterly::select('years')->take(1)->get();
            $divisoname = Division::all();
            $updated_time  = Carbon::now()->format('Y-m-d');
            // $data['user_get_pro'] = DB::table('user_forms')->where('sub_form_id', '=', $request->form_id)->where('method', 'user')->where('reciever_user_id', Auth::user()->id)->get();
            // $data['group_get_pro'] = DB::table('user_forms')->where('sub_form_id', '=', $request->form_id)->where('method', 'group')->get();

            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();

            // if ($send_type == 'user') {
            //     $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            // } else {
            //     $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('group_id', '=', $great)->where('sub_form_id', $usersubform)->get();
            // }

            return view('admin.pages.default_forms.submit_form.submit_form_two_point_one', $data, compact('years'));
        }

        if ($request->form_id == 3) {

            $data['all_columuns'] = NationalIntegrityStrategyActionPlanModel::where('form_id', '=', '3')->where('unique_form_id', '=', $uni_id)->get();
            $years = NationalIntegrityStrategyActionPlanModel::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_one', $data, compact('years'));
        }


        if ($request->form_id == 4) {
            $data['all_columuns'] = EGovernanceInnovationActionPlan::where('form_id', '=', '4')->where('unique_form_id', '=', $uni_id)->get();
            $years = EGovernanceInnovationActionPlan::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_two', $data, compact('years'));
        }

        if ($request->form_id == 5) {
            $data['all_columuns'] = ComplaintRedressalActionPlan::where('form_id', '=', $request->form_id)->where('unique_form_id', '=', $uni_id)->get();
            $divisoname = Division::all();
            $updated_time  = Carbon::now()->format('Y-m-d');
            $years = ComplaintRedressalActionPlan::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_three', $data, compact('years'));
        }

        if ($request->form_id == 6) {
            $data['all_columuns'] = ImplementServiceDeliveryCommitments::where('form_id', '=', '6')->where('unique_form_id', '=', $uni_id)->get();
            $years = ImplementServiceDeliveryCommitments::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_four', $data, compact('years'));
        }

        if ($request->form_id == 7) {
            $data['all_columuns'] = FinancialYeartheRightInformation::where('form_id', '=', '7')->where('unique_form_id', '=', $uni_id)->get();
            $data['all_form_id'] = DB::table('financial_year_right_information')->take(1)->get();
            $years = FinancialYeartheRightInformation::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_five', $data, compact('years'));
        }


        if ($request->form_id == 8) {
            $data['all_columuns'] = FiscalYearBudgetImplementationProgress::where('form_id', '=', '8')->where('unique_form_id', '=', $uni_id)->get();
            $years = FiscalYearBudgetImplementationProgress::select('years')->take(1)->get();
            $budyears = FiscalYearBudgetImplementationProgress::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_one_point_one_point_one', $data, compact('years', 'budyears'));
        }

        if ($request->form_id == 9) {
            $data['all_columuns'] = AutonomousAndOtherInstitutions::where('form_id', '=', '9')->where('unique_form_id', '=', $uni_id)->get();
            $years = AutonomousAndOtherInstitutions::select('years')->take(1)->get();
            $budyears = AutonomousAndOtherInstitutions::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_one_point_one_point_two', $data, compact('years', 'budyears'));
        }


        if ($request->form_id == 10) {
            $data['all_columuns'] = ExcludingAnnualDevelopmentPrograms::where('form_id', '=', '10')->where('unique_form_id', '=', $uni_id)->get();
            $years = ExcludingAnnualDevelopmentPrograms::select('years')->take(1)->get();
            $budyears = ExcludingAnnualDevelopmentPrograms::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_one_point_two_point_one', $data, compact('years', 'budyears'));
        }

        if ($request->form_id == 11) {
            $data['all_columuns'] = DevelopmentProjectAnnualProgram::where('form_id', '=', '11')->where('unique_form_id', '=', $uni_id)->get();
            $years = DevelopmentProjectAnnualProgram::select('years')->take(1)->get();
            $budyears = DevelopmentProjectAnnualProgram::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_one_point_two_point_two', $data, compact('years', 'budyears'));
        }

        if ($request->form_id == 12) {
            $data['all_columuns'] = TotalManagementDevelopmentCosts::where('form_id', '=', '12')->where('unique_form_id', '=', $uni_id)->latest()->take(1)->get();
            $years = TotalManagementDevelopmentCosts::select('years')->latest()->take(1)->get();
            $budyears = TotalManagementDevelopmentCosts::select('years')->latest()->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_one_point_three', $data, compact('years', 'budyears'));
        }

        if ($request->form_id == 13) {
            $data['budget'] = BudgetBranchRelevantAPAReportFormat::where('form_id', '=', '13')->where('unique_form_id', '=', $uni_id)->get();
            $data['relapa'] = RelevantBudgetAPAReportFormat::where('form_id', '=', '13')->where('unique_form_id', '=', $uni_id)->get();
            $data['apa']    = AnnualPerformanceAgreenment::where('form_id', '=', '13')->where('unique_form_id', '=', $uni_id)->get();
            $data['apat']   = AnnualPerformanceAgreenmentTable::where('form_id', '=', '13')->where('unique_form_id', '=', $uni_id)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_budget_branch', $data);
        }


        if ($request->form_id == 18) {
            $lines        = AppendixOneLines::where('form_id', '=', '18')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $table_ka     = AppendixOneTableka::where('form_id', '=', '18')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $table_kha    = AppendixOneTablekha::where('form_id', '=', '18')->where('unique_form_id', '=', $uni_id)->take(1)->take(2)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_one', compact('lines', 'table_ka', 'table_kha'));
        }


        if ($request->form_id == 19) {
            $lines        = DB::table('appendix_two_mis')->where('form_id', '=', '19')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $table_ka     = DB::table('appendix_two_table_ka')->where('form_id', '=', '19')->where('unique_form_id', '=', $uni_id)->latest()->take(2)->get();
            $table_kha    = DB::table('appendix_two_table_kha')->where('form_id', '=', '19')->where('unique_form_id', '=', $uni_id)->latest()->take(2)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_two', compact('lines', 'table_ka', 'table_kha'));
        }


        if ($request->form_id == 20) {

            $lines           = DB::table('appendix_three_mis')->where('form_id', '=', '20')->where('unique_form_id', '=', $uni_id)->latest()->take(2)->get();
            $table_three     = DB::table('appendix_three_table')->where('form_id', '=', '20')->where('unique_form_id', '=', $uni_id)->latest()->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_three', compact('lines', 'table_three'));
        }


        if ($request->form_id == 21) {

            $data['lines']          = DB::table('appendix_four_mis')->where('form_id', '=', '21')->where('unique_form_id', '=', $uni_id)->latest()->take(2)->get();
            $data['table_three']     = DB::table('appendix_four_table')->where('form_id', '=', '21')->where('unique_form_id', '=', $uni_id)->latest()->take(3)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();

            return view('admin.pages.default_forms.submit_form.submit_appendix_four', $data);
        }


        if ($request->form_id == 22) {



            SwitchLanguage(Session::get('language'));
            $data['mis8']           = DB::table('appendix_five_mis')->where('form_id', '=', '22')->where('unique_form_id', '=', $uni_id)->whereNotNull('budget_sub8')->take(1)->get();
            $data['mis9']           = DB::table('appendix_five_mis')->where('form_id', '=', '22')->where('unique_form_id', '=', $uni_id)->whereNotNull('budget_sub9')->take(1)->get();
            $data['mis2009']        = DB::table('appendix_five_mis')->where('form_id', '=', '22')->where('unique_form_id', '=', $uni_id)->whereNotNull('budget_sub2009')->take(1)->get();
            $data['tab5']           = DB::table('appendix_five_table')->where('form_id', '=', '22')->where('unique_form_id', '=', $uni_id)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            // echo '<pre>';
            // print_r($data['mis8']);
            // die;
            return view('admin.pages.default_forms.submit_form.submit_appendix_five', $data);
        }


        if ($request->form_id == 23) {

            $lines           = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->latest()->get();
            $head1           = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_1_head')->take(1)->get();
            $head2           = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_2_head')->take(1)->get();
            $head3           = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_3_head')->take(1)->get();
            $claim_1         = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_1')->take(7)->get();
            $claim_3         = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_3')->take(10)->get();
            $claim_3_1       = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_3_1')->take(5)->get();
            $budget_sub      = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('budget_sub')->take(2)->get();
            $lines           = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->latest()->get();
            $table_six       = DB::table('appendix_six_claims_table')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->take(4)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_six', compact('lines', 'table_six', 'head1', 'head2', 'head3', 'claim_1', 'claim_3', 'claim_3_1', 'budget_sub'));
        }
        /*  */

        if ($request->form_id == 24) {

            $data['budget_sub']          = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('budget_sub')->take(3)->get();
            $data['amount']              = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('amount')->take(1)->get();
            $data['heading_financial_1'] = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('heading_financial_1')->take(1)->get();
            $data['heading_financial_2'] = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('heading_financial_2')->take(1)->get();
            $data['point_1_0']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_1_0')->take(1)->get();
            $data['point_1_1']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_1_1')->take(1)->get();
            $data['point_1_1_line']      = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_1_1_line')->take(1)->get();
            $data['point_1_2']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_1_2')->take(1)->get();
            $data['point_1_2_lines']     = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_1_2_lines')->take(8)->get();
            $data['point_2_0']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_2_0')->take(1)->get();
            $data['point_3_0']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_0')->take(1)->get();
            $data['point_3_1']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1')->take(1)->get();
            $data['point_3_1_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_1')->take(1)->get();
            $data['point_3_1_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_2')->take(1)->get();
            $data['point_3_1_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_3')->take(1)->get();
            $data['point_3_1_4']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_4')->take(1)->get();
            $data['point_3_1_5']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_5')->take(1)->get();
            $data['point_3_1_1_lines']   = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_1_lines')->take(2)->get();
            $data['point_3_1_2_lines']   = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_2_lines')->take(2)->get();
            $data['point_3_1_3_lines']   = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_3_lines')->take(2)->get();
            $data['point_3_1_4_lines']   = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_4_lines')->take(2)->get();
            $data['point_3_1_5_lines']   = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_5_lines')->take(2)->get();
            $data['point_3_2']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_2')->take(1)->get();
            $data['point_4_1']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_4_1')->take(1)->get();
            $data['point_4_2']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_4_2')->take(1)->get();
            $data['point_4_2_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_4_2_1')->take(1)->get();
            $data['point_4_2_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_4_2_2')->take(1)->get();
            $data['point_5_0']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_5_0')->take(1)->get();
            $data['point_6_0']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_0')->take(1)->get();
            $data['point_6_1']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_1')->take(1)->get();
            $data['point_6_1_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_1_1')->take(1)->get();
            $data['point_6_1_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_1_2')->take(1)->get();
            $data['point_6_1_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_1_3')->take(1)->get();
            $data['point_6_2']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_2')->take(1)->get();
            $data['point_6_2_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_2_1')->take(1)->get();
            $data['point_6_2_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_2_2')->take(1)->get();
            $data['point_6_2_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_2_3')->take(1)->get();
            $data['point_6_3']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_3')->take(1)->get();
            $data['point_6_3_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_3_1')->take(1)->get();
            $data['point_6_3_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_3_2')->take(1)->get();
            $data['point_6_3_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_3_3')->take(1)->get();
            $data['point_6_4']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_4')->take(1)->get();
            $data['point_6_4_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_4_1')->take(1)->get();
            $data['point_6_4_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_4_2')->take(1)->get();
            $data['point_6_4_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_4_3')->take(1)->get();
            $data['point_6_5']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_5')->take(1)->get();
            $data['point_6_5_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_5_1')->take(1)->get();
            $data['point_6_5_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_5_2')->take(1)->get();
            $data['point_6_5_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_5_3')->take(1)->get();
            $data['point_6_6']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_6')->take(1)->get();
            $data['point_6_6_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_6_1')->take(1)->get();
            $data['point_6_6_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_6_2')->take(1)->get();
            $data['point_6_6_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_6_3')->take(1)->get();
            $data['point_6_7']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_7')->take(1)->get();
            $data['point_6_7_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_7_1')->take(1)->get();
            $data['point_6_7_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_7_2')->take(1)->get();
            $data['point_6_7_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_7_3')->take(1)->get();
            $data['one_row_id']          = DB::table('appendix_seven_table_1')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['two_row_id']          = TableTwo::where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['three_row_id']        = DB::table('appendix_seven_table_3')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['four_row_id']         = DB::table('appendix_seven_table_4')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['five_row_id']         = DB::table('appendix_seven_table_5')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['six_row_id']          = DB::table('appendix_seven_table_6')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['seven_row_id']        = DB::table('appendix_seven_table_7')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['eight_row_id']        = DB::table('appendix_seven_table_8')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['nine_row_id']         = DB::table('appendix_seven_table_9')->get();
            $data['ten_row_id']          = DB::table('appendix_seven_table_10')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['twel_row_id']         = DB::table('appendix_seven_table_12')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['eleven_row_id']       = DB::table('appendix_seven_table_11')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['thirteen_row_id']     = DB::table('appendix_seven_table_13')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['fourteen_row_id']     = FourteenTable::where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['fifteen_row_id']      = DB::table('appendix_seven_table_15')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['sixteen_row_id']      = DB::table('appendix_seven_table_16')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['seventeen_row_id']    = DB::table('appendix_seven_table_17')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['eighteen_row_id']     = DB::table('appendix_seven_table_18')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['nineteen_row_id']     = DB::table('appendix_seven_table_19')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['twenty_row_id']       = TableTwenty::where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['twentyone_row_id']    = DB::table('appendix_seven_table_21')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->get();

            return view('admin.pages.default_forms.submit_form.submit_appendix_seven', $data);
        }

        if ($request->form_id == 31) {

            SwitchLanguage(Session::get('language'));
            $data['first_part']           = DB::table('section_three_first_part_appeight')->where('form_id', '=', '31')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $data['second_part']           = DB::table('section_three_second_part_appeight')->where('form_id', '=', '31')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $data['outcomes']           = DB::table('section_two_outcome_eight')->where('form_id', '=', '31')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $data['budget_sub']           = DB::table('appendix_eight_mis')->where('form_id', '=', '31')->where('unique_form_id', '=', $uni_id)->take(3)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_eight', $data);
        }


        if ($request->form_id == 32) {

            $data['all_columuns'] = SectionThreeFirstPart::where('form_id', '=', '32')->where('unique_form_id', '=', $uni_id)->get();
            $data['strategic'] = SectionThreeSecondPart::where('form_id', '=', '32')->where('unique_form_id', '=', $uni_id)->get();
            $data['outcomes']           = DB::table('section_two_outcome')->where('form_id', '=', '32')->where('unique_form_id', '=', $uni_id)->take(5)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_nine', $data);
        }
    }

    public function get_stored_submit(Request $request)
    {

        $data['form'] = DB::table('default_sub_forms')->where('id', $request->form_id)->get();




        $getuser = $request->reciever_user_id;
        $unique_form_id_get = $request->unique_form_id_get;
        $uni_id = $request->useridget;
        $usersubform = $request->usersubform;
        $set = $request->set;
        $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();

        // echo '<pre>';
        // print_r($data['userforms']);
        // die;


        if ($request->form_id == 1) {
            $data['all_columuns'] = AnnualPerformanceQuarterly::where('unique_form_id', $request->set)->get();
            $years = AnnualPerformanceQuarterly::select('years')->take(1)->get();
            $divisoname = Division::all();
            $updated_time  = Carbon::now()->format('Y-m-d');
            $data['userforms'] = DB::table('user_forms')->get();
            $data['divisionss'] = Division::all();

            return view('admin.pages.default_forms.stored_forms_unique.stored_form_two_point_one', $data, compact('years'));
        }

        if ($request->form_id == 3) {

            $data['all_columuns'] = NationalIntegrityStrategyActionPlanModel::where('form_id', '=', '3')->where('unique_form_id', '=', $uni_id)->get();
            $years = NationalIntegrityStrategyActionPlanModel::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_one', $data, compact('years'));
        }


        if ($request->form_id == 4) {
            $data['all_columuns'] = EGovernanceInnovationActionPlan::where('form_id', '=', '4')->where('unique_form_id', '=', $uni_id)->get();
            $years = EGovernanceInnovationActionPlan::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_two', $data, compact('years'));
        }

        if ($request->form_id == 5) {
            $data['all_columuns'] = ComplaintRedressalActionPlan::where('form_id', '=', '5')->where('unique_form_id', '=', $uni_id)->get();
            $years = ComplaintRedressalActionPlan::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_three', $data, compact('years'));
        }

        if ($request->form_id == 6) {
            $data['all_columuns'] = ImplementServiceDeliveryCommitments::where('form_id', '=', '6')->where('unique_form_id', '=', $uni_id)->get();
            $years = ImplementServiceDeliveryCommitments::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_four', $data, compact('years'));
        }

        if ($request->form_id == 7) {
            $data['all_columuns'] = FinancialYeartheRightInformation::where('form_id', '=', '7')->where('unique_form_id', '=', $uni_id)->get();
            $data['all_form_id'] = DB::table('financial_year_right_information')->take(1)->get();
            $years = FinancialYeartheRightInformation::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_two_point_two_point_five', $data, compact('years'));
        }


        if ($request->form_id == 8) {
            $data['all_columuns'] = FiscalYearBudgetImplementationProgress::where('form_id', '=', '8')->where('unique_form_id', '=', $uni_id)->get();
            $years = FiscalYearBudgetImplementationProgress::select('years')->take(1)->get();
            $budyears = FiscalYearBudgetImplementationProgress::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_one_point_one_point_one', $data, compact('years', 'budyears'));
        }

        if ($request->form_id == 9) {
            $data['all_columuns'] = AutonomousAndOtherInstitutions::where('form_id', '=', '9')->where('unique_form_id', '=', $uni_id)->get();
            $years = AutonomousAndOtherInstitutions::select('years')->take(1)->get();
            $budyears = AutonomousAndOtherInstitutions::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_one_point_one_point_two', $data, compact('years', 'budyears'));
        }


        if ($request->form_id == 10) {
            $data['all_columuns'] = ExcludingAnnualDevelopmentPrograms::where('form_id', '=', '10')->where('unique_form_id', '=', $uni_id)->get();
            $years = ExcludingAnnualDevelopmentPrograms::select('years')->take(1)->get();
            $budyears = ExcludingAnnualDevelopmentPrograms::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_one_point_two_point_one', $data, compact('years', 'budyears'));
        }

        if ($request->form_id == 11) {
            $data['all_columuns'] = DevelopmentProjectAnnualProgram::where('form_id', '=', '11')->where('unique_form_id', '=', $uni_id)->get();
            $years = DevelopmentProjectAnnualProgram::select('years')->take(1)->get();
            $budyears = DevelopmentProjectAnnualProgram::select('years')->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_one_point_two_point_two', $data, compact('years', 'budyears'));
        }

        if ($request->form_id == 12) {
            $data['all_columuns'] = TotalManagementDevelopmentCosts::where('form_id', '=', '12')->where('unique_form_id', '=', $uni_id)->latest()->take(1)->get();
            $years = TotalManagementDevelopmentCosts::select('years')->latest()->take(1)->get();
            $budyears = TotalManagementDevelopmentCosts::select('years')->latest()->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_form_one_point_three', $data, compact('years', 'budyears'));
        }

        if ($request->form_id == 13) {
            $data['budget'] = BudgetBranchRelevantAPAReportFormat::where('form_id', '=', '13')->where('unique_form_id', '=', $uni_id)->get();
            $data['relapa'] = RelevantBudgetAPAReportFormat::where('form_id', '=', '13')->where('unique_form_id', '=', $uni_id)->get();
            $data['apa']    = AnnualPerformanceAgreenment::where('form_id', '=', '13')->where('unique_form_id', '=', $uni_id)->get();
            $data['apat']   = AnnualPerformanceAgreenmentTable::where('form_id', '=', '13')->where('unique_form_id', '=', $uni_id)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_budget_branch', $data);
        }


        if ($request->form_id == 18) {
            $lines        = AppendixOneLines::where('form_id', '=', '18')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $table_ka     = AppendixOneTableka::where('form_id', '=', '18')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $table_kha    = AppendixOneTablekha::where('form_id', '=', '18')->where('unique_form_id', '=', $uni_id)->take(1)->take(2)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_one', compact('lines', 'table_ka', 'table_kha'));
        }


        if ($request->form_id == 19) {
            $lines        = DB::table('appendix_two_mis')->where('form_id', '=', '19')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $table_ka     = DB::table('appendix_two_table_ka')->where('form_id', '=', '19')->where('unique_form_id', '=', $uni_id)->latest()->take(2)->get();
            $table_kha    = DB::table('appendix_two_table_kha')->where('form_id', '=', '19')->where('unique_form_id', '=', $uni_id)->latest()->take(2)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_two', compact('lines', 'table_ka', 'table_kha'));
        }


        if ($request->form_id == 20) {

            $lines           = DB::table('appendix_three_mis')->where('form_id', '=', '20')->where('unique_form_id', '=', $uni_id)->latest()->take(2)->get();
            $table_three     = DB::table('appendix_three_table')->where('form_id', '=', '20')->where('unique_form_id', '=', $uni_id)->latest()->take(1)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_three', compact('lines', 'table_three'));
        }


        if ($request->form_id == 21) {

            $data['lines']          = DB::table('appendix_four_mis')->where('form_id', '=', '21')->where('unique_form_id', '=', $uni_id)->latest()->take(2)->get();
            $data['table_three']     = DB::table('appendix_four_table')->where('form_id', '=', '21')->where('unique_form_id', '=', $uni_id)->latest()->take(3)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();

            return view('admin.pages.default_forms.submit_form.submit_appendix_four', $data);
        }


        if ($request->form_id == 22) {



            SwitchLanguage(Session::get('language'));
            $data['mis8']           = DB::table('appendix_five_mis')->where('form_id', '=', '22')->where('unique_form_id', '=', $uni_id)->whereNotNull('budget_sub8')->take(1)->get();
            $data['mis9']           = DB::table('appendix_five_mis')->where('form_id', '=', '22')->where('unique_form_id', '=', $uni_id)->whereNotNull('budget_sub9')->take(1)->get();
            $data['mis2009']        = DB::table('appendix_five_mis')->where('form_id', '=', '22')->where('unique_form_id', '=', $uni_id)->whereNotNull('budget_sub2009')->take(1)->get();
            $data['tab5']           = DB::table('appendix_five_table')->where('form_id', '=', '22')->where('unique_form_id', '=', $uni_id)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            // echo '<pre>';
            // print_r($data['mis8']);
            // die;
            return view('admin.pages.default_forms.submit_form.submit_appendix_five', $data);
        }


        if ($request->form_id == 23) {

            $lines           = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->latest()->get();
            $head1           = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_1_head')->take(1)->get();
            $head2           = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_2_head')->take(1)->get();
            $head3           = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_3_head')->take(1)->get();
            $claim_1         = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_1')->take(7)->get();
            $claim_3         = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_3')->take(10)->get();
            $claim_3_1       = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('claim_3_1')->take(5)->get();
            $budget_sub      = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->whereNotNull('budget_sub')->take(2)->get();
            $lines           = DB::table('appendix_six_claims')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->latest()->get();
            $table_six       = DB::table('appendix_six_claims_table')->where('form_id', '=', '23')->where('unique_form_id', '=', $uni_id)->take(4)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_six', compact('lines', 'table_six', 'head1', 'head2', 'head3', 'claim_1', 'claim_3', 'claim_3_1', 'budget_sub'));
        }
        /*  */

        if ($request->form_id == 24) {

            $data['budget_sub']          = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('budget_sub')->take(3)->get();
            $data['amount']              = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('amount')->take(1)->get();
            $data['heading_financial_1'] = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('heading_financial_1')->take(1)->get();
            $data['heading_financial_2'] = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('heading_financial_2')->take(1)->get();
            $data['point_1_0']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_1_0')->take(1)->get();
            $data['point_1_1']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_1_1')->take(1)->get();
            $data['point_1_1_line']      = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_1_1_line')->take(1)->get();
            $data['point_1_2']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_1_2')->take(1)->get();
            $data['point_1_2_lines']     = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_1_2_lines')->take(8)->get();
            $data['point_2_0']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_2_0')->take(1)->get();
            $data['point_3_0']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_0')->take(1)->get();
            $data['point_3_1']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1')->take(1)->get();
            $data['point_3_1_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_1')->take(1)->get();
            $data['point_3_1_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_2')->take(1)->get();
            $data['point_3_1_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_3')->take(1)->get();
            $data['point_3_1_4']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_4')->take(1)->get();
            $data['point_3_1_5']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_5')->take(1)->get();
            $data['point_3_1_1_lines']   = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_1_lines')->take(2)->get();
            $data['point_3_1_2_lines']   = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_2_lines')->take(2)->get();
            $data['point_3_1_3_lines']   = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_3_lines')->take(2)->get();
            $data['point_3_1_4_lines']   = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_4_lines')->take(2)->get();
            $data['point_3_1_5_lines']   = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_1_5_lines')->take(2)->get();
            $data['point_3_2']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_3_2')->take(1)->get();
            $data['point_4_1']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_4_1')->take(1)->get();
            $data['point_4_2']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_4_2')->take(1)->get();
            $data['point_4_2_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_4_2_1')->take(1)->get();
            $data['point_4_2_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_4_2_2')->take(1)->get();
            $data['point_5_0']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_5_0')->take(1)->get();
            $data['point_6_0']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_0')->take(1)->get();
            $data['point_6_1']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_1')->take(1)->get();
            $data['point_6_1_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_1_1')->take(1)->get();
            $data['point_6_1_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_1_2')->take(1)->get();
            $data['point_6_1_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_1_3')->take(1)->get();
            $data['point_6_2']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_2')->take(1)->get();
            $data['point_6_2_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_2_1')->take(1)->get();
            $data['point_6_2_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_2_2')->take(1)->get();
            $data['point_6_2_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_2_3')->take(1)->get();
            $data['point_6_3']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_3')->take(1)->get();
            $data['point_6_3_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_3_1')->take(1)->get();
            $data['point_6_3_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_3_2')->take(1)->get();
            $data['point_6_3_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_3_3')->take(1)->get();
            $data['point_6_4']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_4')->take(1)->get();
            $data['point_6_4_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_4_1')->take(1)->get();
            $data['point_6_4_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_4_2')->take(1)->get();
            $data['point_6_4_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_4_3')->take(1)->get();
            $data['point_6_5']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_5')->take(1)->get();
            $data['point_6_5_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_5_1')->take(1)->get();
            $data['point_6_5_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_5_2')->take(1)->get();
            $data['point_6_5_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_5_3')->take(1)->get();
            $data['point_6_6']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_6')->take(1)->get();
            $data['point_6_6_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_6_1')->take(1)->get();
            $data['point_6_6_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_6_2')->take(1)->get();
            $data['point_6_6_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_6_3')->take(1)->get();
            $data['point_6_7']           = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_7')->take(1)->get();
            $data['point_6_7_1']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_7_1')->take(1)->get();
            $data['point_6_7_2']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_7_2')->take(1)->get();
            $data['point_6_7_3']         = DB::table('appendix_seven_points')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->whereNotNull('point_6_7_3')->take(1)->get();
            $data['one_row_id']          = DB::table('appendix_seven_table_1')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['two_row_id']          = TableTwo::where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['three_row_id']        = DB::table('appendix_seven_table_3')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['four_row_id']         = DB::table('appendix_seven_table_4')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['five_row_id']         = DB::table('appendix_seven_table_5')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['six_row_id']          = DB::table('appendix_seven_table_6')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['seven_row_id']        = DB::table('appendix_seven_table_7')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['eight_row_id']        = DB::table('appendix_seven_table_8')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['nine_row_id']         = DB::table('appendix_seven_table_9')->get();
            $data['ten_row_id']          = DB::table('appendix_seven_table_10')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['twel_row_id']         = DB::table('appendix_seven_table_12')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['eleven_row_id']       = DB::table('appendix_seven_table_11')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['thirteen_row_id']     = DB::table('appendix_seven_table_13')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['fourteen_row_id']     = FourteenTable::where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['fifteen_row_id']      = DB::table('appendix_seven_table_15')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['sixteen_row_id']      = DB::table('appendix_seven_table_16')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['seventeen_row_id']    = DB::table('appendix_seven_table_17')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['eighteen_row_id']     = DB::table('appendix_seven_table_18')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['nineteen_row_id']     = DB::table('appendix_seven_table_19')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['twenty_row_id']       = TableTwenty::where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['twentyone_row_id']    = DB::table('appendix_seven_table_21')->where('form_id', '=', '24')->where('unique_form_id', '=', $uni_id)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->get();

            return view('admin.pages.default_forms.submit_form.submit_appendix_seven', $data);
        }

        if ($request->form_id == 31) {

            SwitchLanguage(Session::get('language'));
            $data['first_part']           = DB::table('section_three_first_part_appeight')->where('form_id', '=', '31')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $data['second_part']           = DB::table('section_three_second_part_appeight')->where('form_id', '=', '31')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $data['outcomes']           = DB::table('section_two_outcome_eight')->where('form_id', '=', '31')->where('unique_form_id', '=', $uni_id)->take(1)->get();
            $data['budget_sub']           = DB::table('appendix_eight_mis')->where('form_id', '=', '31')->where('unique_form_id', '=', $uni_id)->take(3)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_eight', $data);
        }


        if ($request->form_id == 32) {

            $data['all_columuns'] = SectionThreeFirstPart::where('form_id', '=', '32')->where('unique_form_id', '=', $uni_id)->get();
            $data['strategic'] = SectionThreeSecondPart::where('form_id', '=', '32')->where('unique_form_id', '=', $uni_id)->get();
            $data['outcomes']           = DB::table('section_two_outcome')->where('form_id', '=', '32')->where('unique_form_id', '=', $uni_id)->take(5)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
            $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->get();
            return view('admin.pages.default_forms.submit_form.submit_appendix_nine', $data);
        }
    }






    public function get_form_to_create_unique_form(Request $request)
    {
        $data['form'] = DB::table('default_sub_forms')->where('id', $request->form_id)->get();
        $data['form_data'] =  $request->all();
        $para_data['year']   = $request->form_year;
        $para_data['quarter']   = $request->quarter;
        $para_data['ministry']   = $request->ministry;
        $para_data['department']   = $request->department;
        $para_data['office']   = $request->office;
        $para_data['unit_office']   = $request->unit_office;
        $para_data['form_id']   = $request->form_id;
        $para_data['form_unique_id']   = $request->unique_form_id;
        $para_data['form_name']   = $request->form_name;
        DB::table('parameter')->insert($para_data);



        if ($request->form_id == 1) {




            $data['all_columuns'] = AnnualPerformanceQuarterly::all();
            $testybro = Division::all();
            return view('admin.pages.default_forms.store_form.store_form_two_point_one', $data, compact('testybro'));
        }

        if ($request->form_id == 3) {
            $data['all_columuns'] = NationalIntegrityStrategyActionPlanModel::all();
            return view('admin.pages.default_forms.store_form.store_form_two_point_two_point_one', $data);
        }


        if ($request->form_id == 4) {
            $data['all_columuns'] = EGovernanceInnovationActionPlan::all();
            return view('admin.pages.default_forms.store_form.store_form_two_point_two_point_two', $data);
        }

        if ($request->form_id == 5) {
            $data['all_columuns'] = ComplaintRedressalActionPlan::all();
            $years = ComplaintRedressalActionPlan::select('years')->take(1)->get();
            $testybro = Division::all();
            return view('admin.pages.default_forms.store_form.store_form_two_point_two_point_three', $data, compact('years', 'testybro'));
        }

        if ($request->form_id == 6) {
            $data['all_columuns'] = ImplementServiceDeliveryCommitments::all();
            $years = ImplementServiceDeliveryCommitments::select('years')->take(1)->get();
            return view('admin.pages.default_forms.store_form.store_form_two_point_two_point_four', $data, compact('years'));
        }

        if ($request->form_id == 7) {
            $data['all_columuns'] = FinancialYeartheRightInformation::all();
            return view('admin.pages.default_forms.store_form.store_form_two_point_two_point_five', $data);
        }


        if ($request->form_id == 8) {
            $data['all_columuns'] = FiscalYearBudgetImplementationProgress::all();
            return view('admin.pages.default_forms.store_form.store_form_one_point_one_point_one', $data);
        }

        if ($request->form_id == 9) {
            $data['all_columuns'] = AutonomousAndOtherInstitutions::all();
            return view('admin.pages.default_forms.store_form.store_form_one_point_one_point_two', $data);
        }


        if ($request->form_id == 10) {
            $data['all_columuns'] = ExcludingAnnualDevelopmentPrograms::all();
            return view('admin.pages.default_forms.store_form.store_form_one_point_two_point_one', $data);
        }

        if ($request->form_id == 11) {
            $data['all_columuns'] = DevelopmentProjectAnnualProgram::all();
            return view('admin.pages.default_forms.store_form.store_form_one_point_two_point_two', $data);
        }

        if ($request->form_id == 12) {
            $data['all_columuns'] = TotalManagementDevelopmentCosts::latest()->take(1)->get();
            return view('admin.pages.default_forms.store_form.store_form_one_point_three', $data);
        }


        if ($request->form_id == 13) {
            $budget = BudgetBranchRelevantAPAReportFormat::all();
            $relapa = RelevantBudgetAPAReportFormat::all();
            $apa    = AnnualPerformanceAgreenment::all();
            $apat   = AnnualPerformanceAgreenmentTable::all();
            return view('admin.pages.default_forms.store_form.store_submit_budget_branch', compact('budget', 'relapa', 'apa', 'apat'), $data);
        }
        if ($request->form_id == 18) {
            return view('admin.pages.default_forms.store_form.store_form_appendix_one', $data);
        }

        if ($request->form_id == 19) {
            return view('admin.pages.default_forms.store_form.store_form_appendix_two', $data);
        }

        if ($request->form_id == 20) {
            return view('admin.pages.default_forms.store_form.store_form_appendix_three', $data);
        }

        if ($request->form_id == 21) {
            return view('admin.pages.default_forms.store_form.store_form_appendix_four', $data);
        }

        if ($request->form_id == 22) {
            return view('admin.pages.default_forms.store_form.store_form_appendix_five', $data);
        }

        if ($request->form_id == 23) {
            return view('admin.pages.default_forms.store_form.store_form_appendix_six', $data);
        }


        if ($request->form_id == 24) {
            return view('admin.pages.default_forms.store_form.store_form_appendix_seven', $data);
        }

        if ($request->form_id == 31) {
            return view('admin.pages.default_forms.store_form.store_form_appendix_eight', $data);
        }

        if ($request->form_id == 32) {
            return view('admin.pages.default_forms.store_form.store_form_appendix_nine', $data);
        }
    }


    public function storedForms($form_id, $unique_form_id, $noti = null)
    {


        if ($form_id == 1) {
            $data['all_columuns'] = AnnualPerformanceQuarterly::where('form_id', $form_id)->where('unique_form_id', $unique_form_id)->get();
            $years = NationalIntegrityStrategyActionPlanModel::select('years')->take(1)->get();
            $divisionss = Division::all();
            return view('admin.pages.default_forms.stored_forms_unique.stored_form_two_point_one', compact('years', 'divisionss'), $data);
        }


        if ($form_id == 5) {
            $data['all_columuns'] = ComplaintRedressalActionPlan::where('form_id', $form_id)->where('unique_form_id', $unique_form_id)->get();
            $years = ComplaintRedressalActionPlan::select('years')->take(1)->get();
            $divisionss = Division::all();
            return view('admin.pages.default_forms.stored_forms_unique.stored_form_two_point_two_point_three', compact('years', 'divisionss'), $data);
        }
    }

    // public function storedFormsTest(Request $request, $id)
    // {

    //     return $request->all();
    //     die;

    //     $request->all();



    //     $data['all_columuns'] = AnnualPerformanceQuarterly::get();
    //     $years = NationalIntegrityStrategyActionPlanModel::select('years')->take(1)->get();
    //     $divisionss = Division::all();
    //     return view('admin.pages.default_forms.stored_forms_unique.stored_form_two_point_one', compact('years', 'divisionss'), $data,);


    //     // $data['form'] = DB::table('default_sub_forms')->where('id', $request->form_id)->get();

    //     // $id = 'Form-126082980';


    //     // if ($request->form_id == 1) {

    //     //     $data['all_columuns'] = AnnualPerformanceQuarterly::where('form_id', '=', '3')->where('unique_form_id', '=', $uni_id)->get();
    //     //     $years = NationalIntegrityStrategyActionPlanModel::select('years')->take(1)->get();
    //     //     $data['userforms'] = DB::table('user_forms')->whereNotNull('sub_form_id_unique_id')->where('reciever_user_id', '=', Auth::user()->id)->where('sub_form_id', $usersubform)->get();
    //     //     return view('admin.pages.default_forms.stored_forms_unique.stored_form_two_point_one', $data);
    //     // }
    // }

    /* ***** */


		public function reminder_notification(Request $request){

                // print_r($request->all()); die;

								// print_r($request->all()); die;

										// <!-- $damn = $request->rem_id; -->
			               $to_user_data = User::find($request->rem_id_reciver);
										//  echo '<pre>';
										//  print_r($request->all()); die;
										$getlastdate = DB::table('user_forms')->where('reciever_user_id',$request->rem_id_reciver)->where('sub_form_id',$request->rem_form_id)->get(); 
												 echo '<pre>';
												 
										//  print_r($getlastdate); die;
                     $sendNotification = Auth::user()->name .' '. "send you a reminder" .'</br>'."<span style='color:crimson'>Please Submit Your Report before</span>".' '.$getlastdate[0]->duration;
                    //  $link = URL::to('/');
										 $link = URL::to('/').'/created-submit-form/' . $request->rem_form_id;
                     event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));

										 
		              
                    // $sendNotification = Auth::user()->name . " send you a report request";
                    // $link = URL::to('/').'/created-submit-form/' . $sub_form;
                    // event(new Notification(\Illuminate\Support\Facades\Auth::user()->id, $to_user_data->id, $sendNotification, $link));
		}
}