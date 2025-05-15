<?php
$valorDolar=40 ;
$valorEuro=43 ;
$valorReal=8 ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$CantidadDePesos= floatval($_POST["pesos"]);
$moneda =$_POST["moneda"];





switch($moneda){
    case "dolares":
        $CantidadEnDolares=$CantidadDePesos/$valorDolar ;
        echo "$CantidadEnDolares dolares";
        break;
    case "euros":
        $CantidadEnEuros=$CantidadDePesos/$valorEuro ;
        echo "$CantidadEnEuros euros";
        break;
    case "reales":
        $CantidadEnReales=$CantidadDePesos/$valorReal ;
        echo "$CantidadEnReales reales";
        break;
    default:
        echo "Operacion no valida";
        break;
}
}else{
    echo"no se establecio la conexion";
}


?>