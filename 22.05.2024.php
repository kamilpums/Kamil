<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ///instukcja warunkowa - pozwala wykonac działania w zależności od otrzymanych danych
    ///budowa funkcji watunkowej 
    /// if(warunek){
    ///     instrukcje
    /// }else{
    ///     instrukcje    
    ///}
    echo"<h2>Sprawdzanie czy liczba większa od 5 mniejsza od 5 lub równa 5</h2>";
    $liczba=15;
    if($liczba>5){
            echo "$liczba jest większa od 5";
    }else if($liczba<5){ ///elseif($liczba<5)
        echo "$liczba jets mnijesza od 5";
    }else{
        echo "$liczba jets równa 5";
    }
    ///sprawdzimy czy liczba jest podzielna przez 6
    echo "<h2>Sprawdzanie podzelności</h2>";
    if ($liczba%6==0){
        echo "$liczba jest podzielna przez 6";
    }else{
        echo "$liczba nie dizeli sie przez 6";
    }           
    echo "<h2>Sprawdzanie tekstu</h2>";
    $nazwisko="Jergas";
    if($nazwisko=="Jergas")
    ?>
</body>
</html>