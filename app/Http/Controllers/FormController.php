<?php

namespace App\Http\Controllers;
use App\Models\JobExperiences;
use App\Models\AlumniComunitacionBetween;
use App\Models\RelationshipCompetence;
use App\Models\QuestionsLearningExperiencea;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\RespondentIdentitiy;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function createStepOne(Request $request)
    {
        $respondentIdentitiy = $request->session()->get('respondentIdentitiy');
        return view('forms.form-one',compact('respondentIdentitiy'));
    }

    public function createStepTwo(Request $request)
    {
        $questions = $request->session()->get('questions');
        return view('forms.form-two',compact('questions'));
    }

    public function createStepThree(Request $request)
    {
        $jobexperiences = $request->session()->get('jobexperiences');
        return view('forms.form-three',compact('jobexperiences'));
    }

    public function createStepFour(Request $request)
    {
        $relationshipcompetence = $request->session()->get('relationshipcompetence');
        return view('forms.form-four',compact('relationshipcompetence'));
    }

    public function createStepFive(Request $request)
    {
        $alumni = $request->session()->get('alumni');
        return view('forms.form-five',compact('alumni'));
    }

    public function createStepSix(Request $request)
    {
        $finisi = $request->session()->get('finisi');
        return view('forms.form-six',compact('finisi'));
    }


    // STORE DATA RespondentIdentitiy
    public function postCreateStepOne(Request $request)
    {
        Validator::make(
                $request->all(),
                [
                    'name' => 'required|string|max:100',
                    'place_of_birth' => 'required|string|max:100',
                    'date_of_birth' => 'required|date',
                    'mobile_phone_number' => 'required|string|max:14|unique:respondent_identity,mobile_phone_number',
                    'email' => 'required|string|email|unique:respondent_identity,email',
                    'gender' => 'required',
              ])->validate();
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
            // Alert::success('Success', 'Data Anda Berhasil Dikirim');
            return redirect()->route('forum.two');
        }catch (\Throwable $th) {
            Alert::error('Error','Data Gagal Dikirim', ['error' => $th->getMessage()]);
        }
        return redirect()->back();

    }

    // STORE DATA QuestionsLearningExperiencea
    public function postCreateStepTwo(Request $request)
    {
        Validator::make(
            $request->all(),
            [
                'what_study_program' => 'required',
                'college_entry_date' => 'required',
                'college_graduation_date' => 'required',
                'score_ipk' => 'required',
                'organization' => 'required',
                'Active_inactive_organization' => 'required',
                'further_education_levels' => 'required',
                'educational_background' => 'required',
                'field_work' => 'required',
                'according' => 'required',
          ])->validate();

        try {
            $questions = new QuestionsLearningExperiencea();
            $questions->what_study_program = $request->what_study_program;
            $questions->college_entry_date = $request->college_entry_date;
            $questions->college_graduation_date = $request->college_graduation_date;
            $questions->score_ipk = $request->score_ipk;
            $questions->organization = $request->organization;
            $questions->Active_inactive_organization = $request->Active_inactive_organization;
            $questions->further_education_levels = $request->further_education_levels;
            $questions->educational_background = $request->educational_background;
            $questions->field_work = $request->field_work;
            $questions->according = $request->according;
            $questions->respondent_id = $request->respondent_id;
            $questions->save();
            return redirect()->route('forum.three');
        }catch (\Throwable $th) {
            Alert::error('Error','Data Gagal Dikirim', ['error' => $th->getMessage()]);
        }
        return redirect()->back();
    }

    // STORE DATA JobExperiences
    public function postCreateStepThree(Request $request)
    {

        if(empty($request->session()->get('jobexperiences'))){
            $jobexperiences = new JobExperiences();
            $request->session()->put('jobexperiences', $jobexperiences);
        }else{
            $jobexperiences = $request->session()->get('jobexperiences');
            $request->session()->put('jobexperiences', $jobexperiences);
        }
        return redirect()->route('forum.four');
    }

    // STORE DATA RelationshipCompetence
    public function postCreateStepFour(Request $request)
    {

        if(empty($request->session()->get('relationshipcompetence'))){
            $relationshipcompetence = new RelationshipCompetence();
            $request->session()->put('relationshipcompetence', $relationshipcompetence);
        }else{
            $relationshipcompetence = $request->session()->get('relationshipcompetence');
            $request->session()->put('relationshipcompetence', $relationshipcompetence);
        }
        return redirect()->route('forum.five');
    }

    // STORE DATA AlumniComunitacionBetween
    public function postCreateStepFive(Request $request)
    {

        if(empty($request->session()->get('alumni'))){
            $alumni = new AlumniComunitacionBetween();
            $request->session()->put('alumni', $alumni);
        }else{
            $alumni = $request->session()->get('alumni');
            $request->session()->put('alumni', $alumni);
        }
        return redirect()->route('forum.six');
    }

    // STORE DATA finis
    public function postCreateStepSix(Request $request)
    {
        $finisi = $request->session()->get('finisi');
        $finisi->save();
        $request->session()->forget('finisi');
        return redirect()->route('login');
    }
}
