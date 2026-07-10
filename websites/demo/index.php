<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
                "Pantaleon y las visitadoras",
                "Rango",
                "Illia Topuria"
        ]
    ?>
    <ul>
        <?php foreach ($books as $book){
            echo "<li>$book</li>";
        } ?>
    </ul>

    <ul>
        <?php foreach ($books as $book):?>
            <li><?=$book?></li>
        <?php endforeach ?>
    </ul>

</body>
</html>
