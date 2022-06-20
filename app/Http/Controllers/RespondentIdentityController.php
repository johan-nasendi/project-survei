<?php

namespace App\Http\Controllers;
use App\Models\JobExperiences;
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
                'address' => 'required|string|max:255',
                'place_of_birth' => 'required|string|max:100',
                'email' => 'required|string|email|unique:respondent,email',
                'gender' => 'required',
                'what_study_program' => 'required|string',
                'year_of_college_entry' => 'required|string',
                'college_graduation_date' => 'required|string',

                'active_inactive_organization'=> 'required',
                'organization_name'=> 'required_if:active_inactive_organization,Ya',
                'lecturer_ability'=> 'required',
                'lecturer_skills_practice'=> 'required',
                'rectors_service'=> 'required',
                'study_program_services'=> 'required',

                'do_you_work' => 'required',
                'start_work' =>'required_if:do_you_work,Sudah',
                'workplace' =>'required_if:do_you_work,Sudah',
                'name_workplace' =>'required_if:do_you_work,Sudah',
                'address_work' =>'required_if:do_you_work,Sudah',
                'job_educational_background' =>'required_if:do_you_work,Sudah',
                'income_per_month' =>'required_if:do_you_work,Sudah',

                'learning_process'  => 'required|string',
                'curriculum'  => 'required|string',
                'student_admini_services'  => 'required|string',
                'facilities_infrastructure'  => 'required|string',
          ],
          [
            'email.unique'    => ':attribute sudah digunakan,Silakan Masukan Email yang lain!',
            'mobile_phone_number.unique'    => 'No Handphone sudah digunakan,Silakan Masukan No handphone yang lain!',
            'gender.required'   => 'Jenis Kelamin Wajib di isi',
            'place_of_birth.required'   => 'Tempat lahir Wajib di isi',
            'address.required'   => 'Alamat tempat tinggal anda Wajib di isi',
            'what_study_program.required'   => 'Jurusan/Prodi Wajib di isi',
            'year_of_college_entry.required'   => 'Tahun Masuk kuliah Wajib di isi',
            'college_graduation_date.required'   => 'Bulan dan Tahun Lulus Wajib di isi',

            'do_you_work.required' => 'Apakah anda sudah bekerja saat ini? Wajib di isi!',
            'start_work.required_if' => 'Kapan Mulai Bekerja (bulan/tahun)? Wajib di isi!',
            'workplace.required_if' => 'Jika Sudah dimana anda bekerja? Wajib di isi!',
            'name_workplace.required_if' => 'Nama Instansi tempat bekerja? Wajib di isi!',
            'address_work.required_if' => 'Alamat tempat kerja? Wajib di isi!',
            'job_educational_background.required_if' => 'Apakah pekerjaan anda sesuai dengan latar belakang pendidikan? Wajib di isi!',
            'income_per_month.required_if' => 'Berapa gaji pertama anda? Wajib di isi',


            'active_inactive_organization'=> 'Selama kuliah apakah anda pernah menjadi anggota suatu organisasi di dalam atau luar kampus? Wajib di isi',
            'organization_name.required_if'=> 'Organisasi apa yang pernah anda ikut? :attribute Wajib di isi',
            'lecturer_ability'=> 'Selama Kuliah, menurut saudara bagaimana kemampuan dosen dalam mengampu mata kuliah? wajib di isi',
            'lecturer_skills_practice'=> 'Bagaimana ketrampilan dosen dan instruktur dalam memberikan praktek? Wajib di isi',
            'rectors_service'=> 'Bagaimana pelayanan Rektorat dalam memberikan pengurusan administrasi mahasiswa? Wajib di isi',
            'study_program_services'=> 'Bagaimana pelayanan Program studi dalam memberikan pengurusan administrasi mahasiswa? Wajib di isi',

            'learning_process.required'  => 'Proses Belajar Mengajar? Wajib di isi! ',
            'curriculum.required'  => 'Kurikulum? Wajib di isi!',
            'student_admini_services.required'  => 'Layanan Administrasi Kemahasiswaan? Wajib di isi!',
            'facilities_infrastructure.required'  => 'Sarana dan Prasarana? Wajib di isi!',
        ]
    );

    try {
            $respondent = new RespondentIdentitiy();
            $respondent->name = $request->name;
            $respondent->email = $request->email;
            $respondent->place_of_birth = $request->place_of_birth;
            $respondent->address = $request->address;
            $respondent->what_study_program = $request->what_study_program;
            $respondent->year_of_college_entry = $request->year_of_college_entry;
            $respondent->college_graduation_date = $request->college_graduation_date;
            $respondent->gender = $request->gender;
            $respondent->slug = Str::slug($request->get('name'));
            $respondent->mobile_phone_number = $request->mobile_phone_number;
            $respondent->save();

            $questions = new QuestionsLearningExperiencea();
            $questions->respondent_id = $request->respondent_id;
            $questions->organization_name = $request->organization_name;
            $questions->active_inactive_organization = $request->active_inactive_organization;
            $questions->lecturer_ability = $request->lecturer_ability;
            $questions->lecturer_skills_practice = $request->lecturer_skills_practice;
            $questions->rectors_service = $request->rectors_service;
            $questions->study_program_services = $request->study_program_services;
            $respondent->questions()->save($questions);

            $jobex = new JobExperiences();
            $jobex->respondent_id = $request->respondent_id;
            $jobex->do_you_work = $request->do_you_work;
            $jobex->start_work = $request->start_work;
            $jobex->workplace = $request->workplace;
            $jobex->name_workplace = $request->name_workplace;
            $jobex->address_work = $request->address_work;
            $jobex->job_educational_background = $request->job_educational_background;
            $jobex->income_per_month = $request->income_per_month;
            $respondent->jobex()->save($jobex);

            $relations = new RelationshipCompetence();
            $relations->respondent_id = $request->respondent_id;
            $relations->learning_process = $request->learning_process;
            $relations->curriculum = $request->curriculum;
            $relations->student_admini_services = $request->student_admini_services;
            $relations->facilities_infrastructure = $request->facilities_infrastructure;
            $respondent->relastionship()->save($relations);


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
