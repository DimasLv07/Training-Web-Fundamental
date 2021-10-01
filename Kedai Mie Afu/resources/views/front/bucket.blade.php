@extends ('app')

@section('content')
<div style="margin-top: 10px;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('detail')}}">Detail</a></li>
                    <li class="breadcrumb-item active" aria-current="page">bucket</li>
                </ol>
            </nav>
        </div>
        <div style="margin-top: -10px;">
            <div class="alert alert-danger" role="alert">
                Produk Dihapus!
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Gambar</td>
                            <td>Keterangan</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td>Total Harga</td>
                            <td></td>
                        </tr>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('frontend/img/cd1.jpg')}}" class="img-fluid" width="200" alt="..."></td>
                                <td>Mie Endog</td>
                                <td>1</td>
                                <td>Rp. 555.000</td>
                                <td><strong>Rp. 555.000</strong> </td>
                                <td><i class="fas fa-trash text-danger" style="cursor: pointer;"></i></td>
                            </tr>
                            <!-- <tr style="text-align: right;">
                                <td colspan="7"> Keranjang Masih Kosong</td>
                            </tr> -->
                            <tr>
                                <td colspan="6" style="text-align:right;">Total Harga: </td>
                                <td style="text-align:right;">Rp. 555.000</td>
                            </tr>
                            <tr>
                                <td colspan="6" style="text-align:right;">Kode Unik: </td>
                                <td style="text-align:right;">SDL129-BXJKTPT-REI</td>
                            </tr>
                            <tr>
                                <td colspan="6" style="text-align:right;">Ongkir: </td>
                                <td style="text-align:right;">Rp. 20.000</td>
                            </tr>
                            <tr>
                                <td colspan="6" style="text-align:right;">Total Bayar: </td>
                                <td style="text-align:right;">Rp. 149.000</td>
                            </tr>
                            <tr>
                                <td colspan="6"></td>
                                <td style="text-align:right;">
                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="{{route('checkout')}}" class="btn btn-primary" type="button"><i class="fas fa-trash" __cpp="1"></i>Pay Now</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </thead>
                </table>

            </div>
        </div>

        @endsection