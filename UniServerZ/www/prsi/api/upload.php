<?php
header('Content-Type: text/html; charset=utf-8');

function save-file($sourcefile){
    if (move_uploaded_file($sourcefile, "img/webcam.jpg")) {
        echo("Foi realizado com sucesso o upload do ficheiro");
    } else {
        echo("Erro a fazer o upload do ficheiro");
    }
    
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo("POST\n");
    if (isset($_FILES['imagem'])) {
        //print_r($_FILES['imagem']);
        echo("<br>"."Nome da imagem a fazer upload: ".$_FILES['imagem'][name]);
        echo("<br>"."Tamanho da imagem: ".$_FILES['imagem'][size]);
        echo("<br>"."Tipo/pasta temporaria: ".$_FILES['imagem'][tmp_name]);
        save_file($_FILES['imagem'][tmp_name]);
    }else{
        echo('Erro não existe elemento imagem');
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