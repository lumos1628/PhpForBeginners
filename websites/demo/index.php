<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gabriel</title>
</head>

<body>
    <?php
        // 1. Declaramos la función. Recibe un parámetro ($fuerza).
        function calcularVida($fuerza) {
            return $fuerza * 22;// El "return" es el resultado que la función escupe hacia afuera.
        }

        // 2. La usamos en la vida real.
        $fuerzaDeWraithKing = 26;

        // Llamamos a la función pasándole el 26. El resultado se guarda en $vidaTotal.
        $vidaTotal = calcularVida($fuerzaDeWraithKing);

        echo "Wraith King tiene " . $vidaTotal . " de vida base.";
        // Imprime: Wraith King tiene 572 de vida base.
    ?>
</body>
</html>