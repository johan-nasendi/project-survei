{{-- <h4 class="header-title mb-3"> <b>E. KOMUNIKASI ANTARA ALUMNI DENGAN POLTEKKES KEMENKES</b> </h4>
    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                    <div class="form-group">

                        <div class="form-group">
                            <label for="pass1">Username Facebook</label>
                            <input type="hidden" name="respondent_id" value="{{old('respondent_id')}}">
                            <input  type="text" name="fb" placeholder="Masukan usernmae instagram anda" autocomplete="off"
                            class="form-control @error('fb') is-invalid @enderror" value="{{old('fb')}}">
                            <div class="text-danger" style="font-size: 10px">
                                Jika anda mempunyai akun facebook,Mohon mengisi,Jika tidak dapat dikosongkan
                             </div>
                            @error('fb')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pass1">Username Instagram</label>
                            <input  type="text" name="ig" placeholder="Masukan usernmae facebook anda" autocomplete="off"
                            class="form-control @error('ig') is-invalid @enderror" value="{{old('ig')}}">
                            <div class="text-danger" style="font-size: 10px">
                                Jika anda mempunyai akun instagram,Mohon mengisi,Jika tidak dapat dikosongkan
                             </div>
                            @error('ig')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pass1">Username Linkedin</label>
                            <input  type="text" name="linkend" placeholder="Masukan username Linkedin anda" autocomplete="off"
                            class="form-control @error('linkend') is-invalid @enderror" value="{{old('linkend')}}">
                            <div class="text-danger" style="font-size: 10px">
                                Jika anda mempunyai akun linkedin,Mohon mengisi,Jika tidak dapat dikosongkan
                             </div>
                            @error('linkend')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->

        <div class="col-lg-6 needs-validation was-validated" novalidate="">
            <div class="card-box">
                     <div class="form-group needs-validation was-validated" novalidate="">

                            <label for="#">Keikutsertaan dalam Ikatan alumni Poltekkes?<span class="text-danger">*</span></label>
                                <select name="alumni_association" class="form-control @error('alumni_association') is-invalid @enderror"
                                    required="" autocomplete="alumni_association" >
                                    <option value="" selected disabled>---Pilih---</option>
                                    <option value="Yes" @if(old('alumni_association') == "Yes") {{ 'selected' }} @endif> Yes </option>
                                    <option value="No" @if(old('alumni_association') == "No") {{ 'selected' }} @endif> No </option>
                                </select>
                                <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
                                @error('alumni_association')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                      </div>

                    <div class="form-group">
                        <label for="#">Apakah kegiatan alumni sudah dirasakan memberikan kontribusi kepada pengembangan kompetensi dan institusi<span class="text-danger">*</span></label>
                            <select name="cooperation_institutions_alumni_associations"
                            class="form-control @error('cooperation_institutions_alumni_associations') is-invalid @enderror"
                           required="" >
                                <option value="" selected disabled>---Pilih---</option>
                                <option value="Sudah" @if(old('cooperation_institutions_alumni_associations') == "Sudah") {{ 'selected' }} @endif> Sudah </option>
                                <option value="Belum" @if(old('cooperation_institutions_alumni_associations') == "Belum") {{ 'selected' }} @endif> Belum </option>
                            </select>
                            <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
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
                           required=""  >
                                <option value="" selected disabled>---Pilih---</option>
                                <option value="Reuni" @if(old('development_of_competencies_and_institutions') == "Reuni") {{ 'selected' }} @endif> Reuni </option>
                                <option value="Pengabdian masyarakat bersama" @if(old('development_of_competencies_and_institutions') == "Pengabdian masyarakat bersama") {{ 'selected' }} @endif> Pengabdian masyarakat bersama </option>
                                <option value="Seminar ilmiah bersama" @if(old('development_of_competencies_and_institutions') == "Seminar ilmiah bersama") {{ 'selected' }} @endif> Seminar ilmiah bersama </option>
                                <option value="Pelatihan" @if(old('development_of_competencies_and_institutions') == "Pelatihan") {{ 'selected' }} @endif> Pelatihan </option>
                            </select>
                            <div class="invalid-feedback" style="font-size: 10px">Harap memilih pilihan anda  anda</div>
                            @error('development_of_competencies_and_institutions')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div> <!-- end row -->

 --}}
