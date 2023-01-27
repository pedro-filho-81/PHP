<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis PHP</title>
    <style>
                body {
            background-color: blue ;
            color: white;
            font-size: 13pt;
        }
        h1 {
            text-align: center;
        }
        mark {
            background-color: white;
            color: red;
        }
        strong {
            background-color: white;
            color: black;
        }
        pre {
        background-color: whitesmoke;
        color: blue;
        font-size: 13pt;
        }
    </style>
</head>
<body>
    <h1 align='center'>Variáveis PHP</h1>
    <hr>

    <div>
        <p>
            No PHP, uma variável é declarada usando um sinal $ seguido pelo nome da variável. <br>
            Aqui, alguns pontos importantes a serem conhecidos sobre variáveis: 
        </p>

        <p>
            Como o PHP é uma linguagem vagamente tipada, não precisamos declarar <br>
            os tipos de dados das variáveis. Ele analisa automaticamente os valores <br>
            e faz conversões para seu tipo de dados correto. <br>
            Depois de declarar uma variável, ela pode ser reutilizada em todo o código. <br>
            Operador de atribuição (=) é usado para atribuir o valor a uma variável. <br>
            A sintaxe de declarar uma variável em PHP é dada abaixo: <br>
            $variablename=valor; <br>
        </p>
    </div>
    <hr>

    <div>
        <h4>Regras para declarar a variável PHP:</h4>

        <p>
            Uma variável deve começar com um sinal de dólar ($), <br>
            seguido pelo nome da variável. <br>
            Ele só pode conter caractere alfanumérico e sublinhado (A-z, 0-9, _). <br>
            Um nome de variável deve começar com um caractere de letra ou sublinhado (_). <br>
            Um nome de variável PHP não pode conter espaços. <br>
            Uma coisa a ter em mente é que o nome da variável não pode começar com um número ou símbolos especiais. <br>
            As variáveis PHP diferenciam maiúsculas de minúsculas, de modo que $name e $NAME <br>
            ambas são tratados como variáveis diferentes. <br>
            Variável PHP: Declarando string, inteiro e float <br>
            Vamos ver o exemplo para armazenar valores de string, 
            inteiro e float em variáveis PHP. <br>
        </p>

        <h4>Exemplo: variable1.php</h4>

        <p>
            <strong>< ? .php</strong>
            <p>
                // variáveis <br>
                $str="hello string"; // string <br>
                $x=200;     // inteiro <br>
                $y=44,6;    // float <br>
                <br> // exibir <br>
                echo "string is: $str"; <br>
                echo "inteiro é: $x"; <br>
                echo "flutuar é: $y"; <br>
            </p>
            <strong> ?> </strong>  
            
            <br><mark>Saída: </mark>
            <p>
                string is: hello string <br>
                integer is: 200 <br>
                float is: 44.6 <br>
            </p>
        </div>
        <hr>

        <div>
            <h4>Exemplo: variable2.php</h4>
            
            <strong>< ? .php</strong>
            <p>
                // variáveis <br/>
                $x=5;  <br/>
                $y=6;  <br/>
                $z=$x+$y;  <br/>
                <br>
                // imprime <br/>
                echo $z; <br/>

            <br><strong> ?> </strong> <br>

                <br><mark>Saída: </mark> 11 <br>
            
                <p>Variável PHP: diferencia maiúsculas de minúsculas. </p>
        </div>
        <hr>
        
        <div>
            <p>
                No PHP, os nomes das variáveis diferenciam maiúsculas de minúsculas. <br>
                Assim, o nome da variável "cor" é diferente de Cor, COR, COLor etc.
            </p>

            <h4>Exemplo: variable3.php</h4>

            <strong>< ? .php</strong>
            <p>
                // única variável declarada $color<br>
                $color = "vermelho"; // string <br>
                <br>
                // exibir break <br>
                echo "Meu carro é" . $color; <br>
                echo "Minha casa é" . $COLOR; // variável não declarada<br> 
                echo "Meu barco é" . $coLOR; // variável não declarada
            </p>

            <strong> ?> </strong>
            <p>
                <mark>Saída: </mark>
                        Meu carro é vermelho <br>
                        Notice: Undefined variable: COLOR in 
                        C:\wamp\www\variable.php on line 4 <br>
                        Minha casa é <br>
                        Notice: Undefined variable: coLOR in C:\wamp\www\variable.php on line 5 <br>
                        Meu barco é <br>
            </p>
            
        </div>
        <hr>

        <div>
            
            <h4>Variável PHP: Regras</h4>

            <p>
                As variáveis PHP devem começar apenas com letra ou sublinhado. <br>
                A variável PHP não pode ser iniciada com números e símbolos especiais.
            </p>

            <h4>Exemplo: variablevalid.php</h4>

            <strong>< ? .php</strong><br>
            <p>
                $a="hello";//letra (válido) <br>
                $_b="hello";//início usando sublinhado (válido) <br>
                <br>
                // imprime $a e $_b <br>
                echo "$a <br/> $_b";
            </p>
            <strong> ?> </strong> 
            
            <p>
                <mark>Saída: </mark>
                <br>
                hello <br> 
                hello <br>
            </p>
        </div>
        <hr/>
        
        <div>
            <h4>Exemplo: variableinvalid.php</h4>

            <strong>< ? .php</strong>
            <p>
                $4c="hello";//number (inválido) <br>
                $*d="hello";//símbolo especial (inválido) <br>
                
                echo "$4c <br/> $*d"; <br>
            <br><strong> ?>  </strong>

            <p>
                <mark>Saída: </mark><br>
                <br>
                Parse error: syntax error, unexpected '4' (T_LNUMBER), expecting variable (T_VARIABLE) <br>
                or '$' in C:\wamp\www\variableinvalid.php on line 2 <br>
                <br>
                PHP é uma linguagem vagamente tipada, isso significa que o PHP converte <br>
                automaticamente a variável para o seu tipo de dados correto. <br>
            </p>
        </div>
        <hr>

</body>
</html>