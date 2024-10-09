<?php
$db = mysqli_connect('localhost', 'root', '', 'podroze');

$q = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis";
$r = mysqli_query($db, $q);
$obrazy = mysqli_fetch_all($r, MYSQLI_BOTH);

$q = "SELECT cel, dataWyjazdu FROM wycieczki WHERE dostepna = 0";
$r = mysqli_query($db, $q);
$wycieczki = mysqli_fetch_all($r, MYSQLI_BOTH);

mysqli_close($db);

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
    <div id="srodek">
        <h2>W tym roku jedziemy do...</h2>
            <?php foreach($obrazy as $obraz): ?>
                <img src="<?= $obraz['nazwaPliku'] ?>" alt="<?= $obraz['podpis'] ?>" title="<?= $obraz['podpis'] ?>" />
            <?php endforeach; ?>
        </div>
    <div id="prawy">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 444555666</p>
    </div>
    <div id="dane">
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
            <?php foreach($wycieczki as $wycieczka): ?>
                <li>Dnia <?= $wycieczka['dataWyjazdu'] ?> pojechaliśmy do <?= $wycieczka['cel'] ?></li>
            <?php endforeach ?>
        </ol>
    </div>
    <div id="stopka"><a>Stronę wykonał: Rafał Lietzau</a></div>
</body>
</html>