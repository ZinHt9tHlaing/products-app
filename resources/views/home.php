<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>

    <h1>Home page - <?php echo $title ?> </h1>

    <?php foreach ($products as $product): ?>
        <div>
            <h2>
                <a href="/products/<?php echo $product->id ?>">
                    Product name - <?php echo $product->name ?>
                </a>
            </h2>
            <h2>
                Product price - <?php echo $product->price ?>
            </h2>
            <hr>
        </div>

    <?php endforeach; ?>

</body>

</html>