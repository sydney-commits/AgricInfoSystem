@extends('admin.base')
@section('content')
    <div class="card-header">
        <div class="card-title pt-2 text-center">
            <h3>Create Product Prices </h3>
        </div>

    </div>

    <div class="container">
        <div class="jumbotron p-5">
            <form action="{{ route('create-product-price') }}" method="POST" enctype="multipart/form-data" onsubmit="myFunction()">
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
                    <label>Product Price (Ksh) </label>
                    <input type="number" min="0" name="ksh" class="form-control" aria-describedby="emailHelp"
                        required="">
                </div>

                <div class="form-group pt-3">
                    <label>Product Price (Ush) </label>
                    <input type="number" min="0" name="ush" class="form-control" aria-describedby="emailHelp"
                        required="">
                </div>

                <div class="form-group pt-3">
                    <label>Product Price (Tsh) </label>
                    <input type="number" min="0" name="tsh" class="form-control" aria-describedby="emailHelp"
                        required="">
                </div>



                <div class="input-submit pt-5">


                    <button type="submit" class="btn btn-primary">Save Product Prices</button>
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
