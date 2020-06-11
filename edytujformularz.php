<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epidemia Sars-Cov2</title>
    <link rel="stylesheet" href="dodaj.css">
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
    echo '<div class="contener">';
    
    
    $sql = 'SELECT tytul, tekst, streszczenie FROM posty where post_id = '.$_GET['id'];

    foreach ($connect -> query($sql) as $rows) {
 
    echo '<form action="edydujzastosuj.php?id=' .$_GET['id'] . '" method="POST" style="text-align: center" >';
            echo '<label for="tytul">'."Tytuł:".'</label><br>';
            echo '<textarea style="height: 13px; width:800px" type="tytul" id="tytul" name="tytul">'.$rows['tytul'].'</textarea><br>';
            
            echo '<label for="tresc">'."Treść:".'</label><br>';
            echo '<textarea style="width:800px" type="tresc" id="tresc" name="tresc">'.$rows['tekst'].'</textarea><br>';
            
            echo '<label for="tresc2">'."Opis:".'</label><br>';
            echo '<textarea style="width:800px" type="tresc2" id="tresc2" name="tresc2">'.$rows['streszczenie'].'</textarea><br>';
            
            echo '<div class="przyciski">';
                echo '<input type="submit" value="Zapisz edycje">';
            echo '</div>';

    echo '</form>';
}

echo '</div>';
?>
    </main>

    <footer>Kontakt</footer>


</body>
</html>