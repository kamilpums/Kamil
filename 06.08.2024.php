<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lekcja</title>
</head>
<body>
    <?php
    $sigma=["Maks","Zuzia","Kuba","Noel","Aleks"];
    print_r($sigma);
    echo "<br>";
    echo $sigma[2];
    $test['imie']='Kamil';
    $test['nazwisko']='Nowak';
    $test['wiek']='18';
    print_r($test);
    echo '<br>'.$test{'imie'};
    echo "<br>";
    $dwuwymiar{0}{0}=1;
    $dwuwymiar{0}{1}=2;
    $dwuwymiar{0}{2}=3;
    $dwuwymiar{1}{0}=4;
    $dwuwymiar{1}{1}=5;
    $dwuwymiar{1}{2}=6;
    $dwuwymiar{2}{0}=7;
    $dwuwymiar{2}{1}=8;
    $dwuwymiar{2}{2}=9;
    print_r($dwuwymiar);

    for($i=0;$i<6;$i++){
        echo '<br>'.$sigma{$i};
    }


    ?>
</body>
</html>