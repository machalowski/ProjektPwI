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

$spr = true;
if($_POST["tytul"] == NULL or $_POST["tresc"] == null or $_POST["skrot"] == null)
        {
            echo  "Nie wypełniono wszystkich pól, spróbuj ponowanie! <br> <a href=\"dodaj.php\">Powrót</a> <br> <a href=\"aktualnoscizalogowanie.php\">Strona główna</a>";
            $spr = false;
        }


        if($spr)
        {
           $stmt=$connect->prepare("INSERT INTO posty (tytul, tekst, streszczenie) VALUES (?, ?, ?)");
           $stmt->bindValue(1, $_POST["tytul"], PDO::PARAM_STR);
           $stmt->bindValue(2, $_POST["tresc"], PDO::PARAM_STR);
           $stmt->bindValue(3, $_POST["skrot"], PDO::PARAM_STR);
           $stmt->execute();
           echo "Post został dodany!<br> <a href=\"aktualnoscizalogowanie.php\">Powrót</a>";
        }


?>