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
        <h1>مدیریت دسته بندی</h1>
    </div>

    <div class="table">
        <table>
            <head>
                <tr>
                    <th>نام محصول</th>
                    <th>توضیحات</th>
                    <th>مدیریت</th>
                </tr>
            </head>
            <tbody>
                @foreach ($category as @category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            <a href="{{route ('Categories.edit', $Category->id)}}">ویرایش</a>
                            <a href="{{route('Categories.destroy', $Category->id)}}" onclick="return confirm('ایتم مورد نظر حدف شود؟')">حذف</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <a href="{{route('Categories.create')}}">ایجاد دسته بندی</a>
    </div>
    {{$Category->link()}}
</body>
</html>