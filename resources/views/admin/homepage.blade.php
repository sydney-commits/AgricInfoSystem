@extends('admin.base')

@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Admin Section</h2>

                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="/create-product"> <i class="fa fa-gift"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Create Products</h4>
                                    <p>Add New Products Pricing, Market $ Farming Methods</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="/view-products"> <i class="fa fa-location-arrow"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>View Products</h4>
                                    <p>All Products</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="/users"><i class="fa fa-user"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Users</h4>
                                    <p>View Registered Users</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="/contacts"><i class="fa fa-phone"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Consultations</h4>
                                    <p>View Questions Asked</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="/create-product-price"><i class="fa fa-save "></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Create Product Prices</h4>
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="/price-reports"><i class="fa fa-crop"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>View Product Prices</h4>
                                  
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            
            </div>
        </div>
    </div>
    <!-- End My Account -->

  
@endsection
