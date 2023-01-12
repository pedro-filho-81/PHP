<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução a Linguage PHP</title>
</head>
<body>
    
    <h1 align= 'center'>Introdução a Linguage PHP</h1>
    <hr>
    
    <p>O código PHP é executado no servidor.</p> 

    <div>
        <h2>O que é PHP?</h2>
        
        <p>
            PHP é um acrônimo para "PHP: Hypertext Preprocessor" <br>
            É uma linguagem de script de código aberto amplamente utilizada <br>
            É uma linguagem interpretada, ou seja, não há necessidade de compilação. <br>
            É uma linguagem de script do lado do servidor, <br>
            que é usada para gerenciar o conteúdo dinâmico do site. <br>        
            Pode ser incorporado em HTML. <br>
            É orientada a objetos. <br>
            É simples e fácil de aprender. <br>
            É gratuito para baixar e usar <br>
        </p>
    
    </div>

    <div>
        <!-- Usando PHP dentro HTmL com html -->
        <?php echo "<h2>PHP é uma linguagem popular!</h2>"; ?>

        <p>
            É poderoso o suficiente para estar no centro do maior sistema de blogs na web (WordPress)! <br>
            É profundo o suficiente para executar grandes redes sociais! <br>
            Também é fácil o suficiente para ser o primeiro lado do servidor de um iniciante Idioma! <br>
        </p> 
    
    </div>

    <div>
        <h3>O que é um arquivo PHP?</h3>

        <p>
            Os arquivos PHP podem conter texto, HTML, CSS, JavaScript e código PHP <br>
            O código PHP é executado no servidor e o resultado é retornado ao navegadorcomo HTML simples <br>
            Arquivos PHP têm extensão ".php" <br>
        </p>
    
    </div>
        
    <div>
        <h3>O que o PHP pode fazer? </h3>
        
        <p>
            PHP pode gerar conteúdo de página dinâmica <br>
            PHP pode criar, abrir, ler, escrever, excluir e fechar arquivos no servidor <br>
            PHP pode coletar dados de formulário <br>
            PHP pode enviar e receber cookies <br>
            PHP pode adicionar, excluir, modificar dados em seu banco de dados <br>
            PHP pode ser usado para controlar o acesso do usuário <br>
            PHP pode criptografar dados <br>
        </p>
    
    </div>

    <div>
        <h3>Por que PHP?</h3>
        
        <p>
            PHP roda em várias plataformas (Windows, Linux, Unix, Mac OS X, etc.) <br>
            PHP é compatível com quase todos os servidores usados hoje (Apache, IIS, etc.) <br>
            PHP suporta uma ampla gama de bancos de dados <br>
            PHP é gratuito. Faça o download a partir do recurso oficial do PHP: www.php.net <br>
            PHP é fácil de aprender e é executado de forma eficiente no lado do servidor <br>
        </p>
    
    </div>
    
    <div>
        <h3>O que há de novo no PHP 7</h3>
        
        <p>
            PHP 7 é muito mais rápido do que a versão estável <br>
            popular anterior (PHP 5.6) <br>
            PHP 7 melhorou o Tratamento de Erros <br>
            PHP 7 suporta declarações de tipo mais rigorosas para argumentos de função <br>
        </p>
    
    </div>

    <!-- aqui estou na área Html -->
    <p>< p> Aqui estou na área Html:5 usando a tag< /p></p>
    
    <script>
        // aqui estou na área JavaScript
        document.write("Aqui estou na área JavaScript.")
        
    </script>
    
    <?php 
        echo "<script>console.log(\n\"dddddd Aqui eu no PHP\n\")</script>"; 
    ?>
    
    <?php
        // aqui estou na área Php
        // echo "console.log(\"Aqui estou na área PHP usando uma instrução javaScrpt.\") ";
        echo "<p>Aqui estou na área PHP, usando instrução PHP.</p>";
        echo "<script>console.log(\"aaaaaa, Aqui eu no PHP, dentro do PHP usando JavaScript\")</script>";
    ?>
    
</body>
</html>