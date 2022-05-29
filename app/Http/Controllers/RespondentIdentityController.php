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
            Alert::success('Success', 'Data Anda Berhasil Dikirim');
            return redirect('/');
            }catch (\Throwable $e) {
                Alert::error('Error','Oppss! Gagal  mengirimkan data anda',['error' => $e->getMessage()]);
                return redirect()->back();
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
