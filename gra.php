

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="wyloguj.php">
        <button>Wyloguj!</button>
    </form>
</body>

</body>
</html>

<?php
    session_start();

    
    if(!isset($_SESSION['osoba'])) {
        unset($_SESSION['auth']);
        $_SESSION['unauth'] = true;
        header('location: loguj.php');
    }

    $_SESSION['auth'] = true;

    echo $_SESSION['osoba'] .' ma '.$_SESSION['kasiora'].' pieniedzy';  

?>