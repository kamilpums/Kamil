<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //PETLA FOR
        echo "<h1> petla for </h3>";
        for($i=2;$i<=7;$i++){
            echo '<br> Liczba '.$i;
        }
        //PETLA WHILE
        echo "<h3> petla while </h3>";
        $w=2;
        while($w<=7){
            echo '<br> Liczba '.$w;
            $w++;
        }
        //wypisanie wartosci parzystych od 10 do 18
        //za pomoca petli for
        echo"<h3> pętla for, liczby parzystych</h3>";
        for($i=10;$i<=20;$i+=2){
            echo '<br> Liczba '.$i;
        }
        //za pomoca petli while
        echo"<h3> pętla while, liczby parzystych</h3>";
        $w=10;
        while($w<=20){
            echo '<br> Liczba '.$w;
            $w=$w+2;
        }
        //wypisanie danych z teblicy za pomoca pętli 
        //tworzzenie tablicy 
        $tablica=array("Kuba","Kacper","Tobiasz","Noel","Aleks","Jakub","Kamil");
        //wypisanie danych z teblicy za pomoca pętli for
        echo "<h3> wypisanie danych z tablicy,petli while</h3>";
        for($i=0;$i<7;$i++){
            echo '<br> Osoba to '.$tablica[$i];
        }
        //wyisanie danych z tablicy za pomoca tetli while
        echo "<h3> wypisanie danych z tablicy,petli while </h3>";
        $w=0;
        while($w<7){
            echo '<br> Osoba to '.$tablica[$w];
            $w=$w+1;
        }
    ?>
</body>
</html>