@extends('layouts.homepageHeader')
@section('title', 'Homepage')
@section('content')
@include('layouts.banner')
<div class="featured-product">
    <header>
        <h3 class="featured-product--header">Featured Products</h3>
    </header>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/men/men2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/men/men3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/men/men1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">Shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/men/men5.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/jeans/jean1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body <span>&#8358</span>">
                    <p class="card-text">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/men/men6.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/men/men7.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/jacket/jacket1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/shirt/shirt3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/shirt/shirt2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/shirt/shirt1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-center">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="card card-changes">
                <img src="{{asset('clothings/jacket/jacket4.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <p class="card-text product_name">shirt
                    </p>
                    <p class="product-price"><span>&#8358</span>89,000</p>
                    <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                </div>
            </div>
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
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/men/men2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/men/men3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/men/men1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">Shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/men/men5.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/jeans/jean1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body <span>&#8358</span>">
                        <p class="card-text">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/men/men6.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/men/men7.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/jacket/jacket1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/shirt/shirt3.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/shirt/shirt2.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/shirt/shirt1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card card-changes">
                    <img src="{{asset('clothings/jacket/jacket4.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <p class="card-text product_name">shirt
                        </p>
                        <p class="product-price"><span>&#8358</span>89,000</p>
                        <a class="btn btn-outline-primary"><i class="fa fa-cart-plus"></i>Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection('content')