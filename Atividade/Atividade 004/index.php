<?php
$cookie_name = "from";
$cookie_value = "luludia fofa";
setcookie($cookie_name, $cookie_value, time() + (864500* 50), "/");
?>
<html>
    <body>
        <h1>Digite a baixo os valores desejados:</h1><br>
        <form action="scripts.php" method="post">

        Valor A <input type="text" name="k"><br>
        <br>
        Valor B <input type="text" name="u"><br>
        <br>
        Valor C <input type="text" name="w"><br>
        <br>
         <input type="submit" name="Enviar">

        </form>
    </body>
</html>