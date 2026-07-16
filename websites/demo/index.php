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
        <h2>Lambda Function básica</h2>
        <?php
            $chatWheel = function() {
                return "¡GG WP! ¡A la cueva a llorar!";
            }; // IMPORTANTE: Lleva punto y coma al final porque es una asignación de variable.

            // Para usarla, llamamos a la variable como si fuera la función
            echo $chatWheel();
            // Imprime: ¡GG WP! ¡A la cueva a llorar!
        ?>
    </div>
    <div class="bloque">
        <h2>Closure</h2>
        <?php
            $multiplicadorRuna = 2;
            $calcularGolpe = function($danioBase) use ($multiplicadorRuna) {
                return "Hola " . $multiplicadorRuna * $danioBase;
            };
            echo $calcularGolpe(110);
        ?>
    </div>
    <div class="bloque">
        <h2></h2>
        <?php
        $tiendaSecretas = [
                ['item' => 'Mango', 'oro' => 65],
                ['item' => 'Hyperstone', 'oro' => 2000],
                ['item' => 'Desolator', 'oro' => 3500],
                ['item' => 'Clarity', 'oro' => 50],
        ];

        $miOroActual = 1500;

        // Le pasamos la lista de items, y una lambda que decide qué puedo comprar
        $itemsComprables = array_filter($tiendaSecretas, function($item) use ($miOroActual) {
            return $item['oro'] <= $miOroActual;
        });

        // Si imprimes $itemsComprables, solo quedarán el Mango y la Clarity.

        ?>
        <ul>
            <?php foreach ($itemsComprables as $item) : ?>
                <li>
                    <strong><?= $item['item'] ?></strong> - Cuesta <?= $item['oro'] ?> de oro.
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="bloque">
        <h2>True Sight (Callbacks en Filtros)</h2>
        <?php
        $tiendaSecretas = [
                ['item' => 'Mango', 'oro' => 65],
                ['item' => 'Hyperstone', 'oro' => 2000],
                ['item' => 'Desolator', 'oro' => 3500],
                ['item' => 'Clarity', 'oro' => 50],
        ];

        $miOroActual = 1500;

        // Le pasamos la lista de items, y una lambda que decide qué puedo comprar
        $itemsComprables = array_filter($tiendaSecretas, function($item) use ($miOroActual) {
            return $item['oro'] <= $miOroActual;
        });
        ?>

        <p>Tu oro actual: <strong><?= $miOroActual ?>💰</strong></p>

        <ul>
            <?php foreach ($itemsComprables as $item) : ?>
                <li>
                    <strong><?= $item['item'] ?></strong> - Cuesta <?= $item['oro'] ?> de oro.
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

</body>
</html>