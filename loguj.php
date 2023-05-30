

<?php

    session_start();


    if(isset($_SESSION['auth']) && $_SESSION['unauth'] != true) {
        unset($_SESSION['unauth']);
        if($_SESSION['auth'] == true) {
            header('location:gra.php');
        }
    }
    


    if(isset($_POST['login'])) {
        if(isset($_POST['haslo'])) {

            require_once "db_connect.php";
            $c = mysqli_connect($host, $user, $password, $db);
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            $login = htmlentities($login, ENT_QUOTES,"UTF-8"); // anty sql-injection
            $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8"); // anty sql-injection
            $res = mysqli_query($c, "select * from gracze where Nick ='$login'");

                if(mysqli_num_rows($res) <> 0) {
                    $result = mysqli_fetch_array($res);
                    print_r($result);
                    if(password_verify($haslo, $result[2])) {
                        $_SESSION['kasiora'] = $result[4];
                        $_SESSION['osoba'] = $result[1];
                        header('location:gra.php');
                    } else {
                        $blad = '<span style = "color:red;font-size: 20px">! Bledny login lub haslo ! </span>';
                    }

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
        <?php
            if(isset($_SESSION['udanerejestr'])) {
                echo "<p>Pomyslnie sie zarejestrowales!</p>";
                unset($_SESSION['udanerejestr']);
            }
        ?>
        <?php
            if(isset($_SESSION['unauth'])) {
                echo "<p>Sesja wygasla!</p>";
                unset($_SESSION['unauth']);
            }
        ?>
        <input type = "text" placeholder="Wpisz swoj nick" name = "login" class = "logininput">
        <br>
        <br>
        <input type = "password" placeholder="Wpisz swoje haslo" name = "haslo" class = "logininput">
        <br>
        <br>
        <?php
            if(isset($blad)) {
                echo $blad;
                unset($blad);
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