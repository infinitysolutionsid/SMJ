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


<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">

            <div class="content col-lg-9">
                <div class="row m-b-20">
                    <div class="col-lg-6 p-t-10 m-b-20">
                        <h3 class="m-b-20">Hydraulic Dump Truck</h3>
                        <p>Lorem ipsum dolor sit amet. Accusamus, sit, exercitationem, consequuntur, assumenda iusto eos
                            commodi alias.</p>
                    </div>
                </div>

                <div class="shop">
                    <div class="grid-layout grid-3-columns" data-item="grid-item">
                        @if($itemkategori->count()<1) <p>No data founded</p>
                            @else
                            @foreach ($itemkategori as $itemdata)
                            <div class="grid-item">
                                <div class="product">
                                    <div class="product-image">
                                        <a href="/ajax-product/{{$itemdata->itemId}}" data-lightbox="ajax"><img
                                                alt="Shop product image!"
                                                src="{!!asset('storage/shop/img/'.$itemdata->images)!!}">
                                        </a>
                                        <a href="/ajax-product/{{$itemdata->itemId}}" data-lightbox="ajax"><img
                                                alt="Shop product image!"
                                                src="{!!asset('storage/shop/img/'.$itemdata->images)!!}">
                                        </a>
                                        <span class="product-new">NEW</span>
                                        <span class="product-wishlist">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                        </span>
                                        <div class="product-overlay">
                                            <a href="/ajax-product/{{$itemdata->itemId}}" data-lightbox="ajax">Quick
                                                View</a>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <div class="product-category">{{$itemdata->type_product}}</div>
                                        <div class="product-title">
                                            <h3><a href="#">{{$itemdata->nama_item}}</a></h3>
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
                                        <div class="product-reviews"><a
                                                href="#">@if($itemdata->kategori_id){{$itemdata->nama_kategori}}@endif</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                    </div>
                    <hr>

                    <ul class="pagination">
                        {{$itemkategori->links()}}
                    </ul>

                </div>

            </div>

            <div class="sidebar sticky-sidebar col-lg-3">

                <div class="widget widget-archive">
                    <h4 class="widget-title">Product categories</h4>
                    <ul class="list list-lines">
                        @foreach ($kategori as $item)
                        <li><a href="#">{{$item->nama_kategori}}</a></span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- <div class="widget widget-tags">
                    <h4 class="widget-title">Tags</h4>
                    <div class="tags">
                        <a href="#">Design</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Digital</a>
                        <a href="#">Branding</a>
                        <a href="#">HTML</a>
                        <a href="#">Clean</a>
                        <a href="#">Peace</a>
                        <a href="#">Love</a>
                        <a href="#">CSS3</a>
                        <a href="#">jQuery</a>
                    </div>
                </div> --}}


            </div>
        </div>
</section>
@endsection
