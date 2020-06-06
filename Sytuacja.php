<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epidemia Sars-Cov2</title>

    <link rel="stylesheet" href="sytuacja.css">
    <link rel="icon" href="IMG/favicon3.PNG">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    
</head>
<body>
    
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
        <li><a href="Owirusie.php">O wirusie</a></li>
        <li><a class="menu active" href="Sytuacja.php">Sytuacja w kraju</a></li>
        <li>
            <?php

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
            <div class="gora">
                <div class="lewa">
                    <div class="mapa">
                        <div class="infogram-embed" data-id="3471f218-44e8-4497-a4fc-52ca63a44130" data-type="interactive"></div> 

                    </div>
                </div>
        

                <div class="prawa">
                    <h1>Miasta:</h1>
                        <ul>
                            <li>Warszawa 121
                            </li><li>Łódź 45
                            </li><li>Wrocław 40
                            </li><li>Lublin 36
                            </li><li>Poznań 20
                            </li><li>Szczecin 16
                            </li><li>Racibórz 11
                            </li><li>Ostróda 7
                            </li><li>Zawiercie 5
                            </li><li>Opole 5
                            </li><li>Cieszyn 4
                            </li><li>Gdańsk 2
                            </li><li>Zielona Góra 2
                            </li><li>Starachowice 2
                            </li><li>Białystok 2
                            </li><li>Leżajsk 3
                            </li><li>Kraków 1
                            </li><li>Bełżyce 1
                            </li><li>Łańcut 1
                            </li><li>Nisko 1
                            </li><li>Oleśnica 1
                            </li><li>Sosnowiec 1
                            </li><li>Chorzów 1
                            </li><li>Bolesławiec 1
                            </li><li>Kielce 1
                                

                        </ul>
                </div>
            </div>
    

<div class="tabelka">
        
            <div class="t1 k">DATA</div>
            <div class="t2 k ">CHORZY</div>
            <div class="t3 k ">ZGONY</div>
            <div class="t4 k ">WYZDROWIENIA</div>
            <div class="t5 k ">PRZYROST</div>
            <div class="t6 k ">BILANS</div>
        
       
       
            <div class="tw">
                <div class="t1 kolor4">04.03</div>
                <div class="t2">1</div>
                <div class="t3">0</div>
                <div class="t4">0</div>
                <div class="t5">+1</div>
                <div class="t6">0</div>
           </div>
            
           <div class="tw jasny">
               <div class="t1 kolor3 ">05.03</div>
               <div class="t2">1</div>
               <div class="t3">0</div>
               <div class="t4">0</div>
               <div class="t5">0</div>
               <div class="t6">0</div>
          </div>
       
          <div class="tw">
               <div class="t1 kolor4 ">06.03</div>
               <div class="t2">5 </div>
               <div class="t3">0</div>
               <div class="t4">0</div>
               <div class="t5">+4</div>
               <div class="t6">0</div>
           </div>
       
           <div class="tw jasny">
               <div class="t1 kolor3 ">07.03</div>
               <div class="t2">6</div>
               <div class="t3">0</div>
               <div class="t4">0</div>
               <div class="t5">+1</div>
               <div class="t6">0</div>
           </div>
           
           <div class="tw">
               <div class="t1 kolor4 ">08.03</div>
               <div class="t2">11</div>
               <div class="t3">0</div>
               <div class="t4">0</div>
               <div class="t5">+5</div>
               <div class="t6">0</div>
           </div>
       
           <div class="tw jasny">
               <div class="t1 kolor3 ">09.03</div>
               <div class="t2">17</div>
               <div class="t3">0</div>
               <div class="t4">0</div>
               <div class="t5">+6</div>
               <div class="t6">0</div>
           </div>
       
           <div class="tw">
               <div class="t1 kolor4 ">10.03</div>
               <div class="t2">22</div>
               <div class="t3">0</div>
               <div class="t4">0</div>
               <div class="t5">+5</div>
               <div class="t6">0</div>
           </div>
       
           <div class="tw jasny">
               <div class="t1 kolor3 ">11.03</div>
               <div class="t2">31</div>
               <div class="t3">0</div>
               <div class="t4">0</div>
               <div class="t5">+9</div>
               <div class="t6">0</div>
           </div>
       
           <div class="tw">
               <div class="t1 kolor4 ">12.03</div>
               <div class="t2">51</div>
               <div class="t3 kolor2">1</div>
               <div class="t4">0</div>
               <div class="t5">+20</div>
               <div class="t6 kolor2">-1</div>
           </div>
       
           <div class="tw jasny">
               <div class="t1 kolor3 ">13.03</div>
               <div class="t2">68 </div>
               <div class="t3 kolor">2</div>
               <div class="t4">0</div>
               <div class="t5">+17</div>
               <div class="t6 kolor">-1</div>
           </div>
           
               <div class="tw">
               <div class="t1 kolor4 ">14.03</div>
               <div class="t2">104</div>
               <div class="t3 kolor2">3</div>
               <div class="t4">0</div>
               <div class="t5">+36</div>
               <div class="t6 kolor2">-1</div>
           </div>
           
            <div class="tw jasny">
               <div class="t1 kolor3 ">15.03</div>
               <div class="t2">125</div>
               <div class="t3 kolor">3</div>
               <div class="t4">0</div>
               <div class="t5">+21</div>
               <div class="t6">0</div>
           </div>

           <div class="tw">
               <div class="t1 kolor4 ">16.03</div>
               <div class="t2">177</div>
               <div class="t3 kolor2">4</div>
               <div class="t4">0</div>
               <div class="t5">+52</div>
               <div class="t6 kolor2">-1</div>
           </div>

           <div class="tw jasny">
            <div class="t1 kolor3 ">17.03</div>
            <div class="t2">238</div>
            <div class="t3 kolor">5</div>
            <div class="t4">0</div>
            <div class="t5">+61</div>
            <div class="t6 kolor">-1</div>
        </div>

        <div class="tw">
            <div class="t1 kolor4 ">18.03</div>
            <div class="t2">287</div>
            <div class="t3 kolor2">5</div>
            <div class="t4">0</div>
            <div class="t5">+49</div>
            <div class="t6">0</div>
        </div>
           
        <div class="tw jasny">
            <div class="t1 kolor3 ">19.03</div>
            <div class="t2">355</div>
            <div class="t3 kolor">5</div>
            <div class="t4">0</div>
            <div class="t5">+68</div>
            <div class="t6">0</div>
        </div>

        <div class="tw">
            <div class="t1 kolor3 "></div>
            <div class="t2"></div>
            <div class="t3 kolor"></div>
            <div class="t4"></div>
            <div class="t5"> </div>
            <div class="t6"></div>
        </div>
              
       
    </div>


    <div class="chart">
        <canvas id="myChart"></canvas>
    </div>
</div>
</main>

    <footer>Kontakt</footer>

<script>
                let myChart = document.getElementById('myChart').getContext('2d');
        
                let massPopChart = new Chart(myChart, {
                    type: 'line',
                    data: {
                        labels: ['04.03', '05.03', '06.03', '07.03', '08.03', '09.03', '10.03', '11.03', '12.03', '13.03', '14.03', '15.03', '16.03', '17.03', '18.03', '19.03'],
                        datasets: [{
                            label: 'Zarażeni',
                            data: [1, 1, 5, 6, 11, 17, 22, 31, 51, 68, 104, 125, 177, 238, 287, 355],
                            backgroundColor: [
                                'red'
                            ]
        
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            
                            fontSize: 25
                        },
                    },
                })
</script>

<script>
!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");
</script>



</body>
</html>