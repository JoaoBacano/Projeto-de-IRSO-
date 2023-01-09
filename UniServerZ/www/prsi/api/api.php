<?php
header('Content-Type: text/html; charset=utf-8');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST["valor"]) && isset($_POST["hora"]) && isset($_POST["nome"])){
        echo "qualquwr";
        file_put_contents("../files/".$_POST["nome"]."/valor.txt", $_POST["valor"]);
        file_put_contents("../files/".$_POST["nome"]."/hora.txt", $_POST["hora"]);
        file_put_contents("../files/".$_POST["nome"]."/log.txt", $_POST["hora"].";".$_POST["valor"]. PHP_EOL, FILE_APPEND);
    }else{
        echo "wdqdqwd";
    }
    
    
}else if($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET["nome"]) && $_GET["nome"]=="temperatura"){
        echo file_get_contents("../files/".$_GET["nome"]."/valor.txt");
    }
}else{
    echo "Sensor invalido!";
    if(($_GET['nome'] != "temperatura") && ($_GET['nome'] != "humidade")){
        http_response_code(404);
        //echo "Método não permitido";
    }
}


?>