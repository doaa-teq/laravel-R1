<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    cartitle: {{$car->car_name}}
    <br>
    describtion: {{$car->dascription}}
    <br>
    category: {{$car->category->categoryName}}
    <br>

</body>
</html>


