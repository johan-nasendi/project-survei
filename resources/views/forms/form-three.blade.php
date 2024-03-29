<h4 class="header-title mb-3"> <b>C.RIWAYAT PEKERJAAN</b> </h4>

        <div class="row" >
            <div class="col-lg-6">
                <div class="card-box">
                        <div class="form-group">
                            <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">
                            <label for="#">Apakah anda sudah bekerja?<span class="text-danger">*</span></label>
                            <select  name="do_you_work" class="form-control @error('do_you_work') is-invalid @enderror"
                            required="" id="you_work" onchange="showDivJob()">
                                <option value="" disabled selected="selected">---Pilih---</option>
                                <option value="Sudah" @if (old('do_you_work') == "Sudah") {{ 'selected' }} @endif> Sudah </option>
                                <option value="Belum"  @if (old('do_you_work') == "Belum")  {{ 'selected' }} @endif> Belum </option>
                                <option value="Sedang melanjutkan pendidikan"  @if (old('do_you_work') == "Sedang melanjutkan pendidikan") {{ 'selected' }} @endif> Sedang melanjutkan pendidikan </option>
                            </select>
                            @error('do_you_work')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_description" style="display: none;">
                            <label for="#">Dimana anda melanjutkan pendidikan(perguruan tinggi apa)?<span class="text-danger">*</span></label>
                            <textarea class="form-control @error('description') is-invalid @enderror"  name="description" placeholder="Berikan keterangan anda,Mengapa anda Belum Berkerja?"  rows="2" autocomplete="on">{{old('description')}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_current_activities" style="display: none;">
                            <label for="#">Apa kegiatan Anda saat sekarang?<span class="text-danger">*</span></label>
                            <textarea class="form-control @error('current_activities') is-invalid @enderror"  name="current_activities" placeholder="Berikan keterangan anda, Apa kegiatan Anda saat sekarang?"  rows="2" autocomplete="on">{{old('current_activities')}}</textarea>
                            @error('current_activities')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group" id="hidden_workplace" style="display: none;">
                            <label for="#">Jika Sudah dimana anda bekerja?<span class="text-danger">*</span></label>
                            <select  name="workplace" class="form-control @error('workplace') is-invalid @enderror">
                                <option value="" disabled selected="selected">---Pilih---</option>
                                <option value="Pemerintah" @if(old('workplace') == "Pemerintah") {{ 'selected' }} @endif> Instansi Pemerintah </option>
                                <option value="Swasta" @if(old('workplace') == "Swasta") {{ 'selected' }} @endif> Swasta </option>
                                <option value="Usaha sendiri" @if(old('workplace') == "Usaha sendiri") {{ 'selected' }} @endif> Usaha sendiri </option>
                                <option value="Lainnya" @if(old('workplace') == "Lainnya") {{ 'selected' }} @endif> Lainya... </option>
                            </select>
                            @error('workplace')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                             @enderror
                        </div>

                        <div class="form-group" id="hidden_name_workplace" style="display: none;">
                            <label for="#">Nama Instansi tempat bekerja?<span class="text-danger">*</span></label>
                            <input type="text" autocomplete="on"  value="{{old('name_workplace')}}" name="name_workplace"
                            placeholder="Nama Instansi tempat bekerja" class="form-control @error('name_workplace') is-invalid @enderror">
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
                        <div class="form-group" id="hidden_start_work" style="display: none;">
                            <label for="#"> Kapan Mulai Bekerja (bulan/tahun)?<span class="text-danger">*</span></label>
                            <input type="month" autocomplete="on"  value="{{old('start_work')}}" name="start_work"
                            placeholder="Kapan Mulai Bekerja" class="form-control @error('start_work') is-invalid @enderror">
                            @error('start_work')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group" id="hidden_address_work" style="display: none;">
                            <label for="#"> Alamat tempat kerja?<span class="text-danger">*</span></label>
                            <textarea class="form-control @error('address_work') is-invalid @enderror" name="address_work" placeholder="Alamat tempat anda berkerja"  rows="2" autocomplete="on">{{old('address_work')}}</textarea>
                            @error('address_work')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group" id="hidden_income_per_month" style="display: none;">
                            <label for="#"> Berapa gaji pertama anda?<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Rp.</span>
                                </div>
                                <input type="text" id="dengan-rupiah" autocomplete="on"  value="{{old('income_per_month')}}" name="income_per_month"
                                placeholder="Rp" class="form-control @error('income_per_month') is-invalid @enderror">
                                @error('income_per_month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" id="hidden_job_educational_background" style="display: none;">
                            <label for="#"> Apakah pekerjaan anda sesuai dengan latar belakang pendidikan?<span class="text-danger">*</span></label>
                            <select  name="job_educational_background" class="form-control @error('job_educational_background') is-invalid @enderror" >
                                <option value="" disabled selected="selected">---Pilih---</option>
                                <option value="Sesuai" @if(old('job_educational_background') == "Sesuai") {{ 'selected' }} @endif> Sesuai </option>
                                <option value="Tidak Sesuai" @if(old('job_educational_background') == "Tidak Sesuai") {{ 'selected' }} @endif> Tidak Sesuai </option>
                            </select>
                            @error('job_educational_background')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                </div> <!-- end card-box -->
            </div> <!-- end col -->

        </div> <!-- end row -->


