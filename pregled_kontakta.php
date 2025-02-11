<?php

include("OtvoriVezu.php");

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregled Kontakta</title>
    <link rel="stylesheet" href="style_aplikacija.css">

</head>

<body>

<h2>Pregled kontakta: </h2>    

<table >
    <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Adresa</th>
            <th>Mobitel</th> 
            <th>Email</th>
            <th>Web stranica</th>
            <th>Uređivanje</th>
            <th>Brisanje</th>
        </tr>
    </thead>
<tbody>
<?php


// Spajanje na bazu
$veza = otvoriVezu();

// SQL UPIT
$sql = "SELECT * FROM kontakti";

$result = $veza->query($sql);

if ($result->num_rows > 0){

            while($row = $result->fetch_assoc())
            {

                $id = $row["Id"];
                $ime = $row["ime"];
                $prezime = $row["prezime"];
                $adresa = $row["adresa"];
                $mobitel = $row["mobitel"];
                $email = $row["email"];
                $webstr = $row["website"];

                echo "<tr>";
                echo "<td>$ime</td>";
                echo "<td>$prezime</td>";
                echo "<td>$adresa</td>";
                echo "<td>$mobitel</td>";
                echo "<td>$email</td>";
                echo "<td>$webstr</td>";
                echo "<td> <a href='UrediKontakt.php?id=$id'> Uredi </a> </td>";
                echo "<td> <a href='ObrisiKontakt.php?id=$id'> Obriši </a> </td>";
                echo "</tr>";

            }
            

}

?>
</tbody>


</table>

</body>
</html>