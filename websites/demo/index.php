<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gabriel</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            margin:40px;
        }

        .contenedor{
            max-width:700px;
            margin:auto;
        }

        .bloque{
            background:white;
            padding:20px;
            margin-bottom:20px;
            border-radius:8px;
            box-shadow:0 2px 5px rgba(0,0,0,.1);
        }

        h2{
            margin-top:0;
        }

        p{
            margin:8px 0;
        }
    </style>
</head>
<body>

<div class="contenedor">

    <div class="bloque">
        <h2>Ejemplo 1: Calcular Vida</h2>

        <?php
        function calcularVida($fuerza) {
            return $fuerza * 22;
        }

        $fuerzaDeWraithKing = 26;
        $vidaTotal = calcularVida($fuerzaDeWraithKing);

        echo "<p>Wraith King tiene <strong>$vidaTotal</strong> de vida base.</p>";
        ?>
    </div>

    <div class="bloque">
        <h2>Ejemplo 2: Evaluar Meta</h2>

        <?php
        function evaluarMeta($nombreHeroe, $winRate) {
            if ($winRate >= 54.0) {
                return "¡$nombreHeroe está rotísimo! Pick o ban obligatorio.";
            } elseif ($winRate >= 49.0) {
                return "$nombreHeroe está balanceado. Depende de tus manos.";
            } else {
                return "F por $nombreHeroe. No lo pickees ni de broma.";
            }
        }

        echo "<p>" . evaluarMeta("Wraith King", 55.2) . "</p>";
        echo "<p>" . evaluarMeta("Rubick", 47.5) . "</p>";
        ?>
    </div>
    <div class="bloque">
        <h2>Ejemplo 3: MVP</h2>
        <?php
        // Le decimos que RECIBA un array y que nos DEVUELVA un string
        function obtenerMvpDeLaPartida(array $listaHeroes) {
            $mejorWinRate = 0;
            $nombreMvp = "";

            // Recorremos el array que entró como parámetro
            foreach ($listaHeroes as $heroe) {
                if ($heroe['winRate'] > $mejorWinRate) {
                    $mejorWinRate = $heroe['winRate'];
                    $nombreMvp = $heroe['name'];
                }
            }

            return "El MVP de la partida es " . $nombreMvp . " con un win rate de " . $mejorWinRate . "%";
        }

        // Tu data (La que tenías en tu código original, pero mejorada)
        $heroes = [
                ['name' => 'Wraith King', 'winRate' => 55.2],
                ['name' => 'Phantom Lancer', 'winRate' => 51.5],
                ['name' => 'Spectre', 'winRate' => 53.0],
        ];

        // Le pasamos el array completo a la función
        echo obtenerMvpDeLaPartida($heroes);
        // Imprime: El MVP de la partida es Wraith King con un win rate de 55.2%
        ?>
    </div>

</div>

</body>
</html>