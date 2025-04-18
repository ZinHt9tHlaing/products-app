<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>

    <h1>Products Detail Page</h1>

    <div>
        <h2>
            Product name - {{ $product->name }}
        </h2>
        <h2>
            Product price - {{ $product->price }}
        </h2>
        <hr>
    </div>


</body>

</html>
