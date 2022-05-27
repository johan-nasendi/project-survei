
<h4 class="header-title mb-3"> Finish </h4>
<form  action="#">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                <h3 class="mt-0">TERIMA KASIH ATAS PARTISIPASINYA</h3>
                <div class="card-body">

                    <table class="table">
                        <tr>
                            <td>Product Name:</td>
                            {{-- <td><strong>{{$finisi->name}}</strong></td> --}}
                        </tr>
                    </table>
            </div
                <p class="w-75 mb-2 mx-auto">Apakah anda setujuh mengirim data anda kepada kami?
                    <br> Jika Setuju centang cek box di bawah ini</p>

                <div class="mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1"
                        onchange="document.getElementById('sendData').disabled = !this.checked;" />
                        <label class="custom-control-label" for="customCheck1">Saya setuju</label>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <ul class="list-inline wizard mb-0">
        <li class="previous list-inline-item disabled">
            <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
        </li>
        <li class="list-inline-item float-right" >
            <button type="submit" class="btn btn-success" id="sendData">Submit</button>
        </li>
    </ul>
</form>
