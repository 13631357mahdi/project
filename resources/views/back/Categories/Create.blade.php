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
        <h1>دسته بندی جدید</h1>
    </div>
    <div>
        <form action="{{route('Categories.store')}}" method="post">
            @csrf
            <label for="title">نام دسته بندی</label>
            <input type="text" name="name" value="{{old('name')}}">
            <label for="title">توضیحات</label>
            <input type="text" name="description" value="{{old('desceription')}}">

            <button type="submit">دخیره</button>
            <a href="Categories">انصراف</a>
        </form>
    </div>
</body>
</html>