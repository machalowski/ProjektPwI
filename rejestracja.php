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
        $haslo = hash('sha224', $_POST['password']);
    if($_POST["username"] == NULL or $_POST["email"] == null or $_POST["password"] == null or $_POST["imie"] == null)
        {
            echo  "Nie wypełniono wszystkich pól, spróbuj ponowanie! <br> <a href=\"rejestracja.html\">Powrót</a>";
            $spr = false;
        }


$sql = "SELECT login FROM uzytkownicy WHERE login = :username";
if($stmt = $connect->prepare($sql) and $spr)
    {
        $stmt->bindParam(":username", $username_2, PDO::PARAM_STR);
        $username_2 = trim($_POST["username"]);
        if($stmt->execute())
        {
            if($stmt->rowCount() == 1)
            {
                echo  "Nazwa użytkownia jest zajęta, spróbuj ponowanie! <br> <a href=\"rejestracja.html\">Powrót</a>";
                $spr = false;
            }
        }
    }

$sql2 = "SELECT email FROM uzytkownicy WHERE email = :email";
if($stmt2 = $connect->prepare($sql2) and $spr)
    {
    $stmt2->bindParam(":email", $email_2, PDO::PARAM_STR);
    $email_2 = trim($_POST["email"]);
        if($stmt2->execute())
        {
            if($stmt2->rowCount() == 1)
            {
                echo  "Wybrany email jest zajęty, spróbuj ponownie! <br> <a href=\"rejestracja.html\">Powrót</a>";
                $spr = false;
            }
        }
    }
    
if($spr)
 {
    $stmt3=$connect->prepare("INSERT INTO uzytkownicy (login, haslo, imie, email) VALUES (?, ?, ?, ?)");
    $stmt3->bindValue(1, $_POST["username"], PDO::PARAM_STR);
    $stmt3->bindValue(2, $haslo, PDO::PARAM_STR);
    $stmt3->bindValue(3, $_POST["imie"], PDO::PARAM_STR);
    $stmt3->bindValue(4, $_POST["email"], PDO::PARAM_STR);
    $stmt3->execute();
    echo "Konto zostało utworzone!<br> <a href=\"logowanie.html\">Teraz możesz się zalogować.</a>";
 }
   
?>