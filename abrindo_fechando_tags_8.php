<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrindo e Fechando tags do PHP</title>
</head>
<body>
    <h1 align= 'center'>Abrindo e Fechando Tags do PHP</h1>
    <hr>
    
    <p align='justified'>Enquanto as tags vistas nos exemplos um e dois estão ambas sempre disponíveis
        <br>o exemplo um é mais comumente usado, e recomendado, das duas.
        <br>Vrana, Jakub; Seguy, Damien; Richter, Georg; Magnusso, 
        <br>Hannes; Lopes, Nuno; Dovgal, Anthony; Achour, Mehdi; Betz, 
        <br>Friedhelm (2011-07-22). Manual Oficial PHP.net (Locais do Kindle 1864-1865).  . 
        Edição do Kindle. 
    </p>

    <h3>Exemplo 01</h3>
    <?php
        echo"< ? php";
        echo"<br>Se você quer servir documentos XHTmL ou XmL, faça assim.";
        echo"<br>?>";
    ?>

    <h3>Exemplo 02</h3>
    <?php
        echo"< script lenguage = \"php\">";
        echo"<br>Alguns editores com o (FrontePage) não gostam de instrução de processamento.";
        echo"<br>< /script>";
    ?>
    
    <h3>Exemplo 03</h3>
    <?php
        echo"< ?";
        echo"<br>Esta é a mais simples, uma instrução de processamento SGmL.";
        echo"<br>? >";
        echo"<br>< ?= expressão ? >Isto é um atalho para \"< ? echo expressão ? >\"";
    ?>

    <h3>Exemplo 04</h3>
    <?php
        echo"< ? php // abre o bloco para as instruções PHP.";
        
        echo"<br>Se você quer servir documentos XHTmL ou XmL, faça assim.";
        echo"<br>Isto é outro teste";
        echo"<br> Isto é outra instrução, deve ser encerrado com ponto e vírgula (;)";
        
        echo"<br>? > // aqui encerra o bloco para as instruções PHP.";
        
        echo"<br><h4>Equivalente a</h4>";
        echo"<p>Linguagens C, C++, C#, dentre outras que usam as { }<br>como delimitador das instruções.</p>";
        echo"{ // abre chave, <br> <strong>seu código aqui</strong> <br> } // fecha chave";
    ?>
    
</body>
</html>