<?php
$CantidadDePesos= floatval($_POST["pesos"]);
$valorDolar=40 ;
$CantidadEnDolares=$CantidadDePesos/$valorDolar ;
echo "Resultado de la conversion ";
echo "$CantidadDePesos pesos uruguayos equivalen a ". $CantidadEnDolares . " Dolares"


?>