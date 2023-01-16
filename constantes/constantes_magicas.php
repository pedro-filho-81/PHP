<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Constantes magicas PHP</title>
</head>
<body>
   <h1 align='center'>Constantes mágicas PHP</h1>
   <hr>
   <p>
      Constantes mágicas são as constantes predefinidas em PHP que são <br>alteradas com base em seu uso. Eles começam com sublinhado duplo (__) <br>e terminam com sublinhado duplo.
   </p>
   <P>
      Eles são semelhantes a outras constantes predefinidas, mas como eles <br> seus valores com o contexto, eles são chamados de constantes mágicas.
   </P>
   <p>
      Existem nove constantes mágicas no PHP. Em que oito constantes mágicas <br>começam e terminam com sublinhados duplos (__).
   </p>
   <hr>
   
   <?php   
      echo "<h3>Exemplo para __LINE__</h3>";
      echo "<p>Constante __LINE__ mostra o número da linha que está.</p>";
      // imprima seu número de linha atual, ou seja, 4   
      echo "<p>Você está no número da linha" . __LINE__ . "</p>";
      
      echo "<p>Todas as constantes são resolvidas em tempo de compilação <br> em vez de tempo de execução, ao contrário da constante regular. <br>
         As constantes mágicas não diferenciam maiúsculas de minúsculas.
      </p>";
   ?>
   <hr>

   <?php   
      echo "<h3>Exemplo para __FILE__</h3>";
      echo "<p>imprimir o caminho completo do arquivo com extensão .php</p>";
      echo __FILE__ . "<br><br>";
   ?>
   <hr>
   
   <h3>Constante __DIR__:</h3>
   <p>
      Ele retorna o caminho completo do diretório do arquivo executado.<br> O caminho retornado por esta constante mágica é equivalente a dirname <br>(__FILE__). Essa constante mágica não tem uma barra à direita, a menos que seja um diretório raiz.
   </p>

   <?php   
      echo "<h4>Exemplo para __DIR__</h4>";
      echo "<p>imprimir o caminho completo do diretório onde o script será colocado" . __DIR__ . "</p>";
      echo "<p>Abaixo da saída será equivalente a acima de um.</p>";
      echo dirname(__FILE__) . "<br><br>";
   ?>
   <hr>
   
   <h3>Constante __FUNCTION__</h3>
   <P>
      Essa constante mágica retorna o nome da função, onde essa constante é usada. <br> Ele retornará em branco se for usado fora de qualquer função.
   </P>

   <?php   
      echo "<h4>Exemplo para __FUNCTION__</h4>";
      echo "<p>Usando a constante mágica dentro da função.</p>";
      
      function test() {    
         echo "<p>imprimir o nome da função, ou seja; teste.</p>";
         echo '<p>O nome da função é '. __FUNCTION__ . "<br></p>";
      }    
       
      test();
            
      echo "A constante mágica usada fora da função dá a saída em branco.";

      function test_function(){
         echo '<br>Hie';
      }

      test_function();    
      echo " dar a saída em branco. ";
      echo __FUNCTION__ . "<br><br>";
   ?>  
   

</body>
</html>