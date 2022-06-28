
<h4 class="header-title mb-3"> <b>A.IDENTITAS ALUMNI</b> </h4>

        <div class="row needs-validation was-validated bg-white"   novalidate="">
            <div class="col-lg-6 ">

                    <div class="form-group">
                        <label  for="name"> Nama <span class="text-danger">*</span> </label>
                            <input type="text"  name="name" value="{{ old('name') }}"  placeholder="Nama lengkap anda"
                            class="form-control  @error('name') is-invalid @enderror normal" required="" autocomplete="name" >
                            <div class="invalid-feedback" style="font-size: 10px">
                                Harap mengisi nama lengkap anda
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                             @enderror
                    </div>

                    <div class="form-group">
                        <label  for="#"> Tempat Lahir <span class="text-danger">*</span></label>
                            <input type="text"  name="place_of_birth" value="{{ old('place_of_birth') }}"
                            placeholder="Tempat lahir anda" required=""  autofocus autocomplete="on"
                            class="form-control @error('place_of_birth') is-invalid @enderror">
                            <div class="invalid-feedback" style="font-size: 10px">
                                Harap mengisi tempat lahir anda
                            </div>
                            @error('place_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="gender"> Jenis Kelamin <span class="text-danger">*</span></label>
                            <select name="gender"  class="form-control @error('gender') is-invalid @enderror"
                             required="" autofocus>
                                <option value="" disabled selected>---Pilih---</option>
                                <option value="Pria" @if (old('gender') == "Pria") {{ 'selected' }} @endif> Pria</option>
                                <option value="Wanita" @if (old('gender') == "Wanita") {{ 'selected' }} @endif>Wanita</option>
                            </select>
                            <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda</div>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#"> Alamat Sekarang<span class="text-danger">*</span> </label>
                        <textarea class="form-control @error('address') is-invalid @enderror" required="" name="address" placeholder="Alamat tempat anda tinggal sekarang"  rows="2" autocomplete="on">{{old('address')}}</textarea>
                            <div class="invalid-feedback" style="font-size: 10px">Harap mengisi email anda</div>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


            </div> <!-- end col -->

            <div class="col-lg-6">
                    <div class="form-group">
                        <label  for="#"> Jurusan/Prodi <span class="text-danger">*</span></label>
                            <select name="what_study_program"  class="form-control @error('what_study_program') is-invalid @enderror"
                            required="">
                                <option value="" disabled selected>---Pilih---</option>
                                <option value="Sarjana Terapan Keperawatan" @if (old('what_study_program') == "Sarjana Terapan Keperawatan") {{ 'selected' }} @endif>Sarjana Terapan Keperawatan </option>
                                <option value="Sarjana Terapan Kebidanan" @if (old('what_study_program') == "Sarjana Terapan Kebidanan") {{ 'selected' }} @endif>Sarjana Terapan Kebidanan </option>
                                <option value="Sajana Terapan Gizi dan Dietetika" @if (old('what_study_program') == "Sajana Terapan Gizi dan Dietetika") {{ 'selected' }} @endif>Sajana Terapan Gizi dan Dietetika </option>
                                <option value="DIII Keperawatan Jayapura" @if (old('what_study_program') == "DIII Keperawatan Jayapura") {{ 'selected' }} @endif>DIII Keperawatan Jayapura </option>
                                <option value="DIII Kepeawatan Nabire" @if (old('what_study_program') == "DIII Kepeawatan Nabire") {{ 'selected' }} @endif> DIII Kepeawatan Nabire</option>
                                <option value="DIII Keperawatan Biak" @if (old('what_study_program') == "DIII Keperawatan Biak") {{ 'selected' }} @endif> DIII Keperawatan Biak</option>
                                <option value="DIII Keperawatan Merauke" @if (old('what_study_program') == "DIII Keperawatan Merauke") {{ 'selected' }} @endif>DIII Keperawatan Merauke </option>
                                <option value="DIII Keperawatan  Wamena" @if (old('what_study_program') == "DIII Keperawatan  Wamena") {{ 'selected' }} @endif>DIII Keperawatan  Wamena </option>
                                <option value="DIII Keperawatan Mimika" @if (old('what_study_program') == "DIII Keperawatan Mimika") {{ 'selected' }} @endif>DIII Keperawatan Mimika </option>
                                <option value="DIII Keperawatan Yapen" @if (old('what_study_program') == "DIII Keperawatan Yapen") {{ 'selected' }} @endif>DIII Keperawatan Yapen </option>
                                <option value="DIII Gizi" @if (old('what_study_program') == "DIII Gizi") {{ 'selected' }} @endif>DIII Gizi </option>
                                <option value="DIII Sanitasi Jayapura" @if (old('what_study_program') == "DIII Sanitasi Jayapura") {{ 'selected' }} @endif>DIII Sanitasi Jayapura </option>
                                <option value="DIII Sanitasi Mimika" @if (old('what_study_program') == "DIII Sanitasi Mimika") {{ 'selected' }} @endif>DIII Sanitasi Mimika </option>
                                <option value="DIII Kebidanan Jayapura" @if (old('what_study_program') == "DIII Kebidanan Jayapura") {{ 'selected' }} @endif>DIII Kebidanan Jayapura </option>
                                <option value="DIII Kebidanan Nabire" @if (old('what_study_program') == "DIII Kebidanan Nabire") {{ 'selected' }} @endif>DIII Kebidanan Nabire </option>
                                <option value="DIII Kebidanan Biak" @if (old('what_study_program') == "DIII Kebidanan Biak") {{ 'selected' }} @endif>DIII Kebidanan Biak </option>
                                <option value="DIII Kebidanan Mimika " @if (old('what_study_program') == "DIII Kebidanan Mimika ") {{ 'selected' }} @endif>DIII Kebidanan Mimika  </option>
                                <option value="DIII TLM" @if (old('what_study_program') == "DIII TLM") {{ 'selected' }} @endif>DIII TLM </option>
                                <option value="DIII Farmasi " @if (old('what_study_program') == "DIII Farmasi ") {{ 'selected' }} @endif>DIII Farmasi  </option>
                            </select>
                            <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda</div>
                            @error('what_study_program')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">Tahun Masuk kuliah  <span class="text-danger">*</span></label>
                            <input type="month"  name="year_of_college_entry" value="{{old('year_of_college_entry')}}"  required="" autocomplete="year_of_college_entry" autofocus
                            placeholder="Tahun Masuk kuliah anda" class="form-control @error('year_of_college_entry') is-invalid @enderror">
                            <div class="invalid-feedback" style="font-size: 10px">Harap mengisi Tahun Masuk kuliah anda</div>
                            @error('year_of_college_entry')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label  for="#"> Bulan dan Tahun Lulus <span class="text-danger">*</span></label>
                            <input type="month"  name="college_graduation_date" value="{{old('college_graduation_date')}}"  required="" autocomplete="college_graduation_date" autofocus
                            placeholder="Bulan dan Tahun Lulus" class="form-control @error('college_graduation_date') is-invalid @enderror">
                            <div class="invalid-feedback" style="font-size: 10px">Harap mengisi Bulan dan Tahun Lulus anda</div>
                            @error('college_graduation_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label  for="#">Nomor ponsel <span class="text-danger">*</span></label>
                            <input type="number"  name="mobile_phone_number" value="{{old('mobile_phone_number')}}"  required="" autocomplete="mobile_phone_number" autofocus
                            placeholder="Nomor ponsel anda yang aktif" class="form-control @error('mobile_phone_number') is-invalid @enderror">
                            <div class="invalid-feedback" style="font-size: 10px">Harap mengisi nomor handphone anda</div>
                            @error('mobile_phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="#">  Email <span class="text-danger">*</span> </label>
                            <input type="email" name="email"  value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror"
                            required="" autofocus  autocomplete="email" placeholder="Alamat email anda yang aktif">
                            <div class="invalid-feedback" style="font-size: 10px">Harap mengisi email anda</div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

            </div> <!-- end col -->
        </div> <!-- end row -->







