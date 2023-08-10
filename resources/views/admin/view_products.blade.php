@extends('admin.base')

@section('content')


    <!-- Start My Account  -->
    <div class="my-account-box-main">

        <div class="row text-center">
            <div class="col-lg-12">
                <h2>View Products</h2>

            </div>
        </div>
        <div class="container">
            <div class="my-account-page">

                <table class="table table-bordered">
                    <thead>
                      <tr>
                
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Methodolgy</th>
                        <th scope="col">Diseases</th>
                        <th scope="col">Market</th>
                        <th scope="col">Price</th>


                 
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product )
                        <tr>
                     
                            <td>{{$product->name}}</td>
                            <td>{{$product->category}}</td>

                            <td>{{$product->method}}</td>
                            <td>{{$product->disease}}</td>
                            <td>{{$product->market}}</td>
                            <td>{{$product->price}}</td>

                            <td><a href="update-product/{{$product->id}}" style="color:blue" >Update</a>|<a href="delete-product/{{$product->id}}" style="color:red ;padding-left:5px">X</a></td>
                               


                          
                          </tr>
                            
                        @endforeach
                
           
                    </tbody>
                  </table>

          
            </div>
        </div>
    </div>
    <!-- End My Account -->


@endsection
