<!DOCTYPE HTML>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel = "stylesheet" type = "text/css" href = "styl4.css">
        <title>Restauracja Kulinaria.pl</title>
    </head>
    <body>
        <header>
            <h2>Restauracja Kulinaria.pl Zaprasza!</h2>
        </header>
        <section class = "leftp">
            <p>
                Dania mięsne zamówisz już od 
                <?php
                    $serwer = "localhost";
                    $login = "root";
                    $haslo = "";
                    $baza = "baza";

                    $connect = mysqli_connect($serwer, $login, $haslo, $baza);

                    $query = "SELECT min(cena) as mieso FROM dania where typ = 2";

                    $result = mysqli_query($connect, $query);
                    $row = mysqli_fetch_array($result);
                    echo $row["mieso"];
                    mysqli_close($connect);
                ?>
                złotych
            </p>
            <img src = "menu.jpg" alt = "Pyszne spaghetti"><br>
            <a href = "menu.jpg">Pobierz obraz</a>
        </section>
        <section class = "midp">
            <h3>Przekąski</h3><br>
            <p>
            <?php
                $serwer = "localhost";
                $login = "root";
                $haslo = "";
                $baza = "baza";

                $connect = mysqli_connect($serwer, $login, $haslo, $baza);

                $query = "SELECT id, nazwa, cena FROM dania where typ = 3";

                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result)){
                    echo $row["id"]." ".$row["nazwa"]." ".$row["cena"]."<br><br>";
                }
                mysqli_close($connect);
            ?>
            </p>
        </section>
        <section class = "rightp">
            <h3>Napoje</h3><br>
            <p>
            <?php
                $serwer = "localhost";
                $login = "root";
                $haslo = "";
                $baza = "baza";

                $connect = mysqli_connect($serwer, $login, $haslo, $baza);

                $query = "SELECT id, nazwa, cena FROM dania where typ = 4";

                $result = mysqli_query($connect, $query);
                while($row = mysqli_fetch_array($result)){
                    echo $row["id"]." ".$row["nazwa"]." ".$row["cena"]."<br><br>";
                }
                mysqli_close($connect);
            ?>
            </p>
        </section>
        <footer>
            Stronę internetową opracował: <i>Michał Siwek</i>
        </footer>
    </body>
</html>