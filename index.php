<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aplikacija</title>
    <link rel="stylesheet" href="style_aplikacija.css">

    <style>

* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body background gradient and overall styling */
        body {
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            font-family: Arial, sans-serif;
            color: darkblue;
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
        }

        h1 {
            color: darkblue;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 50px;
            border: 1px solid darkblue;
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
            margin-top: 20px;
        }

        button:hover {
            background-color: #004d99;
        }

    </style>
</head>
<body>
<div class="container">

    <h1>Unos kontakta:</h1>

    <form action="SpremiKontakt.php" method="POST">

        ime: <input type="text" name="ime">
        <br><br>
        prezime: <input type="text" name="prezime">
        <br><br>
        adresa: <input type="text" name="adresa">
        <br><br>
        mobitel: <input type="text" name="mobitel">
        <br><br>
        e-mail: <input type="text" name="email">
        <br><br>
        web stranica: <input type="text" name="website">

        <button type="submit">Spremi</button>

    </form>

</div>
</body>
</html>
