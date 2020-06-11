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
$link_address = 'czytaj.php?id='.$_GET['id'].'';




$spr = true;
if($_POST["tytul"] == NULL or $_POST["tresc"] == null or $_POST["tresc2"] == null)
        {
            echo "<a href='edytuj.php'>Spróbuj ponownie, nie wypełniono wszystkich pól!</a><br>";
            $spr = false;
        }

        if($spr)
        {

$sql = 'UPDATE posty SET tytul = :tytul, streszczenie = :streszczenie, tekst = :tekst where post_id = '.$_GET['id'];

$sql = $connect->prepare($sql);
$sql->bindValue(':tytul', $_POST["tytul"], PDO::PARAM_STR);
$sql->bindValue(':streszczenie', $_POST["tresc2"], PDO::PARAM_STR);
$sql->bindValue(':tekst', $_POST["tresc"], PDO::PARAM_STR);

if ($sql->execute()) 
            
    echo "Post został zaktualizowany <br>";
    echo "<a href='$link_address'>Powrót do posta</a><br>";
    echo "<a href=\"aktualnoscizalogowanie.php\">Powrót</a><br>";
    
        
        }
    
?>