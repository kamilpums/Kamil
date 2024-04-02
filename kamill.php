<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Zajęcia na 26.03.24</title>
</head>
<body>
   <?php
   //stworzenie funkcji która pobiera wartość i wypisuje jej kwadrat czyli liczba do potęgi 2
   function potega($liczba){
    $wynik=$liczba*$liczba;
    echo "<br> Potega liczby $liczba to $wynik";
   } 
   potega(3);
   potega(12);
   //sprawdzanie typow zmiennych
    function lekcja($liczba, $tekst, $liczba2){
    echo '<br>Typ zmiennej liczba '.$liczba.' to '.gettype($liczba);
    echo '<br>Typ zmiennej liczba '.$tekst.' to '.gettype($tekst);
    echo '<br>Typ zmiennej liczba '.$liczba2.' to '.gettype($liczba2);
    }
   lekcja(123,45, "test",234);
   lekcja(44, "test numer2","Ala ma kotka");
   lekcja(789, 455, 85.5565);

   //funkcje matematyczne
   //abs - funkcje bezwzgledne
   //round - zaokroglenie
   //ceil - zaokroglenie w gore
   //floor - zaokroglenie w dol
   //pow - potegowanie liczb

   //pole kwadratu zaokroglenie do 2 miejsc po przecinku
   function pole($a){
        //tradycyjnie liczymy $a*$a a my policzymy funkcje
        $wynik=pow($a,2);
        //zaokroglenie wyniku
        $wynik2=round($wynik,2);
        return $wynik2;
   }
   //wynik nie zostanie wyswietlony bo nie uzylismy funkcji echo
   pole(5.2);
   //wyswietlenie wyniku 
   echo '<br>wynik działania to '.kwadrat(5.2);
   echo '<br>wynik działania to '.kwadrat(4.674);
   //przekazanie jednego wyniku funkcji do zmiennej dodatek i wywołanie jeszcze raz tej funckji z obliczonym wynikiem
   $dodatek=pole(2);
   echo'<br>wynik dziłania to' .pole($dodatek);
   function obliczenia  ($liczba1,$liczba2){
        echo '<br>Wynik to'. round($liczba/$liczba2,3);
   }
   obliczenia(34,50);
   function delta($a,$b,$c){
    echo'<br> Wynik to '.$b*$b-4*$a*$c;  
   }
   delta(6,68,8);
   function wprzyblirzeniu($zmienna){
        echo '<br>Wynik to'.ceil(zmienna).'jak i'.floor(zmienna);
   }
   wprzyblirzeniu(6,68);
   ?>
</body>
</html>