<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
$_SESSION['cpf'] = $_POST['cpf'];
$_SESSION['name'] = $_POST['fname'];
$_SESSION['adress'] = $_POST['endereco'];
$_SESSION['phone'] = $_POST['number'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['cep'] = $_POST['cep'];
$_SESSION['room'] = $_POST['room'];
$_SESSION['checkin'] = $_POST['checkin'];
$_SESSION['checkout'] = $_POST['checkout'];

setcookie("cpf", $_POST['cpf'], time() + (3+ 24+3600), "/");
setcookie("name", $_POST['fname'], time() + (3+ 24+3600), "/");
setcookie("adress", $_POST['endereco'], time() + (3+ 24+3600), "/");
setcookie("phone", $_POST['number'], time() + (3+ 24+3600), "/");
setcookie("city", $_POST['city'], time() + (3+ 24+3600), "/");
setcookie("cep", $_POST['cep'], time() + (3+ 24+3600), "/");
if ($_POST['cpf'] == "" || $_POST['fname'] == "" || $_POST['endereco'] == "" || $_POST['number'] == "" || $_POST['city'] == "" || $_POST['room'] == "" || $_POST['checkin'] == "" || $_POST['cep'] == "" || $_POST['checkout'] == "" ){
    print("<h1>Dados incorreto</h1><br>");
    echo "<a href='index.php'>chek-in</a>";
}
else {
    header('Location: http://localhost/Site/check.php');
}

?>

</html>