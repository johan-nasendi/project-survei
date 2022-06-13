<h4 class="header-title mb-3"> <b>C.RIWAYAT PEKERJAAN</b> </h4>

        <div class="row" >
            <div class="col-lg-6">
                <div class="card-box">
                        <div class="form-group needs-validation was-validated" novalidate="">
                            <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">
                            <label for="#">Apakah anda sudah bekerja saat ini ?<span class="text-danger">*</span></label>
                            <select  name="works" class="form-control @error('works') is-invalid @enderror"
                            required="" id="test" onchange="showDiv()">
                                <option value="" disabled selected="selected">---Pilih---</option>
                                <option value="Yes" @if (old('works') == "Yes") {{ 'selected' }} @endif> Yes </option>
                                <option value="No"  @if (old('works') == "No")  {{ 'selected' }} @endif> No </option>
                            </select>
                            <div class="invalid-feedback">Harap memilih pilihan anda</div>
                            @error('works')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_one" style="display: none;">
                            <label for="#">Kapan anda mulai mencari pekerjaan?<span class="text-danger">*</span></label>
                            <select  name="start_work" class="form-control @error('start_work') is-invalid @enderror" >
                                <option value="" selected disabled>---Pilih---</option>
                                <option value="Sebelum Lulus" @if (old('start_work') == "Sebelum Lulus") {{ 'selected' }} @endif> Bulan sebelum lulus</option>
                                <option value="Setelah Lulus" @if (old('start_work') == "Setelah Lulus") {{ 'selected' }} @endif> Bulan setelah lulus</option>
                            </select>
                            <div class="text-danger">Harap memilih pilihan anda</div>
                            @error('start_work')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                             @enderror
                        </div>

                        <div class="form-group" id="hidden_div_no" style="display: none;" >
                            <label for="#"> Berikan Alasan anda tidak mencari pekerjaan setelah lulus kuliah?
                                <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control @error('jobs_reason') is-invalid @enderror" name="jobs_reason"  rows="3"autocomplete="off"> {{old('jobs_reason')}} </textarea>
                            <div class="text-danger">
                                Harap mengisi alasan anda
                            </div>
                            @error('jobs_reason')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_two" style="display: none;" >
                            <label for="#">  Bulan berapa setelah lulus anda memperoleh pekerjaan pertama?
                                <span class="text-danger">*</span>
                            </label>
                            <input type="month" autocomplete="off" name="after_how_many_months_job" value="{{old('after_how_many_months_job')}}" placeholder="Berapa bulan setelah lulus anda memperoleh pekerjaan pertama?"
                            class="form-control @error('after_how_many_months_job') is-invalid @enderror">
                            <div class="text-danger">
                                Harap mengisi bulan berapa anda memperoleh pekerjaan
                            </div>
                            @error('after_how_many_months_job')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_three" style="display: none;" >
                            <label for="#">  Bulan Berapa setelah keluar STR anda memeroleh pekerjaan pertama?
                                <span class="text-danger">*</span>
                            </label>
                            <input type="month" autocomplete="off" value="{{old('get_str')}}" name="get_str"
                            placeholder="Bulan ke berapa anda memperoleh pekerjaan anda ?"
                            class="form-control @error('get_str') is-invalid @enderror">
                            <div class="text-danger">
                                Harap mengisi bulan berapa STR anda keluar
                            </div>
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
                            <input type="number" autocomplete="off"  value="{{old('amount_applied')}}" name="amount_applied" placeholder="Jumlah Instansi yang dilamar"
                            class="form-control @error('amount_applied') is-invalid @enderror">
                            <div class="text-danger">
                                Harap mengisi jumlah instansi yang anda lamar
                            </div>
                            @error('amount_applied')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <input type="number" autocomplete="off" value="{{old('amount_response_to_applications')}}"
                            name="amount_response_to_applications" parsley-trigger="change" placeholder="Jumlah instansi merespon lamaran"
                            class="form-control @error('amount_response_to_applications') is-invalid @enderror">
                            <div class="text-danger">
                                Harap mengisi jumlah instansi yang merespon lamaran anda
                            </div>
                            @error('amount_response_to_applications')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <input type="number" autocomplete="off" value="{{old('amount_inviting_interviews')}}" name="amount_inviting_interviews"
                            parsley-trigger="change" placeholder="Jumlah instansi yang mengundang wawancara"
                            class="form-control @error('amount_inviting_interviews') is-invalid @enderror ">
                            <div class="text-danger">
                                Harap mengisi jumlah instansi yang mengundang anda wawancara
                            </div>
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
                                <option value="Melamar ke instansi" @if(old('how_to_find_a_job') == "Melamar ke instansi ") {{ 'selected' }} @endif> Melamar ke instansi </option>
                                <option value="Mencari lewat internet/iklan online/milis" @if(old('how_to_find_a_job') == "Mencari lewat internet/iklan online/milis") {{ 'selected' }} @endif> Mencari lewat internet/iklan online/milis </option>
                                <option value="Dihubungi oleh instansi (RS, Klinik, perusahaan, dll)" @if(old('how_to_find_a_job') == "Dihubungi oleh instansi (RS, Klinik, perusahaan, dll)") {{ 'selected' }} @endif> Dihubungi oleh instansi (RS, Klinik, perusahaan, dll) </option>
                                <option value="Memperoleh informasi dari Poltekkes" @if(old('how_to_find_a_job') == "Memperoleh informasi dari Poltekkes") {{ 'selected' }} @endif> Memperoleh informasi dari Poltekkes </option>
                                <option value="Melalui penempatan kerja atau magang" @if(old('how_to_find_a_job') == "Melalui penempatan kerja atau magang") {{ 'selected' }} @endif> Melalui penempatan kerja atau magang </option>
                                <option value="Melalui jejaring alumni" @if(old('how_to_find_a_job') == "Melalui jejaring alumni") {{ 'selected' }} @endif> Melalui jejaring alumni </option>
                                <option value="Melalui jejaring/relasi orang tua/saudara/teman/dosen" @if(old('how_to_find_a_job') == "Melalui jejaring/relasi orang tua/saudara/teman/dosen") {{ 'selected' }} @endif> Melalui jejaring/relasi orang tua/saudara/teman/dosen </option>
                                <option value="Lainnya" @if(old('how_to_find_a_job') == "Lainnya") {{ 'selected' }} @endif> Lainnya </option>
                            </select>
                            <div class="text-danger">
                                Harap mempilih pilihan anda
                            </div>
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
                            <select  name="workplace" class="form-control @error('workplace') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Instansi Pemerintah" @if(old('workplace') == "Instansi Pemerintah") {{ 'selected' }} @endif> Instansi Pemerintah (termasuk BUMN) </option>
                                <option value="Swasta" @if(old('workplace') == "Swasta") {{ 'selected' }} @endif> Swasta </option>
                                <option value="Organisasi non profit/LSM" @if(old('workplace') == "Organisasi") {{ 'selected' }} @endif> Organisasi non profit/LSM </option>
                                <option value="Usaha sendiri" @if(old('workplace') == "Usaha sendiri") {{ 'selected' }} @endif> Usaha sendiri </option>
                                <option value="Lainnya" @if(old('workplace') == "Lainnya") {{ 'selected' }} @endif> Lainya... </option>
                            </select>
                            <div class="text-danger">
                                Harap mempilih pilihan anda
                            </div>
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
                                <option value="Puskesmas" @if(old('name_workplace') == "Puskesmas") {{ 'selected' }} @endif> Puskesmas</option>
                                <option value="Klinik" @if(old('name_workplace') == "Klinik") {{ 'selected' }} @endif> Klinik</option>
                                <option value="RS" @if(old('name_workplace') == "RS") {{ 'selected' }} @endif>RS</option>
                                <option value="Apotik" @if(old('name_workplace') == "Apotik") {{ 'selected' }} @endif>Apotik</option>
                                <option value="Laboratorium" @if(old('name_workplace') == "Laboratorium") {{ 'selected' }} @endif>Laboratorium</option>
                                <option value="Lainya" @if(old('name_workplace') == "Lainya") {{ 'selected' }} @endif> Lainya...</option>
                            </select>
                            <div class="text-danger">
                                Harap mempilih pilihan anda
                            </div>
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
                                <option value="Sesuai" @if(old('job_educational_background') == "Yes") {{ 'selected' }} @endif> Yes </option>
                                <option value="Tidak Sesuai" @if(old('job_educational_background') == "No") {{ 'selected' }} @endif> No </option>
                            </select>
                            <div class="text-danger">
                                Harap mempilih pilihan anda
                            </div>
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
                            <select  name="why_take_the_job" class="form-control @error('why_take_the_job') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Saya belum mendapatkan pekerjaan yang lebih sesuai" @if(old('why_take_the_job') == "Saya belum mendapatkan pekerjaan yang lebih sesuai") {{ 'selected' }} @endif> Saya belum mendapatkan pekerjaan yang lebih sesuai </option>
                                <option value="Di pekerjaan ini saya memeroleh prospek karir yang baik" @if(old('why_take_the_job') == "Di pekerjaan ini saya memeroleh prospek karir yang baik") {{ 'selected' }} @endif> Di pekerjaan ini saya memeroleh prospek karir yang baik. </option>
                                <option value="Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya" @if(old('why_take_the_job') == "aya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya") {{ 'selected' }} @endif> Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya </option>
                                <option value="Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya" @if(old('why_take_the_job') == "Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya") {{ 'selected' }} @endif> Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya </option>
                                <option value="Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini" @if(old('why_take_the_job') == "Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini") {{ 'selected' }} @endif> Saya dapat memperoleh pendapatan yang lebih tinggi di pekerjaan ini</option>
                                <option value="Pekerjaan saya saat ini lebih aman/terjamin/secure" @if(old('why_take_the_job') == "Pekerjaan saya saat ini lebih aman/terjamin/secure") {{ 'selected' }} @endif> Pekerjaan saya saat ini lebih aman/terjamin/secure </option>
                                <option value="Pekerjaan saya saat ini lebih menarik " @if(old('why_take_the_job') == "Pekerjaan saya saat ini lebih menarik") {{ 'selected' }} @endif> Pekerjaan saya saat ini lebih menarik </option>
                                <option value="Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel" @if(old('why_take_the_job') == "Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel") {{ 'selected' }} @endif> Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel </option>
                                <option value="Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya" @if(old('why_take_the_job') == "Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya") {{ 'selected' }} @endif> Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya </option>
                                <option value="Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya" @if(old('why_take_the_job') == "Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya") {{ 'selected' }} @endif> Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya </option>
                                <option value="Lainnya" @if(old('why_take_the_job') == "Lainnya") {{ 'selected' }} @endif > Lainnya... </option>
                            </select>
                            <div class="text-danger">
                                Harap mempilih pilihan anda
                            </div>
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
                            <select   name="level_of_education" class="form-control @error('level_of_education') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Setingkat lebih tinggi" @if(old('level_of_education') == "Setingkat lebih tinggi") {{ 'selected' }} @endif> Setingkat lebih tinggi  </option>
                                <option value="Tingkat yang sama" @if(old('level_of_education') == "Tingkat yang sama") {{ 'selected' }} @endif> Tingkat yang sama </option>
                                <option value="Setingkat lebih rendah" @if(old('level_of_education') == "Setingkat lebih rendah") {{ 'selected' }} @endif> Setingkat lebih rendah </option>
                            </select>
                            <div class="text-danger">
                                Harap mempilih pilihan anda
                            </div>
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
                            <select  name="relationship_study_work" class="form-control @error('relationship_study_work') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Sangat erat" @if(old('relationship_study_work') == "Sangat erat") {{ 'selected' }} @endif> Sangat erat  </option>
                                <option value="Erat" @if(old('relationship_study_work') == "Lainnya") {{ 'Erat' }} @endif> Erat </option>
                                <option value="Cukup erat" @if(old('relationship_study_work') == "Cukup erat") {{ 'selected' }} @endif> Cukup erat </option>
                                <option value="Kurang erat" @if(old('relationship_study_work') == "Kurang erat") {{ 'selected' }} @endif> Kurang erat </option>
                                <option value="Tidak sama sekali" @if(old('relationship_study_work') == "Tidak sama sekali") {{ 'selected' }} @endif> Tidak sama sekali </option>
                            </select>
                            <div class="text-danger">
                                Harap mempilih pilihan anda
                            </div>
                            @error('relationship_study_work')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_div_yes_additional_competence" style="display: none;">
                            <label for="#"> Dalam melaksanakan pekerjaan, menurut penilaian Saudara sejauh mana kompetensi tambahan berikut diperlukan?
                                <span class="text-danger">*</span>
                            </label>
                            <select   name="additional_competence" class="form-control @error('additional_competence') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value="Pengetahuan Umum" @if(old('additional_competence') == "Pengetahuan Umum") {{ 'selected' }} @endif > Pengetahuan Umum  </option>
                                <option value="Penguasaan Bahasa Inggris" @if(old('additional_competence') == "Penguasaan Bahasa Inggris") {{ 'selected' }} @endif > Penguasaan Bahasa Inggris </option>
                                <option value="Penguasaan Teknologi Informasi" @if(old('additional_competence') == "Penguasaan Teknologi Informasi") {{ 'selected' }} @endif >Penguasaan Teknologi Informasi </option>
                                <option value="Ketrampilan Komunikasi" @if(old('additional_competence') == "Ketrampilan Komunikasi") {{ 'selected' }} @endif > Ketrampilan Komunikasi </option>
                                <option value="Kerjasama Tim" @if(old('additional_competence') == "Kerjasama Tim") {{ 'selected' }} @endif > Kerjasama Tim </option>
                            </select>
                            <div class="text-danger">
                                Harap mempilih pilihan anda
                            </div>
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
                            <select  name="income_per_month" class="form-control @error('income_per_month') is-invalid @enderror">
                                <option selected disabled>---Pilih---</option>
                                <option value=" < 2000000" @if(old('income_per_month') == "< 2000000") {{ 'selected' }} @endif> < Rp. 2.000.000,-  </option>
                                <option value=" > 2000000-3500000" @if(old('income_per_month') == "> 2000000-3500000") {{ 'selected' }} @endif> > Rp. 2.000.000. – 3.500.000,- </option>
                                <option value=" > 3500000-5000000 " @if(old('income_per_month') == "> 3500000-5000000") {{ 'selected' }} @endif> > Rp. 3.500.000 – 5.000.000.- </option>
                                <option value=" > 5000000 - 6500000 " @if(old('income_per_month') == " > 5000000 - 6500000") {{ 'selected' }} @endif> >Rp. 5.000.000. – 6.500.000.- </option>
                                <option value="6500000" @if(old('income_per_month') == "6500000") {{ 'selected' }} @endif> >Rp. 6.500.000,- </option>
                            </select>
                            <div class="text-danger">
                                Harap mempilih pilihan anda
                            </div>
                            @error('income_per_month')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                </div> <!-- end card-box -->
            </div> <!-- end col -->

        </div> <!-- end row -->


