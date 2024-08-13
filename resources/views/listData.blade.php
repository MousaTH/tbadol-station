<!doctype html>
            <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>List of data in for</h1>
    </div>
    @for($i=0;$i<4;$i++)
        <div>
            <p>number of data: {{$i}}</p>
        </div>
    @endfor
    @foreach($datas as $data)
        <div>
            <ul>
                <li>dataEnter: {{$data}}</li>
            </ul>
        </div>
    @endforeach
</body>
</html>
