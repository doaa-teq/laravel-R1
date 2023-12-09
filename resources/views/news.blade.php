<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add news</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add news</h2>
  <form action="{{route('con')}}" method='post' enctype="multipart/form-data" >
    @csrf
    @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title') }}">
      @error('title')
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="Content">Content:</label>
      <input type="text" class="form-control" id="content" name="content" placeholder="Enter content" value="{{ old('content')}}" >
      @error('content')
      {{ $message }}
      @enderror
    </div>
    <div class="form-group">
        <label for="description"><A></A>Auther:</label>
        <textarea class="form-control" rows="5" id="description" name="auther" value="{{ old('auther')}}"></textarea>
        @error('auther')
       {{ $message }}
        @enderror
      </div> 
      <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
            @error('image')
                {{ $message }}
            @enderror
        </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published"> Published</label>
    </div>
    <button type="submit" class="btn btn-default" name="send" >Add</button>
  </form>
</div>

</body>
</html>
