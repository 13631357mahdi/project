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
        <h1>{{$Category->name}}</h1>
        <ul>
            <li>{{$Property->color}}</li>
            <li>{{$Property->memory}}</li>
            <li>{{$Property->model}}</li>
            <li>{{$Property->brand}}</li>
        </ul>
    </div>
</body>
</html>