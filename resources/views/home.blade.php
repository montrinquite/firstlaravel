<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel Home</title>
</head>
<body>
    <h1>WELCOME TO HOME PAGE</h1>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('about') }}">About Me</a>
    <p>Hello. I am, <b>Rod Aimon Trinquite</b>, the developer of this new app.</p>
</body>
</html>