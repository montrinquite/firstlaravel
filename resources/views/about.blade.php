<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
</head>
<body>
    <style>
        body {background-color: blanchedalmond}

        article {margin: 20px; background-color: brown; text-align: center; padding: 20px; word-spacing: 20px;}

        a {text-align: center}
    </style>
    <article>
        <h3>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('about') }}">About Me</a>
        </h3>
    </article>
    
    <h1>About Me</h1>
    <h3>My Favorite Celebrity</h3>
    <p>My Favorite <b>Celebrity</b> is <b><i>Daniel Caesar</i></b></p>
    <h3>Hobbies</h3>
    <li>
        <ul>Basketball</ul>
        <ul>Gaming</ul>
        <ul>Playing Guitar</ul>
        <ul>Sleeping</ul>
        <ul>Eating</ul>
    </li>
    <h3>Favorite Anime</h3>
    <li>
        <ul>Jujutsu Kaisen</ul>
        <ul>Demon Slayer</ul>
        <ul>Death Note</ul>
    </li>
</body>

</html>