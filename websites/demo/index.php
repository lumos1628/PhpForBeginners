<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Gabriel</title>
</head>
<body>
    <h1>My Best Heros</h1>

    <?php
        $books = [
                [
                        'name' =>'Phanton lancer',
                        'Game style' => 'Late game, doge spells',
                        'player' => 'Ana',
                        'profileUrl' => "http://example.com"
                ],
                [
                        'name' => 'Whrait King',
                        'Game style' => 'Snow Ball',
                        'player' => 'k1',
                        'profileUrl' => "http://example.com"
                ],
                [
                        'name' => 'Spectre',
                        'Game style' => 'Late game, tanky',
                        'player' => 'Ana',
                        'profileUrl' => "http://example.com"
                ],
        ];

        function filterByPlayer($books){
            $filteredBooks = [];
            foreach($books as $book){
                if ($book['player'] === 'Ana'){
                    $filteredBooks[] = $book;
                }
            }
            return $filteredBooks;
        }

    ?>

    <p>
        <?php foreach ($books as $book): ?>
            <li><?= $book['name'] ?></li>
        <?php endforeach; ?>
    </p>

    <p>
        <?php foreach (filterByPlayer($books) as $book): ?>
                <li>
                    <a href="<?= $book['profileUrl'] ?>">
                        <?= $book['name'] ?> (<?= $book['player'] ?>)
                    </a>
                </li>
        <?php endforeach; ?>
    </p>

</body>
</html>
