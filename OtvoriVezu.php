<?php

function OtvoriVezu() {

    //podatci za spajanje
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adresar";

    //kreiraj vezu na bazu
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");

    //provjeri vezu
    if($conn->connect_error) {
        die("Greška: " . $conn->connect_error);
    }

    echo "<!-- USPJEŠNO SPOJEN NA BAZU -->";

    return $conn;

}

?>