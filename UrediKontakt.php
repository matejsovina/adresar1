<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi kontakt</title>
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
        }

    </style>
</head>

<body>

    <?php

    $veza = OtvoriVezu();

    $sql = "SELECT * FROM kontakti WHERE Id=" . $_GET["id"];

    //echo $sql;
    
    $result = $veza->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        $id = $row["Id"];
        $ime = $row["ime"];
        $prezime = $row["prezime"];
        $adresa = $row["adresa"];
        $mobitel = $row["mobitel"];
        $email = $row["email"];
        $website = $row["website"];
    } else {
        echo "Nema podataka";
    }

    ?>
    <h1>Uredi podatke za <?php echo $ime . " " . $prezime ?></h1>
    <form action="SpremiIzmjenu.php" method="POST">
        ime:<br> <input type="text" name="ime" value="<?php echo $ime;?>"><br><br>
        prezime:<br> <input type="text" name="prezime" value="<?php echo $prezime;?>"><br><br>
        adresa: <br><textarea name="adresa" value="<?php echo $adresa;?>"></textarea><br><br>
        mobitel:<br> <input type="text" name="mobitel" value="<?php echo $mobitel;?>"><br><br>
        email: <br><input type="text" name="email" value="<?php echo $email;?>"><br><br>
        web: <br><input type="text" name="website" value="<?php echo $website;?>"><br><br>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <button type="submit">Spremi izmjene</button>
        <button type="reset">Izbrisi</button>
    </form>
</body>

</html>