<?php
session_start();
$blad = false;

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

    
    if($_POST["username"] == NULL  | $_POST["password"] == null)
    {
        echo  "Nie wypełniono wszystkich pól <br> <a href=\"logowanie.html\">Powrót</a>";      
    }
else
    {
        $username = $_POST['username'];
        $password = hash('sha224', $_POST['password']);
    
        $query = $connect->prepare('SELECT COUNT("id") FROM uzytkownicy WHERE login = "'.$username.'" AND haslo = "'.$password.'"');
        $query->execute();
    
        $count = $query->fetchColumn();

        if($count == "1"){
        
            $_SESSION['zalogowany'] = true;
            
            $query1 = $connect->prepare('SELECT * FROM uzytkownicy WHERE login = "'.$username.'"');
            $query1->execute();
            $row = $query1->fetch();
            $_SESSION['login'] = $row['login'];
           
    
            header('location: index.php');
        }
        else
        { echo "Wpisano złe dane.";
        $blad = true;
        }
    }

?>