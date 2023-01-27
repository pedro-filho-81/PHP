<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escapando de modo avançado</title>
</head>
<body>
    <h1 align= 'center'>Escapando de modo avançado</h1>
    <hr>
    
    <?php
        // variável
        $expressao = 1;
        // echo "\$expressao = 0;<br>";
        echo 'A variável expressão é maior que zero?<br>';
        // se expressao maior que zero
        if($expressao) {
            ?> <!-- sai do php -->

            <!--entra no html -->
            <strong>Isto é verdadeiro.</strong>

            <?php // entra no php
            echo "<br>\$expressao = 1;";
        } else { // estou no php
            ?> <!-- sai do php -->

            <strong>Isto é falso.</strong>
            <?php // entra no php
            echo "<br>\$expressao = 0;";
        } // final else
    ?> <!--final php -->

</body>
</html>