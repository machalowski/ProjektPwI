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

$spr = true;
if($_POST["zawartosc"] == NULL )
        {
            echo  "Komentarz jest pusty, spróbuj ponowanie!";
            $spr = false;
        }

       $iduzytkownika = $_SESSION['idus'];
       $tresc = $_POST['zawartosc'];
       $idpost = $_SESSION['idpost'];
       $link_address = 'czytaj.php?id='.$_SESSION['idpost'].'';

       if($spr)
        {
           $stmt=$connect->prepare("INSERT INTO komentarze (id_fk, zawartosc, fk_po) VALUES (?, ?, ?)");
           $stmt->bindValue(1, $iduzytkownika, PDO::PARAM_STR);
           $stmt->bindValue(2, $tresc, PDO::PARAM_STR);
           $stmt->bindValue(3, $idpost, PDO::PARAM_STR);
           $stmt->execute();
           echo "Komentarz został dodany!<br>";
           echo "<a href='$link_address'>Powrót</a><br>";   
        }




?>