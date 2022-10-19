<html>
    <body>
        <h1>Resultado:</h1>
        <?php
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        
        if( $delta < 0) {
            echo "Não existe raízes reais.";
        }
        else {
            $x1 = (- $b + sqrt($delta)) / 2*$a;
            
            $x2 = (- $b - sqrt($delta)) / 2*$a;

            echo "As raízes são $x1 e $x2";
        }


        ?> 
    </body>
</html>