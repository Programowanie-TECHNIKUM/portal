<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <br>
    <br>
    <center><div id = "header">
        <h1>TESTOWA STRONA!</h1>
        <nav>
            <ul>
                <li><a href="#">Strona główna</a></li>
                <li><a href="#">O nas</a></li>
                <li><a href="#">Kontakt</a></li>
                <li><a href = "./loguj.php">Logowanie</a></li> 
            </ul>
        </nav>
    </div></center>
    <br>
    <br>
    <div id = "content">
        <div id = "lewo">
            <center><img id = "obrazek" src = "https://th.bing.com/th/id/R.2fbc995a7ece2cbbf2fe9f56e7984482?rik=wPkqUf6Mxuo1gA&pid=ImgRaw&r=0"></center>
        </div>

        <div class = "prawo">
            <h1>Zasady gry</h1>
            <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque nunc, auctor eu suscipit a, tincidunt ut diam. Proin tincidunt eget tortor ac congue. Praesent a velit a diam ultricies elementum. Nulla accumsan ut dui id luctus. Nam ornare, erat euismod pulvinar tempor, enim purus ultricies nunc, ac venenatis lectus velit vitae tellus. Pellentesque vitae posuere massa. Nam et elit vitae libero lacinia blandit. Nulla volutpat turpis sit amet libero rhoncus pellentesque in sed lorem. Nam convallis eu velit in scelerisque. Donec maximus elit ac ultrices tristique.</P>
        </div>

        <div class = "prawo">
            <h1>Jak grac?</h1>
            <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque nunc, auctor eu suscipit a, tincidunt ut diam. Proin tincidunt eget tortor ac congue. Praesent a velit a diam ultricies elementum. Nulla accumsan ut dui id luctus. Nam ornare, erat euismod pulvinar tempor, enim purus ultricies nunc, ac venenatis lectus velit vitae tellus. Pellentesque vitae posuere massa. Nam et elit vitae libero lacinia blandit. Nulla volutpat turpis sit amet libero rhoncus pellentesque in sed lorem. Nam convallis eu velit in scelerisque. Donec maximus elit ac ultrices tristique.</P>
        </div>

        <div class = "prawo">
             <h1>Jak sie zarejestrowac?</h1>
             <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque nunc, auctor eu suscipit a, tincidunt ut diam. Proin tincidunt eget tortor ac congue. Praesent a velit a diam ultricies elementum. Nulla accumsan ut dui id luctus. Nam ornare, erat euismod pulvinar tempor, enim purus ultricies nunc, ac venenatis lectus velit vitae tellus. Pellentesque vitae posuere massa. Nam et elit vitae libero lacinia blandit. Nulla volutpat turpis sit amet libero rhoncus pellentesque in sed lorem. Nam convallis eu velit in scelerisque. Donec maximus elit ac ultrices tristique.</P>
             <br>
             <br>
             <a href = "loguj.php"><button>Zaloguj sie!</button></a>
        </div>
        
    </div>
</body>
</html>

<?php



?>