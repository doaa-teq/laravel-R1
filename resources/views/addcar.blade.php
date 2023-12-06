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
    <h2>addCar</h2>
    <form action="{{ route('recieve') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="car_name" value="{{ old('car_name') }}">
            @error('car_name')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows="5" id="description" name="dascription">{{ old('dascription') }}</textarea>
            @error('dascription')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ old('price')}}" placeholder="Enter Price">
      @error('price')
         {{ $message }}
        @enderror
       </div>
        <div class="checkbox">
            <label><input type="checkbox" name="purchase" @checked($car->purchase)>Published</label>
        </div>
        <button type="submit" class="btn btn-default">Update</button>
    </form>
</div>

</body>
</html>
