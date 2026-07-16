<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>True Sight - Jugadores</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; margin: 40px; }
        .contenedor { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
    </style>
</head>
<body>

<div class="contenedor">
    <h2>Jugadores Millonarios de Dota 2</h2>

    <ul>
        <?php foreach ($millionaires as $player) : ?>
            <li>
                <strong><?= $player['name'] ?></strong>
                (<?= $player['team'] ?>) - $<?= number_format($player['money']) ?> USD
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>