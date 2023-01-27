<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários PHP</title>
 
</head>
<body>
    <h1>Comentários PHP</h1>
    <hr>

    <p>
        Os comentários do PHP podem ser usados para descrever qualquer linha <br>
        de código para que outro desenvolvedor possa entender o código facilmente. <br>
        Ele também pode ser usado para ocultar qualquer código.
    </p>

    <p>
        PHP suporta comentários de linha única e de várias linhas. <br>
        Esses comentários são semelhantes aos comentários de estilo <marc>C/C++ e Perl</marc> (estilo shell Unix).
    </p>
    <hr>

    <h4>Exemplo: Comentários</h4>

    <!-- este é um comentário no estilo Html -->
    <p>< <mark>!--</mark> este é um comentário no estilo Html <mark>--></mark></p>

    <?php
        // Comentário de uma linha em Estilo C++     
        echo "<p>(barra,barra) <br><mark>//</mark> Comentário de uma linha no estila da linguagem C++;</p>";
        echo '<br>Isto é um teste'; 
        
        /* Este é um comentário de múltiplas linhas
            ainda outra linha de comentário
            estilo linguagem C 
        */
        echo "<pre>";
        echo "<p>
            (<mark>barra asterisco</mark> abre o comentário) <br>  
        <strong> /* </strong><br>
            Este é um comentário de múltiplas linhas <br>
            no estilo da linguage C <br>
            aqui ainda é outra linha de comentário <br>
            (<mark>arterisco barra</mark> fecha o comentário) <br>
        <strong>*/</strong></p>";
        echo "</pre>";
        
        echo'Isto é ainda outro teste';
        
        echo "<pre>";
        echo "<p>
            <mark>#</mark> Este é um comentário de uma linha no estilo shell 
            </p>";
        echo "</pre>";

        echo 'Um teste final';  
        
        # Este é um comentário de uma linha no estilo shell 
    ?>
    <hr>

    <h4>Exemplo: Comentário2</h4>

    <?php
        echo 'Isto é um teste <br> ';
        echo "<pre>";
        echo "<mark>//</mark> Estilo de comentário de uma linha em  C++ <br>";

        echo "<p><mark>/*</mark> 
        Este é um comentário de múltiplas linhas.</p>";
        echo "<p>ainda outra linha de comentário 
        <mark>*/</mark> </p>";
        
        echo "<p><mark>#</mark> Este é um comentário de uma linha no estilo shell</p>";
        echo "</pre>";

        echo 'Isto é ainda outro teste <br>';
        echo 'Um teste final '; 
    ?>
    <hr>

</body>
</html>