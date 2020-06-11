<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epidemia Sars-Cov2</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="IMG/favicon3.PNG">
</head>
<body>
    
    <nav>
    <ul>
        <li><a class="menu active" href="index.php">Strona główna</a></li>
        <li><?php

        if(!isset($_SESSION['zalogowany']))
        {
             echo '<a href="aktualnosc.php">Aktualności</a>';
        }
        else
        {
            echo '<a href="aktualnoscizalogowanie.php">Aktualności</a>';
        } ?>
</li>
        <li><a href="Owirusie.php">O wirusie</a></li>
        <li><a href="Sytuacja.php">Sytuacja w kraju</a></li>
        <li>   <?php

        if(!isset($_SESSION['zalogowany']))
        { 
            echo '<a href="logowanie.html">Logowanie</a>';
        }
        else
        {
         echo '<a href="Wyloguj.php">Wyloguj się '.$_SESSION['login'].'</a>';
    
        } ?>
</li>
      </ul> 
    </nav>

    <main>

        
        <div class="contener">
            <div class="lewa">
                <header>
                    <img src="IMG/header.jpg" alt="header">
                </header>
            
            <div class="blogi">
                <div class="kratka">
                    <img src="IMG/art1.jpg" alt="art">
                    <h2>Raport</h2>
                    <p>W Polsce potwierdzono 238 przypadków zakażenia koronawirusem. Z tej liczby pięciu pacjentów zmarło. Pierwszy hospitalizowany pacjent 18 marca ma opuścić szpital - zapowiedziało we wtorek Ministerstwo...</p>
                </div>

                <div class="kratka">
                    <img src="IMG/art2.jpg" alt="art">
                    <h2>Ciężka sytuacja w Łodzi</h2>
                    <p>W województwie łódzkim jest osiem kolejnych zakażeń. Potwierdzone wyniki dotyczą dwóch młodych kobiet, nastoletniej dziewczyny, dwóch młodych mężczyzn, dwóch nastoletnich chłopców oraz mężczyzny w sile wieku...</p>
                </div>

                <div class="kratka">
                    <img src="IMG/art3.jpg" alt="art">
                    <h2>Ministrowie poddani testom</h2>
                    <p>Jak poinformował Łukasz Szumowski wszystkie osoby, które miały kontakt z ministrem Michałem Wosiem zostały sprawdzone przez sanepid. – Procedura jest tutaj standardowa. Tutaj nie ma żadnych...</p>
                </div>

                <div class="kratka">
                    <img src="IMG/art4.jpg" alt="art">
                    <h2>Przełom w epidemii?</h2>
                    <p>Marcin Drąg z Politechniki Wrocławskiej z zespołem rozpracował enzym, „którego działanie może być kluczowe dla walki z koronawirusem SARS-CoV-2”. Twierdzi, że jeśli enzym jest zamkiem, to on właśnie...</p>
                </div>

            </div>
            

            <iframe  src="https://www.youtube.com/embed/qgylp3Td1Bw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </div>


        <div class="prawa">
                <img src="IMG/tweet1.PNG" alt="tweet">
                <img src="IMG/tweet2.PNG" alt="tweet">
                <img src="IMG/tweet5.PNG" alt="tweet">
                <img src="IMG/tweet3.PNG" alt="tweet">
                <img src="IMG/tweet4.PNG" alt="tweet">
                <img src="IMG/tweet6.PNG" alt="tweet">
                <img src="IMG/tweet7.PNG" alt="tweet">
                <img src="IMG/tweet8.PNG" alt="tweet">
                <img src="IMG/tweet9.PNG" alt="tweet">

            </div>










</div>
    </main>

<footer>Kontakt</footer>

</body>
</html>