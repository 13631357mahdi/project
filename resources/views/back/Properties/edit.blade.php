<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1> ویرایش ویژگی ها </h1>
    </div>
    <div>
        <form action="{{route('Property.update', $Property->id)}}" method="post">
            @csrf
            <label for="title">ویرایش رنگ</label>
            <input type="text" name="color" value="{{$Category->color}}">
            <label for="title">ویرایش حافظه داخلی</label>
            <input type="text" name="memory" value="{{$Category->memory}}">
            <label for="title">ویرایش مدل</label>
            <input type="text" name="model" value="{{$Category->model}}">
            <label for="title">ویرایش برند</label>
            <input type="text" name="brand" value="{{$Category->brand}}">

            <button type="submit">ویرایش</button>
            <a href="Property">انصراف</a>
        </form>
    </div>
</body>
</html>