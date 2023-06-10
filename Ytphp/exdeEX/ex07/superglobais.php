<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <pre>
        <?php 
            setcookie("dia-da-semana", "SEGUNDA", time()+3600);

            session_start();
            $_SESSION['teste']='Funcionou';

            echo "<h1>Superglobal GET</h1>";
            var_dump($_GET);

            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST);

            echo "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);

            echo "<h1>Superglobal Cookie</h1>";
            var_dump($_COOKIE);

            echo "<h1>Superglobal Session</h1>";
            var_dump($_SESSION);

            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV);

            echo "<h1>Superglobal SErver</h1>";
            var_dump($_SERVER);

            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS);

            
            ?>

        </pre>
    </main>
</body>

</html>