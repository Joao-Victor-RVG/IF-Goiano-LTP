
<!DOCTYPE html>
<html>
<body>

<?php
$sexo = 'm';
$altura = '1.69';
$peso = '64';


if ($sexo == 'm') {
    if ($altura >= '1.76' && $altura <= '1.86' ) {
        if ($peso >= 74 && $peso <= '86') {
            echo 'Seu IMC esta dentro dos padroes';
        }elseif ($peso < '74') {
            echo 'Seu IMC esta a baixo dos padroes!';
        }else{
            echo 'Voce esta com o seu IMC a cima dos padroes';
        }
    }else{ 
        echo 'Eu não sei calcular o seu pedro de acordo com a sua altura';
        }



} elseif ($sexo == 'f') {

} else{
    echo 'Insira um sexo valido!';
}




?>

</body>
</html>




