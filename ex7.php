<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $valor1 = 10;      // inteiro
    $valor2 = "10";    // string

    echo "7. Comparação com == : ";
    var_dump($valor1 == $valor2); // Compara apenas o valor

    echo "<br>Comparação com === : ";
    var_dump($valor1 === $valor2); // Compara valor e tipo
    echo "<br><br>";
    ?>

</body>
</html>