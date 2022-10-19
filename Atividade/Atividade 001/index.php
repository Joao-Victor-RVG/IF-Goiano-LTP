<html> 
    <body>
         IMC <br> <?php echo $_POST ['altura']; ?> <br> 
    <?php echo $_POST ['peso']; ?> <br>
<?php

$peso = $_POST ['peso'];
$altura = $_POST ['altura'];
$IMC = $peso / ($altura**2);
echo "Seu IMC é: " .$IMC. "<br>";

if ($IMC <= 18.5){
    echo "Voce está magro.";
}

if ($IMC >= 18.5){
    echo "Seu peso está normal.";
}

if ($IMC >= 25 && $IMC <= 29.9){ 
    echo "Você está acima do peso";
}

if ($IMC >= 30){
    echo "Voce está obeso.";
}

?> 
    </body>
</html>

<form action='imc.php' method='post'>
    Altura: <input type='text' name='altura'><br> 
    Peso: <input type='text' name='peso'><br> 
    <input type='submit'>
</form>



