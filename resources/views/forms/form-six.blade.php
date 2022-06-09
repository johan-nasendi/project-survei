


    <div class="row">
        <div class="col-12">
            <div class="card-box  bg-dark text-white">
                <h4 class="header-title mb-3 text-white"> <b>SELESAI</b></h4>
                <div class="text-center bg-dark text-white">
                    <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                    <h3 class="mt-0 text-white">TERIMA KASIH ATAS PARTISIPASINYA</h3>
                    <p class="w-75 mb-2 mx-auto">Apakah anda setujuh mengirim data anda kepada kami?
                        <br> Jika Setuju centang cek box di bawah ini</p>

                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1"
                            onchange="document.getElementById('sendData').disabled = !this.checked;" required=""   />
                            <label class="custom-control-label" for="customCheck1">Saya setuju</label>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <ul class="list-inline wizard mb-0">
        <li class="list-inline-item float-right" >
            <button type="submit" class="btn btn-success" id="sendData" onclick="return IsEmpty();"> KIRIM
                <i class="fa fa-paper-plane"></i>
            </button>
        </li>
       <br>
    </ul>


