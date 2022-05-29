<h4 class="header-title mb-3"> KOMPETENSI DAN HUBUNGAN ANTARA PROGRAM STUDI DENGAN DUNIA KERJA </h4>
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                    <div class="form-group">
                        <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">
                        <label for="#">Kesesuaian Kurikulum dengan dunia kerja <span class="text-danger">*</span></label>
                        <select name="curriculum_compatibility_jobs" class="form-control @error('curriculum_compatibility_jobs') is-invalid @enderror"
                        required autocomplete="curriculum_compatibility_jobs" >
                            <option selected disabled>---Pilih---</option>
                            <option value="Sangat Tidak Sesuai" {{old('curriculum_compatibility_jobs')}}> [1] Sangat Tidak Sesuai </option>
                            <option value="Tidak Sesuai" {{old('curriculum_compatibility_jobs')}}> [2] Tidak Sesuai </option>
                            <option value="Kurang Sesuai" {{old('curriculum_compatibility_jobs')}}> [3] Kurang Sesuai </option>
                            <option value="Sesuai" {{old('curriculum_compatibility_jobs')}}> [4] Sesuai </option>
                            <option value="Sangat Sesuai" {{old('curriculum_compatibility_jobs')}}> [5] Sangat Sesuai </option>
                        </select>
                        @error('curriculum_compatibility_jobs')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Kesesuaian Kompetensi yang diperoleh di Poltekkes Kemenkes berikut ini dalam melaksanakan pekerjaan anda?
                            <span class="text-danger">*</span>
                        </label>
                        <select name="health_polytechnic_Competence" class="form-control @error('health_polytechnic_Competence') is-invalid @enderror"
                        required autocomplete="health_polytechnic_Competence" >
                            <option selected disabled>---Pilih---</option>
                            <option value="Pengetahuan di bidang atau disiplin ilmu" {{old('health_polytechnic_Competence')}}> Pengetahuan di bidang atau disiplin ilmu </option>
                            <option value="Pengetahuan di luar bidang disiplin ilmu" {{old('health_polytechnic_Competence')}}> Pengetahuan di luar bidang disiplin ilmu</option>
                        </select>
                        @error('health_polytechnic_Competence')
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
                        <label for="">Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?
                            <span class="text-danger">*</span>
                        </label>
                        <select name="competency_mastered" class="form-control @error('competency_mastered') is-invalid @enderror"
                        required autocomplete="competency_mastered" >
                            <option selected disabled>---Pilih---</option>
                            <option value="Pengetahuan di bidang atau disiplin ilmu" {{old('competency_mastered')}}>Pengetahuan di bidang atau disiplin ilmu </option>
                            <option value="Pengetahuan di luar bidang disiplin ilmu" {{old('competency_mastered')}}> Pengetahuan di luar bidang disiplin ilmu </option>
                            <option value="Penguasaan Bahasa Inggris" {{old('competency_mastered')}}> Penguasaan Bahasa Inggris </option>
                            <option value="Penguasaan Teknologi Informasi" {{old('competency_mastered')}}> Penguasaan Teknologi Informasi </option>
                            <option value="Ketrampilan Komunikasi" {{old('competency_mastered')}}> Ketrampilan Komunikasi </option>
                            <option value="Kerjasama Tim" {{old('competency_mastered')}}> Kerjasama Tim </option>
                            <option value="Pengetahuan Umum" {{old('competency_mastered')}}> Pengetahuan Umum </option>
                        </select>
                        @error('competency_mastered')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?
                            <span class="text-danger">*</span>
                        </label>
                            <select name="competencies_required_job" class="form-control @error('competencies_required_job') is-invalid @enderror"
                            required autocomplete="competencies_required_job" >
                                <option selected disabled>---Pilih---</option>
                                <option value="Pengetahuan di bidang atau disiplin ilmu" {{old('competencies_required_job')}}>Pengetahuan di bidang atau disiplin ilmu </option>
                                <option value="Pengetahuan di luar bidang disiplin ilmu" {{old('competencies_required_job')}}> Pengetahuan di luar bidang disiplin ilmu </option>
                                <option value="Penguasaan Bahasa Inggris" {{old('competencies_required_job')}}> Penguasaan Bahasa Inggris </option>
                                <option value="Penguasaan Teknologi Informasi" {{old('competencies_required_job')}}> Penguasaan Teknologi Informasi </option>
                                <option value="Ketrampilan Komunikasi" {{old('competencies_required_job')}}> Ketrampilan Komunikasi </option>
                                <option value="Kerjasama Tim" {{old('competencies_required_job')}}> Kerjasama Tim </option>
                                <option value="Pengetahuan Umum" {{old('competencies_required_job')}}> Pengetahuan Umum </option>
                            </select>
                            @error('competencies_required_job')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Kebutuhan peningkatan Kompetensi yang perlu ditambah pada kurikulum Prodi
                            <span class="text-danger">*</span>
                        </label>
                        <select name="competency_improvement_needs" class="form-control @error('competency_improvement_needs') is-invalid @enderror"
                        required autocomplete="competency_improvement_needs" >
                            <option selected disabled>---Pilih---</option>
                            <option value="Komunikasi" {{old('competency_improvement_needs')}}> Komunikasi </option>
                            <option value="Kemampuan berbahasa inggris" {{old('competency_improvement_needs')}}> Kemampuan berbahasa inggris </option>
                            <option value="Kemampuan penguasaan teknologi informasi" {{old('competency_improvement_needs')}}> Kemampuan penguasaan teknologi informasi </option>
                        </select>
                        @error('competency_improvement_needs')
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
            <a href="javascript: void(0);" class="btn btn-secondary ">
                <i class="fas fa-arrow-alt-circle-left"></i> <b>SEBELUMYA</b>
            </a>
        </li>
        <li class="next list-inline-item float-right">
            <button type="button" class="btn btn-warning  text-dark"> <b> SELANJUTNYA</b> <i class=" fas fa-arrow-alt-circle-right"></i> </button>
        </li>
    </ul>

