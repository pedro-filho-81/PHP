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
        echo "<p>Começa na tag <br><strong>< ?php</strong><br>
                <br>// ( barra barra ) - é um comentário de uma linha 
                <br>// e vai ser iginorado pelo interpretador<br></p>";

        echo "<br>echo \"seu programa deve ser colocado entre as Tags 
                início da tag < ?php (instruções ... Php); ?> fim da tag.\";<br>
                <br>e Termina na tag <br><strong> ?></strong></p>";        
        
        echo "<p>A instrução <strong> echo </strong> acima entre as tags envia 
                o texto entre aspas <strong> \"texto\" </strong>
                para ser exibido na tela:</p>";
        
        echo "<p>Toda instrução PHP termina com ponto-e-vírgula <strong>( ; )</strong>.</p>";
        echo "<hr>";

    ?>

    <!-- final do bloco de código PHP -->

    <h2>Sensibilidade entre maiúsculas e minúscula.</h2>
    <p>
        Em PHP, palavra-chave (por exemplo, echo, if, else, while), <br>
        functions, funções definidas pelo usuário, classes não diferenciam maiúsculas de minúsculas.
    </p>

    <div>
        <h3>Exemplo palavra-chave</h3>
        <p>No exemplo abaixo, você pode ver que todas 
            as três instruções de echo são iguais e válidas:
        </p>
        
        <p>
        < ?php <br>
            <br>echo "Olá mundo usando echo"; <br>
            ECHO "Olá mundo que utiliza o ECHO"; <br>
            EcHo "Olá mundo usando EcHo"; <br>
        <br>?> <br>

        <br><mark>saída:</mark>
        <br>Olá mundo usando echo <br>
        Olá mundo que utiliza o ECHO<br>
        Olá mundo usando EcHo <br>
        </p>
        
        <p>Vai exibir na tela o texto entre as aspas sem erros.</p>
    </div>

    <div>
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

        <p>
            <strong> < ?php</strong><br>
                
                <br> // declara variável $color
                <br>$color = "preto"; <br>

                <br>// exibir
                <br>echo "Meu carro é " . $ColoR."; </br>
                echo "Meu cachorro é " . $color."; </br>
                echo "Meu telefone é " . $COLOR."; </br>     
            <br></strong> ?> <br>
            
            <br><mark>saída:</mark>
            <br>Meu cachorro é preto <br>
        </p>
        
        <p>
            Somente a variável <strong>$color</strong> imprimiu seu valor, e as outras variáveis <br>
            <mark>$ColoR e $COLOR</mark> são declaradas como variáveis indefinidas <br>
            Ocorreu um erro na linha 82 e na linha 84.
        </p>
    </div>
    <hr>

</body>
</html>