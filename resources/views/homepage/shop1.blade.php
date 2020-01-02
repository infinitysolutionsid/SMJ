@extends('homepage.extends')
@section('title','| Produk Hydraulic Dump Truck')
@section('keywords','hydraulic dump truck','sparepart truck','hydraulic')
@section('desc','Halaman ini menjual berbagai produk Hydraulic Dump Truck dari Sumber Diesel.')
@section('content')
<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>Hydraulic Dump Truck</h1>
        </div>
        <div class="breadcrumb">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Shop</a>
                </li>
                <li class="active"><a href="/hydraulic-dump-truck">Hydraulic Dump Truck</a>
                </li>
            </ul>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row m-b-20">
            <div class="col-lg-6 p-t-10 m-b-20">
                <h3 class="m-b-20">Hydraulic Dump Truck</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, sit, exercitationem,
                    consequuntur, assumenda iusto eos commodi alias.</p>
            </div>
            {{-- <div class="col-lg-3">
                <div class="order-select">
                    <h6>Sort by</h6>
                    <p>Showing 1&ndash;12 of 25 results</p>
                    <form method="get">
                        <select class="form-control">
                            <option value="order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="order-select">
                    <h6>Sort by Price</h6>
                    <p>From 0 - 190$</p>
                    <form method="get">
                        <select class="form-control">
                            <option value="" selected="selected">0$ - 50$</option>
                            <option value="">51$ - 90$</option>
                            <option value="">91$ - 120$</option>
                            <option value="">121$ - 200$</option>
                        </select>
                    </form>
                </div>
            </div> --}}
        </div>

        <div class="shop">
            <div class="grid-layout grid-4-columns" data-item="grid-item">
                <div class="grid-item">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="{!!asset('storage/shop/hydraulic/hy-1.jpg')!!}">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="{!!asset('storage/shop/hydraulic/hy-1.jpg')!!}">
                            </a>
                            <span class="product-new">NEW</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="/ajax-product" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Hydraulic Dump Truck Sparepart</div>
                            <div class="product-title">
                                <h3><a href="#">Sparepart #1</a></h3>
                            </div>
                            <div class="product-price"><ins></ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">6 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="{!!asset('storage/shop/hydraulic/hy-2.jpg')!!}">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="{!!asset('storage/shop/hydraulic/hy-2.jpg')!!}">
                            </a>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="/ajax-product" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Hydraulic Dump Truck Sparepart</div>
                            <div class="product-title">
                                <h3><a href="#">Sparepart #2</a></h3>
                            </div>
                            <div class="product-price"><ins></ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">3 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="{!!asset('storage/shop/hydraulic/hy-3.jpg')!!}">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="{!!asset('storage/shop/hydraulic/hy-3.jpg')!!}">
                            </a>
                            <span class="product-hot">HOT</span>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="/ajax-product" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Hydraulic Dump Truck Sparepart</div>
                            <div class="product-title">
                                <h3><a href="#">Sparepart #3</a></h3>
                            </div>
                            <div class="product-price"><ins></ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">3 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="{!!asset('storage/shop/hydraulic/hy-4.jpg')!!}">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="{!!asset('storage/shop/hydraulic/hy-4.jpg')!!}">
                            </a>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="/ajax-product" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Hydraulic Dump Truck Sparepart</div>
                            <div class="product-title">
                                <h3><a href="#">Sparepart #4</a></h3>
                            </div>
                            <div class="product-price"><ins></ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!"
                                    src="{!!asset('storage/shop/hydraulic/hy-5.jpg')!!}">
                            </a>
                            <a href="#"><img alt="Shop product image!"
                                    src="{!!asset('storage/shop/hydraulic/hy-5.jpg')!!}">
                            </a>
                            <span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>
                            <div class="product-overlay">
                                <a href="/ajax-product" data-lightbox="ajax">Quick View</a>
                            </div>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Hydraulic Dump Truck Sparepart</div>
                            <div class="product-title">
                                <h3><a href="#">Sparepart #4</a></h3>
                            </div>
                            <div class="product-price"><ins></ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">5 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>

        </div>
    </div>
</section>
@endsection
