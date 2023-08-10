@extends('client.base')

@section('content')

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Product Practices</h1>
                        <p>You can find out more information on Methods , Disease control , Market Gaps and pricing of Products</p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($products as $product )
                    
             
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{ asset('uploads/' . $product->image)}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>{{$product->name}}</h3>

                                <p>{!! Str::limit($product->method, 100) !!} </p>
                                {{-- <p>{!! $product->method!!}</p> --}}
                            </div>
                         
                        </div>

                        <div class="cart-and-bay-btn text-center pb-3">
                            <a class="btn hvr-hover" style="background-color:#000000; color:#ffffff" data-fancybox-close="" href="/product/{{$product->id}}">View More</a>
                        
                        </div>
                
                    </div>
                  
                </div>

                @endforeach
       
            </div>
        </div>
    </div>
    <!-- End Blog  -->

@endsection