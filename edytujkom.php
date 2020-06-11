<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epidemia Sars-Cov2</title>
    <link rel="stylesheet" href="aktualnosczalogowanie.css">
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

<div class="contener2">
        
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
    $sql = 'SELECT zawartosc FROM komentarze where komentarz_id = '.$_GET['id'];

    foreach ($connect -> query($sql) as $rows) {
        echo '<form action="komentarzedytuj.php?id=' .$_GET['id'] . '" method="POST">';
                    
           echo '<label for="skrot">Edytuj komentarz:</label><br>';
           echo '<textarea type="zawartosc" id="zawartosc" name="zawartosc">'.$rows['zawartosc'].'</textarea><br>';

                echo '<div class="przyciski">';
                    echo' <input type="submit" value="Zapisz">';
                echo '</div>';
         echo '</form>';
    }
    ?>

</div>



    </main>

    <footer>Kontakt</footer>


</body>
</html>