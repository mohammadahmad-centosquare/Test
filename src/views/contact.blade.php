<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US</title>
</head>

<body>
    <h1>Cnntact Us Any Time</h1>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <input type="email" name="email" placeholder="Enter Email">
        <input name="message" cols="4" rows="4" placeholder="Enter Query">
        <button type="submit">Enter</button>
    </form>
</body>

</html>
