<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
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
        <th>Contents</th>
        <th>Authers</th>
        <th>image</th>
        <th>Publisheds</th>
         <th>Edit</th>
        <th>show</th>
        <th>delete<th>
        <th>destroy</th>
        <th>update</th>
      </tr>
    </thead>
    <tbody>
    <tr>
      @foreach($nes as $data)
        <td>{{$data->title}}</td>
        <td>{{$data->content}}</td>
        <td>{{$data->auther}}</td>
        <td>{{$data->image}}</td>

        <td>
          @if($data->published)
            1 👍
          @else
            0 🤦‍♀️
          @endif
        </td>
        <td><a href="editnews/{{$data->id}}">Edit</a></td>
        <td><a href="creative/{{$data->id}}">show</a></td>
        <td><a href="delete/{{$data->id}}">delete</a></td>
        <td><a href="destroynews/{{$data->id}}">destroy</a></td>
        <td><a href="update/{{$data->id}}">update</a></td>

      </tr>
      
      @endforeach

    </tbody>
</div>

</body>
</html>
