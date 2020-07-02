<?php
    $connect = mysqli_connect("localhost", "root", "", "dane");

    $tytul = $_POST['tytul'];
    $gatunek = $_POST['gatunek'];
    $rok = $_POST['rok'];
    $ocena = $_POST['ocena'];

    if(isset($tytul) && isset($gatunek) && isset($rok) && isset($ocena)){
        $query = mysqli_query($connect, "INSERT INTO filmy(gatunki_id, tytul, rok, ocena) values('$gatunek', '$tytul', '$rok', '$ocena')");
        echo "Film $tytul został dodany do bazy";
    }
    mysqli_close($connect);
?>