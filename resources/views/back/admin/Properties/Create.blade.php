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
        <h1> ویژگی جدید</h1>
    </div>
    <div>
        <form action="{{route('Property.store')}}" method="post">
            @csrf
            <label for="title"> رنگ</label>
            <input type="text" name="color" value="{{old('color')}}">
            <label for="title">حافظه داخلی</label>
            <input type="text" name="memory" value="{{old('memory')}}">
            <label for="title">مدل</label>
            <input type="text" name="model" value="{{old('model')}}">
            <label for="title">برند</label>
            <input type="text" name="brand" value="{{old('brand')}}">

            <div>
                <select name="Categories[]" multiple>
                   @foreach($categories as cat_id => cat_name) 
                    <option value="{{$cat_id}}">{{$cat_name}}</option>
                   @endforeach 
                </select>
            </div>

            <button type="submit">دخیره</button>
            <a href="Properties">انصراف</a>
        </form>
    </div>
</body>
</html>