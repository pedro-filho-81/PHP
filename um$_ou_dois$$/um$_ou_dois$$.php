<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Um $ ou dois $$ PHP</title>
</head>
<body>
   <h1>Um $ ou dois $$ no PHP</h1>
   <hr>
   
   <p>
      Um $ antes do nome da variável: $variavel, é uma variável normal que armazena qualquer valor como string, inteiro, float, etc.
   </p>
   <p>
      Dois $$ antes do nome da variável: $$variável, é uma variável de referência que armazena o valor da $variável dentro dele.
   </p>
   <hr>

   <h4>Exemplo 1: $ e $$</h4>
   <?php
      // variáveis
      // $x recebe a string asdf
      $x = "asdf";
      
      // $$x é a variável de referência de $x 
      // que recebe um inteiro 200
      $$x = 200;

      // exibir
      echo '$x = "asdf";<br>';
      echo '$$x = 200 <br><br>';
      echo "valor de $ x é $x <br>"; // imprime o valor de $x
      echo "valor de $$ x é " . $$x . "<br>"; // imprime o valor de $x e não 200
      echo "asdf"; // imprime a string
   ?>
   <hr>

   <h4>Exemplo 2</h4>

   <?php
      $x = "U P";
      $$x = "LUCKNOW";

      echo "// cria variáveis <br>";
      echo '$x = "U P";<br>';
      echo '$$x = "LUCKNOW";<br/>';

      echo "<br>//Imprime resultado <br>";
      echo "\$x = $x <br/>";
      echo "\$\$x = " . $$x . "<br>";
      echo "A Capital da $x é " . $$x . "<br>";
   ?>
   <hr>

   <h4>Exemplo 3</h4>

   <?php  
      // variáveis
      $name="Gato";  
      ${$name}="Cachorro";  
      ${${$name}}="Macaco";  

      // imprime resultado
      echo '$name="Gato";<br>';  
      echo '${$name}="Cachorro";<br>';
      echo '${${$name}}="Macaco";<br>';

      echo '$name="Gato";' . $name . "<br>";  
      echo '${$name} = ' . ${$name} . "<br>"; 
       
      echo "$Cat" . "<br>";
      echo '"$Cat" Erro: variável não declarada' . "<br>"; 
      echo '${${$name}} = ' . ${${$name}} . "<br>";  
      echo $Dog . "<br>";  
      echo '"$Dog" Erro: variável não declarada; <br>;';
   ?>
   <hr>

</body>
</html>