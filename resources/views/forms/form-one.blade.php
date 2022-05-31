
<h4 class="header-title mb-3"> IDENTITAS RESPONDEN </h4>


        <div class="row" id="one">
            <div class="col-6">
                <div class="form-group row mb-3">
                    <label class="col-md-3 col-form-label" for="name"> Nama Lengkap<span class="text-danger">*</span> </label>
                    <div class="col-md-9">
                        <input type="text" id="names"  name="name" value="{{ old('name') }}"  placeholder="Nama lengkap anda"
                        class="form-control @error('name') is-invalid @enderror" required >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-md-3 col-form-label" for="place_of_birth"> Tempat Lahir <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="text" id="place" name="place_of_birth" value="{{ old('place_of_birth') }}"
                        placeholder="Tempat lahir anda" required  class="form-control @error('place_of_birth') is-invalid @enderror">
                        @error('place_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label class="col-md-3 col-form-label" for="date_of_birth"> Tanggal Lahir <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="date" id="dates" name="date_of_birth" required  class="form-control @error('date_of_birth') is-invalid @enderror"
                           value="{{ old('date_of_birth') }}">
                        @error('date_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>


            </div> <!-- end col -->

            <div class="col-6">
                <div class="form-group row mb-3">
                    <label class="col-md-3 col-form-label" for="gender">Jenis Kelamin <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <select name="gender" id="genders"  class="form-control @error('gender') is-invalid @enderror" required >
                            <option disabled selected>---Pilih---</option>
                            <option value="Pria" {{old('gender')}}> Pria</option>
                            <option value="Wanita" {{old('gender')}}>Wanita</option>
                        </select>
                        @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-md-3 col-form-label" for="mobile_phone_number">Nomor ponsel <span class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input type="number" id="phone"  name="mobile_phone_number" value="{{old('mobile_phone_number')}}"  required
                        placeholder="Nomor ponsel anda yang aktif " class="form-control @error('mobile_phone_number') is-invalid @enderror">
                        @error('mobile_phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label class="col-md-3 col-form-label" for="email"> Alamat E-mail <span class="text-danger">*</span> </label>
                    <div class="col-md-9">
                        <input type="email" id="emails" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror"
                        required  placeholder="Alamat email anda yang aktif">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

            </div> <!-- end col -->
        </div> <!-- end row -->
        <ul class="list-inline wizard mb-0">
            <li class="list-inline-item disabled">
            </li>

                <li class="next list-inline-item float-right" >
                    <button type="button" class="btn btn-warning" > <b> SELANJUTNYA</b>
                        <i class="fas fa-arrow-alt-circle-right"></i>
                    </button>
                 </li>
        </ul>
{{--
        <script text="text/javascript">
            const submitButton = document.getElementById("next");
            const one = document.getElementById("one");
            const name = document.getElementById("names");
            // const place = document.getElementById("place");
            // const date = document.getElementById("dates");
            // const gender = document.getElementById("genders");
            // const phone = document.getElementById("phone");
            // const email = document.getElementById("emails");

            one.addEventListener("keyup", (e) => {
                const value = e.currentTarget.value;
                submitButton.disabled = false;

                if (name.value === "" || name.value == null)
                    submitButton.disabled = true;

                // if (place.value === "" || place.value == null)
                // submitButton.disabled = true;

                // if (date.value === "" || date.value == null)
                // submitButton.disabled = true;

                // if (gender.value === "" || gender.value == null)
                // submitButton.disabled = true;

                // if (phone.value === "" || phone.value == null)
                // submitButton.disabled = true;

                // if (email.value === "" || email.value == null)
                // submitButton.disabled = true;
            });

        </script> --}}






