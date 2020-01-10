@extends('homepage.extends')
@section('title','| Beranda')
@section('keywords','sumber diesel, sumber parts, supplier sparepart truck, sparepart truck, truck, sparepart')
@section('desc','Sumberparts.com adalah website toko dari toko CV. Sumber Diesel.')
@section('content')
<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>Hubungi kami</h1>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Shop</a>
                </li>
                <li class="active"><a href="/contact">Hubungi kami</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Hubungi kami</h3>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Pesan kamu berhasil dikirim!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="m-t-30">
                    <form action="/kirimpesan" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" aria-required="true" name="nama" required
                                    class="form-control required name" placeholder="Masukkan nama lengkap kamu">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" aria-required="true" name="email" required
                                    class="form-control required email" placeholder="Masukkan email lengkap kamu">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="nohp">No Telepon/HP</label>
                                <input type="text" name="nohp" required class="form-control"
                                    placeholder="Masukkan nomor HP aktif yang bisa dihubungi">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">Topik pesan</label>
                                <input type="text" name="subject" placeholder="Masukkan topik pesan kamu"
                                    class="form-control required">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Pesan</label>
                                <textarea name="notes" class="form-control" placeholder="Masukkan pesan" cols="30"
                                    rows="6"></textarea>
                            </div>
                        </div>


                        <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;KIRIM
                            PESAN</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-uppercase">Alamat & Peta</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <address>
                            <strong>Medan</strong><br>
                            Jl. Rahmadsyah No. 33 C<br>
                            Kotamatsum III. Kec.Medan<br>
                            Kota Medan, Sumatera Utara, 20212<br>
                            <i class="fas fa-phone"></i> +62 853 7035 9971
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address>
                            <strong>Jakarta</strong><br>
                            Green Sedayu Bizpark<br>
                            Jl. Daan Mogot Km. 18 Blok DM1/100<br>
                            Kalideres, Jakarta Barat 11840<br>
                            <i class="fas fa-phone"></i> +62 852 7764 5378
                        </address>
                    </div>
                </div>

                <div class="map" data-latitude="3.5804359" data-longitude="98.686512" data-style="light">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
