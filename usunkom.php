<?php
session_start();
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
$link_address = 'czytaj.php?id='.$_SESSION['idpost'].'';
$sql = 'DELETE FROM komentarze WHERE komentarz_id = '.$_GET['id'];

$sql = $connect->prepare($sql);


        if ($sql->execute()) 
        { 
            echo "Pomyślnie usunięto komentarz<br>";
            echo "<a href='$link_address'>Powrót</a><br>";   
         }
         else
         {
             echo "Nie udało się usunąc komentarza";

         }
         



?>