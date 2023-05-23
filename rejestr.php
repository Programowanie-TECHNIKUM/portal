

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = "logowaniestyle.css" rel = "stylesheet">
</head>
<body>
<?php

    if(isset($_POST['login'])) {

        $dobrze = true;
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $data = $_POST['data'];
        $email = $_POST['email'];
        require_once('db_connect.php');
        $c = mysqli_connect($host, $user, $password, $db);

        if(strlen($login) < 3 || strlen($login) > 8) {
            $dobrze = false;
            $blad2 = 'Za dlugi lub za krotki nick';
            unset($blad2);
        }


        $nickquery = mysqli_query($c, "SELECT * FROM `gracze` WHERE nick like '$login'");

        if(mysqli_num_rows($nickquery) <> 0) {
            $dobrze = false;
            $blad2 = 'Taki nick jest w bazie danych';
            unset($blad2);
        }
    

        if(!ctype_alnum($login)) { // sprawdzanie znakow alfanumerycznych
            $dobrze = false;
            $blad2 = 'Login zawiera niewlasciwe znaki';
            unset($blad2);
            
        }

        if($pass <> $pass2) {
            $dobrze = false;
            $blad3 = 'rozne hasla';
            unset($blad3);
        }


        if($dobrze) {

            $hash = password_hash($pass2, PASSWORD_DEFAULT);


            $c = mysqli_connect('localhost', 'root', '', 'portal');
            $r = mysqli_query($c, "INSERT INTO `gracze`(`Nick`, `Pass`, `imie`, `nazwisko`, `email`, `dataur`) VALUES ('$login', '$hash', '$imie', '$nazwisko', '$email', '$data')");

            echo "rejestracja udana!";
        }




    }




?>
<div class="test">
<div id = "login">
    <form method="POST">
        <br>
        <h1>REJESTRACJA</h1>
        <input type = "text" placeholder="Wpisz swoje imie" name = "imie" class = "logininput">
        <br>
        <br>
        <input type = "text" placeholder="Wpisz swoje nazwisko" name = "nazwisko" class = "logininput">
        <br>
        <br>
        <input type = "text" placeholder="Wpisz swoj login" name = "login" class = "logininput">
        <br>
        <?php
            if(isset($blad2)) {
                echo '<p class = "blad">'.$blad2.'</p>';
                unset($blad2);
            }
        ?>
        <br>
        <input type = "password" placeholder="Wpisz swoje haslo" name = "pass" class = "logininput">
        <br>
        <br>
        <input type = "password" placeholder="Powtorz haslo" name = "pass2" class = "logininput">
        <br>
        <?php
            if(isset($blad3)) {
                echo '<p class = "blad">'.$blad3.'</p>';
                unset($blad3);
            }
        ?>
        <br>
        <p style = "font-size: 20px">Wpisz swoja date urodzenia</p>
        <input type = "date" placeholder="Twoja data urodzenia" name = "data" class = "logininput">
        <br>
        <br>
        <input type = "email" placeholder="Wpisz email" name = "email" class = "logininput">
        <br>
        <br>
        <input type = "submit" value = "wyslij" class = "loginbutton">
    </form>
</div>
</div>
    
</body>
</html>
