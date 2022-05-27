
<h4 class="header-title mb-3"> IDENTITAS RESPONDEN </h4>

<form  action="#">
    @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group row mb-3">
                    <label class="col-md-3 col-form-label" for="name"> Nama Lengkap<span class="text-danger">*</span> </label>
                    <div class="col-md-9">
                        <input type="text"  name="name" value="{{ old('name') }}"  placeholder="Nama lengkap anda"
                        class="form-control @error('name') is-invalid @enderror" required="" autocomplete="name"   autofocus>
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
                        <input type="text"  name="place_of_birth" value="{{ old('place_of_birth') }}"  placeholder="Tempat lahir anda"
                        class="form-control @error('place_of_birth') is-invalid @enderror" required="" autocomplete="place_of_birth" autofocus>
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
                        <input type="date"  name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror"
                        required="" autocomplete="date_of_birth" autofocus value="{{ old('date_of_birth') }}">
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
                        <select name="gender"  class="form-control @error('gender') is-invalid @enderror"
                        required="" autocomplete="gender" autofocus>
                            <option selected>---Pilih---</option>
                            <option value="Pria"> Pria</option>
                            <option value="Wanita">Wanita</option>
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
                        <input type="number"  name="mobile_phone_number" value="{{old('mobile_phone_number')}}" required="" autocomplete="mobile_phone_number" autofocus
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
                        <input type="email" id="textsend" onkeyup="success()" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror"
                        required="" autocomplete="email" autofocus placeholder="Alamat email anda yang aktif">
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
            <li class=" list-inline-item disabled">

            </li>
            <li class="list-inline-item float-right" >
                <button type="submit" class="btn btn-warning"> Next </button>
            </li>
        </ul>
    </form>
