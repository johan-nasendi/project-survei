<h4 class="header-title mb-3"> <b>C.RIWAYAT PEKERJAAN</b> </h4>

        <div class="row" >
            <div class="col-lg-6">
                <div class="card-box">
                        <div class="form-group needs-validation was-validated" novalidate="">
                            <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">

                            <label for="#">Apakah anda bekerja?<span class="text-danger">*</span></label>
                            <select  name="do_you_work" class="form-control @error('do_you_work') is-invalid @enderror"
                            required="" >
                                <option value="" disabled selected="selected">---Pilih---</option>
                                <option value="Sudah" @if (old('do_you_work') == "Sudah") {{ 'selected' }} @endif> Sudah </option>
                                <option value="Belum"  @if (old('do_you_work') == "Belum")  {{ 'selected' }} @endif> Belum </option>
                            </select>
                            <div class="text-danger" style="font-size: 10px">Harap memilih pilihan anda</div>
                            {{-- <div class="invalid-feedback">Harap memilih pilihan anda</div> --}}
                            @error('do_you_work')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="#">Jika Sudah dimana anda bekerja?<span class="text-danger">*</span></label>
                            <select  name="workplace" class="form-control @error('workplace') is-invalid @enderror">
                                <option value="" disabled selected="selected">---Pilih---</option>
                                <option value="Pemerintah" @if(old('workplace') == "Pemerintah") {{ 'selected' }} @endif> Instansi Pemerintah </option>
                                <option value="Swasta" @if(old('workplace') == "Swasta") {{ 'selected' }} @endif> Swasta </option>
                                <option value="Usaha sendiri" @if(old('workplace') == "Usaha sendiri") {{ 'selected' }} @endif> Usaha sendiri </option>
                                <option value="Lainnya" @if(old('workplace') == "Lainnya") {{ 'selected' }} @endif> Lainya... </option>
                            </select>
                            <div class="text-danger" style="font-size: 10px">Harap memilih pilihan anda? Jika Sudah berkerja!</div>
                            @error('workplace')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                             @enderror
                        </div>

                        <div class="form-group">
                            <label for="#">Nama Instansi tempat bekerja?<span class="text-danger">*</span></label>
                            <input type="text" autocomplete="on"  value="{{old('name_workplace')}}" name="name_workplace"
                            placeholder="Nama Instansi tempat bekerja" class="form-control @error('name_workplace') is-invalid @enderror">
                            <div class="text-danger" style="font-size: 10px">
                                Harap mengisi Nama Instansi tempat bekerja? Jika Sudah berkerja!
                            </div>
                            @error('name_workplace')
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
                            <label for="#"> Kapan Mulai Bekerja (bulan/tahun)?<span class="text-danger">*</span></label>
                            <input type="month" autocomplete="on"  value="{{old('start_work')}}" name="start_work"
                            placeholder="Kapan Mulai Bekerja" class="form-control @error('start_work') is-invalid @enderror">
                            <div class="text-danger" style="font-size: 10px">
                                Harap mengisi kapan anda mulai berkerja? Jika Sudah berkerja!
                            </div>
                            @error('start_work')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="#"> Alamat tempat kerja?<span class="text-danger">*</span></label>
                            <textarea class="form-control @error('address_work') is-invalid @enderror" name="address_work" placeholder="Alamat tempat anda berkerja"  rows="2" autocomplete="on">{{old('address_work')}}</textarea>
                            <div class="text-danger" style="font-size: 10px">
                                Harap mengisi alamat tempat anda kerja? Jika Sudah berkerja!
                            </div>
                            @error('address_work')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="#"> Berapa gaji pertama anda?<span class="text-danger">*</span></label>
                            <input type="number" autocomplete="on"  value="{{old('income_per_month')}}" name="income_per_month"
                            placeholder="Berapa gaji pertama anda" class="form-control @error('income_per_month') is-invalid @enderror">
                            <div class="text-danger" style="font-size: 10px">
                                Harap mengisi gaji pertama anda? Jika Sudah berkerja!
                            </div>
                            @error('income_per_month')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="#"> Apakah pekerjaan anda sesuai dengan latar belakang pendidikan?<span class="text-danger">*</span></label>
                            <select  name="job_educational_background" class="form-control @error('job_educational_background') is-invalid @enderror" >
                                <option value="" disabled selected="selected">---Pilih---</option>
                                <option value="Sesuai" @if(old('job_educational_background') == "Sesuai") {{ 'selected' }} @endif> Sesuai </option>
                                <option value="Tidak Sesuai" @if(old('job_educational_background') == "Tidak Sesuai") {{ 'selected' }} @endif> Tidak Sesuai </option>
                            </select>
                            <div class="text-danger" style="font-size: 10px">
                                Harap memilih pilihan anda? Jika Sudah berkerja!
                            </div>
                            @error('job_educational_background')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                </div> <!-- end card-box -->
            </div> <!-- end col -->

        </div> <!-- end row -->


