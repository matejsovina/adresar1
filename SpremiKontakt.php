<?php

include("OtvoriVezu.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <style>

body {
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.7);
            width: 50%;
            margin: auto;
            color: darkblue;
        }
        h1 {
            color: darkblue;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.1rem;
            margin: 5px 0;
        }

    </style>
</head>
<body>
    
<div class="container">

<h1>Podatci:</h1>

<?php


$ime = $_POST["ime"];

$prezime = $_POST["prezime"];

$adresa = $_POST["adresa"];

$mobitel = $_POST["mobitel"];

$email = $_POST["email"];

$website = $_POST["website"];



echo "<p>$ime</p>";
echo "<p>$prezime</p>";
echo "<p>$adresa</p>";
echo "<p>$mobitel</p>";
echo "<p>$email</p>";
echo "<p>$website</p>";


// spremanje u datoteku
/*
$myfile = fopen("datoteka.txt", "a") or die("nije moguće otvoriti datoteku");
$txt = "$ime, $prezime, $adresa, $mobitel, $grad\n";
fwrite($myfile, $txt);
fclose($myfile);*/



// spremanje u bazu podataka
    $veza = OtvoriVezu();

    $sql = "INSERT INTO kontakti(ime, prezime, adresa, mobitel, email, website) VALUES('$ime', '$prezime', '$adresa', '$mobitel', '$email', '$website')";

    if($veza->query($sql) === TRUE) {
        echo "<p>Zapis je uspješno spremljen.<p/>";
    } else {
     "Greška: " . $veza->error;
    }
    $veza->close();

?>

</div>

</body>
</html>