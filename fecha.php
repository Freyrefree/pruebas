<?php
date_default_timezone_set('America/Mexico_City');

$fechaUltimoPago = '2018-10-20';

$hoy = date('Y-m-d');
$hoy ='2018-11-26';




// echo $hoy;


$time = strtotime($fechaUltimoPago);
$proximoMes = date("Y-m-d", strtotime("+1 month", $time));

## 5 días después del proximo mes ##
$timeday = strtotime($proximoMes);
$fechaLimite = date("Y-m-d", strtotime("+6 day", $timeday));
//  echo $proximoMes;

if($hoy == $proximoMes){

    echo "su servicio está por expirar";

}else if($hoy == $fechaLimite){

    echo "Lo sentimos, su servicio ha expirado";

}

//echo $fechaLimite;


?>