<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisanje kontakta</title>
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
    
<h1>Brisanje kontakta</h1>

<?php

    $id = $_GET["id"];

    $veza = OtvoriVezu();

    $sql = "DELETE FROM kontakti WHERE ID = $id";

    if ($veza->query($sql) === TRUE){
        echo"<p>Kontakt je uspješno izbrisan iz baze.</p>";
    }else{
        echo"<p>Greška: $veza->error</p>";
    }

    $veza->close();

?>

</body>
</html>