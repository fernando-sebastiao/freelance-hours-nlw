<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fernando-page</title>
</head>
<body>
     <?php echo "Olá, Fernando!"; ?>

     @foreach(range(1,20) as $number)
        <li>{{$number}}</li>
     @endforeach

    @auth
    <span>você esta autenticado!</span>
    @endauth

</body>
</html>
