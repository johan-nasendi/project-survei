<?php

namespace App\Http\Controllers;

use App\Exports\RespondentExport;
use App\Models\JobExperiences;
use App\Models\AlumniComunitacionBetween;
use App\Models\RelationshipCompetence;
use App\Models\QuestionsLearningExperiencea;
use App\Models\RespondentIdentitiy;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RespondentIdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = RespondentIdentitiy::orderBy('id','DESC')->paginate(6);
        return view('admin.responden.index',$data);
    }
    public function export(Request $request){
        return Excel::download(new RespondentExport, 'users.xlsx');
    }


    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:100',
                'mobile_phone_number' => 'required|string|max:13|unique:respondent,mobile_phone_number',
                'date_of_birth' => 'required|date',
                'place_of_birth' => 'required|string|max:100',
                'email' => 'required|string|email|unique:respondent,email',
                'gender' => 'required'


          ])->validate();


          $respondent = new RespondentIdentitiy();
          $respondent->name = $request->name;
          $respondent->email = $request->email;
          $respondent->place_of_birth = $request->place_of_birth;
          $respondent->date_of_birth = $request->date_of_birth;
          $respondent->gender = $request->gender;
          $respondent->slug = Str::slug($request->get('name'));
          $respondent->mobile_phone_number = $request->mobile_phone_number;
          $respondent->save();


          $jobex = new JobExperiences();
          $jobex->respondent_id = $request->respondent_id;
          $jobex->works = $request->works;
          $jobex->start_work = $request->start_work;
          $jobex->jobs_reason = $request->jobs_reason;
          $jobex->after_how_many_months_job = $request->after_how_many_months_job;
          $jobex->get_str = $request->get_str;
          $jobex->amount_applied = $request->amount_applied;
          $jobex->amount_response_to_applications = $request->amount_response_to_applications;
          $jobex->amount_inviting_interviews = $request->amount_inviting_interviews;
          $jobex->how_to_find_a_job = $request->how_to_find_a_job;
          $jobex->workplace = $request->workplace;
          $jobex->name_workplace = $request->name_workplace;
          $jobex->job_educational_background = $request->job_educational_background;
          $jobex->why_take_the_job = $request->why_take_the_job;
          $jobex->level_of_education = $request->level_of_education;
          $jobex->relationship_study_work = $request->relationship_study_work;
          $jobex->additional_competence = $request->additional_competence;
          $jobex->income_per_month = $request->income_per_month;

          $respondent->jobex()->save($jobex);

            Alert::success('Success', 'Data Anda Berhasil Dikirim');
            return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $respondent = RespondentIdentitiy::where('slug', $id)->first();
        return view('admin.responden.details',compact('respondent'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $respondent = RespondentIdentitiy::find($id);
            $respondent->delete();
            Alert::success('Success', 'Berhasil Dihapus');
            return redirect()->back();
        }catch (\Throwable $th) {
            Alert::error('Failed','Gagal Dihapus', ['error' => $th->getMessage()]);
        }
        return redirect()->back();
    }



}
