<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>operacja na zmiennych</h1>
    <?php
        //deklaracja zmiennych
        $liczba1=12;
        $liczba2=34.5;
        $liczba3=65656;
        //wypisanie zmiennych na ekranie - standardowe wejście
        echo$liczba1;
        echo "<br>";
        echo "to jest liczba $liczba2 wypisanie za pomocą cudzysłowia";
        echo "<br>";
        echo 'to jest liczba '.$liczba3.' - wypisanie zmiennej z wykorzystaniem apostorfu';
        echo"<br><br>";
        //operacje matemtyczne na zmiennych 
        $dodawanie=$liczba1+$liczba2;
         //Zadanie na lekcji
        $dodwanie=$liczba2+$liczba1;
        $odejmowanie=$liczba1-$liczba2;
        $dzieleni=$liczba2/$liczba1;
        $możenie=$liczba2*$liczba1;
        echo "<br>";
        echo "wynik dodawania dwóch zmiennych to $dodawanie";
        echo "<br>";
        echo "wynik odejmowanie dwóch zmiennych to $odejmowanie";
        echo "<br>";
        echo "wynik dzielnie dwóch zmiennych to $dzieleni";
        echo "<br>";
        echo "wynik mnożenie dwóch zmiennych to $możenie";
        echo "<br>";
        $Kamil="Mam na imie Kamil";
        echo "<br>";
        $Strzelecki="Mam na nazwisko Strzelecki";
        echo "<br>";
        echo "$Kamil $Strzelecki";
        //deklaracja fukcji
        //funkcj służy do wywołania kodu który został zapisany wcześniej
        //funkcja składa się z dekralacji funkcji - słowo "function" i 
        //nazwy fukcji i prarametrów np. function ileOsob(lista) oraz z cisła funkcjizawartej między nawiasami klamrowymi {},
        //czyli z instrukcji jakie są do wykonania 

        //Fukcje powitanie zwróci napis "witaj w programie"
        //deklracja fukcji
        function powitanie()
    {
        echo"<br>";
        echo "witaj w programie" ;
        echo"<br>";
    }    
    //wywołanie fukcji
    powitanie();
    //fukcjasrednia pobiera dwie liczby i liczyich średnią dekralacje funckji srednia
    function srednia($liczba1,$liczba2)
    {
        $srednia=($liczba1+$liczba2)/2;
        echo "<br> Wynik sredniej to: $srednia <br>";
    }
    //wywołanie fukcji 
    srednia(12,18);
    srednia(12.5,11.5);
    //zadanie na lekcji
    function suma3($liczba1,$liczba2,$liczba3)
    {
        echo "<br>";
        $suma=($liczba1+$liczba2+$liczba3);
        echo "<br>suma wynosi $suma <br>"
    }
    //wywołanie 
    suma3(24,45.12);
    
 ?>
</body>
</html>