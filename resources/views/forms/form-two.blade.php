
<h4 class="header-title mb-3"> PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN </h4>

    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                    <div class="form-group">
                        <label for="#">Lulus dari program studi<span class="text-danger">*</span></label>
                        <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">

                        <input type="text" name="what_study_program" id="what_study_program" value="{{old('what_study_program')}}"
                        placeholder="Lulus dari program studi apa ?" class="form-control @error('what_study_program') is-invalid @enderror"
                       required autocomplete="what_study_program" autofocus>
                        @error('what_study_program')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Masuk  kuliah <span class="text-danger">*</span></label>
                        <input type="date" name="college_entry_date" value="{{old('college_entry_date')}}"
                       required autocomplete="college_entry_date"   placeholder="Kapan Anda Masuk Kuliah?"
                       class="form-control @error('college_entry_date') is-invalid @enderror" autofocus>
                        @error('college_entry_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="#">Lulus  kuliah <span class="text-danger">*</span></label>
                        <input type="date" name="college_graduation_date" value="{{old('college_graduation_date')}}"
                       required autocomplete="college_graduation_date" placeholder="Kapan Anda Lulus Kuliah ?"
                        class="form-control @error('college_graduation_date') is-invalid @enderror" autofocus>
                        @error('college_graduation_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror

                    </div>
                    <div class="form-group">
                        <label for="pass1">Nilai IPK (Indeks Prestasi Kumulatif)<span class="text-danger">*</span></label>
                        <input  type="text" name="score_ipk" value="{{old('score_ipk')}}"
                        placeholder="Berapa nilai IPK (Indeks Prestasi Kumulatif) anda?"
                       required autocomplete="score_ipk" autofocus class="form-control @error('score_ipk') is-invalid @enderror">
                        @error('score_ipk')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
                    </div>
                    <div class="form-group">
                        <label for="#">Selama kuliah, apakah anda menjadi anggota dari suatu organisasi
                            (sosial, pemuda, organisasi keagamaan) di dalam atau di luar kampus?<span class="text-danger">*</span></label>
                        <select name="organization" class="form-control @error('organization') is-invalid @enderror"
                       required autocomplete="organization" autofocus>
                            <option selected disabled>---Pilih---</option>
                            <option value="Yes" {{ old('organization')}}> Yes</option>
                            <option value="No" {{ old('organization')}}>No</option>
                        </select>
                        @error('organization')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Seberapa aktif anda di organisasi tersebut?<span class="text-danger">*</span></label>
                            <select name="active_inactive_organization" class="form-control @error('active_inactive_organization') is-invalid @enderror"
                           required autocomplete="active_inactive_organization" autofocus>
                                <option selected disabled>---Pilih---</option>
                                <option value="Sangat Aktif" {{old('active_inactive_organization')}}>Sangat Aktif</option>
                                <option value="Cukup Aktif" {{old('active_inactive_organization')}}>Cukup Aktif</option>
                                <option value="Kurang Aktif" {{old('active_inactive_organization')}}>Kurang Aktif</option>
                                <option value="Pasif" {{old('active_inactive_organization')}}>Pasif</option>
                                <option value="Tidak Aktif" {{old('active_inactive_organization')}}>Tidak Aktif</option>
                            </select>
                            @error('active_inactive_organization')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card-box">

                <div class="form-group">
                    <label for="#">Setelah lulus dari Poltekkes,apakah anda melanjutkan pendidikan ke jenjang yang lebih tinggi?
                        <span class="text-danger">*</span>
                    </label>
                    <select name="further_education_levels" class="form-control @error('further_education_levels') is-invalid @enderror"
                   required autocomplete="further_education_levels" autofocus>
                        <option selected disabled>---Pilih---</option>
                        <option value="Yes" {{old('further_education_levels')}}>Yes</option>
                        <option value="No" {{old('further_education_levels')}}>No</option>
                    </select>
                    @error('further_education_levels')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="#">Jika ya, apakah pendidikan yang diambil sesuai dengan latar belakang pendidikan anda di Poltekkes?
                        <span class="text-danger">*</span>
                    </label>
                    <select name="educational_background" class="form-control @error('educational_background') is-invalid @enderror"
                   required autocomplete="educational_background" autofocus>
                        <option selected disabled>---Pilih---</option>
                        <option value="Yes" {{old('educational_background')}}>Yes</option>
                        <option value="No" {{old('educational_background')}}>No</option>
                    </select>
                    @error('educational_background')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="#">Jika anda sudah bekerja, apakah pendidikan yang diambil sesuai dengan bidang pekerjaan anda saat ini?
                        <span class="text-danger">*</span>
                    </label>
                    <select name="field_work" class="form-control @error('field_work') is-invalid @enderror"
                   required autocomplete="field_work" autofocus>
                        <option selected disabled>---Pilih---</option>
                        <option value="Yes" {{old('field_work')}}>Yes</option>
                        <option value="No" {{old('field_work')}}>No</option>
                    </select>
                    @error('field_work')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="#">Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?
                        <span class="text-danger">*</span>
                    </label>
                    <select name="according" class="form-control @error('according') is-invalid @enderror"
                    required autocomplete="according" autofocus>
                        <option selected disabled>---Pilih---</option>
                        <option value="Perkuliahan" {{old('according')}}>Perkuliahan</option>
                        <option value="Praktek Laboratorium" {{old('according')}}>Praktek Laboratorium</option>
                        <option value="Praktik Klinik" {{old('according')}}>Praktik Klinik</option>
                        <option value="Praktek kerja Lapangan" {{old('according')}}>Praktek kerja Lapangan/PKN</option>
                        <option value="Keterlibatan dalam penelitian dosen" {{old('according')}}>Keterlibatan dalam penelitian dosen</option>
                        <option value="Magang" {{old('according')}}>Magang</option>
                    </select>
                    @error('according')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

            </div> <!-- end card-box -->
        </div><!-- end col -->

    </div> <!-- end row -->
    <ul class="list-inline wizard mb-0">
        <li class="previous list-inline-item disabled">
            <a href="javascript: void(0);" class="btn btn-secondary ">
                <i class="fas fa-arrow-alt-circle-left"></i> <b>SEBELUMYA</b>
            </a>
        </li>
        <li class="next list-inline-item float-right" >
            <button type="button" class="btn btn-warning"> <b> SELANJUTNYA</b>
                <i class="fas fa-arrow-alt-circle-right"></i>
            </button>
        </li>
    </ul>

