<h4 class="header-title mb-3"> RIWAYAT PEKERJAAN </h4>
    <form  action="#">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                        <div class="form-group">
                            <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">
                            <label for="#">Apakah anda sudah bekerja saat ini ?<span class="text-danger">*</span></label>
                            <select  name="works" class="form-control @error('works') is-invalid @enderror" id="test"
                            required="" autocomplete="works" autofocus onchange="showDiv();">
                                <option selected>---Pilih---</option>
                                <option value="Yes" {{old('works')}}> Yes </option>
                                <option value="No" {{old('works')}}> No </option>
                            </select>
                            @error('works')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_one" style="display: none;">
                            <label for="#">Kapan anda mulai mencari pekerjaan?<span class="text-danger">*</span></label>
                            <select name="start_work" class="form-control @error('start_work') is-invalid @enderror" >
                                <option selected disabled>---Pilih---</option>
                                <option value="Sebelum Lulus" {{old('start_work')}}> Bulan sebelum lulus</option>
                                <option value="Setelah Lulus" {{old('start_work')}}> Bulan setelah lulus</option>
                            </select>
                            @error('start_work')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        </div>
                        <div class="form-group" id="hidden_div_no" style="display: none;">
                            <label for="#">Apa alasan utama anda tidak mencari pekerjaan setelah lulus kuliah?
                                <span class="text-danger">*</span>
                            </label>
                            <select onchange="showArea();" name="jobs_reason" id="other"
                            class="form-control @error('jobs_reason') is-invalid @enderror"">
                                <option selected disabled>---Pilih---</option>
                                <option value="Saya memulai bisnis sendiri" {{old('jobs_reason')}}> Saya memulai bisnis sendiri </option>
                                <option value="Saya melanjutkan kuliah" {{old('jobs_reason')}}> Saya melanjutkan kuliah </option>
                                <option value="1" {{old('jobs_reason')}}> Lainnya </option>
                            </select>
                            @error('jobs_reason')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>


                        <div class="form-group" id="hidden_textarea" style="display: none;" >
                            <label for="#"> Berikan Alasan anda tidak mencari pekerjaan setelah lulus kuliah?
                                <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control @error('jobs_reason') is-invalid @enderror" name="jobs_reason"  rows="3"> {{old('jobs_reason')}} </textarea>
                            @error('jobs_reason')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_two" style="display: none;" >
                            <label for="#"> Berapa bulan setelah lulus anda memperoleh pekerjaan pertama?
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" name="after_how_many_months_job" value="{{old('after_how_many_months_job')}}" placeholder="Berapa bulan setelah lulus anda memperoleh pekerjaan pertama?"
                            class="form-control @error('after_how_many_months_job') is-invalid @enderror">
                            @error('after_how_many_months_job')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_three" style="display: none;" >
                            <label for="#"> Berapa bulan setelah keluar STR anda memeroleh pekerjaan pertama?
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" name="get_str" placeholder="Bulan ke berapa anda memperoleh pekerjaan anda ?"
                            class="form-control @error('get_str') is-invalid @enderror">
                            @error('get_str')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_four" style="display: none;" >
                            <label for="#"> Sebelum anda memperoleh pekerjaan pertama berapa jumlah instansi yang anda lamar,
                                yang merespon, dan yang mengundang wawancara?
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" value="{{old('amount_applied')}}" name="amount_applied" placeholder="Jumlah Instansi yang dilamar"
                            class="form-control @error('amount_applied') is-invalid @enderror">
                            @error('amount_applied')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <input type="number" value="{{old('amount_response_to_applications')}}" name="amount_response_to_applications" parsley-trigger="change"
                            placeholder="Jumlah instansi merespon lamaran" class="form-control @error('amount_response_to_applications') is-invalid @enderror">
                            @error('amount_response_to_applications')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <input type="number" value="{{old('amount_inviting_interviews')}}" name="amount_inviting_interviews" parsley-trigger="change"
                            placeholder="Jumlah instansi yang mengundang wawancara" class="form-control @error('amount_inviting_interviews') is-invalid @enderror ">
                            @error('amount_inviting_interviews')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group" id="hidden_div_yes_five" style="display: none;" >
                            <label for="#">Bagaimana anda mencari pekerjaan?<span class="text-danger">*</span></label>
                            <select name="how_to_find_a_job" class="form-control @error('how_to_find_a_job') is-invalid @enderror" >
                                <option selected disabled>---Pilih---</option>
                                <option value="Saya memulai bisnis sendiri" {{old('how_to_find_a_job')}}> Melamar ke instansi </option>
                                <option value="Saya melanjutkan kuliah" {{old('how_to_find_a_job')}}> Mencari lewat internet/iklan online/milis </option>
                                <option value="Dihubungi oleh instansi (RS, Klinik, perusahaan, dll)" {{old('how_to_find_a_job')}}> Dihubungi oleh instansi (RS, Klinik, perusahaan, dll) </option>
                                <option value="Memperoleh informasi dari Poltekkes" {{old('how_to_find_a_job')}}> Memperoleh informasi dari Poltekkes </option>
                                <option value="Melalui penempatan kerja atau magang" {{old('how_to_find_a_job')}}> Melalui penempatan kerja atau magang </option>
                                <option value="Melalui jejaring alumni" {{old('how_to_find_a_job')}}> Melalui jejaring alumni </option>
                                <option value="Melalui jejaring/relasi orang tua/saudara/teman/dosen" {{old('how_to_find_a_job')}}> Melalui jejaring/relasi orang tua/saudara/teman/dosen </option>
                                <option value="Lainnya" {{old('how_to_find_a_job')}}> Lainnya </option>
                            </select>
                            @error('how_to_find_a_job')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                </div> <!-- end card-box -->
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                        <div class="form-group" id="hidden_div_yes_six" style="display: none;">
                            <label for="#">Instansi tempat anda bekerja?<span class="text-danger">*</span></label>
                            <select name="workplace" class="form-control @error('workplace') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Instansi Pemerintah" {{old('workplace')}}> Instansi Pemerintah (termasuk BUMN) </option>
                                <option value="Swasta" {{old('workplace')}}> Swasta </option>
                                <option value="Organisasi non profit/LSM" {{old('workplace')}}> Organisasi non profit/LSM </option>
                                <option value="Usaha sendiri" {{old('workplace')}}> Usaha sendiri </option>
                                <option value="Lainnya" {{old('workplace')}}> Lainya.................. </option>
                            </select>
                            @error('workplace')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_seven" style="display: none;">
                            <label for="#">Apa nama instansi tempat anda bekerja?<span class="text-danger">*</span></label>
                            <select name="name_workplace" class="form-control @error('name_workplace') is-invalid @enderror" >
                                <option selected disabled>---Pilih---</option>
                                <option value="Puskesmas" {{old('name_workplace')}}> Puskesmas</option>
                                <option value="Klinik" {{old('name_workplace')}}> Klinik</option>
                                <option value="RS" {{old('name_workplace')}}>RS</option>
                                <option value="Apotik" {{old('name_workplace')}}>Apotik</option>
                                <option value="Laboratorium" {{old('name_workplace')}}>Laboratorium</option>
                                <option value="Lainya" {{old('name_workplace')}}> Lainya.................. </option>
                            </select>
                            @error('name_workplace')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group" id="hidden_div_yes_eight" style="display: none;">
                            <label for="#">Apakah pekerjaan anda sesuai dengan latar belakang pendidikan?<span class="text-danger">*</span></label>
                            <select name="job_educational_background" class="form-control @error('job_educational_background') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Yes" {{old('job_educational_background')}}> Yes </option>
                                <option value="No" {{old('job_educational_background')}}> No </option>
                            </select>
                            @error('job_educational_background')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group" id="hidden_div_yes_nine" style="display: none;">
                            <label for="#">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya?
                                <span class="text-danger">*</span>
                            </label>
                            <select name="why_take_the_job" class="form-control @error('why_take_the_job') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Saya belum mendapatkan pekerjaan yang lebih sesuai" {{old('why_take_the_job')}}> Saya belum mendapatkan pekerjaan yang lebih sesuai </option>
                                <option value="Di pekerjaan ini saya memeroleh prospek karir yang baik" {{old('why_take_the_job')}}> Di pekerjaan ini saya memeroleh prospek karir yang baik. </option>
                                <option value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya" {{old('why_take_the_job')}}> Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya </option>
                                <option value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya" {{old('why_take_the_job')}}> Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya </option>
                                <option value="Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini" {{old('job_educational_background')}}> Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini</option>
                                <option value="Pekerjaan saya saat ini lebih aman/terjamin/secure" {{old('job_educational_background')}}> Pekerjaan saya saat ini lebih aman/terjamin/secure </option>
                                <option value="Pekerjaan saya saat ini lebih menarik " {{old('why_take_the_job')}}> Pekerjaan saya saat ini lebih menarik </option>
                                <option value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel" {{old('why_take_the_job')}}> Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel </option>
                                <option value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya" {{old('why_take_the_job')}}> Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya </option>
                                <option value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya" {{old('why_take_the_job')}}> Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya </option>
                                <option value="Lainnya" {{old('why_take_the_job')}}> Lainnya....... </option>
                            </select>
                            @error('why_take_the_job')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_ten" style="display: none;">
                            <label for="#"> Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?
                                <span class="text-danger">*</span>
                            </label>
                            <select name="level_of_education" class="form-control @error('level_of_education') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Setingkat lebih tinggi" {{old('level_of_education')}}> Setingkat lebih tinggi  </option>
                                <option value="Tingkat yang sama" {{old('level_of_education')}}> Tingkat yang sama </option>
                                <option value="Setingkat lebih rendah" {{old('level_of_education')}}> Setingkat lebih rendah </option>
                            </select>
                            @error('level_of_education')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_eleven" style="display: none;">
                            <label for="#"> Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?
                                <span class="text-danger">*</span>
                            </label>
                            <select name="relationship_study_work" class="form-control @error('relationship_study_work') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Sangat erat" {{old('relationship_study_work')}}> Sangat erat  </option>
                                <option value="Erat" {{old('relationship_study_work')}}> Erat </option>
                                <option value="Cukup erat" {{old('relationship_study_work')}}> Cukup erat </option>
                                <option value="Kurang erat" {{old('relationship_study_work')}}> Kurang erat </option>
                                <option value="Tidak sama sekali" {{old('relationship_study_work')}}> Tidak sama sekali </option>
                            </select>
                            @error('relationship_study_work')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_eleven" style="display: none;">
                            <label for="#"> Dalam melaksanakan pekerjaan, menurut penilaian Saudara sejauh mana kompetensi tambahan berikut diperlukan?
                                <span class="text-danger">*</span>
                            </label>
                            <select name="additional_competence" class="form-control @error('additional_competence') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Pengetahuan Umum" {{old('additional_competence')}}> Pengetahuan Umum  </option>
                                <option value="Penguasaan Bahasa Inggris" {{old('additional_competence')}}> Penguasaan Bahasa Inggris </option>
                                <option value="Penguasaan Teknologi Informasi" {{old('additional_competence')}}>Penguasaan Teknologi Informasi </option>
                                <option value="Ketrampilan Komunikasi" {{old('additional_competence')}}> Ketrampilan Komunikasi </option>
                                <option value="Kerjasama Tim" {{old('additional_competence')}}> Kerjasama Tim </option>
                            </select>
                            @error('additional_competence')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_twelve" style="display: none;">
                            <label for="#"> Berapa rata- rata penghasilan anda per bulan?
                                <span class="text-danger">*</span>
                            </label>
                            <select name="income_per_month" class="form-control @error('income_per_month') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value=" < 2000000" {{old('income_per_month')}}> < Rp. 2.000.000,-  </option>
                                <option value=" > 2000000 - 3500000" {{old('income_per_month')}}> > Rp. 2.000.000. – 3.500.000,- </option>
                                <option value="> 3500000 -  5000000 " {{old('income_per_month')}}> > Rp. 3.500.000 – 5.000.000.- </option>
                                <option value=" > 5000000 - 6500000 " {{old('income_per_month')}}> >Rp. 5.000.000. – 6.500.000.- </option>
                                <option value="6500000" {{old('income_per_month')}}> >Rp. 6.500.000,- </option>
                            </select>
                            @error('income_per_month')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                </div> <!-- end card-box -->
            </div> <!-- end col -->

        </div> <!-- end row -->
        <ul class="list-inline wizard mb-0">
            <li class="previous list-inline-item disabled">
                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
            </li>
            <li class="list-inline-item float-right" >
                <button type="submit" class="btn btn-warning">Next</button>
            </li>
        </ul>
    </form>
