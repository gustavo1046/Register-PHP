<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="imprime.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h1>Lista de Heróis</h1>
    </header>
    <main>
        <fieldset>
            <?php
                session_start();
                for($i = 0; $i<10; $i++){
                if ($_SESSION['personagens'][$i] == null){
                    break;
                }

                 echo "Herói ". ($i+1);
                 echo "<br>Nome: " . $_SESSION['personagens'][$i][0];
                 echo "<br>Tipo: " . $_SESSION['personagens'][$i][1];
                 echo "<br>hp: " . $_SESSION['personagens'][$i][2] . "<br><br>";
            }
            ?>
        </fieldset>
    </main>
</body>
</html>

