<?php
$sexo=$_GET["SEXO"];
switch($sexo){
    case "M":
        echo"Homem";
        break;
    case "F":
        echo "mulher";
        break;
    default;
    echo "Sexo inválido";
} ?>