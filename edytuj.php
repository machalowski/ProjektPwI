<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epidemia Sars-Cov2</title>
    <link rel="stylesheet" href="edytuj.css">
    <link rel="icon" href="/IMG/favicon3.PNG">
</head>
<body>
    
    <nav>
    <ul>
        <li><a href="index.php">Strona główna</a></li>
        <li><a class="menu active" href="aktualnoscizalogowanie.php">Aktualności</a></li>
        <li><a href="Owirusie.php">O wirusie</a></li>
        <li><a href="Sytuacja.php">Sytuacja w kraju</a></li>
        <li> <?php

        if(!isset($_SESSION['zalogowany']))
        {
             echo '<a href="logowanie.html">Logowanie</a>';
        }
        else
        {
             echo '<a href="Wyloguj.php">Wyloguj się '.$_SESSION['login'].'</a>';
        } 
?></li>
      </ul> 
    </nav>
<main>
    <?php
        try
    {
        $connect = new PDO('mysql:host=localhost;dbname=projekt', 'root', '');
    }
    catch (PDOException $e)
    {
        echo $e -> getMessage() . "<br/>";
        echo "blad polaczenia bezy danych";
        die();
    }
    $sql = 'SELECT tytul, post_id FROM posty ORDER BY post_id DESC';

    foreach ($connect -> query($sql) as $rows) {

        echo '<div class="contener">';
              echo '<div class="artykul">';
                    echo '<div class="tresc">';
                       echo '<h1 class="trh1">'.$rows['tytul'].'</h1>';
                       echo '<a class="czytaj" href="edytujformularz.php?id=' . $rows['post_id'] . '">'."edytuj".'</a>'; 
                       echo '<a class="czytaj" href="usun.php?id=' . $rows['post_id'] . '">'."usuń".'</a>'; 
                    echo '</div>';
               echo '</div>';
        echo '</div>'; 
         }  
         ?>
    </main>

    <footer>Kontakt</footer>


</body>
</html>