<?php
   echo "<h1>Print_r do PHP</h1>";
   echo "<p>É uma função que imprime o conteúdo de uma variável de forma detalhada,<br>assim como a var_dump(), mas em um formato mais legível para o programador,<br>com os conteúdos alinhados e suprimindo os tipos de dados.</p>";

   echo "<pre>
   < ?php
      // cria vetor
      \$vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa');  
      
      // exibir com print_r
      print_r(\$vetor);
   ?>
      </pre>";

   // cria vetor
   $vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa');  
   // exibir com print_r
   print_r($vetor);
   echo "<br>";