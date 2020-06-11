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
    
    
    $sql = 'SELECT tytul, tekst FROM posty where post_id = '.$_GET['id'];
    $_SESSION['idpost'] = $_GET['id'] ;
    echo '<div class="contener">';
        echo '<div class="artykul2">';
    
        foreach ($connect -> query($sql) as $rows) 
        {      
            echo '<div class="tresc">';
                    echo '<h1 class="trh1">'.$rows['tytul'].'</h1>';
                    echo '<p>'.$rows['tekst'].'</p>';
            echo '</div>';    
        }
         echo '</div>';

    echo '</div>'; 
   


?>
<div class="contener2">
        
        <form action="komentarz.php" method="POST">
                    
            <label for="skrot">Dodaj komentarz:</label><br>
            <textarea type="zawartosc" id="zawartosc" name="zawartosc"></textarea><br>

                <div class="przyciski">
                     <input type="submit" value="Dodaj">
                </div>
         </form>

        
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

        $sql = 'SELECT login, zawartosc, komentarz_id FROM uzytkownicy JOIN komentarze ON (id_uzytkownik=id_fk) where fk_po = '.$_GET['id'].' ORDER BY komentarz_id DESC';
        
        foreach ($connect -> query($sql) as $rows) 
        {      

        echo'<div class="komentarz2">';   
            echo '<p class="nick">'.'<b>'.$rows['login'].'</b></p>';
            echo '<p>'.$rows['zawartosc'].'<a class="czytaj2" href="edytujkom.php?id=' . $rows['komentarz_id'] . '">'."edytuj".'</a>'.'<a class="czytaj2" href="usunkom.php?id=' . $rows['komentarz_id'] . '">'."usuń".'</a>'.'</p>';
        echo '</div>';
        }
        ?>


</div>



    </main>

    <footer>Kontakt</footer>


</body>
</html>