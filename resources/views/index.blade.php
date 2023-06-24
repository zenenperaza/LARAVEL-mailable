<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send email</title>
</head>
<style>
    a {
        text-decoration: none;
        background-color: aqua;
        padding: 15px;
        border-radius: 10px;
        color: blueviolet;
        margin: 50px;
    }
    a :hover{
        background-color: rgb(255, 127, 148);

    }
</style>
<body>
    <a href="{{ route('mailMe') }}">Mail me</a>
</body>
</html>