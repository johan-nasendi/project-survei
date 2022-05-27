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

            // Validator::make(
            //     $request->all(),
            //     [

            //   ])->validate();
            // try {
            //     $respondent = new RespondentIdentitiy();
            //     $respondent->name = $request->name;
            //     $respondent->email = $request->email;
            //     $respondent->place_of_birth = $request->place_of_birth;
            //     $respondent->date_of_birth = $request->date_of_birth;
            //     $respondent->gender = $request->gender;
            //     $respondent->slug = Str::slug($request->get('name'));
            //     $respondent->mobile_phone_number = $request->mobile_phone_number;

            //     $respondent->save();

            //     Alert::success('Success', 'Data Anda Berhasil Dikirim');
            //     return redirect()->route('login');
            // }catch (\Throwable $th) {
            //     Alert::error('Error','Data Gagal Dikirim', ['error' => $th->getMessage()]);
            // }
            // return redirect()->back();

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
