<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8" />
        <title>Wynajmujemy samochody</title>
        <link rel = "stylesheet" type = "text/css" href = "styl.css" />
    </head>
    <body>
        <header>
            <h1>Wynajem Samochodów</h1>
        </header>
        <section class = "lewy">
            <h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
            <?php
                $connect = mysqli_connect("localhost", "root", "", "wynajem");

                $zapytanie1 = "SELECT id, model, kolor from samochody where marka like 'Toyota' and rocznik = 2014;";
                $result1 = mysqli_query($connect, $zapytanie1);

                $row1 = mysqli_fetch_array($result1);
                echo $row1['id'], " ", "Toyota", " ", $row1['model'], " ", "Kolor: ", " ", $row1['kolor'];
                mysqli_close($connect);

            ?>
            <h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
            <?php
                $connect = mysqli_connect("localhost", "root", "", "wynajem");

                $zapytanie2 = "SELECT id, marka, model, rocznik from samochody;";
                $result2 = mysqli_query($connect, $zapytanie2);

                while($row2 = mysqli_fetch_array($result2)){
                    echo $row2['id'], " ",$row2['marka'], " ", $row2['model'], " ", $row2['rocznik'], "<br><br>";
                }
                mysqli_close($connect);
            ?>
        </section>
        <section class = "srodkowy">
            <h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
            <?php
                $connect = mysqli_connect("localhost", "root", "", "wynajem");

                $zapytanie3 = "SELECT samochody.id, samochody.model, zamowienia.telefon from samochody inner join zamowienia on samochody.id = zamowienia.Samochody_id";
                $result3 = mysqli_query($connect, $zapytanie3);

                while($row3 = mysqli_fetch_array($result3)){
                    echo ("$row3[id] $row3[model] $row3[telefon]<br>");
                }
                mysqli_close($connect);
            ?>
        </section>
        <section class = "prawy">
            <h2>NASZA OFERTA</h2>
            <ul>
                <li>Fiat</li>
                <li>Toyota</li>
                <li>Opel</li>
                <li>Mercedes</li>
            </ul>
            <p>
                Tu pobierzesz naszą <a href = "komis.sql">bazę danych.</a>
            </p>
            <p>
                Autor strony: Michał Siwek
            </p>
        </section>
    </body>
</html>