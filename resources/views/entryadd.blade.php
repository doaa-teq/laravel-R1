<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add details</h2>
  <form action="{{route('inf')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{old('title') }}">
      @error('title')
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="Content">describtion:</label>
      <input type="text" class="form-control" id="content" name="describtion" placeholder="Enter describtion" value="{{old('describtion')}}" >
      @error('describtion')
      {{ $message }}
      @enderror
    </div>
      <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
      <label for="price">From_price:</label>
      <input type="number" class="form-control" id="from_price" name="from_price" value="{{old('from_price')}}" placeholder="from_price">
      @error('from_price')
         {{ $message }}
        @enderror
       </div>
       <div class="form-group">
      <label for="price">to_price:</label>
      <input type="number" class="form-control" id="to_price" name="to_price" value="{{old('to_price')}}" placeholder="to_price">
      @error('to_price')
         {{ $message }}
        @enderror
       </div>
       <button type="submit" class="btn btn-default">Add</button>
       </form>
</div>
    

</body>
</html>
