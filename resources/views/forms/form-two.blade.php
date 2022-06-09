
<h4 class="header-title mb-3"> <b>B.PENGALAMAN PEMBELAJARAN DAN KEGIATAN PENDIDIKAN</b> </h4>

    <div class="row  needs-validation was-validated" novalidate="">
        <div class="col-lg-6">
            <div class="card-box">
                    <div class="form-group">
                        <label for="#">Lulus dari program studi<span class="text-danger">*</span></label>
                        <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">

                        <input type="text"  name="what_study_program" id="what_study_program" value="{{old('what_study_program')}}"
                        placeholder="Lulus dari program studi apa ?" class="form-control @error('what_study_program') is-invalid @enderror"
                       required="" autocomplete="what_study_program">
                       <div class="invalid-feedback">Harap mengisi program studi anda</div>
                        @error('what_study_program')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Masuk  kuliah <span class="text-danger">*</span></label>
                        <input type="date"  name="college_entry_date" value="{{old('college_entry_date')}}"
                       required=""  autocomplete="off"  placeholder="Kapan Anda Masuk Kuliah?"
                       class="form-control @error('college_entry_date') is-invalid @enderror">
                       <div class="invalid-feedback">Harap mengisi kapan anda masuk kuliah anda</div>
                        @error('college_entry_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="#">Lulus  kuliah <span class="text-danger">*</span></label>
                        <input type="date"  name="college_graduation_date" value="{{old('college_graduation_date')}}"
                       required="" autocomplete="off" placeholder="Kapan Anda Lulus Kuliah ?"
                        class="form-control @error('college_graduation_date') is-invalid @enderror" >
                        <div class="invalid-feedback">Harap mengisi kapan lulus kuliah anda</div>
                        @error('college_graduation_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pass1">Nilai IPK (Indeks Prestasi Kumulatif)<span class="text-danger">*</span></label>
                        <input  type="text"  name="score_ipk" value="{{old('score_ipk')}}"
                        placeholder="Berapa nilai IPK (Indeks Prestasi Kumulatif) anda?"
                       required="" autocomplete="off"  class="form-control @error('score_ipk') is-invalid @enderror">
                       <div class="invalid-feedback">Harap mengisi nilai IPK anda</div>
                        @error('score_ipk')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="#">Selama kuliah, apakah anda menjadi anggota dari suatu organisasi
                            (sosial, pemuda, organisasi keagamaan) di dalam atau di luar kampus?<span class="text-danger">*</span></label>
                        <select name="organization"  class="form-control @error('organization') is-invalid @enderror"
                       required=""  autocomplete="off">
                            <option value="" selected disabled>---Pilih---</option>
                            <option value="Yes" @if(old('organization') == "Yes") {{ 'selected' }} @endif> Yes</option>
                            <option value="No" @if(old('organization') == "No") {{ 'selected' }} @endif>No</option>
                        </select>
                        <div class="invalid-feedback">Harap memilih pilihan anda  anda</div>
                        @error('organization')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Seberapa aktif anda di organisasi tersebut?<span class="text-danger">*</span></label>
                            <select name="active_inactive_organization"  class="form-control @error('active_inactive_organization') is-invalid @enderror"
                           required autocomplete="off" >
                                <option value="" selected disabled>---Pilih---</option>
                                <option value="Sangat Aktif" @if (old('active_inactive_organization') == "Sangat Aktif") {{ 'selected' }} @endif>Sangat Aktif</option>
                                <option value="Cukup Aktif" @if (old('active_inactive_organization') == "Cukup Aktif") {{ 'selected' }} @endif>Cukup Aktif</option>
                                <option value="Kurang Aktif" @if (old('active_inactive_organization') == "Kurang Aktif") {{ 'selected' }} @endif>Kurang Aktif</option>
                                <option value="Pasif" @if (old('active_inactive_organization') == "Pasif") {{ 'selected' }} @endif>Pasif</option>
                                <option value="Tidak Aktif" @if (old('active_inactive_organization') == "Tidak Aktif") {{ 'selected' }} @endif>Tidak Aktif</option>
                            </select>
                            <div class="invalid-feedback">Harap memilih pilihan anda  anda</div>
                            @error('active_inactive_organization')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>



            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-lg-6 ">
            <div class="card-box">

                <div class="form-group">
                    <label for="#">Setelah lulus dari Poltekkes,apakah anda melanjutkan pendidikan ke jenjang yang lebih tinggi?
                        <span class="text-danger">*</span>
                    </label>
                    <select name="further_education_levels"  class="form-control @error('further_education_levels') is-invalid @enderror"
                   required="" autocomplete="off" >
                        <option value="" selected disabled>---Pilih---</option>
                        <option value="Yes" @if(old('further_education_levels') == "Yes") {{ 'selected' }} @endif>Yes</option>
                        <option value="No" @if(old('further_education_levels') == "No") {{ 'selected' }} @endif>No</option>
                    </select>
                    <div class="invalid-feedback">Harap memilih pilihan anda  anda</div>
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
                    <select name="educational_background"  class="form-control @error('educational_background') is-invalid @enderror"
                   required=""  autocomplete="off">
                        <option value="" selected disabled>---Pilih---</option>
                        <option value="Yes" @if(old('educational_background') == "Yes") {{ 'selected' }} @endif>Yes</option>
                        <option value="No" @if(old('educational_background') == "No") {{ 'selected' }} @endif>No</option>
                    </select>
                    <div class="invalid-feedback">Harap memilih pilihan anda  anda</div>
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
                    <select name="field_work"  class="form-control @error('field_work') is-invalid @enderror"
                   required=""  autocomplete="off">
                        <option value="" selected disabled>---Pilih---</option>
                        <option value="Yes" @if(old('field_work') == "Yes") {{ 'selected' }} @endif>Yes</option>
                        <option value="No" @if(old('field_work') == "No") {{ 'selected' }} @endif>No</option>
                    </select>
                    <div class="invalid-feedback">Harap memilih pilihan anda  anda</div>
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
                    <select name="according"  class="form-control @error('according') is-invalid @enderror"
                    required=""  autocomplete="off">
                        <option value="" selected disabled>---Pilih---</option>
                        <option value="Perkuliahan" @if (old('according') == "Perkuliahan") {{ 'selected' }} @endif>Perkuliahan</option>
                        <option value="Praktek Laboratorium" @if (old('according') == "Praktek Laboratorium") {{ 'selected' }} @endif>Praktek Laboratorium</option>
                        <option value="Praktik Klinik" @if (old('gender') == "Praktik Klinik") {{ 'selected' }} @endif>Praktik Klinik</option>
                        <option value="Praktek kerja Lapangan" @if (old('according') == "Praktek kerja Lapangan") {{ 'selected' }} @endif>Praktek kerja Lapangan/PKN</option>
                        <option value="Keterlibatan dalam penelitian dosen" @if (old('according') == "Keterlibatan dalam penelitian dosen") {{ 'selected' }} @endif>Keterlibatan dalam penelitian dosen</option>
                        <option value="Magang" @if(old('according') == "Magang") {{ 'selected' }} @endif>Magang</option>
                    </select>
                    <div class="invalid-feedback">Harap memilih pilihan anda  anda</div>
                    @error('according')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div> <!-- end card-box -->
        </div><!-- end col -->

    </div> <!-- end row -->



