<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>

    <x-navbar></x-navbar>

    {{ $slot }}

    <footer>
        <ul>
            <li>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact-us">Contact us</a>
            </li>
        </ul>
    </footer>

</body>

</html>
