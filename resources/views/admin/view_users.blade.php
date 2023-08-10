@extends('admin.base')

@section('content')




    <!-- Start My Account  -->
    <div class="my-account-box-main">

        <div class="row text-center">
            <div class="col-lg-12">
                <h2>Registered Users</h2>

            </div>
        </div>

        <div class="container pt-2">
            <div class="my-account-page">

                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                 
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user )
                        <tr>
                            <th scope="row">*</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                          
                          </tr>
                            
                        @endforeach
                
           
                    </tbody>
                  </table>

          
            </div>
        </div>
    </div>
    <!-- End My Account -->


@endsection
