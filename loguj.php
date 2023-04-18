

<?php


    if(isset($_POST['login'])) {
        if(isset($_POST['haslo'])) {
            session_start();

            require_once "db_connect.php";
            $c = mysqli_connect($host, $user, $password, $db);
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            $login = htmlentities($login, ENT_QUOTES,"UTF-8"); // anty sql-injection
            $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8"); // anty sql-injection

            $res = mysqli_query($c, "select * from gracze where Nick ='$login' and Pass = '$haslo'");
                if(mysqli_num_rows($res) <> 0) {
                    $result = mysqli_fetch_array($res);
                    $_SESSION['kasiora'] = $result[4];
                    header('location:gra.php');
                } else {
                    $blad = '<span style = "color:red;font-size: 20px">! Bledny login lub haslo ! </span>';

                }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel = "stylesheet" href = "logowaniestyle.css">
</head>
<body>
    <div class="test">
<div id = "login">
    <h1>Logowanie</h1>
    <form method = "POST">
        <input type = "text" placeholder="Wpisz swoj nick" name = "login" class = "logininput">
        <br>
        <br>
        <input type = "password" placeholder="Wpisz swoje haslo" name = "haslo" class = "logininput">
        <br>
        <br>
        <?php
            if(isset($blad)) {
                echo $blad;
            }
        ?>
        <br>
        <br>
        <input type = "submit" value = "wyslij" class = "loginbutton">
        <br>
        <br>
        <input type = "reset" value = "wyczysc" class = "loginbutton">
        <br>
        <br>
    </form>
    <a href = "rejestr.php">Nie mam jeszcze konta</a>
</div>
</div>
</body>
</html>