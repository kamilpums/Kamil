<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //dekralacja tablicy
    $dane=array("imie" => "Tomasz", "nazwisko" => "Kowalski", "wiek" => "14", "szkoła" => "TEB", "rozmiar_buta" => "42", "wzrost" => "183", "srednia_ocen" => "4.03" );
    //wypisanie przykładopwego elemntu z tablicy asocjacyjnej 
    echo $dane["wiek"];
    echo "<h2> Wypisanie pętli for</h2>";
    //próba wypisania wartości za pomocą petli for
    for($i=0; $i<4;$i++){
        echo $dane[$i]."<br>";
    }
    echo "<h2> Wypisanie pętli while</h2>";
    //próba wypisanie wartości za pomocą pętli while
    $iterator=0;
    while($iterator<4){
        echo $dane[$iterator]."<br>";
        $iterator=$iterator+1;
    }
    
//wykorzystanie pętli foreach do tablicy asocjacyjnej
    echo "<h3>foreach w tablicy asocjacyjnej</h3>";
    foreach($dane as $klucz=> $wartosc){
        echo "$klucz : $wartosc <br>";
    }
    ?>
</body>
</html>