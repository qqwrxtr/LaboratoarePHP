<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// 1. Comparare fișiere text
function comparareFisiere($numeFisier1, $numeFisier2) {
    // Verifică existența fișierelor
    if (!file_exists($numeFisier1) || !file_exists($numeFisier2)) {
        return false;
    }

    // Citeste continutul fisierelor
    $continut1 = file_get_contents($numeFisier1);
    $continut2 = file_get_contents($numeFisier2);

    // Compara continutul caracter cu caracter
    return ($continut1 === $continut2);
}

// 2. Numere distincte și frecvență de apariție
function numereDistincte($numeFisierIn, $numeFisierOut) {
    // Citeste numerele din fisierul numere.in
    $numere = file($numeFisierIn, FILE_IGNORE_NEW_LINES);

    // Calculeaza frecventa de aparitie
    $frecventa = array_count_values($numere);

    // Sorteaza numerele in ordine crescatoare
    sort($numere);

    // Scrie rezultatele in fisierul numere.out
    $rezultate = "";
    foreach ($numere as $numar) {
        $rezultate .= "$numar: " . $frecventa[$numar] . " aparitii\n";
    }
    file_put_contents($numeFisierOut, $rezultate);
}

// 3. Contor accesari/descarcari
function actualizareContor($numeFisier) {
    // Verifica existenta fisierului
    if (!file_exists($numeFisier)) {
        file_put_contents($numeFisier, "0");
    }

    // Citeste contorul curent
    $contor = (int)file_get_contents($numeFisier);

    // Incrementeaza contorul
    $contor++;

    // Scrie noul contor in fisier
    file_put_contents($numeFisier, $contor);

    // Afiseaza numarul de accesari/descarcari
    echo "Numarul de accesari/descarcari: $contor";
}

// Demonstrare utilizare
$numeFisier1 = "fisier1.txt";
$numeFisier2 = "fisier2.txt";
$numeFisierIn = "numere.in";
$numeFisierOut = "numere.out";

// 1. Comparare fișiere text
if (comparareFisiere($numeFisier1, $numeFisier2)) {
    echo "Fisierele sunt identice.\n";
} else {
    echo "Fisierele nu sunt identice.\n";
}

echo "<br>";

// 2. Numere distincte și frecvență de apariție
numereDistincte($numeFisierIn, $numeFisierOut);

echo "<br>";

// 3. Contor accesari
actualizareContor("contor_accesari.txt");

echo "<br>";

// 3. Contor descarcari
actualizareContor("contor_descarcari.txt");

echo "<br>";

?>

</body>
</html>