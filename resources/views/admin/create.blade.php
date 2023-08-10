
@extends('admin.base')
@section('content')
<div class="card-header">
    <div class="card-title pt-2 text-center">
        <h3>Create New Product</h3>
    </div>

</div>

    <div class="container">
        <div class="jumbotron p-5">
            <form action="{{ route('create-product') }}" method="POST" enctype="multipart/form-data" onsubmit="myFunction()">
                @csrf
                <div class="form-group">
                    <label> Product Name</label>
                    <input type="text" name="name" class="form-control" aria-describedby="name" required="">
                </div>

                <div class="form-group">
                    <label> Product Category</label>
                    <input type="text" name="category" class="form-control" aria-describedby="name" required="">
                </div>

      

                <div class="form-group pt-3">
                    <label>Product Price </label>
                    <input type="number" min="0" name="price" class="form-control" aria-describedby="emailHelp"
                        required="">
                </div>

      
          

                <div class="form-group pt-3">
                    <label for="exampleFormControlTextarea1">Farming Methodology</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="method"  rows="3"></textarea>
                  </div>

                  <div class="form-group pt-3">
                    <label for="exampleFormControlTextarea1">Disease Control Measures</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="disease"  rows="3"></textarea>
                  </div>

                  <div class="form-group pt-3">
                    <label for="exampleFormControlTextarea1">Market Gaps</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="market"  rows="3"></textarea>
                  </div>


         


                <div class="input-group pt-2">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" required>
                        <label class="custom-file-label">Choose Image</label>
                    </div>
                </div>


  

                <div class="input-submit pt-5">


                    <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function myFunction() {
          alert("Confirm to Save Product");
        }

   </script>
@endsection

