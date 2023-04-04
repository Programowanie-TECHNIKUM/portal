<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel = "stylesheet" href = "logowaniestyle.css">
</head>
<body>
    <div class="test">
<div id = "login">
    <h1>Logowanie</h1>
    <form action = "loguj.php" method = "post">
        <input type = "text" placeholder="Wpisz swoj nick" name = "login">
        <br>
        <input type = "password" placeholder="Wpisz swoje haslo" name = "haslo">
        <?php
            if(isset($blad)) {
                echo $blad;
            }
        ?>
        <br>
        <br>
        <input type = "submit" value = "wyslij">
        <br>
        <input type = "reset" value = "wyczysc">
        <br>
        <br>
    </form>
    <a href = "rejestr.php">Nie mam jeszcze konta</a>
</div>
</div>
</body>
</html>



<?php
    if(isset($_POST['login'])) {
        if(isset($_POST['haslo'])) {
            require_once "db_connect.php";
            $c = mysqli_connect($host, $user, $password, $db);
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];

            $res = mysqli_query($c, "select * from gracze where Nick ='$login' and Pass = '$haslo'");
                if(mysqli_num_rows($res) <> 0) {
                    header('location:gra.php');
                } else {
                    $blad = 'Bledny login lub haslo';

                }
        }
    }
?>