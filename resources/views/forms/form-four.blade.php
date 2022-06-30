<h4 class="header-title mb-3"> <b>D.Saran dan Kritik</b> </h4>
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                    <div class="form-group">
                        <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">
                        <label for="#">Proses Belajar Mengajar  <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('learning_process') is-invalid @enderror" required="" name="learning_process" placeholder="Berikan pandangan anda tentang proses belajar mengajar di kampus"  rows="2" autocomplete="on">{{old('learning_process')}}</textarea>
                        {{-- <div class="invalid-feedback" style="font-size: 10px">Harap mengisi pandangan anda</div> --}}
                        @error('learning_process')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Kurikulum?
                            <span class="text-danger">*</span>
                        </label>
                        <textarea class="form-control @error('curriculum') is-invalid @enderror" required="" name="curriculum" placeholder="Berikan pandangan anda tentang Kurikulum yang diterapkan di kampus"  rows="2" autocomplete="on">{{old('curriculum')}}</textarea>
                        {{-- <div class="invalid-feedback" style="font-size: 10px">Harap mengisi pandangan anda</div> --}}
                        @error('curriculum')
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
                        <label for="#">Layanan Administrasi Kemahasiswaan?
                            <span class="text-danger">*</span>
                        </label>
                        <textarea class="form-control @error('student_admini_services') is-invalid @enderror" required="" name="student_admini_services" placeholder="Berikan pandangan anda tentang layanan administrasi kemahasiswaan di kampus"  rows="2" autocomplete="on">{{old('student_admini_services')}}</textarea>
                        {{-- <div class="invalid-feedback" style="font-size: 10px">Harap mengisi pandangan anda</div> --}}
                        @error('student_admini_services')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Sarana dan Prasarana?
                            <span class="text-danger">*</span>
                        </label>
                        <textarea class="form-control @error('facilities_infrastructure') is-invalid @enderror" required="" name="facilities_infrastructure" placeholder="Berikan pandangan anda tentang sarana dan prasarana yang ada di kampus"  rows="2" autocomplete="on">{{old('facilities_infrastructure')}}</textarea>
                        {{-- <div class="invalid-feedback" style="font-size: 10px">Harap mengisi pandangan anda</div> --}}
                        @error('facilities_infrastructure')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>




            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->


