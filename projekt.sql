-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Cze 2020, 21:18
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `komentarz_id` int(11) NOT NULL,
  `id_fk` int(11) NOT NULL,
  `zawartosc` varchar(500) NOT NULL,
  `fk_po` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`komentarz_id`, `id_fk`, `zawartosc`, `fk_po`) VALUES
(8, 12, 'test', NULL),
(9, 12, '34223', NULL),
(10, 12, 'sefsef', NULL),
(11, 12, 'w3r3wr', 15),
(12, 12, '3wr', 15),
(13, 12, 'polska policja', 15),
(14, 12, 'irzral', 6),
(16, 13, 'polska prawa', 5),
(17, 13, 'dwadw2131r1tr3', 5),
(22, 10, 'usuwac', 15),
(23, 10, 'eeeeeeeeeeeee', 15),
(27, 10, 'wirus', 15);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posty`
--

CREATE TABLE `posty` (
  `post_id` int(11) NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `tekst` varchar(10000) NOT NULL,
  `streszczenie` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `posty`
--

INSERT INTO `posty` (`post_id`, `tytul`, `tekst`, `streszczenie`) VALUES
(1, 'Nowe informacje o zakażeniach', '\"Mamy 219 nowych i potwierdzonych przypadków zakażenia #koronawirus z województw: śląskiego (151), świętokrzyskiego (40), opolskiego (8), wielkopolskiego (7), dolnośląskiego (6), podkarpackiego (3), lubelskiego (1), małopolskiego (1), podlaskiego (1) i warmińsko-mazurskiego (1)\" - podaje MZ. \r\n<br><br>\r\nZ przykrością informujemy o śmierci 4 osób zakażonych koronawirusem (wiek-płeć, miejsce zgonu): 82-K, 87-M, 80-M Zgierz, 92-K Łańcut. Większość osób miała choroby współistniejące. Liczba zakażonych koronawirusem: 26 780/1 161 (wszystkie pozytywne przypadki/w tym osoby zmarłe).\r\n<br><br><br>\r\nPonieważ prace w kopalniach są wstrzymywane w mocy decyzji administracyjnych jest decyzja o wypłacie pełnego wynagrodzenia - wskazała w poniedziałek wicepremier i minister rozwoju Jadwiga Emilewicz. Jej zdaniem to \"zupełnie odmienna sytuacja\" niż w przypadku pracowników z innych branż.\r\n\r\nWicepremier i minister aktywów państwowych Jacek Sasin podał w poniedziałek, że w związku z odnotowywaniem kolejnych zakażeń koronawirusem wśród górników od wtorku zostaną wstrzymane prace w dwóch kopalniach Jastrzębskiej Spółki Węglowej i w dziesięciu Polskiej Grupy Górniczej. Jednocześnie zapewnił, że wszyscy górnicy za okres postojowego otrzymają 100 procent wynagrodzenia, czyli nie poniosą żadnych strat finansowych.', 'Mamy 219 nowych i potwierdzonych przypadków zakażenia #koronawirus z województw: śląskiego (151), świętokrzyskiego (40), opolskiego (8), wielkopolskie (7), dolnośląskiego (6), podkarpackiego (3), lubelskiego (1), małopolskiego (1), podlaskiego (1) i warmińsko-mazurskiego (1)\" - podaje MZ. '),
(2, 'Premier: Od 19 czerwca częściowo otwieramy stadiony piłkarskie', 'Po przerwie związanej z epidemią spowodowaną COVID-19 piłkarze PKO Ekstraklasy oraz I i II ligi wracają w ten weekend na boisko. Wznowienie rozgrywek to pierwszy krok w powrocie do sportowej normalności. Kolejny – czyli częściowe otwarcie stadionów dla kibiców – już od 19 czerwca. Fani piłki nożnej będą mogli zająć do 25 proc. miejsc na stadionach. Co ważne – wszystko odbędzie się w odpowiednim reżimie sanitarnym. \r\n<br><br><br><br>\r\nAby zadbać o bezpieczeństwo związane z COVID-19, wprowadzimy specjalne zasady dotyczące zakupu biletów, odpowiedniego zajmowania miejsc oraz wymogów epidemicznych. Nowe zasady związane z powrotem kibiców na stadiony zostaną wypracowane we współpracy z Polskim Związkiem Piłki Nożnej.\r\n\r\n\"Sport jest potrzebny nam wszystkim – dla zdrowia i hartu ducha. Ma dawać radość nie tylko kibicom, ale wszystkim Polakom\" – zaznaczył premier Mateusz Morawiecki podczas wspólnej konferencji z minister sportu Danutą Dmowską-Andrzejuk oraz prezesem PZPN Zbigniewem Bońkiem.\r\n<br><br><br><br>\r\n\r\n<b>Pomoc państwa dla klubów sportowych</b>\r\n<br>\r\nSzef rządu podkreślił, że w trudnym czasie związanym z COVID-19 państwo polskie nie zostawiło klubów sportowych samymi sobie. \"Wiele z klubów skorzystało z pomocy Tarczy Finansowej. Otrzymały one ponad 25 mln zł\" – powiedział Mateusz Morawiecki. Co ważne, przy klubach sportowych pozostali także sponsorzy – spółki Skarbu Państwa.', 'Po przerwie związanej z epidemią spowodowaną COVID-19 piłkarze PKO Ekstraklasy oraz I i II ligi wracają w ten weekend na boisko. Wznowienie rozgrywek to pierwszy krok w powrocie do sportowej normalności. Kolejny – czyli częściowe otwarcie stadionów dla kibiców – już od 19 czerwca.'),
(5, 'Pełne wynagrodzenia dla górników', 'O to, dlaczego górnicy są traktowani inaczej niż pracownicy innych branż, była pytana w poniedziałek na konferencji wicepremier i minister rozwoju Jadwiga Emilewicz. Jak wskazała mamy do czynienia z inną sytuacją. - Nie słuchałam konferencji pana premiera Sasina. Rozumiem, że mówimy o postojowym, które nastąpi od dziś w kopalniach, w których mamy duży wzrost zachorowań. Mówimy o sytuacji szczególnej - podkreśliła.\r\n\r\n- Mamy postojowe, które obowiązuje od 1 kwietnia na wniosek przedsiębiorcy, który ze względu na to, że rejestruje spadki, ma możliwość obniżenia wymiaru pracy oraz wynagrodzenia nie mniejszego niż wynagrodzenie minimalne. Tutaj mówimy o sytuacji, w której zamykane są zakłady, czy też przechodzą w kwarantannę pracownicy oraz ich rodziny ze względu na wzrost zachorowań, czyli mamy zupełnie odmienną sytuację - wyjaśniła Jadwiga Emilewicz.\r\n<br>\r\n- Ponieważ dzieje się to z mocy decyzji administracyjnych jest decyzja o wypłacie pełnego wynagrodzenia. Myślę, że tutaj mamy do czynienia z dwoma sytuacjami prawnymi, drastycznie odmiennymi - dodała wicepremier.\r\n<br>\r\nBiorąc pod uwagę wyjątkowe okoliczności, poprosiłem Pocztę Polską o wstrzymanie ściągalności abonamentu RTV - poinformował wicepremier Jacek Sasin.\r\n\r\n\"Kwestia ściągalności abonamentu RTV to smutna spuścizna rządów Donalda Tuska. To kolejna kwestia do gruntownego przemodelowania po naszych poprzednikach. Obecnie - biorąc pod uwagę wyjątkowe okoliczności - poprosiłem Pocztę Polską o wstrzymanie działań w tym zakresie\" - napisał w niedzielę na Twitterze wicepremier, minister aktywów państwowych Jacek Sasin.', 'Ponieważ prace w kopalniach są wstrzymywane w mocy decyzji administracyjnych jest decyzja o wypłacie pełnego wynagrodzenia - wskazała w poniedziałek wicepremier i minister rozwoju Jadwiga Emilewicz. Jej zdaniem to \"zupełnie odmienna sytuacja\" niż w przypadku pracowników z innych branż.'),
(6, 'Koronawirus nie ustępuje. Nowe zakażenia', '219 nowych przypadkach koronawirusa w Polsce poinformował resort zdrowia w poniedziałek po godz. 10. Najwięcej spośród nich zanotowano w województwie śląskim. Ministerstwo przekazało też, że zmarło kolejne 4 osoby chore na Covid-19. Oznacza to, że liczba zakażeń SARS-CoV-2 w naszym kraju zwiększyła się do 26 780, a bilans zgonów wzrósł do 1 161. Zamknięto dworzec w Piasecznie. Podejrzenie koronawirusa u 95-latka\r\nZamknięto dworzec w Piasecznie. Podejrzenie koronawirusa u 95-latka.\r\n<br>\r\nNowe zakażenia SARS-CoV-2 w Polsce pochodzą z województw: śląskiego (151), świętokrzyskiego (40), opolskiego (8), wielkopolskiego (7), dolnośląskiego (6), podkarpackiego (3), lubelskiego (1), małopolskiego (1), podlaskiego (1) i warmińsko-mazurskiego (1).\r\n<br>\r\nMimo podjętych przygotowań swojej działalności nie wznowi Sieradzkie Centrum Kultury.\r\n\r\n \r\n\r\nPoinformowano, że zasady pracy zmieni także urząd miasta. Nadal realizowane są wszystkie usługi, lecz do Biura Obsługi Klienta mogą wejść maksymalnie dwie osoby. Została też wydzielona oddzielna strefa dla Urzędu Stanu Cywilnego.\r\n\r\n \r\n\r\n- Zobowiązałem MOPS oraz Straż Miejską do działań na rzecz najbardziej narażanych na skutki COVID-19. Do podopiecznych MOPS i seniorów będą rozwożone posiłki, by ograniczyć konieczność wychodzenia z domu - powiedział prezydent Osiewała.\r\n\r\n \r\n\r\nPrzedszkola pozostaną otwarte\r\n\r\n \r\n\r\nSeniorzy muszą także poczekać na otwarcie Domu Dziennego Pobytu oraz Klubu Seniora, które miały wznowić działalność w tym tygodniu.\r\n\r\n<br><br><br>\r\nMimo podjętych przygotowań swojej działalności nie wznowi Sieradzkie Centrum Kultury.\r\n\r\n \r\n\r\nPoinformowano, że zasady pracy zmieni także urząd miasta. Nadal realizowane są wszystkie usługi, lecz do Biura Obsługi Klienta mogą wejść maksymalnie dwie osoby. Została też wydzielona oddzielna strefa dla Urzędu Stanu Cywilnego.\r\n\r\n \r\n\r\n- Zobowiązałem MOPS oraz Straż Miejską do działań na rzecz najbardziej narażanych na skutki COVID-19. Do podopiecznych MOPS i seniorów będą rozwożone posiłki, by ograniczyć konieczność wychodzenia z domu - powiedział prezydent Osiewała.\r\n\r\n \r\n\r\nPrzedszkola pozostaną otwarte\r\n\r\n \r\n\r\nSeniorzy muszą także poczekać na otwarcie Domu Dziennego Pobytu oraz Klubu Seniora, które miały wznowić działalność w tym tygodniu.', 'Informacje o kolejnych zmarłych osobach, które chorowały na Covid-19, spłynęły ze Zgierza (82-letnia kobieta oraz dwóch mężczyzn w wieku 87 i 80 lat) i Łańcuta (92-letnia kobieta).Nowe zakażenia SARS-CoV-2 w Polsce pochodzą z województw: śląskiego (151), świętokrzyskiego (40).'),
(15, 'DODAC BIBLIOTEKI W R STUDIO NA KOLOSA22', 'DODAC BIBLIOTEKI W R STUDIO NA KOLOSADODAC BIBLIOTEKI W R STUDIO NA KOLOSADODAC BIBLIOTEKI W R STUDIO NA KOLOSADODAC BIBLIOTEKI W R STUDIO NA KOLOSADODAC BIBLIOTEKI W R STUDIO NA KOLOSA', 'DODAC BIBLIOTEKI W R STUDIO NA KOLOSADODAC BIBLIOTEKI W R STUDIO NA KOLOSADODAC BIBLIOTEKI W R STUDIO NA KOLOSADODAC BIBLIOTEKI W R STUDIO NA KOLOSADODAC BIBLIOTEKI W R STUDIO NA KOLOSADODAC BIBLIOTEKI W R STUDIO NA KOLOSA');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownik` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` char(100) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzytkownik`, `login`, `haslo`, `imie`, `email`) VALUES
(1, 'Machalowski', '12345678', 'Mateusz', 'mateusz@gmail.com'),
(2, 'Tomek35235', '677843', 'Tomasz', 'tomek@gmail.com'),
(3, 'twojstary', '123', 'Stary', 'fawfawf@gmail.com'),
(7, 'klimala', '98', 'Patryk', 'gsegeg@o2.pl'),
(8, 'baranowski', '1234', 'marcin', '2irw@o2.pl'),
(9, 'dawdaw', '7a21464f7124953b9382e972c4b9f5c9fe35d36f06869bf684f9b115', 'dawdawd', 'dwadaw@o2.pl'),
(10, 'tomasz', '78d8045d684abd2eece923758f3cd781489df3a48e1278982466017f', '34124', 'efsgs@o2.pl'),
(11, 'patryk', 'a7470858e79c282bc2f6adfd831b132672dfd1224c1e78cbf5bcd057', '24124', '3142142@o2.pl'),
(12, 'irek', 'ef92b52fe65b8c0239432742b19644b01eebe4973aea4a1dbd24424d', 'wfafa', 'efsagse@Gmail.com'),
(13, 'jesus', '6cd38def89d917efe79dea55ed8e30fc504563f4853ef6f1672a5d8d', 'iwafwfa', 'faf@o2.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`komentarz_id`),
  ADD KEY `id_fk` (`id_fk`),
  ADD KEY `komentarze_idpost` (`fk_po`);

--
-- Indeksy dla tabeli `posty`
--
ALTER TABLE `posty`
  ADD PRIMARY KEY (`post_id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `komentarz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT dla tabeli `posty`
--
ALTER TABLE `posty`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_uzytkownik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD CONSTRAINT `komentarze_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `uzytkownicy` (`id_uzytkownik`) ON UPDATE CASCADE,
  ADD CONSTRAINT `komentarze_idpost` FOREIGN KEY (`fk_po`) REFERENCES `posty` (`post_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
