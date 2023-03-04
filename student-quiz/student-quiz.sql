-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Paź 2022, 21:25
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `student-quiz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer_a` text NOT NULL,
  `answer_b` text NOT NULL,
  `answer_c` text NOT NULL,
  `answer_d` text NOT NULL,
  `correct_answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `questions`
--

INSERT INTO `questions` (`id`, `num`, `question`, `answer_a`, `answer_b`, `answer_c`, `answer_d`, `correct_answer`) VALUES
(1, 1, 'Jak jest najbardziej prawidłowa definicja  intencji (ang. Intentions) w Androidzie? Jak jest ich najważniejsza rola?', 'Mechanizm ten odpowiedzialny jest przede wszystkim za obsługę rozkazów wydawanych przez użytkownika. Za pomocą intencji możemy wprowadzić komunikację pomiędzy aplikacjami (lub mniejszymi komponentami, jak Usługi, Aktywności itp.).', 'Służą do uruchamiania odpowiednich aplikacji/Aktywności.', 'Dzielą się na jawne i nie jawne.', 'Dołączanie informacji, które mogą być przesłane do uruchamianego obiektu.', 'b'),
(4, 2, 'Co można dokonać za pomoca media projection API w aplikacji?', 'Nagrać zawartość ekranu urządzenia mobilnego.', 'Nagrać dźwięk.', 'Zrobić zrzut ekranu.', 'Nagrać wideo.', 'a'),
(6, 3, 'Wymień sześć komponentów z których możemy zbudować aplikacje mobilne na Androida.', 'Intent, Activity, Service, Content Providers, Broadcast Receiver, Notification', 'View,Intent,Builder,Service,Session,Notification', 'ActivityResult,Session,Intent,BroadcastManager,IntentFilter,Class', 'View,BroadcastReceiver,Intent,PendingIntent,Notification,Layout', 'a'),
(8, 4, 'Co pozwala decydować jaki komponent zostanie wywołany do intencji, oraz w manifeście obsługuje startującą aktywność, posiadająca konkretną akcję lub dane?', 'IntentFilter', 'PendingIntent', 'Intent', 'BroadcastReceiver', 'a'),
(10, 5, 'Wybierz najlepszy opis działania PendingIntent.', 'Startuje od razu po przekazaniu do startActivity.', 'Przyszła intencja, z której mogą korzystać inne aplikacje.', 'Wystartuje w określonym momencie w przyszłości. Nie można użyć bez zwykłej intencji.', 'Jest to token, który proces aplikacji przekaże procesowi lokalizacji, a proces lokalizacji użyje go do obudzenia aplikacji, gdy nastąpi interesujące wydarzenie.', 'd'),
(12, 6, 'Co robi BroadcastManager?', 'Zarządza powiadomieniami.', 'Działa w tle i powiadamia o wystąpieniu określonego zdarzenia.', 'Sprawdza czy pozwolenia (ang. permissions) są przyznane w manifeście.', 'Łączy się z usługą systemową.', 'b'),
(14, 7, 'Co służy do: \r\n-otwierania aktywności\r\n-startowania serwisu\r\n-wyświetlania strony www', 'Context', 'onActivityResult', 'Intent', 'PendingIntent', 'c'),
(15, 8, 'Czym jest Context w Androidzie?', 'Oznacza on kontekst obecnego stanu aplikacji. Dzieli się na dwa rodzaje: Application Context i Activity Context.', 'Dostęp do informacji dotyczących aktywności oraz aplikacji', 'Umożliwia dostęp do bazy danych, zasobów dotyczących jakiejś aplikacji (potrzebny tekst, drawable itd.) oraz do klas, systemów plików i współdzielonych preferencji.', 'Up-calls dla operacji na poziomie aplikacji, takich jak uruchamianie aktywności, broadcasting i otrzymywanie intencji (intents).', 'a'),
(16, 9, 'Co robi onActivityResult?', 'Metoda do wymiany danych.', 'Jest to wzorzec projektowy który ułatwia np tworzenie powiadomień.', 'Za pomocą tej metody przesyłamy informacje z jednej aktywności do drugiej i vice-versa.', 'Pozwala na odbieranie powiadomień', 'c'),
(19, 10, 'Dlaczego range-seekbar został użyty w aplikacji Easy English?', 'Posiada metody setMin i setMax do regulacji trwania utworu.', 'Umożliwia wybór ilości thumbów.', 'Jest dobrą alternatywą dla zwykłego paska odtwarzania.', 'Ponieważ dzięki niemu można w prosty sposób zaznaczać fragment pliku audio który ma zostać odtworzony.', 'd');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
