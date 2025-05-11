<html>
<head>
    <title>Ejercicio 4</title>
</head>
<body>

    <?php

        function mayor($x, $y) {

            $valor1 = $x;
            $valor2 = $y;

            if ($valor1 > $valor2) {
                echo "$valor1 es mayor que $valor2";
            } elseif ($valor1 == $valor2) {
                echo "$valor1 es igual que $valor2";
            } else {
                echo "$valor2 es mayor que $valor1";
            }

        }

        echo mayor(4,9);
    ?>

</body>
</html>