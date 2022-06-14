<h4 class="header-title mb-3"> <b>D.KOMPETENSI DAN HUBUNGAN ANTARA PROGRAM STUDI DENGAN DUNIA KERJA</b> </h4>
    <div class="row needs-validation was-validated" novalidate="">
        <div class="col-lg-6">
            <div class="card-box">
                    <div class="form-group">
                        <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">
                        <label for="#">Kesesuaian Kurikulum dengan dunia kerja <span class="text-danger">*</span></label>
                        <select name="curriculum_compatibility_jobs" class="form-control @error('curriculum_compatibility_jobs') is-invalid @enderror"
                        required=""  autocomplete="off">
                            <option value="" selected disabled>---Pilih---</option>
                            <option  value="Sangat Tidak Sesuai" @if(old('curriculum_compatibility_jobs') == "Sangat Tidak Sesuai") {{ 'selected' }} @endif> [1] Sangat Tidak Sesuai </option>
                            <option value="Tidak Sesuai" @if(old('curriculum_compatibility_jobs') == "Tidak Sesuai") {{ 'selected' }} @endif> [2] Tidak Sesuai </option>
                            <option value="Kurang Sesuai" @if(old('curriculum_compatibility_jobs') == "Kurang Sesuai") {{ 'selected' }} @endif> [3] Kurang Sesuai </option>
                            <option value="Sesuai" @if(old('curriculum_compatibility_jobs') == "Sesuai") {{ 'selected' }} @endif> [4] Sesuai </option>
                            <option value="Sangat Sesuai" @if(old('curriculum_compatibility_jobs') == "Sangat Sesuai") {{ 'selected' }} @endif> [5] Sangat Sesuai </option>
                        </select>
                        <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
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
                        required=""  autocomplete="off">
                            <option value="" selected disabled>---Pilih---</option>
                            <option value="Pengetahuan di bidang atau disiplin ilmu" @if(old('health_polytechnic_Competence') == "Pengetahuan di bidang atau disiplin ilmu") {{ 'selected' }} @endif> Pengetahuan di bidang atau disiplin ilmu </option>
                            <option value="Pengetahuan di luar bidang disiplin ilmu" @if(old('health_polytechnic_Competence') == "Pengetahuan di luar bidang disiplin ilmu") {{ 'selected' }} @endif> Pengetahuan di luar bidang disiplin ilmu</option>
                        </select>
                        <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
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
                        required=""  autocomplete="off" >
                            <option value="" selected disabled>---Pilih---</option>
                            <option value="Pengetahuan di bidang atau disiplin ilmu" @if(old('competency_mastered') == "Pengetahuan di bidang atau disiplin ilmu") {{ 'selected' }} @endif>Pengetahuan di bidang atau disiplin ilmu </option>
                            <option value="Pengetahuan di luar bidang disiplin ilmu" @if(old('competency_mastered') == "Pengetahuan di luar bidang disiplin ilmu") {{ 'selected' }} @endif> Pengetahuan di luar bidang disiplin ilmu </option>
                            <option value="Penguasaan Bahasa Inggris" @if(old('competency_mastered') == "Penguasaan Bahasa Inggris") {{ 'selected' }} @endif> Penguasaan Bahasa Inggris </option>
                            <option value="Penguasaan Teknologi Informasi" @if(old('competency_mastered') == "Penguasaan Teknologi Informasi") {{ 'selected' }} @endif> Penguasaan Teknologi Informasi </option>
                            <option value="Ketrampilan Komunikasi" @if(old('competency_mastered') == "Ketrampilan Komunikasi") {{ 'selected' }} @endif> Ketrampilan Komunikasi </option>
                            <option value="Kerjasama Tim" @if(old('competency_mastered') == "Kerjasama Tim") {{ 'selected' }} @endif> Kerjasama Tim </option>
                            <option value="Pengetahuan Umum" @if(old('competency_mastered') == "Pengetahuan Umum") {{ 'selected' }} @endif> Pengetahuan Umum </option>
                        </select>
                        <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
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
                            required="" autocomplete="off" >
                                <option value="" selected disabled>---Pilih---</option>
                                <option value="Pengetahuan di bidang atau disiplin ilmu" @if(old('competencies_required_job') == "Pengetahuan di bidang atau disiplin ilmu") {{ 'selected' }} @endif>Pengetahuan di bidang atau disiplin ilmu </option>
                                <option value="Pengetahuan di luar bidang disiplin ilmu" @if(old('competencies_required_job') == "Pengetahuan di luar bidang disiplin ilmu") {{ 'selected' }} @endif> Pengetahuan di luar bidang disiplin ilmu </option>
                                <option value="Penguasaan Bahasa Inggris" @if(old('competencies_required_job') == "Penguasaan Bahasa Inggris") {{ 'selected' }} @endif> Penguasaan Bahasa Inggris </option>
                                <option value="Penguasaan Teknologi Informasi" @if(old('competencies_required_job') == "Penguasaan Teknologi Informasi") {{ 'selected' }} @endif> Penguasaan Teknologi Informasi </option>
                                <option value="Ketrampilan Komunikasi" @if(old('competencies_required_job') == "Ketrampilan Komunikasi") {{ 'selected' }} @endif> Ketrampilan Komunikasi </option>
                                <option value="Kerjasama Tim" @if(old('competencies_required_job') == "Kerjasama Tim") {{ 'selected' }} @endif> Kerjasama Tim </option>
                                <option value="Pengetahuan Umum" @if(old('competencies_required_job') == "Pengetahuan Umum") {{ 'selected' }} @endif> Pengetahuan Umum </option>
                            </select>
                            <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
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
                        required="" autocomplete="off" >
                            <option value="" selected disabled>---Pilih---</option>
                            <option value="Komunikasi" @if(old('competency_improvement_needs') == "Komunikasi") {{ 'selected' }} @endif> Komunikasi </option>
                            <option value="Kemampuan berbahasa inggris" @if(old('competency_improvement_needs') == "Kemampuan berbahasa inggris") {{ 'selected' }} @endif> Kemampuan berbahasa inggris </option>
                            <option value="Kemampuan penguasaan teknologi informasi" @if(old('competency_improvement_needs') == "Kemampuan penguasaan teknologi informasi") {{ 'selected' }} @endif> Kemampuan penguasaan teknologi informasi </option>
                        </select>
                        <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
                        @error('competency_improvement_needs')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->


