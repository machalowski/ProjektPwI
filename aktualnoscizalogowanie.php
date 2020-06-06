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

    <div class="lacznik">

        <ul>
            <a href="dodaj.php"><li>Dodaj</li></a>
            <a href=""><li>Edytuj</li></a>
            <a href=""><li>Usuń</li></a>
           
           
          </ul> 


    </div>

    <main>
        <div class="contener">

            <div class="artykul">
                
                <div class="obrazek">
                     <img src="IMG/art1.jpg" alt="obrazek">
                </div>

                <div class="tresc">
                    <h1 class="trh1">Raport</h1>
                    <p>W Polsce potwierdzono 238 przypadków zakażenia koronawirusem. Z tej liczby pięciu pacjentów zmarło. Pierwszy hospitalizowany pacjent 18 marca ma opuścić szpital - zapowiedziało we wtorek Ministerstwo Zdrowia. 14 marca główny inspektor sanitarny Jarosław Pinkas poinformował, że "mamy także 13 ozdrowieńców". W związku z rozprzestrzeniającym się wirusem SARS-CoV-2, rząd zdecydował o czasowym przywróceniu kontroli na granicach państwa, zawieszeniu funkcjonowania lokali...</p>
                    <a class="czytaj" href="">czytaj więcej...</a>
                    
                </div>

            </div>

            <div class="artykul szary">
                <div class="obrazek">
                     <img src="IMG/art2.jpg" alt="obrazek">
                </div>
               <div class="tresc">
                    <h1 class="trh1">Ciężka sytuacja w Łodzi</h1>
                    <p>W województwie łódzkim jest osiem kolejnych zakażeń. Potwierdzone wyniki dotyczą dwóch młodych kobiet, nastoletniej dziewczyny, dwóch młodych mężczyzn, dwóch nastoletnich chłopców oraz mężczyzny w sile wieku. To osoby od 13 do 45 roku życia, wszyscy mieli bezpośrednie kontakty z osobami zakażonymi. Stan tych osób jest dobry. Próby do badań zostały pobrane przez personel karetki pogotowia w Łodzi w miejscach odbywania kwarantanny.</p>
                    <a class="czytaj" href="">czytaj więcej...</a>

                </div>
                
                
            </div>

            <div class="artykul">

                <div class="obrazek">
                     <img src="IMG/art3.jpg" alt="obrazek">
                </div>

                <div class="tresc">
                    <h1 class="trh1">Ministrowie poddani testom</h1>
                    <p>Jak poinformował Łukasz Szumowski wszystkie osoby, które miały kontakt z ministrem Michałem Wosiem zostały sprawdzone przez sanepid. – Procedura jest tutaj standardowa. Tutaj nie ma żadnych innych działań niż te, które normalnie wykonuje sanepid i służby sanitarne. Wszystkie osoby, które miały bezpośredni kontakt z panem ministrem w okresie, w którym może nastąpić zarażenie, zostały zmapowane przez służby sanitarne – powiedział minister zdrowia. </p>
                    <a class="czytaj" href="">czytaj więcej...</a>
                
                </div>

            </div>

            


         </div>   
    </main>

    <footer>Kontakt</footer>


</body>
</html>