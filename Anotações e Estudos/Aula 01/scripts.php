<html>
<body>


<?php

$valor1 = $_POST["number1"];
$valor2 = $_POST["number2"];
$valor3 = $_POST["number3"];

$delta = (($valor2 * $valor2) - (4 * $valor1) * $valor3);

$x1 = ((-$valor2) + sqrt($delta)) / (2 * $valor1);
$x2 = ((-$valor2) - sqrt($delta)) / (2 * $valor1);

if( $delta < 0) {
    echo "Não existe raízes reais.";
}
else {
    $x1 = (- $valor2 + sqrt($delta)) / 2*$valor1;
    
    $x2 = (- $valor2 - sqrt($delta)) / 2*$valor1;

    echo "As raízes são $x1 e $x2";
}
?>
    
</body>
</html>
