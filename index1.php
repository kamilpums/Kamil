<?php
$conn = mysqli_connect('localhost', 'root', '', '1');
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="style.css">

</head>

<body>
<h2>Zamówienia</h2>
   <?php
    $zapytanie1 = "SELECT Samochody_id, Klient FROM zamowienia";
    $zapytanie1 = mysqli_query($conn, $zapytanie1);
    if ($zapytanie1) {
        while ($row = mysqli_fetch_assoc($zapytanie1)) {
            echo '<li>' . $row['Samochody_id'] . ' ' . $row['Klient'] . '</li>';
        }
    } else {
        echo "Błąd zapytania: " . mysqli_error($conn);
    }
    ?>
    <h2>Samochody</h2>
   <?php
    $zapytanie2 = "SELECT marka,rocznik,stan FROM samochody";
    $zapytanie2 = mysqli_query($conn, $zapytanie2);
    if ($zapytanie2) {
        while ($row = mysqli_fetch_assoc($zapytanie2)) {
            echo '<li>' . $row['marka'] . ' ' . $row['rocznik'] . ' ' . $row['stan'] . '</li>';
        }
    } else {
        echo "Błąd zapytania: " . mysqli_error($conn);
    }
    ?>

<h2>Marka</h2>
   <?php
    $zapytanie3 = "SELECT * FROM `samochody` where marka='Fiat'";
    $zapytanie3 = mysqli_query($conn, $zapytanie3);
    if ($zapytanie3) {
        while ($row = mysqli_fetch_assoc($zapytanie3)) {
            echo '<li>' . $row['marka'] . ' ' . $row['model'] . ' ' . $row['rocznik'] . ' ' .$row['kolor'] . ' ' .$row['stan'] . '</li>';
        }
    } else {
        echo "Błąd zapytania: " . mysqli_error($conn);
    }
    ?>
   </body> 
</html>