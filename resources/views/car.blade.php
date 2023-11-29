<!DOCTYPE html>
<html lang="en">
<head>
  <title>cars Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>car_name</th>
        <th>description</th>
        <th>price</th>
        <th>purchased</th>
        <th>edit</th>
        <th>show</th>
        <th>destroy</th>
      </tr>
    </thead>
    <tbody>
    <tr>
      @foreach($cars as $data)
        <td>{{$data->car_name}}</td>
        <td>{{$data->dascription}}</td>
        <td>{{$data->price}}</td>
        <td>
          @if($data->purchase)
            true 👍
          @else
            faulse 🤦‍♀️
          @endif
        </td>
        
        <td><a href="editcar/{{$data->id}}">Edit</a></td>
        <td><a href="details/{{$data->id}}">show</a></td>
        <td><a href="destroycar/{{$data->id}}">destroy</a></td>

      </tr>
      
      @endforeach

    </tbody>
</div>

</body>
</html>
