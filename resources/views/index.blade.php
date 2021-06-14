@extends('layouts.header')
@section('title', 'Homepage')
@section('content')
@include('layouts.banner')
<div class="container">
    <div class="featured-product">
        <header>
            <h3 class="featured-product--header">Featured Products</h3>
        </header>

        <div class="owl-carousel owl-theme">
            @foreach($product as $prod)
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings')}}/{{$prod->product_image}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">{{$prod->product_name}}
                        </p>
                        <p class="product-price"><span>&#8358</span>{{$prod->product_price}}</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div>
        <hr />
    </div>
    <!--*#######################################################################################
    LATEST PRODUCT */-->
    <div class="latest-product">
        <header>
            <h3 class="latest-product--header">Latest Products</h3>
        </header>
        <div class="owl-carousel owl-theme">
            @foreach($product as $prod)
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings')}}/{{$prod->product_image}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">{{$prod->product_name}}
                        </p>
                        <p class="product-price"><span>&#8358</span>{{$prod->product_price}}</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection('content')