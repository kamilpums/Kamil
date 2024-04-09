<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tablice w php </h1>
    <?php
    //tablica to zmienna,ktora przechowuje w sobie wiele danych w sposób uporządkkowany 
    //deklarujemy tablice za pomocą $,następnie nazwa tablicy, a potem[] nawiasy kwadrtowe w których podajemy indeksy
    //indeks to kolejny numer zawartosci tablict.Indeksy moga wystepowac w postaci liczbowej - wtedy rozpoczynamy numeracje od 0; lub w postaci ciągu znaków - klucza
    $klasa[0]="Jakub";
    $klasa[1]=null;
    $klasa[2]="Kevin";
    $klasa[3]="Szymon";
    echo "<br> $klasa[0]";
    //Zmiana wartosci w tablicy
    $klasa[1]=5;
    $klasa[4]=17.2;
    echo "<br> $klasa[1]";
    echo "<br> $klasa[4]";
    //działania na tablicy - tak ssamo jak w zmiennych
    echo '<br>Suma dwóch elementów tablicy o indeksach 1 i 4:  '.$klasa
    [4]+$klasa[1];

    ?> 
</body>
</html>