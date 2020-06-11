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
        <div class="contener">
           <div class="dane">
            <form action="dodawanie.php" method="POST">
                    <label for="tytul">Tytuł:</label><br>
                    <input type="text" id="tytul" name="tytul"><br>
                    

                    <label for="skrot">Krótki opis postu:</label><br>
                    <textarea type="skrot" id="skrot" name="skrot"></textarea><br>


                    <label for="tresc">Treść:</label><br>
                    <textarea type="test" id="tresc" name="tresc"></textarea>

            
            <div class="przyciski">
                <input type="submit" value="Dodaj post">
            </div>
         </form>
            </div>

         </div>   
    </main>

    <footer>Kontakt</footer>


</body>
</html>