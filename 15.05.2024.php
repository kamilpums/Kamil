<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Zadanie
    echo"<h2> Zadanie petla for</h2>";
    $liczba=70;
    for($i=2;$i<70;$i=$i+2){
        echo 'Wynik dzielenia przez liczbe'.$i.'to'.$liczba/$i.
        '<br>';
    }
    $licznik=2;
    echo "<h2>Zadanie petla while</h2>";
    while($liczba>=$licznik){
        echo 'Wynik dzielenia liczby'.$liczba.'przez'.$licznik.'to:'.$liczba/$licznik.'<br>';
        $licznik=$licznik+2;
    }
    ?>
</body>
</html>