<?php
   echo "<h1>Variaveis em PHP</h1>";

   echo "<p>Para criar uma variável em PHP, precisa-se atribuir-lhe um nome de identificação,<br>sempre precedido pelo caractere cifrão (\$).</p>";

   echo "<pre>
< ?php 
   // variáveis
   \$nome = 'João'; // nome recebe string
   \$sobrenome = 'da Silva'; // sobrenome recebe string

   // exibe sobrenome e nome
   echo '\$sobrenome, \$nome';
?>
Saída:
da Silva, João
   </pre>";
   
      // variáveis
      $nome = "João"; // nome recebe string
      $sobrenome = "da Silva"; // sobrenome recebe string

      // exibe valores
      echo "$sobrenome, $nome";
      echo "<hr>";

      echo "<h4>Algumas dicas:</h4>";

      echo "<p>• Nunca inicie o nome da variáveis com números. <br> • Nunca utilize espaços em branco no meio do identificador da variável. <br> • Nunca utilize caracteres especiais (\! \@ # % ^ & * / | [ ] { }) no nome das variáveis. <br>• Evite criar variáveis com mais de 15 caracteres em virtude da clareza do código-fonte.<br>• Nomes de variáveis devem ser significativos e transmitir a ideia de seu conteúdo <br>dentro do contexto no qual a variável está inserida.<br>• Use preferencialmente palavras em letras minúsculas separadas por “_” <br> ou somente as primeiras letras em maiúsculas quando da ocorrência de mais palavras.</p>";

   echo "<pre>
   < ?php 
      \$codigo_cliente // exemplo de variável 
      \$codigoCliente // exemplo de variável
   ?>
   </pre>";

      echo "<p>O PHP é case sensitive, ou seja, é sensível a letras maiúsculas e minúsculas exemplo: <br> <strong>\$valor, \$VALOR, \$_Valor, \$Valor</strong>; são diferentes.</p>";

      echo "<hr>";

      echo "<h4>Variáveis Variantes PHP</h4>";

      echo "<p>Sempre que utiliza-se dois sinais de cifrão (\$\$) precedendo o nome de uma variável, <br>o PHP irá referenciar uma variável representada pelo conteúdo da primeira.</p>";

   echo "<pre>
   < ?php 
      // define o nome da variável 
      \$variavel = 'nome'; // cria variável identificada pelo conteúdo de \$variavel 
      \$\$variavel = 'maria'; // exibe variável \$nome na tela 
      
      // exibe a variável \$nome
      echo \$nome; // resultado = maria
   ?>
   Saída:
   maria

   Neste exemplo, usa-se esse recurso quando declara-se a variável,
   \$nome (conteúdo de \$variavel) contendo 'maria'.
   </pre>";

   // demonstra variáveis da variáveis
   // define o nome da variável 
   $variavel = 'nome'; // cria variável identificada pelo conteúdo de $variavel 
   $$variavel = 'maria'; // exibe variável $nome na tela 
   
   // exebe a variável $nome
   echo $nome; // resultado = maria
   echo "<hr>";

   echo "<h4>Referência entre Variáveis</h4>";

   echo "<p>Para criar referência entre variáveis, ou seja, duas variáveis apontando para <br> a mesma região da memória, a atribuição deve ser precedida pelo <strong>operador &</strong>.</p>";

echo "<pre>
< ?php
   // variáveis 
   \$a = 5; // a recebe 5
   \$b = &\$a; // b recebe o endereço de a
   \$b = 10;  // b recebe o valor 10
   
   // exibe resultado
   echo \'a vale: \$a'; // resultado = 10 
   echo '&lt;br&gt;'; // nova linha 
   echo 'b vale: \$b'; // resultado = 10
?>
</pre>";

   // variáveis 
   $a = 5; // a recebe 5
   $b = &$a; // b recebe o endereço de a
   $b = 10;  // b recebp o valor 10

   // exibe resultado
   echo "a vale: $a"; // resultado = 10 
   echo '<br> '; // nova linha 
   echo "b vale: $b <br>"; // resultado = 10

   echo "<p>Assim, qualquer alteração em qualquer uma das variáveis reflete na outra.</p>";