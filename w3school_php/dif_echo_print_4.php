<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença echo/print no PHP</title>
</head>
<body>
    <h1>Diferença echo/print no PHP</h1>
    <hr>
    <div>

        <p>
            Frequentemente usamos a instrução <strong>echo</strong> para exibir a saída na tela. <br>
            No Entanto, existem duas maneiras básicas de se obter a mesma saída, <br>
            pode-se usar também a instrução <strong>print</strong> do PHP: <br>
        </p>

        <p>
            <mark>echo e print</mark> são construções da linguagem, e nunca se comportam como uma função. <br>
            sendo assim, não há exigência de parênteses. <br>
            Entretanto, ambas as instruções podem ser usadas com ou sem parênteses. <br>
            Pode-se usar essas instruções para gerar variáveis ou cadeias de caracteres.
        </p>
    </div>
    <hr>

    <div>
        <h2>Diferença entre echo e print</h2>
        <h3>echo</h3>

        <p>
            echo é uma instrução, que é usada para exibir a saída. <br>
            pode ser usado com ou sem parênteses. <br>
            não retorna nenhum valor. <br>
            echo pode passar várias cadeias separadas por vírgula (,). <br>
            é mais rápido do que imprimir instrução. <br>
        </p>
    </div>
    <hr>
    
    <div>
        <h3>print</h3>        
        <p>
            também é uma instrução, usada como uma alternativa para ecoar <br>
            em muitos momentos para exibir a saída. <br>
            a instrução print pode ser usada com ou sem parênteses. <br>
            print sempre retorna um valor inteiro, que é 1. <br>
            Usando a impressão, não podemos passar vários argumentos. <br>
            a impressão é mais lenta do que a instrução echo. <br>
        </p>
        <hr>

        <h4>Exemplo: Exibindo textos</h4>
        
        <p>
            <strong>< ?php</strong><br>
            <p>
                print "< h2>PHP é divertido!< /h2>"; <br>
                print "Olá, mundo!"; <br>
                print "Eu estou aprendendo PHP!";
            </p>

            <strong> ?> </strong>
            
            <p>
                <mark>Saida: </mark><br>
                <h2>PHP é divertido</h2>
                Olá, mundo! <br>
                Eu estou aprendendo PHP! <br>
            </p>
        </p>
    </div>
    <hr>

    <div>
        <h4>Exemplo: Exibindo variáveis</h4>
    
        <strong> < ?php</strong><br>
        <p>
            // variáveis <br>
            $txt1 = "Aprenda PHP"; <br>
            $txt2 = "W3Schools.com"; <br>
            $x = 5; <br>
            $y = 4; <br>
            <br>
            // exibir resultado break <br>
            print "< h2>" . $txt1 . "< /h2>"; <br>
            print "Estudar PHP na " . $txt2 . "< br>"; <br>
            print $x + $y; <br>
        </p>
        
        <strong> ?> </strong>

        <p>
            <mark>Saida: </mark>
            <h2>Aprenda PHP</h2>
                Estudar PHP na W3Schools.com<br>
                9 <br>
        </p>
    </div>
    <hr>

</body>
</html>