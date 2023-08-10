@extends('client.base')

@section('content')


    <!-- Start My Account  -->
    <div class="my-account-box-main">

        <div class="row text-center">
            <div class="col-lg-12">
                <h2>Product Price Comparison</h2>

            </div>
        </div>
        <div class="container pt-2">
            <div class="my-account-page">

                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price in Ksh</th>
                        <th scope="col">Price in Ush</th>
                        <th scope="col">Price in Tsh</th>

                        <th scope="col">Availability</th>
                        {{-- <th scope="col">Action</th> --}}


                 
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($prices as $price )
                        <tr>
                            <th scope="row">*</th>
                            <td>{{$price->name}}</td>
                            <td>{{$price->category}}</td>
                            <td>{{$price->ksh}}</td>
                            <td>{{$price->ush}}</td>
                            <td>{{$price->tsh}}</td>
                            <td>Available</td>

                            @auth

                            @if (Auth::user()->id == 1)
                            <td><a href="update-product-price/{{$price->id}}" style="color:blue" >Update</a>|<a href="delete-product-price/{{$price->id}}" style="color:red ;padding-left:5px">X</a></td>
                                
                    
                            @endif
                                
                            @endauth

                    
                            
                        

                        
                          
                          </tr>
                            
                        @endforeach
                
           
                    </tbody>
                  </table>

          
            </div>
            <div class="container text-center">

                <a href="/price-pdf" class="btn btn-primary py-2 px-4" style="background-color: #000000" type="submit" id="sendMessageButton">
                    Print Report</a>
            </div>
        </div>
    </div>
    <!-- End My Account -->


@endsection
