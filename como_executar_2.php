<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como Executar Código PHP</title>
</head>
<body>
    <h1>Como Executar Código PHP</h1>
    <hr>
    
    <p>
        Para fazer isso, crie um arquivo e escreva entre as tag HTml
        <br> mais código PHP e salve o arquivo com a extensão.
        <mark>( nome_do_arquivo.php )</mark>
    </p>

    <!--
        início do bloco de código PHP
        aqui se demonstra que as Tags Html podem e
        devem ser usadas nas instruções PHP/Html
    -->
    <?php
        echo "<h2>Uma programa PHP</h2>";

        /*
            a tag <br> é do Html e serve para pular uma linha
            a tag <strong> serve para destacar o que está entre elas
            <strong> => início da tag
                coloca em negrito o que estiver aqui dentro
            </strong> => final da tag
        */ 
        echo "<pre><code>
        início bloco PHP < ?php
        
        echo \"Este é um texto que vai aparecer na tela.\";
        
        fim do bloco PHP ?>
        
        A instrução <strong>echo</strong> entre as tags envia
        o <strong>\"texto\"</strong> entre aspas para ser exibido na tela.
        Toda instrução PHP termina com ponto-e-vírgula <strong>( ; )</strong>.
            </code></pre>";
        
        echo "<hr>";
    ?>

    <!-- final do bloco de código PHP -->

    <h2>Sensibilidade entre maiúsculas e minúscula.</h2>
    <p>
        Em PHP, palavra-chave (por exemplo, echo, if, else, while), <br>
        functions, funções definidas pelo usuário, classes não diferenciam maiúsculas de minúsculas.
    </p>

    <h3>Exemplo palavra-chave</h3>
    <p>No exemplo abaixo, você pode ver que todas 
        as três instruções de echo são iguais e válidas:
    </p>

    <pre>
    <code>
    < ?php
        echo "Olá mundo usando echo";
        ECHO "Olá mundo que utiliza o ECHO";
        EcHo "Olá mundo usando EcHo";
    ?>
    <mark>saída:</mark>
    Olá mundo usando echo
    Olá mundo que utiliza o ECHO
    Olá mundo usando EcHo
    
    Vai exibir na tela o texto entre as aspas sem erros.
    <hr/>
    </code>
    </pre>

    <h3>Exemplo variáveis</h3>
    <p>
        No entanto, todos os nomes de variáveis diferenciam maiúsculas de minúsculas
    </p>
    
    <p>
        Veja o exemplo abaixo de que os nomes das variáveis diferenciam maiúsculas de minúsculas.
    </p>
    
    <p>
        Você pode ver no exemplo abaixo de que somente a segunda instrução 
        exibirá o valor da variável <strong>$color</strong><br>
        Porque trata <mark>$color, $ColoR e $COLOR</mark> como três variáveis diferentes:
    </p>

    <pre>
    <code>
    < ?php
        // declara variável $color
        $color = "preto";

        // exibe resultado
        echo "Meu carro é " . $ColoR."; 
        echo "Meu cachorro é " . $color.";
        echo "Meu telefone é " . $COLOR.";     
    ?>
    <mark>saída:</mark>
    Meu cachorro é preto

    Somente a variável <strong>$color</strong> imprimiu seu valor, e as outras variáveis
    <mark>$ColoR e $COLOR</mark> são declaradas como variáveis indefinidas.
    <hr/>
    </code>
    </pre>
    
</body>
</html> 