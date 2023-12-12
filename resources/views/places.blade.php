<!DOCTYPE html>
<html lang="en">
<head>
  <title>places</title>
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
        <th>Titles</th>  
        <th>Edit</th>
        <th>delete<th>
        
      </tr>
    </thead>
    <tbody>
    <tr>
      @foreach($useful as $data)
        <td>{{$data->title}}</td>

        <td><a href="editplaces/{{$data->id}}">Edit</a></td>
        <td><a href="delete/{{$data->id}}">delete</a></td>

        </tr>

      @endforeach
    </tbody>
</div>

</body>
</html>
