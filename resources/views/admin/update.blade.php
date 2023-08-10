
@extends('admin.base')
@section('content')
<div class="card-header">
    <div class="card-title pt-2 text-center">
        <h3>Create New Product</h3>
    </div>

</div>

    <div class="container">
        <div class="jumbotron p-5">
            <form action="{{ route('update-product') }}" method="POST" enctype="multipart/form-data" onsubmit="myFunction()">
                @csrf
                <input type="hidden" value="{{$product->id}}" name="cid">

                <div class="form-group">
                    <label> Product Name</label>
                    <input type="text" name="name" class="form-control" aria-describedby="name" value="{{$product->name}}" required="">
                </div>

                <div class="form-group">
                    <label> Product Category</label>
                    <input type="text" name="category" class="form-control" aria-describedby="name" value="{{$product->category}}" required="">
                </div>

      

                <div class="form-group pt-3">
                    <label>Product Price </label>
                    <input type="number" min="0" name="price" class="form-control" value="{{$product->price}}" aria-describedby="emailHelp"
                        required="">
                </div>

      
            

                <div class="form-group pt-3">
                    <label for="exampleFormControlTextarea1">Farming Methodology</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="method"  rows="3">{{$product->method}}</textarea>
                  </div>

                <div class="form-group pt-3">
                    <label for="exampleFormControlTextarea1">Disease Control Measures</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="disease"  rows="3">{{$product->disease}}</textarea>
                  </div>

                <div class="form-group pt-3">
                    <label for="exampleFormControlTextarea1">Market Gaps</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="market"  rows="3">{{$product->market}}</textarea>
                  </div>





  

                <div class="input-submit pt-5">


                    <button type="submit" class="btn btn-primary">Update Product</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function myFunction() {
          alert("Confirm to Update Product");
        }

   </script>
@endsection

