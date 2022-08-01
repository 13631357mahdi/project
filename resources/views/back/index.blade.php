<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section id="Header">
        <div class="title">
            <h1>پنل مدیریت</h1>
        </div>
        <div class="menu">
            <ul>
                <a href="{{route('Categories')}}">
                    <li>
                        دسته بندی
                    </li>
                </a>
                <a href="{{route('Property')}}">
                    <li>
                        ویژگی ها 
                    </li>
                </a>
                <a href="#">
                    <li>
                        کاربران
                    </li>
                </a>
            </ul>
        </div>
    </section>
</body>
</html>