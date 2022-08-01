<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ثبت نام</title>
</head>
<body>
    <form action="{{route('user.store')}}" method="post">
    @csrf
    <div>
    <label for="title">نام ونام خانوادگی</label>
    <input type="text" name="name">
    </div>
    <label for="title">ایمیل</label>
    <input type="text" name="email">
    </div>
    <label for="title">شماره تلفن</label>
    <input type="text"name="phone">
    </div>
    <label for="title">رمز</label>
    <input type="text"name="password">
    </div>
    <div>
        <button>ذخیره</button>
    </div>
    </form>
</body>
</html>