<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Komis Samochodowy</title>
        <link rel="stylesheet" href="auto.css">
    </head>
    <body>
        <header>
            <h1>SAMOCHODY</h1>
        </header>

        <div id="lewy">
            <h2>Wykaz samochodów</h2>

            <ul>
                <?php
                    // Skrypt #1
                    $conn = new mysqli("localhost","root","","komis");

                    $sql = "SELECT id, marka, model FROM Samochody;";
                    $result = $conn->query($sql);
                    
                    while($row = $result -> fetch_array()) {
                        echo "<li>".$row["id"]." ".$row["marka"]." ".$row["model"]."</li>";
                    }
    
                    $conn -> close();
                ?>
            </ul>
                
            <h2>Zamówienia</h2>

            <ul>
                <?php
                    // Skrypt #2
                    $conn = new mysqli("localhost","root","","komis");

                    $sql = "SELECT Samochody_id,Klient FROM Zamowienia;";
                    $result = $conn->query($sql);
                    
                    while($row = $result -> fetch_array()) {
                        echo "<li>".$row["Samochody_id"]." ".$row["Klient"]."</li>";
                    }
    
                    $conn -> close();
                ?>
            </ul>
        </div>

        <div id="prawy">
            <h2>Pełne dane: Fiat</h2>
            <?php
                // Skrypt #3
                $conn = new mysqli("localhost","root","","komis");

                $sql = "SELECT * FROM Samochody WHERE marka='Fiat';";
                $result = $conn->query($sql);
                
                while($row = $result -> fetch_array()) {
                    echo $row["id"]." / ".$row["marka"]." / ".$row["model"]." / ".$row["rocznik"]." / ".$row["kolor"]." / ".$row["stan"]." / <br>";
                }

                $conn -> close();
            ?>
        </div>

        <footer>
            <table>
                <tr>
                    <td><a href="kwerendy.txt">Kwerendy</a></td>
                    <td>Autor: <a href="https://ee-informatyk.pl/" target="_blank" style="color: #fff;">EE-Informatyk.pl</a></td>
                    <td><img src="auto.png" alt="komis samochodowy"></td>
                </tr>
            </table>
        </footer>
    </body>
</html>