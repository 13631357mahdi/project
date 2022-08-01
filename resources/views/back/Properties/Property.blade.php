<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="title">
        <h1>مدیریت ویژگی ها </h1>
    </div>

    <div class="table">
        <table>
            <head>
                <tr>
                    <th>رنگ</th>
                    <th>حافظه داخلی</th>
                    <th>مدل</th>
                    <th>برند</th>
                    <th>مدیریت</th>
                </tr>
            </head>
            <tbody>
                @foreach ($property as @property)
                    <tr>
                        <td>{{$Property->color}}</td>
                        <td>{{$Property->memory}}</td>
                        <td>{{$Property->model}}</td>
                        <td>{{$Property->brand}}</td>
                        <td>
                            <a href="{{route ('Property.edit', $Property->id)}}">ویرایش</a>
                            <a href="{{route('Property.destroy', $Property->id)}}" onclick="return confirm('ایتم مورد نظر حدف شود؟')">حذف</a>
                        </td>
Property
                    @endforeach
            </tbody>
        </table>
        <a href="{{route('Property.create')}}">ایجاد ویژگی</a>
    </div>
    {{$Property->link()}}
</body>
</html>