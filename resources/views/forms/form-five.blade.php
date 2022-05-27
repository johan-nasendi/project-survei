<h4 class="header-title mb-3"> Alumni Comunicacion </h4>
<form  action="#">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                    <div class="form-group">
                        <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">
                            <label for="#">Keikutsertaan dalam Ikatan alumni Poltekkes?<span class="text-danger">*</span></label>
                                <select name="alumni_association" class="form-control @error('alumni_association') is-invalid @enderror"
                                required="" autocomplete="alumni_association" autofocus>
                                    <option selected disabled>---Pilih---</option>
                                    <option value="Yes" {{old('alumni_association')}}> Yes </option>
                                    <option value="No" {{old('alumni_association')}}> No </option>
                                </select>
                                @error('alumni_association')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                    <div class="form-group">
                        <label for="#">Media komunikasi yang digunakan? Jawaban boleh lebih dari 1<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <label for="pass1">Username Instagram<span class="text-danger">*</span></label>
                            <input  type="text" name="fb" placeholder="Masukan usernmae instagram anda"
                            class="form-control @error('fb') is-invalid @enderror" value="{{old('fb')}}">
                            @error('fb')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pass1">Username facebook<span class="text-danger">*</span></label>
                            <input  type="text" name="ig" placeholder="Masukan usernmae facebook anda"
                            class="form-control @error('ig') is-invalid @enderror" value="{{old('ig')}}">
                            @error('ig')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pass1">Username Linkedin<span class="text-danger">*</span></label>
                            <input  type="text" name="linkend" placeholder="Masukan username Linkedin anda"
                            class="form-control @error('linkend') is-invalid @enderror" value="{{old('linkend')}}">
                            @error('linkend')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card-box">
                    <div class="form-group">
                        <label for="#">Apakah kegiatan alumni sudah dirasakan memberikan kontribusi kepada pengembangan kompetensi dan institusi<span class="text-danger">*</span></label>
                            <select name="cooperation_institutions_alumni_associations"
                            class="form-control @error('cooperation_institutions_alumni_associations') is-invalid @enderror"
                            required="" autocomplete="cooperation_institutions_alumni_associations" autofocus>
                                <option selected disabled>---Pilih---</option>
                                <option value="Sudah" {{old('cooperation_institutions_alumni_associations')}}> Sudah </option>
                                <option value="Belum" {{old('cooperation_institutions_alumni_associations')}}> Belum </option>
                            </select>
                            @error('cooperation_institutions_alumni_associations')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="#">Kegiatan apa sajakah yang dirasakan perlu dikembangkan untuk menjalin kerjasama antara institusi dengan ikatan alumni?<span class="text-danger">*</span></label>
                            <select name="development_of_competencies_and_institutions"
                            class="form-control @error('development_of_competencies_and_institutions') is-invalid @enderror"
                            required="" autocomplete="development_of_competencies_and_institutions" autofocus>
                                <option selected disabled>---Pilih---</option>
                                <option value="Reuni" {{old('development_of_competencies_and_institutions')}}> Reuni </option>
                                <option value="Pengabdian masyarakat bersama" {{old('development_of_competencies_and_institutions')}}> Pengabdian masyarakat bersama </option>
                                <option value="Seminar ilmiah bersama" {{old('development_of_competencies_and_institutions')}}> Seminar ilmiah bersama </option>
                                <option value="Pelatihan" {{old('development_of_competencies_and_institutions')}}> Pelatihan </option>
                            </select>
                            @error('development_of_competencies_and_institutions')
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
            <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
        </li>
        <li class="list-inline-item float-right" >
            <button type="submit" class="btn btn-warning">Next</button>
        </li>
    </ul>
</form>
