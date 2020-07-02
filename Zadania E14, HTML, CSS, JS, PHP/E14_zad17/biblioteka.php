<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8" >
        <title>Biblioteka publiczna</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css" >
    </head>
    <body>
        <header>
            <h2>
                Miejska Biblioteka Publiczna w Książkowicach
            </h2>
        </header>
        <section class = "lewy">
            <h2>
                Dodaj czytelnika
            </h2>
            <form method = "POST">
                imię:<input type = "text" name = "imie"/><br>
                nazwisko:<input type = "text" name = "nazwisko"/><br>
                rok urodzenia:<input type = "text" name = "rok"/><br>
                <button type = "submit">DODAJ</button>
            </form>
            <?php
                error_reporting(0);
                $connect = mysqli_connect("localhost", "root", "", "biblioteka");
                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $rok = $_POST['rok'];
                $kod = substr($imie, 0, 2).substr($rok, strlen($rok) - 2, 2).substr($nazwisko, 0, 2);
                
                if(isset($imie) && isset($nazwisko) && isset($rok)){
                    echo "Czytelnik: $nazwisko został dodany do bazy danych";
                    mysqli_query($connect, "INSERT INTO czytelnicy(imie, nazwisko, kod) values('$imie', '$nazwisko', '$kod')");
                }
                mysqli_close($connect);
            ?>
        </section>
        <section class = "srodkowy">
            <img src = "biblioteka.png" alt = "biblioteka" />
            <h4>
                ul. Czytelnicza 25<br>
                12-120 Książkowice<br>
                tel.:123123123<br>
                e-mail: <a href = "mailto:biuro@bib.pl">biuro@bib.pl</a>
            </h4>
        </section>
        <section class = "prawy">
            <h3>
                Nasi czytelnicy
            </h3>
            <ul>
                <?php
                    $connect = mysqli_connect("localhost", "root", "", "biblioteka");
                    $query = mysqli_query($connect, "SELECT imie, nazwisko from czytelnicy");
                    while($row = mysqli_fetch_array($query)){
                        echo "<li>$row[imie] $row[nazwisko]</li>";
                    }
                    mysqli_close($connect);
                ?>
            </ul>
        </section>
        <footer>
            <p>Projekt witryny: Michał Siwek</p>
        </footer>
    </body>
</html>