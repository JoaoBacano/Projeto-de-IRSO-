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
    <h1>Lab02 - Histórico da Temperatura</h1>
    <h3>Estado (Data de Atualização)</h3>
    <p> <?php 
    $log_temperatura= file_get_contents("files/".$nomeSensor."/log.txt");
    $log_temperatura_array = explode("\n", $log_temperatura);
    foreach($log_temperatura_array as $log_temperatura_item) {
        echo $log_temperatura_item.'<br/>';
    }  ?> </p>

    <a href="index.html">Página Inicial</a>
</body>
</html>