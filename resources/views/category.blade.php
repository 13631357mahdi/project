<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('categories.store')}}" method="post">
        @csrf
        <div>
        <label for="title">موضوع</label>
        <input type="text" class="name" name="title">
        </div>
        <div>
            <label for="title">توضیحات</label>
            <textarea name="description" name="description"></textarea>
        </div>
        <div>
            <label for="title">مسیر عکس</label>
            <input type="text" class="image" name="image">
        </div>
        <div>
            <button class="save">ذخیره</button>
        </div>
    </form>
</body>
</html>
