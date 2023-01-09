<?php  $nomeSensor = file_get_contents("files/temperatura/nome.txt"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <title>Document</title>
</head>
<body>
    <h1>Lab02 - Controlo de Temperatura</h1>
    <h3>Temperatura Atual:</h3>
    <p> <?php echo $valor_temperatura = file_get_contents("files/".$nomeSensor."/valor.txt");?> </p>
    <h3>Data atualização da Temperatura:</h3>
    <p> <?php echo $hora_temperatura= file_get_contents("files/".$nomeSensor."/hora.txt"); ?> </p>
    <h3>Estado do LED</h3>
    <?php  
    $valor_led = file_get_contents("files/led/valor.txt");
    if($valor_led == 1 ){
        echo'<img src="/images/led-on.png" alt="">';
    }
    else
    echo '<img src="/images/led-off.png" alt="">';

    ?>
    
    <h3>Data atualização do LED:</h3>

    <a href="index.html">Página Inicial</a>
</body>
</html>