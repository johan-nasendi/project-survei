<?php

namespace App\Http\Controllers;
use App\Models\JobExperiences;
use App\Models\AlumniComunitacionBetween;
use App\Models\RelationshipCompetence;
use App\Models\QuestionsLearningExperiencea;
use App\Models\RespondentIdentitiy;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
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
          $request->validate([

                'name' => 'required|string|max:100',
                'mobile_phone_number' => 'required|numeric|min:14|unique:respondent,mobile_phone_number',
                'date_of_birth' => 'required|date',
                'place_of_birth' => 'required|string|max:100',
                'email' => 'required|string|email|unique:respondent,email',
                'gender' => 'required',

                'what_study_program' => 'required|string',
                'college_entry_date' => 'required|string',
                'college_graduation_date' => 'required|string',
                'score_ipk' => 'required|string',
                'organization' => 'required|string',
                'active_inactive_organization' => 'required|string',
                'further_education_levels' => 'required|string',
                'educational_background' => 'required|string',
                'field_work' => 'required|string',
                'according' => 'required|string',

                'curriculum_compatibility_jobs' => 'required|string',
                'health_polytechnic_Competence' => 'required|string',
                'competency_mastered' => 'required|string',
                'competencies_required_job' => 'required|string',
                'competency_improvement_needs' => 'required|string',

                'alumni_association'=> 'required',
                'cooperation_institutions_alumni_associations'=> 'required',
                'development_of_competencies_and_institutions'=> 'required',

                'works' => 'required',
                'works' => 'required_if:works,Yes,No',
                'start_work' => 'required_if:works,Yes,Sebelum Lulus,Setelah Lulus',
                'jobs_reason' => 'required_if:works,No,Saya memulai bisnis sendiri,Saya melanjutkan kuliah',
                'after_how_many_months_job' => 'required_if:works,Yes',
                'get_str' => 'required_if:works,Yes',
                'amount_applied' => 'required_if:works,Yes',
                'amount_response_to_applications' => 'required_if:works,Yes',
                'amount_inviting_interviews' => 'required_if:works,Yes',
                'how_to_find_a_job' => 'required_if:works,Yes',
                'workplace' => 'required_if:works,Yes',
                'name_workplace' => 'required_if:works,Yes',
                'job_educational_background' => 'required_if:works,Yes',
                'why_take_the_job' => 'required_if:works,Yes',
                'level_of_education'=> 'required_if:works,Yes',
                'relationship_study_work' => 'required_if:works,Yes',
                'additional_competence' => 'required_if:works,Yes',
                'income_per_month' => 'required_if:works,Yes',
        ]);



    try {
            $respondent = new RespondentIdentitiy();
            $respondent->name = $request->name;
            $respondent->email = $request->email;
            $respondent->place_of_birth = $request->place_of_birth;
            $respondent->date_of_birth = $request->date_of_birth;
            $respondent->gender = $request->gender;
            $respondent->slug = Str::slug($request->get('name'));
            $respondent->mobile_phone_number = $request->mobile_phone_number;
            $respondent->save();

            $questions = new QuestionsLearningExperiencea();
            $questions->respondent_id = $request->respondent_id;
            $questions->what_study_program = $request->what_study_program;
            $questions->college_entry_date = $request->college_entry_date;
            $questions->college_graduation_date = $request->college_graduation_date;
            $questions->score_ipk = $request->score_ipk;
            $questions->organization = $request->organization;
            $questions->active_inactive_organization = $request->active_inactive_organization;
            $questions->further_education_levels = $request->further_education_levels;
            $questions->educational_background = $request->educational_background;
            $questions->field_work = $request->field_work;
            $questions->according = $request->according;
            $respondent->questions()->save($questions);

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

            $relations = new RelationshipCompetence();
            $relations->respondent_id = $request->respondent_id;
            $relations->curriculum_compatibility_jobs = $request->curriculum_compatibility_jobs;
            $relations->health_polytechnic_Competence = $request->health_polytechnic_Competence;
            $relations->competency_mastered = $request->competency_mastered;
            $relations->competencies_required_job = $request->competencies_required_job;
            $relations->competency_improvement_needs = $request->competency_improvement_needs;
            $respondent->relastionship()->save($relations);

            $alumni = new AlumniComunitacionBetween();
            $alumni->respondent_id = $request->respondent_id;
            $alumni->alumni_association = $request->alumni_association;
            $alumni->fb = $request->fb;
            $alumni->ig = $request->ig;
            $alumni->linkend = $request->linkend;
            $alumni->cooperation_institutions_alumni_associations = $request->cooperation_institutions_alumni_associations;
            $alumni->development_of_competencies_and_institutions = $request->development_of_competencies_and_institutions;
            $respondent->alumniComunication()->save($alumni);

              Alert::success('Success', 'Data Anda Berhasil Dikirim');
              return redirect('/');
            } catch (\Throwable $th) {
              Alert::error('Error','Data Anda Gagal Dikirim', ['error' => $th->getMessage()]);
            } return redirect()->back();
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
