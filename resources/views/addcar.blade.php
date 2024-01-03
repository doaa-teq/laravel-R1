<!DOCTYPE html>
<html lang="en">
<html lang="ar">    
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
    <h2>{{ __('masseges.CarTitle')}}</h2>
    <form action="{{ route('cons') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">{{ __('masseges.Title')}}</label>
            <input type="text" class="form-control" id="car_name" placeholder="Enter title" name="{{ __('masseges.car_name')}}" value="{{ old('car_name') }}">
            @error('car_name')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="description">{{ __('masseges.Description')}}</label>
            <textarea class="form-control" rows="5" id="dascription" name="{{ __('masseges.dascription')}}">{{ old('dascription') }}</textarea>
            @error('dascription')
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
      <label for="price">{{ __('masseges.Price')}}</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ old('price')}}" placeholder="Enter Price">
      @error('price')
         {{ $message }}
        @enderror
       </div>
       <div class="form-group">
      <label for="price">{{ __('masseges.category')}}</label>
       <select name="category_id" id="">
        <option value="">select category</option>
        @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->categoryName}}</option>
        @endforeach
       </select>
       </div>
        <div class="checkbox">
            <label><input type="checkbox" name="purchase">{{ __('masseges.Published')}}</label>
        </div>
        <button type="submit" class="btn btn-default">{{ __('masseges.add')}}</button>
        <a href="{{ LaravelLocalization::getLocalizedURL('en',route('addcar')) }}">English</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('ar',route('addcar')) }}">Arabic</a>
    </form>
</div>

</body>
</html>
