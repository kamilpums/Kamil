<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Tablica jest to specjalny tryb danych który pozwala przechowywać wiele różnych wartości w sobie
        //deklracja tablicy 
        $tablica[0]="Test";
        $tablica[1]=11;
        $tablica[2]=11.4;
        //inny sposób deklaracji tablicy
        $dane=array("Ola",12,15.3,"Test");
        //wypisane wszytskie elementy tablicy 
        print_r($dane);
        //wypisanie pojedynczego elementu
        echo "<br> $dane[0]";
        echo "<br> $dane[1]";
        echo "<br> $dane[2]";
        echo "<br> $dane[3]";
       //Tablice wielowymiarowe
       //służą do przechowywania większej ilości danych możemy porównać tą strukturę danych do tabeli która ma w jdenym wierszu kilka kolumn i w każdym polu przechowuje wartość
       //deklracja tablicy dwuwumiarowej - sposób 1
       $tabdwuwymiar[0][0]="a";
       $tabdwuwymiar[0][1]="b";
       $tabdwuwymiar[1][0]=1;
       $tabdwuwymiar[1][1]=2;
       //wypisanie zawartości tablicy dwuwymiarowej
       echo"<br> tablica dwuwymiarowa 1 <br>";
       print_r($tabdwuwymiar);
       //deklracja tablicy dwuwumiarowej - sposób 2
       $tab2=array(
        array("Test","dwa","zapis"),
        array(1,2,3),
        array(1.2,4.3,4.7)
       );
       echo "<br> tablica dwuwymiarowa 2 <br>";
       print_r($tab2);
       //zadanie do zrobienia na leckji 1
       $tab[0][0]="Ala";
       $tab[0][1]="Kot";
       $tab[1][1]="10";
       $tab[1][1]="23";
       $tab[2][0]="45.5";
       $tab[2][1]="32.8";
       $tab[3][0]="Błyskotliwość";
       $tab[3][1]="Spryt";
       echo"<br> deklracja tablicy na lekcji <br>";
       print_r($tab);
       echo "<br>" .$tab [1][1];
       echo "<br>" .$tab [2][0]. "<br>".$tab[2][1];
       $tab[2][0]="Klasa3Tie";
       echo "<br>".$tab[2][0];
    
       echo"<h1>Tablice asocjacyjne</h1>";
       //Tablice asocjacyjne są to tabele które zamiast liczb w indeksach zawierają nazwy.Ma to na celu ułatwienie dostępu do danych i łatwiejszego poruszania sie po tabliacach.
       //Na przykład jak indeksy będą sie zazywać "imie"....
       //deklaracja 1 sposób
       $asocjacja['imie']="Kamil";
       $asocjacja['nazwisko']="Ślimak";
       $asocjacja['wiek']=18;
       //wypisanie wartości
       echo "<br>";
       print_r($asocjacja);
       echo "<br>";
       echo 'nazwisko: '.$asocjacja['nazwisko'];
       //Zadanie na lekcji
       $produkt['jogurt']=1.5;
       $produkt['masło']=4.3;
       $produkt['mleko']=2.56;
       $produkt['ser']=35.2;
       $produkt['chleb']=5.4;
       $produkt['szynka']=52.6;
       $produkt['pomidor']=21.4;
       echo"<br>";
       echo 'szynka: '.$produkt['szynka'];
       echo"<br>";
       echo 'pomidor: '.$produkt['pomidor'];
       echo"<br>";
       echo 'ser: '.$produkt['ser'];
       echo"<br>";
       echo 'masło: '.$produkt['masło'];
       echo"<br>";
       print_r($produkt);


     

?>
</body>
</html>
