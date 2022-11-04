<html>
    <body>
       <?php
        $a  = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        $delta = (($b * $b) - (4 * $a * $c));

        if ($delta < 0) {
            echo "Não existe Raiz de um valor real";
        }
        else {
             $r1 = (-$b + sqrt($delta)) / 2 * $a;

             $r2 = (-$b - sqrt($delta)) / 2 * $a;

            echo " As raizes são $r1 e $r2 ";

        }

        setcookie("Valores dos lados do triangulo", ",$a" , "$b" ,"$c"  , (time() + (3 + 24 + 3600)));

        setcookie("Valores correspondetes ao resultado da expresão","$r1" , "$r2" , "$delta"(time() + (3 + 24 * 3600)));





       ?>
    </body>
</html>
