<?php  $SensorTemperatura = file_get_contents("files/temperatura/nome.txt"); 
        $SensorHumidade = file_get_contents("files/humidade/nome.txt");
        $SensorVento = file_get_contents("files/vento/nome.txt");
        $SensorLuz = file_get_contents("files/luz/nome.txt");
        $SensorFumo = file_get_contents("files/fumo/nome.txt");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-warning">Apicultura</span>Inteligente</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">HomePage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sensores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Atuadores.php">Atuadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="historico.php">Historico</a>
                    </li>

                </ul>
            </div>
        </div>
</nav>
<div class="container top">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="../images/temperatura.png" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <h5 class="card-title">Temperatura</h5>
        <p class="card-text">A temperatura está a <?php echo $valor_temperatura = file_get_contents("files/".$SensorTemperatura."/valor.txt");?>ºC</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Ultima Atualização <?php echo $hora_temperatura= file_get_contents("files/".$SensorTemperatura."/hora.txt"); ?> <a href="historico.php">Historico</a></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../images/humidade.png" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <h5 class="card-title">Humidade</h5>
        <p class="card-text">A Humidade está a <?php echo $valor_humidade = file_get_contents("files/".$SensorHumidade."/valor.txt");?>%.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Ultima Atualização <?php echo $hora_humidade= file_get_contents("files/".$SensorHumidade."/hora.txt"); ?><a href="historico.php">Historico</a></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../images/vento.png" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <h5 class="card-title">Vento</h5>
        <p class="card-text">O Vento está a <?php echo $valor_vento = file_get_contents("files/".$SensorVento."/valor.txt");?>m/s.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Ultima Atualização <?php echo $hora_vento= file_get_contents("files/".$SensorVento."/hora.txt"); ?><a href="historico.php">Historico</a></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../images/luz.png" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <h5 class="card-title">Luz</h5>
        <p class="card-text">A Luz está <?php echo $valor_luz = file_get_contents("files/".$SensorLuz."/valor.txt");?>.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Ultima Atualização <?php echo $hora_luz= file_get_contents("files/".$SensorLuz."/hora.txt"); ?><a href="historico.php">Historico</a></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="../images/fumo.png" class="card-img-top img-card" alt="...">
      <div class="card-body">
        <h5 class="card-title">Fumo</h5>
        <p class="card-text">O Fumo está a <?php echo $valor_fumo = file_get_contents("files/".$SensorFumo."/valor.txt");?>%.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Ultima Atualização <?php echo $hora_luz= file_get_contents("files/".$SensorFumo."/hora.txt"); ?><a href="historico.php">Historico</a></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <?php echo "<img src='../images/webcam.jpg?id=".time()."' style='width:100%'>";?>
      <div class="card-body">
        <h5 class="card-title">Webcam</h5>
        <p class="card-text">Fotografia</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Ultima Atualização <?php echo data("Y/m/d H:i:s.",filemtime('ima/webcam.jpg'));?></small>
      </div>
    </div>
  </div>
</div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>