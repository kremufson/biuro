<?php
$db = mysqli_connect('localhost', 'root', '', 'podroze');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <div id="baner">BIURO PODRÓŻY</div>
    <div id="lewy">
        <h2>Promocje</h2>
        <table>
            <tr>
                <Td>Warszawa</Td>
                <Td>od 600 zł</Td>
            </tr>
            <tr>
                <Td>Wenecja</Td>
                <Td>od 1200 zł</Td>
            </tr>
            <tr>
                <Td>Paryż</Td>
                <Td>od 1200 zł</Td>
            </tr>
        </table>
    </div>
    <div id="srodek"></div>
    <div id="prawy">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 444555666</p>
    </div>
    <div id="dane"><h3>W poprzednich latach byliśmy...</h3></div>
    <div id="stopka"><a>Stronę wykonał: Rafał Lietzau</a></div>
</body>
</html>