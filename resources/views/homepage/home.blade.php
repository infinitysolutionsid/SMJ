@extends('homepage.extends')
@section('content')
<div id="slider" class="inspiro-slider" data-height-xs="360">

    <div class="slide" style="background-image:url('{!!asset('storage/img/truck-1-cover.jpg')!!}');">
        <div class="container">
            <div class="slide-captions text-left text-light">

                <div class="col-lg-7 right text-light">
                    <div class="hero-heading-2 background-colored text-light">
                        <h3 class="m-b-0">BUAT TRUCKMU MENGGUNAKAN SUKU CADANG BERKUALITAS</h3>
                        <h2 class="text-medium m-t-0">SPAREPART QUALITY</h2>
                        <p class="lead">You need help with your truck? Let us recommend our product for you!</p>
                        <a class="btn btn-light" href="#appointment">MAKE APPOINTMENT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slide" style="background-image:url('{!!asset('storage/img/truck-2-cover.jpg')!!}');">
        <div class="container">
            <div class="slide-captions text-left text-light">

                <div class="col-lg-7 center text-center text-light">
                    <div class="hero-heading-2 background-colored text-light">
                        <h3 class="m-b-0">MAKE YOUR TRUCK SAFE</h3>
                        <h2 class="text-medium m-t-0">CHANGE OIL</h2>
                        <p class="lead">You need help with your truck? Let us fix it for you!</p>
                        <a class="btn btn-light" href="#appointment">MAKE APPOINTMENT</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="call-to-action call-to-action-colored">
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
</div>

<section>
    <div class="container">
        <div data-animate="fadeInUp" class="heading-text heading-section text-center m-b-40 animated fadeInUp visible">
            <h2>Selamat datang di Sumber Diesel</h2>
            <span class="lead">Sumber Diesel adalah toko sparepart truck yang sudah berdiri sejak tahun 2000 dan
                sudah dipercaya oleh beberapa client ternama. Dan saat ini Sumber Diesel sudah membuka cabang di
                Jakarta.</span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="{!!asset('storage/img/hydraulic.jpg')!!}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hydraulic Dump Truck</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">See products</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="{!!asset('storage/img/sparepart.jpg')!!}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Spareparts Diesel</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">See products</a>
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
                <div class="text-medium">TRUCK SPAREPARTS</div>
                <div class="accordion toggle fancy clean accordion-transparent">
                    <div class="ac-item">
                        <h5 class="ac-title">OIL & FILTERS</h5>
                        <div class="ac-content">
                            <h4>Pellentesque ipsum erat</h4> Neque porro quisquam est, qui dolorem ipsum quia
                            dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                            incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">ENGINE CHECKUP</h5>
                        <div class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                            labore et dolore magnam aliquam quaerat voluptatem.</div>
                    </div>
                    <div class="ac-item ac-active">
                        <h5 class="ac-title">TIRE CHECKUP</h5>
                        <div class="ac-content">
                            <h4>Pellentesque ipsum erat</h4>
                            <p>Facilisis ut venenatis eu, sodales vel dolor. The most happiest time of the day!.
                                Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel
                                interdum mi sapien ut justo. Neque porro quisquam est.
                                <br />Adipisci velit. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                velit, sed quia non numquam eius modi tempora incidunt.</p>
                        </div>
                    </div>
                    <div class="ac-item">
                        <h5 class="ac-title">WINTER PREPARE</h5>
                        <div class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                            labore et dolore magnam aliquam quaerat voluptatem.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 background-colored text-light p-40">
                <div class="text-medium">MAKE APPOINTMENT</div>
                <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form"
                    method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" aria-required="true" name="widget-contact-form-name"
                            class="form-control required name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" aria-required="true" required name="widget-contact-form-email"
                            class="form-control required email" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <label for="email">Phone Number</label>
                        <input type="text" aria-required="true" name="widget-contact-form-phone"
                            class="form-control required" placeholder="Enter your Phone number">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" name="widget-contact-form-message" rows="7" class="form-control required"
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
</section>

<section id="section6" class="no-padding">

    <div class="map" data-latitude="3.610138" data-longitude="98.688829" data-style="light"></div>

</section>
@endsection
