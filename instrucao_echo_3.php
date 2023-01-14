<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A instrução echo do PHP</title>
</head>
<body>
    <h1>A instrução echo do PHP</h1>
    <p>
        A instrução <strong>echo</strong> é uma construção da linguagem, 
        não é uma função,<br>
        então não precisa usar parênteses com ele. <br>
        Entretanto, se quiser usar mais de um parâmetro, 
        então é necessário usar parênteses.
    </p>
    <hr>

    <h2>A sintaxe echo</h2>
    <p>
        <mark>void echo ( string $arg 1 [, string $... ] )</mark>
    </p>

    <p>
        A instrução echo pode ser usada para imprimir uma string simples, <br>
        strings de várias linhas, caracteres de escape, variável, array, etc. <br> 
        Alguns pontos importantes deve-se saber sobre a declaração de echo são:
    </p> 

    <p>echo é uma instrução, que é usada para exibir a saída.</p> 
    <p>- pode ser usado com ou sem parênteses: echo() e echo.</p> 
    <p>- não retorna nenhum valor.</p> 
    <p>- Pode-se passar várias cadeias separadas por uma vírgula (,) em echo.</p> 
    <p>echo é mais rápido do que a instrução print.</p> 
    <hr>
  
    <h4>Exemplo: echo1.php</h4>
    <pre>
    <code>
    <strong>< ? .php </strong>
        echo "Olá por PHP echo";
    <strong> ?> </strong>
    <mark>Saída:</mark>
    Olá por PHP echo
    <hr>

    <h4>Exemplo: echo2.php</h4>
    <pre>
    <code>
    <strong>< ? .php</strong>
            echo "Olá por echo
            esta é uma linha múltipla
            texto impresso pela
            Instrução de echo.";
    <strong> ?></strong>  
    <mark>Saída: </mark>
    Olá por echo esta é uma linha múltipla texto impresso pela Instrução de echo.        
    </code>
    </pre>
    <p>echo imprimindo sequência de caracteres de várias linhas</p>
    <hr>

    <h4>Exemplo: echo3.php</h4>
    <p>echo imprimindo caracteres de escape.</p>

    <strong>< ? .php</strong><br>

    <p>echo "Olá escape \"sequence\" caracteres";</p>
    
    <strong> ?></strong>
    
    <p>
        <mark>Saída: </mark>
        Olá escape \"sequence\" caracteres
    </p>

    </div>
    <hr>

    <div id="echo4">
            <h4>Exemplo: echo4.php</h4>
            <p>echo: imprimindo o valor da variável</p>

            <p>
                <strong>< ? .php</strong><br>
                
                <p>    
                    $msg="Olá sou a variável \$msg PHP"; 
                    <br>echo "Mensagem é: $msg";
                </p>

                <strong> ?></strong>  
            </p>

            <p>
                <mark>Saída: </mark>
                Olá sou a variável \$msg PHP
            </p>
    </div>
    <hr>

</body>
</html>