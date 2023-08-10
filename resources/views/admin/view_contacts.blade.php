@extends('admin.base')

@section('content')


    <!-- Start My Account  -->
    <div class="my-account-box-main">

        <div class="row text-center">
            <div class="col-lg-12">
                <h2>Consultations</h2>

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
                        <th scope="col">Phone Number</th>
                        <th scope="col">Message</th>

                 
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($contacts as $user )
                        <tr>
                            <th scope="row">*</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->contact}}</td>
                            <td>{{$user->message}}</td>

                          
                          </tr>
                            
                        @endforeach
                
           
                    </tbody>
                  </table>

          
            </div>
        </div>
    </div>
    <!-- End My Account -->


@endsection
