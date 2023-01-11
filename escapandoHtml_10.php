<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esapando do html</title>
</head>
<body>
    <h1 align='center'>Escapando do html</h1>
    <hr>

    <p>Isto é Html e vai ser ignorado pelo PHP.</p>

    <?php
        echo"Enquanto isso vai ser interpretado já que estou no PHP.";
    ?>
    
    <p>
        Isto também vai ser ignorado pelo PHP. <br>
        Pois, estou na tag < p> Texto < /p> do Html.
    </p>
</body>
</html>