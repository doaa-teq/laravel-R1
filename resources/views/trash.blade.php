<!DOCTYPE html>
<html lang="en">
<head>
  <title>News Example</title>
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
        <th>New_title</th>
        <th>content</th>
        <th>auther</th>
        <th>purchased</th>
        <th>published</th>
        <th>destroy</th>
        <th>delete</th>
        <th>restore</th>
      </tr>
    </thead>
    <tbody>
    <tr>
      @foreach($nes as $datta)
        <td>{{$datta->title}}</td>
        <td>{{$datta->content}}</td>
        <td>{{$datta->auther}}</td>
        <td>
          @if($datta->published)
            true 👍
          @else
            faulse 🤦‍♀️
          @endif
        </td>
        
        <td><a href="restorenews/{{$datta->id}}">restore</a></td>
        <td><a href="destroynews/{{$datta->id}}">destroy</a></td>
        <td><a href="delete/{{$datta->id}}">delete</a></td>

      </tr>
      
      @endforeach

    </tbody>
</div>

</body>
</html>
