
<h4 class="header-title mb-3"> <b>B.PENGALAMAN PBM</b> </h4>

    <div class="row  needs-validation was-validated" novalidate="">
        <div class="col-lg-6">
            <div class="card-box">

                    <div class="form-group">
                        <label for="#">Selama kuliah apakah anda pernah menjadi anggota suatu organisasi di dalam atau luar kampus?<span class="text-danger">*</span></label>
                            <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">
                        <select name="active_inactive_organization"  class="form-control @error('active_inactive_organization') is-invalid @enderror"
                       required="" >
                            <option value="" selected disabled>---Pilih---</option>
                            <option value="Ya" @if(old('active_inactive_organization') == "Ya") {{ 'selected' }} @endif> Ya</option>
                            <option value="Tidak" @if(old('active_inactive_organization') == "Tidak") {{ 'selected' }} @endif>Tidak</option>
                        </select>
                        <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
                        @error('active_inactive_organization')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Organisasi apa yang pernah anda ikut?<span class="text-danger">*</span></label>
                            <select name="organization_name"  class="form-control @error('organization_name') is-invalid @enderror"
                           required="" >
                                <option value="" selected disabled>---Pilih---</option>
                                <option value="BEM" @if (old('organization_name') == "BEM") {{ 'selected' }} @endif>BEM</option>
                                <option value="HMJ" @if (old('organization_name') == "HMJ") {{ 'selected' }} @endif>HMJ</option>
                                <option value="UKM" @if (old('organization_name') == "UKM") {{ 'selected' }} @endif>UKM</option>
                                <option value="Lainnya" @if (old('organization_name') == "Lainnya") {{ 'selected' }} @endif>Lainnya</option>
                            </select>
                            <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
                            @error('organization_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Selama Kuliah, menurut saudara bagaimana kemampuan dosen dalam mengampu mata kuliah?<span class="text-danger">*</span></label>
                            <select name="lecturer_ability"  class="form-control @error('lecturer_ability') is-invalid @enderror"
                           required="" >
                                <option value="" selected disabled>---Pilih---</option>
                                <option value="Sangat Baik" @if (old('lecturer_ability') == "Sangat Baik") {{ 'selected' }} @endif>Sangat Baik</option>
                                <option value="Baik" @if (old('lecturer_ability') == "Baik") {{ 'selected' }} @endif>Baik</option>
                                <option value="Cukup" @if (old('lecturer_ability') == "Cukup") {{ 'selected' }} @endif>Cukup</option>
                                <option value="Kurang" @if (old('lecturer_ability') == "Kurang") {{ 'selected' }} @endif>Kurang</option>
                            </select>
                            <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
                            @error('lecturer_ability')
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
                    <label for="#">Bagaimana ketrampilan dosen dan instruktur dalam memberikan praktek?
                        <span class="text-danger">*</span>
                    </label>
                    <select name="lecturer_skills_practice"  class="form-control @error('lecturer_skills_practice') is-invalid @enderror"
                   required="" >
                        <option value="" selected disabled>---Pilih---</option>
                        <option value="Sangat Baik" @if (old('lecturer_skills_practice') == "Sangat Baik") {{ 'selected' }} @endif>Sangat Baik</option>
                        <option value="Baik" @if (old('lecturer_skills_practice') == "Baik") {{ 'selected' }} @endif>Baik</option>
                        <option value="Cukup" @if (old('lecturer_skills_practice') == "Cukup") {{ 'selected' }} @endif>Cukup</option>
                        <option value="Kurang" @if (old('lecturer_skills_practice') == "Kurang") {{ 'selected' }} @endif>Kurang</option>
                    </select>
                    <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
                    @error('lecturer_skills_practice')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="#">Bagaimana pelayanan Rektorat dalam memberikan pengurusan administrasi mahasiswa?
                        <span class="text-danger">*</span>
                    </label>
                    <select name="rectors_service"  class="form-control @error('rectors_service') is-invalid @enderror"
                   required="">
                        <option value="" selected disabled>---Pilih---</option>
                        <option value="Sangat Baik" @if (old('rectors_service') == "Sangat Baik") {{ 'selected' }} @endif>Sangat Baik</option>
                        <option value="Baik" @if (old('rectors_service') == "Baik") {{ 'selected' }} @endif>Baik</option>
                        <option value="Cukup" @if (old('rectors_service') == "Cukup") {{ 'selected' }} @endif>Cukup</option>
                        <option value="Kurang" @if (old('rectors_service') == "Kurang") {{ 'selected' }} @endif>Kurang</option>
                    </select>
                    <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
                    @error('rectors_service')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="#">Bagaimana pelayanan Program studi dalam memberikan pengurusan administrasi mahasiswa?
                        <span class="text-danger">*</span>
                    </label>
                    <select name="study_program_services"  class="form-control @error('study_program_services') is-invalid @enderror"
                   required="" >
                        <option value="" selected disabled>---Pilih---</option>
                        <option value="Sangat Baik" @if (old('study_program_services') == "Sangat Baik") {{ 'selected' }} @endif>Sangat Baik</option>
                        <option value="Baik" @if (old('study_program_services') == "Baik") {{ 'selected' }} @endif>Baik</option>
                        <option value="Cukup" @if (old('study_program_services') == "Cukup") {{ 'selected' }} @endif>Cukup</option>
                        <option value="Kurang" @if (old('study_program_services') == "Kurang") {{ 'selected' }} @endif>Kurang</option>
                    </select>
                    <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
                    @error('study_program_services')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


            </div> <!-- end card-box -->
        </div><!-- end col -->

    </div> <!-- end row -->



