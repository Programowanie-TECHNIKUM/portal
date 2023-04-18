<?php

?>

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
        <br>
        <input type = "password" placeholder="Wpisz swoje haslo" name = "pass" class = "logininput">
        <br>
        <br>
        <input type = "password" placeholder="Powtorz haslo" name = "pass2" class = "logininput">
        <br>
        <br>
        <p style = "font-size: 20px">Wpisz swoja date urodzenia</p>
        <input type = "date" placeholder="Twoja data urodzenia" name = "date" class = "logininput">
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
