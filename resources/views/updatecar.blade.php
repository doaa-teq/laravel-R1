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
    <form action="{{ route('updateCar',$car->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="car_name" value="{{ $car->car_name }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows="5" id="description" name="dascription">{{ $car->dascription }}</textarea>
        </div>
        <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ $car->price }}" placeholder="Enter Price">
       </div>
       <div class="form-group">
      <label for="category">category:</label>
       <select name="category_id" id="">
          <option value="">{{ $car->category_id }}</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->categoryName}}</option>
       @endforeach
       </select>
       </div>
        <div class="checkbox">
            <label><input type="checkbox" name="purchase" @checked($car->purchase)>Published</label>
        </div>
        <button type="submit" class="btn btn-default">Update</button>
    </form>
</div>

</body>
</html>
