<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>

<?php
// Problem 1: Raportul dintre numărul vocalelor și numărul cifrelor din șir.
echo "ex1 : ";
echo "<br>";
$str1 = "Ionel are 10 lei noi";
$vowels = 0;
$digits = 0;

for ($i = 0; $i < strlen($str1); $i++) {
    $char = $str1[$i];
    if (ctype_alpha($char) && in_array(strtolower($char), ['a', 'e', 'i', 'o', 'u'])) {
        $vowels++;
    } elseif (ctype_digit($char)) {
        $digits++;
    }
}

$ratio = $vowels / $digits;
echo "Raportul dintre numărul vocalelor și numărul cifrelor: " . $ratio . "\n";
echo "<br>";
echo "<br>";

// Problem 2: Poziția primului caracter litera mare din șir.
echo "ex2 : ";
echo "<br>";
$str2 = "tatal lui Gigel merge la Metrou";
$position2 = -1;

for ($i = 0; $i < strlen($str2); $i++) {
    if (ctype_upper($str2[$i])) {
        $position2 = $i;
        break;
    }
}

echo "Poziția primului caracter litera mare: " . $position2 . "\n";
echo "<br>";
echo "<br>";

// Problem 3: Numărul vocalelor aflate pe poziții impare în șirul dat.
echo "ex3 : ";
echo "<br>";
$str3 = "mama spala vase";
$count3 = 0;

for ($i = 0; $i < strlen($str3); $i++) {
    if ($i % 2 == 0 && in_array(strtolower($str3[$i]), ['a', 'e', 'i', 'o', 'u'])) {
        $count3++;
    }
}

echo "Numărul vocalelor aflate pe poziții impare: " . $count3 . "\n";
echo "<br>";
echo "<br>";

// Problem 4: Poziția ultimului caracter cifră din text.
echo "ex4 : ";
echo "<br>";
$str4 = "2+3 fac cinci";
$position4 = -1;

for ($i = strlen($str4) - 1; $i >= 0; $i--) {
    if (ctype_digit($str4[$i])) {
        $position4 = $i;
        break;
    }
}

echo "Poziția ultimului caracter cifră: " . $position4 . "\n";
echo "<br>";
echo "<br>";

// Problem 5: Procentul literelor mari din șir.
echo "ex5 : ";
echo "<br>";
$str5 = "euMERg";
$uppercaseCount = 0;
$letterCount = 0;

for ($i = 0; $i < strlen($str5); $i++) {
    if (ctype_alpha($str5[$i])) {
        $letterCount++;
        if (ctype_upper($str5[$i])) {
            $uppercaseCount++;
        }
    }
}

$percentage = ($uppercaseCount / $letterCount) * 100;
echo "Procentul literelor mari: " . $percentage . "%\n";
echo "<br>";
echo "<br>";

// Problem 6: Verificare dacă numărul de apariții ale caracterului C1 este egal cu numărul de apariții ale caracterului C2 în S.
echo "ex6 : ";
echo "<br>";
$s6 = "aurul alb";
$c1 = 'a';
$c2 = 'u';
$countC1 = substr_count($s6, $c1);
$countC2 = substr_count($s6, $c2);
$result6 = ($countC1 == $countC2) ? "Da" : "Nu";
echo "Verificare apariții C1 și C2: " . $result6 . "\n";
echo "<br>";
echo "<br>";

// Problem 7: Criptarea și decriptarea unui text.
echo "ex7 : ";
echo "<br>";
function encryptDecrypt($text, $key) {
    $result = '';
    $len = strlen($text);

    for ($i = 0; $i < $len; $i++) {
        $result .= chr(ord($text[$i]) + $key);
    }

    return $result;
}

$text7 = "acasa";
$key7 = 1;
$encrypted7 = encryptDecrypt($text7, $key7);
$decrypted7 = encryptDecrypt($encrypted7, -$key7);
echo "Text criptat: " . $encrypted7 . "\n";
echo "   Text decriptat: " . $decrypted7 . "\n";
echo "<br>";
echo "<br>";

// Problem 8: Afișarea piramidei.
echo "ex8 : ";
echo "<br>";
$n8 = 5;
for ($i = 1; $i <= $n8; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo chr(64 + $i) . " ";
    }
    echo "\n";
}
echo "<br>";
echo "<br>";

// Problem 9: Afișarea adreselor distincte ordonate alfabetic.
echo "ex9 : ";
echo "<br>";
$addresses9 = "john@example.com, alice@example.com, bob@example.com, john@example.com";
$uniqueAddresses9 = array_unique(array_map('trim', explode(',', $addresses9)));
sort($uniqueAddresses9);
echo "Adrese distincte ordonate alfabetic: " . implode(", ", $uniqueAddresses9) . "\n";
echo "<br>";
echo "<br>";

// Problem 10: Găsirea serverului și utilizatorului cel mai des întâlnite.
echo "ex10 : ";
echo "<br>";
$addresses10 = "john@example.com, alice@example.com, bob@example.com, john@example.com";
$addressArray10 = array_map('trim', explode(',', $addresses10));
$addressCounts10 = array_count_values($addressArray10);
arsort($addressCounts10);
$mostCommonAddress10 = key($addressCounts10);
$mostCommonUserServer10 = explode('@', $mostCommonAddress10);
echo "Serverul cel mai comun: " . $mostCommonUserServer10[1] . ", Utilizatorul cel mai comun: " . $mostCommonUserServer10[0] . "\n";
echo "<br>";
echo "<br>";

// Problem 11: Extragerea cuvintelor din text și afișarea în ordinea crescătoare a lungimii.
echo "ex11 : ";
echo "<br>";
$text11 = "cu, cuvintele, separate, prin spațiu și punct. șirul de caractere.";
$words11 = preg_split('/[ ,.]+/', $text11);
usort($words11, function ($a, $b) {
    if (strlen($a) == strlen($b)) {
        return strcmp($a, $b);
    }
    return strlen($a) - strlen($b);
});
echo "Cuvinte în ordine crescătoare: " . implode(", ", $words11) . "\n";
echo "<br>";
echo "<br>";

// Problem 12: Determinarea salariilor minim, maxim și a angajaților cu salariile cele mai mici și cele mai mari.
echo "ex12 : ";
echo "<br>";
$salaries12 = [
    "John" => 2500,
    "Alice" => 3000,
    "Bob" => 2000,
    "Eve" => 300


];
$minSalary12 = min($salaries12);
$maxSalary12 = max($salaries12);
$minSalaryEmployees12 = array_keys($salaries12, $minSalary12);
$maxSalaryEmployees12 = array_keys($salaries12, $maxSalary12);
echo "Salariul minim: $minSalary12, Salariul maxim: $maxSalary12\n";
echo "   Angajații cu salariile cele mai mici: " . implode(", ", $minSalaryEmployees12) . "\n";
echo "   Angajații cu salariile cele mai mari: " . implode(", ", $maxSalaryEmployees12) . "\n";
echo "<br>";
echo "<br>";

// Problem 13: Construirea unui tablou T cu X caractere din șirul S.
echo "ex13 : ";
echo "<br>";
$S13 = "Construirea unui tablou T cu X caractere din șirul S.";
$X13 = 7;
$T13 = [];

for ($i = 0; $i < ceil(strlen($S13) / $X13); $i++) {
    $T13[] = substr($S13, $i * $X13, $X13);
}

echo "Tablou T: " . implode(", ", $T13) . "\n";
echo "<br>";
echo "<br>";

// Problem 14: Soluția pentru ecuații de gradul 1.
// $equations14 = "2x+4=0, x-2=0, -3x-6=0, 2=0, 0x+0=0";
// $equationArray14 = array_map('trim', explode(',', $equations14));
// foreach ($equationArray14 as $index => $equation) {
//     $parts = explode("=", $equation);
//     $left = $parts[0];
//     $right = $parts[1];
//     if (strpos($left, "x") !== false) {
//         $coeff = str_replace("x", "", $left);
//         if ($coeff == 0) {
//             echo "14. Ecuația " . ($index + 1) . " are soluția: x aparține lui R\n";
//         } else {
//             $solution = -1 * $right / $coeff;
//             echo "14. Ecuația " . ($index + 1) . " are soluția: " . $solution . "\n";
//         }
//     } else {
//         if ($left == 0 && $right == 0) {
//             echo "14. Ecuația " . ($index + 1) . " are soluția: x aparține lui R\n";
//         } else {
//             echo "14. Ecuația " . ($index + 1) . " are soluția: nu are soluție\n";
//         }
//     }
// }
?>

</body>
</html>