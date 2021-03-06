<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epidemia Sars-Cov2</title>
    <link rel="stylesheet" href="Owirusie.css">
    <link rel="icon" href="IMG/favicon3.PNG">
</head>
<body>
    <div class="wszystko">
    <nav>
    <ul>
        <li><a href="index.php">Strona główna</a></li>
        <li><?php

        if(!isset($_SESSION['zalogowany']))
        {
             echo '<a href="aktualnosc.php">Aktualności</a>';
        }
        else
        {
            echo '<a href="aktualnoscizalogowanie.php">Aktualności</a>';
        } ?>
        <li><a class="menu active" href="Owirusie.php">O wirusie</a></li>
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

    

    <main>
        <div class="contener">
            <div class="tresc">
            <h1>Koronawirus - czym jest?</h1>
            <p>Nowy koronawirus SARS-Cov-2 wywołuje chorobę o nazwie COVID-19. Choroba objawia się najczęściej gorączką, kaszlem, dusznościami, bólami mięśni, zmęczeniem.</p>

            <h1>Jak często występują objawy?</h1>
            <p>Ciężki przebieg choroby obserwuje się u ok.15-20 proc. osób. Do zgonów dochodzi u 2-3 proc. osób chorych. Prawdopodobnie dane te są zawyżone, gdyż u wielu osób z lekkim przebiegiem zakażenia nie dokonano potwierdzenia laboratoryjnego. Koronawirus, który został wykryty w Wuhan otrzymał nazwę SARS-CoV-2. Natomiast choroba, którą wywołuje, została nazwana COVID-19. To właśnie ona mrozi krew w żyłach wszystkim ludziom na świecie.  </p>
            <img src="IMG/info2.png" alt="obrazek">
            <h1>Jakie jest prawdopodobieństwo, że dany objaw jest oznaką zarażenia koronawirusem, a nie grypą? </h1>

            <ul>
        <li>Ból głowy - częściej pojawia się w przypadku grypy niż COVID-19
        </li><li>Suchy kaszel - charakterystyczny dla obu chorób
        </li><li>Bóle mięśni - częściej pojawia się w przypadku grypy niż COVID-19
        </li><li>Katar i zatkany nos - rzadziej pojawia się w przypadku koronawirusa, czasami w przypadku grypy
        </li><li>Kichanie - rzadko w obu przypadkach
        </li><li>Biegunka - rzadko w obu przypadkach
        </li><li>Ból gardła - podobny stopień prawdopodobieństwa w przypadku obu chorób
        </li><li>Zmęczenie - częściej pojawia się w przypadku grypy niż COVID-19
        </li>
    </ul>
            <img src="IMG/info1.png" alt="obrazek">
           
           
            <h1>Jak zidentyfikować koronawirusa?</h1>
            <p>W przypadku, gdy zauważamy któryś z symptomów, warto na początek zadać sobie pytanie, czy mieliśmy szansę się zarazić koronawirusem -czy wróciliśmy w ciągu ostatnich miesięcy zza granicy? Czy mieliśmy kontakt z kimś, kto podróżował? Czy przebywaliśmy w obszarze, gdzie zidentyfikowano obecność wirusa? Personel medyczny szczególną uwagę zwraca na osoby, które mają duszący kaszel i gorączkę. To pierwsze znaki, które mogą nakierować lekarzy na odpowiednią diagnozę. </p>
            <img src="IMG/info4.png" alt="obrazek">
            </div>
        </div>
        
    </main>

    <footer>Kontakt</footer>

</div>
</body>
</html>