<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Update Car</h2>
    <form action="{{ route('updatejournal',$ness->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $ness->title }}">
        </div>
        <div class="form-group">
            <label for="description">Contents</label>
            <textarea class="form-control" rows="5" id="description" name="contents">{{ $ness->content }}</textarea>
        </div>
        <div class="form-group">
      <label for="authers">Authers:</label>
      <input type="text" class="form-control" id="authers" name="authers" value="{{ $ness->auther}}"placeholder="Enter Price">
       </div>
        <div class="checkbox">
            <label><input type="checkbox" name="publisheds" @checked($ness->published)>Published</label>
        </div>
        <button type="submit" class="btn btn-default">Update</button>
    </form>
</div>

</body>
</html>
