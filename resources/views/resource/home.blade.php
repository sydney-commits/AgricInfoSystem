@extends('client.base')

@section('content')


    <!-- Start My Account  -->
    <div class="my-account-box-main">

        <div class="row text-center">
            <div class="col-lg-12">
                <h2>Resource Reports</h2>

            </div>
        </div>
        <div class="container pt-2">
            <div class="my-account-page">

                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
        
                        <th scope="col">Action</th>
                        <th scope="col">Action</th>


                 
                      </tr>
                    </thead>
                    <tbody>

               
                        <tr>
                            <th scope="row">1</th>
                            <td>Report on Latest Price Recommendations for different products across Kenya, Uganda and Tanzania</td>
                      
                            <td><a href="/price-reports"><strong>View Report</strong> </a></td>
                            <td><a href="/price-pdf"><strong>Download Report</strong></a></td>


                        
                          
                          </tr>

                          <tr>
                            <th scope="row">2</th>
                            <td>Basic Guidelines for Various Farming activities</td>
                      
                            <td><a href="/resource-guideline"><strong>View Report</strong> </a></td>
                            <td><a href="/guideline-pdf"><strong>Download Report</strong> </a></td>


                        
                          
                          </tr>

                                    <tr>
                            <th scope="row">3</th>
                            <td>Report on Latest Price Recommendations for different products across Kenya, Uganda and Tanzania</td>
                      
                            <td><a href="/price-reports"><strong>View Report</strong> </a></td>
                            <td><a href="/price-pdf"><strong>Download Report</strong></a></td>


                        
                          
                          </tr>

                          <tr>
                            <th scope="row">4</th>
                            <td>Soil Management Guideline for Large Scale Farmers</td>
                      
                            <td><a href="/resource-guideline"><strong>View Report</strong> </a></td>
                            <td><a href="/guideline-pdf"><strong>Download Report</strong> </a></td>


                        
                          
                          </tr>

                                                 <tr>
                            <th scope="row">5</th>
                            <td>Coffee Farming Recommendation Report (Variance and Important Info)</td>
                      
                            <td><a href="/price-reports"><strong>View Report</strong> </a></td>
                            <td><a href="/price-pdf"><strong>Download Report</strong></a></td>


                        
                          
                          </tr>
                            
                  
                
           
                    </tbody>
                  </table>

          
            </div>
        </div>
    </div>
    <!-- End My Account -->


@endsection
