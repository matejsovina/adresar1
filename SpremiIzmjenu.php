<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spremi izmjenu</title>
</head>

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
            color: white;
            margin-bottom: 20px;
        }
        input, textarea {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1rem;
        }
        button {
            background-color: #0066cc;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 10px;
        }
        button:hover {
            background-color: #004d99;
        }</style>

<body>

    <?php

    $id = $_POST["id"];
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];
    $adresa = $_POST["adresa"];
    $mobitel = $_POST["mobitel"];
    $email = $_POST["email"];
    $website = $_POST["website"];

    $veza = OtvoriVezu();

    $sql = "UPDATE kontakti SET ime='$ime' , prezime='$prezime' , adresa='$adresa' , mobitel='$mobitel' , email='$email' ,  website='$website' WHERE id=$id";

    if ($veza->query($sql) === TRUE) {
        echo "<p>Zapis je uspješno spremljen.</p>";
    } else {
        echo " Greška: " . $veza->error;
    }

    $veza->close();
    
    ?>

</body>

</html>