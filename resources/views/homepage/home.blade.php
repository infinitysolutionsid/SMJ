@extends('homepage.extends')
@section('title','| Beranda')
@section('keywords','sumber diesel, sumber parts, supplier sparepart truck, sparepart truck, truck, sparepart')
@section('desc','Sumberparts.com adalah website toko dari toko CV. Sumber Diesel.')
@section('content')
@if(session('sukses'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> Pesan berhasil dikirim dan telah kami terima. Kami akan membalas dalam waktu 1x24 jam.
    Jika tidak ada balasan selama 2x24 jam. Silahkan email kami ke info@sumberparts.com. Terima kasih!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div id="slider" class="inspiro-slider" data-height-xs="360">

    <div class="slide" style="background-image:url('{!!asset('storage/img/fusohns.jpg')!!}');">
        <div class="container">
            <div class="slide-captions text-left text-light">

                <div class="col-lg-7 right text-light">
                    <div class="hero-heading-2 background-colored text-light">
                        <h3 class="m-b-0">GUNAKAN SUKU CADANG BERKUALITAS UNTUK TRUK DAN HYDRAULIC DUMP TRUCK ANDA</h3>
                        <h2 class="text-medium m-t-0">SPAREPART QUALITY</h2>
                        <p class="lead">jika anda membutuhkan informasi lengkap.silahkan hubungi kami</p>
                        <a class="btn btn-light" href="#appointment">MAKE APPOINTMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide" style="background-image:url('{!!asset('storage/img/sampul.jpg')!!}');">
        <div class="container">
            <div class="slide-captions text-left text-light">

                <div class="col-lg-7 center text-center text-light">
                    <div class="hero-heading-2 background-colored text-light">
                        <h3 class="m-b-0">GUNAKAN SUKU CADANG BERKUALITAS UNTUK TRUK DAN HYDRAULIC DUMP TRUCK ANDA</h3>
                        <h2 class="text-medium m-t-0">CHANGE OIL</h2>
                        <p class="lead">jika anda membutuhkan informasi lengkap.silahkan hubungi kami</p>
                        <a class="btn btn-light" href="#appointment">MAKE APPOINTMENT</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

{{-- <div class="call-to-action call-to-action-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="{!!asset('storage/img/truck.svg')!!}" alt="">
            </div>
            <div class="col-lg-8">
                <h3 class="text-light">Hemat dana dengan penawaran harga dari kami </h3>
                <p>Jangan ragu akan penawaran harga kami, karna suku cadang dari kami berkualitas dan harganya
                    pun terjangkau.</p>
            </div>
            <div class="col-lg-2">
                <a class="btn btn-light btn-outline">Hubungi kami!</a> </div>
        </div>
    </div>
</div> --}}

<section>
    <div class="container">
        <div data-animate="fadeInUp" class="heading-text heading-section text-center m-b-40 animated fadeInUp visible">
            <h2>Selamat datang di Sumber Diesel</h2>
            <span class="lead"><strong>Sumber Diesel</strong> merupakan supplier spareparts truck dan hydraulic dump
                truck yang
                <strong>terpercaya</strong> dan <strong>terlengkap</strong> di Indonesia saat ini.</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{!!asset('storage/img/hydraulic.jpg')!!}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hydraulic Dump Truck</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="/hydraulic-dump-truck" class="btn btn-primary">See products</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{!!asset('storage/img/sparepart.jpg')!!}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Spareparts Diesel</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="/sparepart-truck" class="btn btn-primary">See products</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{!!asset('storage/img/sparepart.jpg')!!}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Spareparts Mobil</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="/sparepart-truck" class="btn btn-primary">See products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="text-medium">Product Info</div>
                <div class="accordion toggle fancy clean accordion-transparent">
                    <div class="ac-item">
                        <h5 class="ac-title">Hydraulic Dump Truck</h5>
                        <div class="ac-content">
                            Neque porro quisquam est, qui dolorem ipsum quia
                            dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                            incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">Spareparts Truck</h5>
                        <div class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                            labore et dolore magnam aliquam quaerat voluptatem.</div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">Spareparts Mobil</h5>
                        <div class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                            labore et dolore magnam aliquam quaerat voluptatem.</div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 background-colored text-light p-40">
                <div class="text-medium">Contact Us</div>
                @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    Pesan berhasil dikirim dan telah kami terima. Kami akan membalas dalam waktu 1x24 jam. Jika tidak
                    ada balasan selama 2x24 jam. Silahkan email kami ke info@sumberparts.com. Terima kasih!

                </div>
                @endif
                <form action="/kirimpesan" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" aria-required="true" name="nama" class="form-control required name"
                            placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" aria-required="true" required name="email"
                            class="form-control required email" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <label for="email">Phone Number</label>
                        <input type="text" aria-required="true" name="nohp" class="form-control required"
                            placeholder="Enter your Phone number">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" name="notes" rows="7" class="form-control required"
                            placeholder="Enter your Message"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn button-light" type="submit" id="form-submit">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
{{--
<section class="p-t-150 p-b-150 text-light" style="background-image:url({!!asset('storage/img/truck-1sect.jpg')!!});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-lg">PRODUCT QUALITY</h2>
                <p class="lead"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="100">
                <div class="pie-chart" data-percent="90" data-color="#FCC43F" data-width="14"> <span
                        class="percent"></span> </div>
                <h4>Performance</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum cursumus.</p>
            </div>
            <div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="200">
                <div class="pie-chart" data-percent="65" data-color="#FCC43F" data-width="14"> <span
                        class="percent"></span> </div>
                <h4>Content</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum cursumus.</p>
            </div>
            <div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="300">
                <div class="pie-chart" data-percent="35" data-color="#FCC43F" data-width="14"> <span
                        class="percent"></span> </div>
                <h4>Responsiove</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor.</p>
            </div>
            <div class="col-lg-3 text-center" data-animate="fadeInUp" data-animate-delay="400">
                <div class="pie-chart" data-percent="99" data-color="#FCC43F" data-width="14"> <span
                        class="percent"></span> </div>
                <h4>ORIGINAL</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor
                    cursumus.</p>
            </div>
        </div>
    </div>
</section> --}}

<section id="section6" class="no-padding">

    <div class="map" data-latitude="3.5834189" data-longitude="98.6816097" data-style="light"></div>

</section>
@endsection
