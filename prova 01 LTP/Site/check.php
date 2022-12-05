<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
    <section class="content">
        <div>
            <h1>Dados</h1><br>
            <?php
            session_start();

            echo("<br><h1>Nome Completo:</h1><br>". $_SESSION['name']);
            echo("<br><h1>Room:</h1><br>". $_SESSION['room']);
            echo("<br><h1>Check-in:</h1><br>". $_SESSION['checkin'] );
            echo("<br><h1>Check-out:</h1><br>". $_SESSION['checkout'] );

            ?>
        </div>
    </section>

</body>
</html>