<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data From Database</title>
</head>
<body>
    <h1>Hello My Name </h1>
    {{-- <h1>{{$firstpages}}</h1> --}}
    @foreach($firstpages as $page)
        <h1>{{$page["title"]}}</h1>
    @endforeach
</body>
</html>