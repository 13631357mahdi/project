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
        <h1> ویرایش سته بندی </h1>
    </div>
    <div>
        <form action="{{route('Categories.update', $Category->id)}}" method="post">
            @csrf
            <label for="title">ویرایش نام</label>
            <input type="text" name="name" value="{{$Category->name}}">
            <label for="title">ویرایش توضیحات</label>
            <input type="text" name="description" value="{{$Category->description}}">

            <button type="submit">ویرایش</button>
            <a href="Categories">انصراف</a>
        </form>
    </div>
</body>
</html>