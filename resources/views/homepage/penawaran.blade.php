@extends('homepage.extends')
@section('title','| Penawaran produk')
@section('keywords','hydraulic dump truck','sparepart truck','hydraulic')
@section('desc','Mau mendapatkan produk dari sumberparts.com')
@section('content')
<section id="page-title" data-bg-parallax="{!!asset('storage/img/penawaran.jpg')!!}">
    <div class="container">
        <div class="page-title">
            <h1>Penawaran produk <b>{{$item->nama_item}}</b></h1>
            <span>{{$item->type_product}}</span>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">Dapatkan penawaran!</h3>
                <p>Produk: <strong>{{$item->nama_item}}</strong><br>
                    Deskripsi produk: {{$item->description}}</p>
                <div class="m-t-30">
                    <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form"
                        method="post">
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
                                <label for="subject">Saya tertarik produk</label>
                                <input type="text" name="widget-contact-form-subject" disabled
                                    class="form-control required" value="{{$item->nama_item}}">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Catatan</label>
                            <textarea name="notes" id="" cols="30" rows="6"></textarea>
                        </div>

                        <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send
                            message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-uppercase">Address & Map</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <address>
                            <strong>Polo, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</h4> (123) 456-7890
                        </address>
                    </div>
                    <div class="col-lg-6">
                        <address>
                            <strong>Polo Office</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</h4> (123) 456-7890
                        </address>
                    </div>
                </div>

                <div class="map" data-latitude="-37.817240" data-longitude="144.955826" data-style="light"
                    data-info="Hello from &lt;br&gt; Inspiro Themes"></div>

            </div>
        </div>
    </div>
</section>
@endsection
