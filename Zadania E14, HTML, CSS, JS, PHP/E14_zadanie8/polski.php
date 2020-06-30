<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8" />
        <title>Szkoła Ponadgimnazjalna</title>
        <link rel = "stylesheet" type = "text/css" href = "styl.css" />
    </head>
    <body>
        <header>
            <h1>Oceny uczniów: język polski</h1>
        </header>
        <section class = "lewy">
            <h2>Lista uczniów:</h2>
            <ol>
            <?php
                $connect = mysqli_connect("localhost", "root", "", "szkola");

                $zapytanie1 = "SELECT imie, nazwisko from uczen;";
                $result1 = mysqli_query($connect, $zapytanie1);
                
                while($row1 = mysqli_fetch_array($result1)){
                    echo("<li>$row1[imie] $row1[nazwisko]</li>");
                }

                mysqli_close($connect);
            ?>
            </ol>
        </section>
        <section class = "prawy">
            <h2>Uczeń:
            <?php
                $connect = mysqli_connect("localhost", "root", "", "szkola");

                $zapytanie2 = "SELECT imie, nazwisko from uczen where id = 2;";
                $result2 = mysqli_query($connect, $zapytanie2);

                $row2 = mysqli_fetch_array($result2);
                echo("$row2[imie] $row2[nazwisko]");

                mysqli_close($connect);
            ?></h2>
            <br><br>
            <p>Średnia ocen z języka polskiego:
            <?php
                $connect = mysqli_connect("localhost", "root", "", "szkola");

                $zapytanie3 = "SELECT avg(ocena) as ocena from ocena inner join uczen on uczen.id = ocena.uczen_id where ocena.przedmiot_id = 1 and uczen.id = 2;";
                $result3 = mysqli_query($connect, $zapytanie3);

                $row3 = mysqli_fetch_array($result3);
                echo("$row3[ocena]");
                
                mysqli_close($connect);
            ?></p>
        </section>
        <footer>
            <h3>Zespół Szkół Ponadgimnazjalnych</h3><br><br>
            <p>Stronę opracował: Michał Siwek</p>
        </footer>
    </body>
</html>