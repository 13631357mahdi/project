<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="{{rout('register')}}" method="post">
        @csrf
        <div>
        <label for="title">نام و نام خانوادگی</label>
        <input type="text" class="name">
        </div>
        <div>
            <label for="title">توضیحات</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label for="title">مسیر عکس</label>
            <input type="text" class="image">
        </div>
        <div>
            <button class="save">ذخیره</button>
        </div>
    </form>
</body>
</html>
