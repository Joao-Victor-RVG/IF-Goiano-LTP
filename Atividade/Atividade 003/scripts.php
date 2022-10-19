<html>
    <body>
        <?php
        $altura = $_POST ["altura"];
        $peso = $_POST ["peso"];
        $imc = $peso / ($altura * $altura);
        if ($imc < 18.5) {
            echo "Você está a baixo do peso";
        }
        elseif($imc >= 18.6 && $imc <= 24.9){
            echo "Você esta no peso ideal";
        }
        else {
            echo "Você esta a cima do peso!";
        }
        ?> 
    </body>
    
</html>