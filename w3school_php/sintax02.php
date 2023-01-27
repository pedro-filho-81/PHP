<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sintax do PHP</title>
   <style>
        body {
            background-color: blue ;
            color: white;
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
        }
    </style>
</head>
<body>
   <h1>Sintaxe do PHP</h1>

   <p>Um script PHP é executado no servidor e o resultado HTML simples é enviado de volta ao navegador.</p>

   <h2>Sintaxe básica do PHP</h2>
   
   <p>Um script PHP pode ser colocado em qualquer lugar do documento.</p>

   <p>Um script PHP começa <mark>&lt;?php</mark> e termina com <mark>?></mark></p>
   <pre>
      <mark>&lt;?php</mark>
         // o código PHP coloque aqui
      <mark>?></mark>
   </pre>

   <p>A extensão de arquivo padrão para arquivos PHP é "<mark>.php</mark>".</p>

   <p>Um arquivo PHP normalmente contém tags HTML e algum código de script PHP.</p>

   <p>Abaixo, temos um exemplo de um arquivo PHP simples, com um script PHP que <br> usa uma função PHP embutida "<mark>echo</mark>" para gerar o texto "<mark>Hello World!</mark>" em uma página da web:</p>
   <pre>
   Exemplo
      <mark>&lt;?php</mark>
         echo "<mark>Hello World!</mark>";
      <mark>?>
   </pre>

   <p>Observação: as instruções do PHP terminam com um ponto e vírgula (<mark> ; </mark>).</p>
   <hr>

   <h2>Sensibilidade entre maiúsculas e minúsculas do PHP</h2>

   <p>Em PHP, palavras-chave (por exemplo <mark>if, else, while, echo,</mark> etc.), <br> classes, funções e funções definidas pelo usuário <br> não diferenciam maiúsculas de minúsculas.</p>

   <p>No exemplo abaixo, todas as três declarações de eco abaixo são iguais e válidas:</p>
   <pre>
   Exemplo
      <mark>&lt;?php</mark>
         ECHO "<mark>Hello World!</mark>";
         echo "<mark>Hello World!</mark>";
         EcHo "<mark>Hello World!</mark>";
      <mark>?></mark>
   </pre>

   <p><strong>Nota</strong>: No entanto; todos os nomes de variáveis diferenciam maiúsculas de minúsculas!</p>

   <p>Veja o exemplo abaixo; apenas a primeira instrução exibirá o valor da <br> variável $color Isso ocorre porque <mark>$color, $COLORe $coLORsão</mark> <br> tratados como três variáveis diferentes:</p>
   <pre>
   Exemplo
      <mark>&lt;?php</mark>
         $color = "<mark>vermelho</mark>";
         echo "Meu carro é " . $color;
         echo "Minha casa é " . $COLOR;
         echo "My boat is " . $coLOR;
      <mark>?></mark>
   </pre>
   <hr>

</body>
</html>