<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel crud</title>
</head>
<body>

    <div>
        <h1>Crud in laravel</h1>

        <form action="{{route('add')}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="enter name"> <br>
            <input type="text" name="email" placeholder="enter email"><br>
            <input type="submit">
        </form>
    </div>
    
</body>
</html>