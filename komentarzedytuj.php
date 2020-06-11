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

$spr = true;
if($_POST["zawartosc"] == NULL )
    {
        echo "Spróbuj ponownie, formularz jest pusty!</a><br>";
        $spr = false;
    }
  
if($spr)
{
    $sql = 'UPDATE komentarze SET zawartosc = :zawartosc where komentarz_id = '.$_GET['id'];

    $sql = $connect->prepare($sql);
    $sql->bindValue(':zawartosc', $_POST["zawartosc"], PDO::PARAM_STR);

    if ($sql->execute()) 
    {
        echo "Komentarz został zaktualizowany <br>";
        echo "<a href='$link_address'>Powrót</a><br>";    
        echo "<a href=\"aktualnoscizalogowanie.php\">Strona główna</a><br>";    
    }
    else 
    {
        echo " nie udalo sie zaktualizowac";
    }
}
    
?>