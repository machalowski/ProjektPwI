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

$sql = 'DELETE FROM komentarze WHERE fk_po = '.$_GET['id'];

$sql = $connect->prepare($sql);


        if ($sql->execute()) 
        { 
            echo "usunieto koemtnarze";
         }
         else
         {
             echo "Nie udało się usunąc komentarzy";
         }
         
$sql = 'DELETE FROM posty WHERE post_id = '.$_GET['id'];

$sql = $connect->prepare($sql);


        if ($sql->execute()) 
        { 
            echo "Post został usunięty <br>";
            echo "<a href=\"aktualnoscizalogowanie.php\">Powrót</a><br>";
            echo "<a href=\"edytuj.php\">Usuń kolejny post</a>";
         }
         else
         {
             echo "Nie udało się usunąć postu";
         }
?>