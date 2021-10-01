@extends ('app')

@section('content')

</div>
        <div style="margin-top: -10px;">
            <div class="alert alert-success" role="alert">
                Produk Hilang!
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="#" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col md-6">
                <h3>Informasi Pembayaran</h3>
                <hr>
                <p>
                    Untuk Pembayaran silahkan dapat transfer di rekening dibawah ini sebesar :
                    <strong>Rp. 000.000</strong>
                </p>
                <table width="100%">
                    <tr>
                        <td>
                            <div class="mt-4">
                                <img src="{{asset('frontend/icon/bsi.jpeg')}} " alt="Bank BSI " width="100 ">
                            </div>
                        </td>
                        <td>
                            <div class="mt-4">
                                <h5>BANK BSI</h5>
                                No. Rekening 7173086353 a.n Bank Jago
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mt-4">
                                <img src="{{asset('frontend/icon/mandirisyariah.png')}} " alt="Bank BSI " width="100 ">
                            </div>
                        </td>
                        <td>
                            <div class="mt-4">
                                <h5>BANK Mandiri Syariah</h5>
                                No. Rekening 7173086353 a.n ayam ayam
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{asset('frontend/icon/brisyariah.jpeg')}} " alt="Bank BSI " width="100 ">
                        </td>
                        <td>
                            <div class="mt-4">
                                <h5>BANK BRI Syariah</h5>
                                No. Rekening 7173086353 a.n ayam ayan
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col md-6">
                <h3>Informasi Pengiriman</h3>
                <hr>
                <div class="form-group mb-3">
                    <label for="">No. HP</label>
                    <input type="text" class="form-control mt-2">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat</label>
                    <textarea type="text" class="form-control mt-2" style="height: 190px;"></textarea>
                </div>
            </div>
        </div>

@endsection