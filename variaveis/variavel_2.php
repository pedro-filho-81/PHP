<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variável_2 PHP</title>
</head>
<body>
    <h1 align='center'>Variável_2 PHP</h1>
    <hr>

    <?php
        $a_bool = true;   // um valor boleano
        $a_str  = "foo";  // um texto
        $a_str2 = 'foo';  // um texto
        $an_int = 12;     // um inteiro

        echo get_debug_type($a_bool), "<br>";
        echo get_debug_type($a_str), "<br>";

        // Se essa variável conter um inteiro, aumento o número por quatro
        if (is_int($an_int)) {
            $an_int += 4;
        }

        var_dump($an_int);

        // Se $a_bool for um texto, imprima
        if (is_string($a_bool)) {
            echo "String: $a_bool <br>";
        }
    ?>

</body>
</html>