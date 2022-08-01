<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ورود به سایت</title>
</head>
<body>
<form action="{{route('login')}}" method="post">
    @csrf
    <div>
        <label for="title">ایمیل</label>
        <input type="text" name="email">
    </div>
    <div>
    <label for="title">رمز</label>
    <input type="text"name="password">
    </div>
    <div>
        <button>ورود</button>
    </div>
</form>
</body>
</html>
