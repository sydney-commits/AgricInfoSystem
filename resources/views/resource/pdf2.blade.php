<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        table, th, td {
          border: 1px solid;
     
        }

        thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

th, td {
  padding: 15px;
  text-align: left;
}

        .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
        </style>
</head>
<body>
  
    <div class="row text-center">
        <div class="col-lg-12">
            <h2>Product Price Comparison</h2>

        </div>
    </div>

<div class="container">
    <table class="table styled-table">
        <thead>
          <tr>
      
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Ksh</th>
            <th scope="col">Ush</th>
            <th scope="col">Tsh</th>

            <th scope="col">Availability</th>

     
          </tr>
        </thead>
        <tbody>

            @foreach ($prices as $price )
            <tr>
          
                <td>{{$price->name}}</td>
                <td>{{$price->category}}</td>
                <td>{{$price->ksh}}</td>
                <td>{{$price->ush}}</td>
                <td>{{$price->tsh}}</td>
                <td>Available</td>

            
              
              </tr>
                
            @endforeach
    

        </tbody>
 
      </table>
</div>
    
</body>
</html>