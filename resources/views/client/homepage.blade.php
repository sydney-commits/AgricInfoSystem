@extends('client.base')

@section('content')

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="{{asset('assets/images/banner-01.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Agri 1 Info system</strong></h1>
                            <p class="m-b-40">You can find out various information concerning Agricultural <br> 
                                Aspects that help in your farming activities</p>
                            <p><a class="btn hvr-hover" href="/product_practices">Start Here</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{asset('assets/images/banner-02.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Agri 1 <br> Forum</strong></h1>
                            <p class="m-b-40">This Forum helps various users <br> talk and discuss amongs themselves on various topics.</p>
                            <p><a class="btn hvr-hover" href="/forum">Forum</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{asset('assets/images/banner-03.jpg')}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Agri 1 <br> Resource section</strong></h1>
                            <p class="m-b-40">You can find various resources that are of importance to  <br> 
                                agricultural activities , you can also find reports.</p>
                            <p><a class="btn hvr-hover" href="/resources">Resources</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <div class="card p-3">
        <div class="row pr-3 pl-3 m-3">
            <div class="col-lg-4 col-md-12">
                <div class="account-box">
                    <div class="service-box">
                        <div class="service-icon">
                            <a href="/product_practices"> <i class="fa fa-gift"></i> </a>
                        </div>
                        <div class="service-desc">
                            <h4>Crop Practices</h4>
                            <p>Find out on various operations</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="account-box">
                    <div class="service-box">
                        <div class="service-icon">
                            <a href="/consultant"><i class="fa fa-phone"></i> </a>
                        </div>
                        <div class="service-desc">
                            <h4>Crop Advisory</h4>
                            <p>Get your questions Answered in time</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="account-box">
                    <div class="service-box">
                        <div class="service-icon">
                            <a href="/forum"> <i class="fa fa-location-arrow"></i> </a>
                        </div>
                        <div class="service-desc">
                            <h4>Forum</h4>
                            <p>Interact with other consumers and share ideas in real time</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="account-box">
                    <div class="service-box">
                        <div class="service-icon">
                            <a href="/price-reports"> <i class="fa fa-credit-card"></i> </a>
                        </div>
                        <div class="service-desc">
                            <h4>Product Pricing</h4>
                            <p>Find current prices for products</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="account-box">
                    <div class="service-box">
                        <div class="service-icon">
                            <a href="/account"> <i class="fa fa-user"></i> </a>
                        </div>
                        <div class="service-desc">
                            <h4>Account</h4>
                            <p>Get more Advanced Reports</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="account-box">
                    <div class="service-box">
                        <div class="service-icon">
                            <a href="/resources"> <i class="fa fa-save"></i> </a>
                        </div>
                        <div class="service-desc">
                            <h4>Resources</h4>
                            <p>Get Relevant data on Agricultural products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                        <p>Find out more on this products concerning best disease control measures , Farming Methods and Market strategies</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            {{-- <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">

                @foreach ($products as $product)
                    
              
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                {{-- <p class="sale">Sale</p> --}}
                            </div>
                            <img src="{{ asset('uploads/' . $product->image)}}" style="height: 300px" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                   
                                <a class="cart" href="/product/{{$product->id}}">Find More</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{$product->name}}</h4>
                            <h5> Ksh. {{$product->price}} <span class="pl-3"></span></h5>
                        </div>
                    </div>
                </div>

                @endforeach



 
            </div>
        </div>
    </div>
    <!-- End Products  -->





@endsection