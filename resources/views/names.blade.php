<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>names</title>
</head>
<body>
    <h1>Hello {{$name1}}</h1>
    <h1>Hello {{$name2}}</h1>
    <h1>Hello {{$name3}}</h1>
    @if($number_of_order > 5)
        <h1 style="background-color: orangered ; box-shadow: 3px 3px 3px gray">you are greet customer😊</h1>
    @elseif($number_of_order > 3 )
        <h1 style="background-color: darkturquoise ; ">Thankyou!😅</h1>
    @else
        <h1 style="background-color: green ; ">welcome!😅</h1>

    @endif
</body>
</html>
