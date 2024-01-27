<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    // 1. Lucru cu un tablou unidimensional
    echo "ex1 : ";
    $numericArray = [5, 2, 8, 1, 4, 9, 3, 6, 7];
    echo "<br>";
    echo "<br>";

    // a) Determinați elementul minim
    $min = min($numericArray);
    echo "a) Elementul minim este: $min\n";
    echo "<br>";
    echo "<br>";

    // b) Determinați minimul și maximul, returnându-le prin intermediul a doi parametri
    $min = PHP_INT_MAX;
    $max = PHP_INT_MIN;
    foreach ($numericArray as $number) {
        if ($number < $min) {
            $min = $number;
        }
        if ($number > $max) {
            $max = $number;
        }
    }
    echo "b) Elementul minim este: $min, iar elementul maxim este: $max\n";
    echo "<br>";
    echo "<br>";

    // c) Determinați dacă elementele din tablou sunt sortate crescător
    $isSorted = true;
    for ($i = 0; $i < count($numericArray) - 1; $i++) {
        if ($numericArray[$i] > $numericArray[$i + 1]) {
            $isSorted = false;
            break;
        }
    }
    if ($isSorted) {
        echo "c) Elementele sunt sortate crescător.\n";
    } else {
        echo "c) Elementele nu sunt sortate crescător.\n";
    }
    echo "<br>";
    echo "<br>";

    // d) Calculați media aritmetică a elementelor pozitive aflate pe poziții impare
    $sum = 0;
    $count = 0;
    foreach ($numericArray as $key => $value) {
        if ($key % 2 == 1 && $value > 0) {
            $sum += $value;
            $count++;
        }
    }
    $average = ($count > 0) ? ($sum / $count) : 0;
    echo "d) Media aritmetică a elementelor pozitive aflate pe poziții impare este: $average\n";
    echo "<br>";
    echo "<br>";

    // e) Ordonare crescătoare cu algoritmul BubbleSort
    $length = count($numericArray);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($numericArray[$j] > $numericArray[$j + 1]) {
                $temp = $numericArray[$j];
                $numericArray[$j] = $numericArray[$j + 1];
                $numericArray[$j + 1] = $temp;
            }
        }
    }
    echo "e) Tabloul sortat crescător cu BubbleSort: " . implode(', ', $numericArray) . "\n";
    echo "<br>";
    echo "<br>";

    // f) Ordonare descrescător cu algoritmul de sortare prin inserție
    for ($i = 1; $i < count($numericArray); $i++) {
        $key = $numericArray[$i];
        $j = $i - 1;
        while ($j >= 0 && $numericArray[$j] < $key) {
            $numericArray[$j + 1] = $numericArray[$j];
            $j--;
        }
        $numericArray[$j + 1] = $key;
    }
    echo "f) Tabloul sortat descrescător cu sortare prin inserție: " . implode(', ', $numericArray) . "\n";
    echo "<br>";
    echo "<br>";

    // g) Ordonare crescătoare cu algoritmul de sortare prin numărare
    // $counts = array_fill(0, $max, 0);
    // foreach ($numericArray as $value) {
    //     $counts[$value]++;
    // }
    // $sortedArray = [];
    // for ($i = 0; $i <= $max; $i++) {
    //     while ($counts[$i] > 0) {
    //         $sortedArray[] = $i;
    //         $counts[$i]--;
    //     }
    // }
    // echo "g) Tabloul sortat crescător cu sortare prin numărare: " . implode(', ', $sortedArray) . "\n";
    // echo "<br>";

    // h) Determinați dacă o valoare numerică dată aparține tabloului
    $searchValue = 7;
    if (in_array($searchValue, $numericArray)) {
        echo "h) Valoarea $searchValue există în tablou.\n";
    } else {
        echo "h) Valoarea $searchValue nu există în tablou.\n";
    }
    echo "<br>";
    echo "<br>";

    // i) Determinați dacă tabloul poate fi considerat mulțime
    $isSet = count(array_unique($numericArray)) == count($numericArray);
    if ($isSet) {
        echo "i) Tabloul poate fi considerat o mulțime.\n";
    } else {
        echo "i) Tabloul nu poate fi considerat o mulțime.\n";
    }
    echo "<br>";
    

    // j) Determinați dacă o valoare numerică dată aparține tabloului sortat crescător (căutare binară)
    // $searchValue = 6;
    // $left = 0;
    // $right = count($sortedArray) - 1;
    // $found = false;

    // while ($left <= $right) {
    //     $middle = $left + floor(($right - $left) / 2);
    //     if ($sortedArray[$middle] == $searchValue) {
    //         $found = true;
    //         break;
    //     } elseif ($sortedArray[$middle] < $searchValue) {
    //         $left = $middle + 1;
    //     } else {
    //         $right = $middle - 1;
    //     }
    // }

    // if ($found) {
    //     echo "j) Valoarea $searchValue există în tablou (căutare binară).\n";
    // } else {
    //     echo "j) Valoarea $searchValue nu există în tablou (căutare binară).\n";
    // }
    // echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // 2
    echo "ex2 : ";
    $X = [1, 2, 3, 4, 5];
    $Y = [3, 4, 5, 6, 7];

    echo "<br>";
    // a) Calculați suma S=X[1]*Y[1]+…+X[N]*Y[N]
    $sum = 0;
    if (count($X) == count($Y)) {
        for ($i = 0; $i < count($X); $i++) {
            $sum += $X[$i] * $Y[$i];
        }
    }
    echo "a) Suma S este: $sum\n";
    echo "<br>";
    echo "<br>";

    // b) Determinați intersecția
    $intersection = array_intersect($X, $Y);
    echo "b) Intersecția celor două tablouri: " . implode(', ', $intersection) . "\n";
    echo "<br>";
    echo "<br>";

    // c) Determinați reuniunea
    $union = array_unique(array_merge($X, $Y));
    echo "c) Reuniunea celor două tablouri: " . implode(', ', $union) . "\n";
    echo "<br>";
    echo "<br>";

    // d) Determinați numărul elementelor din Y care apar cel puțin o dată în X
    $countYInX = count(array_intersect($X, $Y));
    echo "d) Numărul de elemente din Y care apar cel puțin o dată în X este: $countYInX\n";
    echo "<br>";
    echo "<br>";

    // e) Determinați dacă elementele din X reprezintă un subșir al lui Y
    $isSubset = count(array_diff($X, $Y)) === 0;
    if ($isSubset) {
        echo "e) Elementele din X reprezintă un subșir al lui Y.\n";
    } else {
        echo "e) Elementele din X nu reprezintă un subșir al lui Y.\n";
    }
    echo "<br>";
    echo "<br>";

    // f) Sortați și aplicați interclasarea
    sort($X);
    sort($Y);
    $mergedArray = [];
    $i = $j = 0;
    while ($i < count($X) && $j < count($Y)) {
        if ($X[$i] < $Y[$j]) {
            $mergedArray[] = $X[$i];
            $i++;
        } else {
            $mergedArray[] = $Y[$j];
            $j++;
        }
    }
    while ($i < count($X)) {
        $mergedArray[] = $X[$i];
        $i++;
    }
    while ($j < count($Y)) {
        $mergedArray[] = $Y[$j];
        $j++;
    }
    echo "f) Tablourile sortate și interclasate: " . implode(', ', $mergedArray) . "\n";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    //3
    echo "ex3 : ";
    echo "<br>";
    $A = [1, 2, 3, 4, 5];
    $B = [10, 20, 30];
    $Poz = 2;

    if ($Poz >= 0 && $Poz <= count($A)) {
        array_splice($A, $Poz, 0, $B);
    } else {
        $A = array_merge($A, $B);
    }

    echo "Tabloul A după inserarea elementelor din B: " . implode(', ', $A) . "\n";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //4
    echo "ex4 : ";
    echo "<br>";
    $NOTE = [5, 8, 9, 6, 7, 8, 5, 9, 6, 7, 6, 4, 7, 8, 9, 10, 5, 6, 7, 8, 6, 7, 9, 5, 6, 4, 8, 7];


    // Varianta 1 - Frecvența de apariție a notelor
    $noteFrequencies = [];
    foreach ($NOTE as $note) {
        if (!isset($noteFrequencies[$note])) {
            $noteFrequencies[$note] = 1;
        } else {
            $noteFrequencies[$note]++;
        }
    }
    echo "Frecvența de apariție a notelor (varianta 1):\n";
    foreach ($noteFrequencies as $note => $frequency) {
        echo "Nota $note apare de $frequency ori\n";
    }

    echo "<br>";
    echo "<br>";
    // Varianta 1 - Media aritmetică a clasei
    $totalNotes = count($NOTE);
    $sumOfNotes = array_sum($NOTE);
    $average = $sumOfNotes / $totalNotes;
    echo "Media aritmetică a clasei (varianta 1): $average\n";
    echo "<br>";
    echo "<br>";

    // Varianta 2 - Frecvența de apariție a notelor
    $noteCount = array_count_values($NOTE);
    echo "Frecvența de apariție a notelor (varianta 2):\n";
    foreach ($noteCount as $note => $frequency) {
        echo "Nota $note apare de $frequency ori\n";
    }
    echo "<br>";
    echo "<br>";

    // Varianta 2 - Media aritmetică a clasei
    $average = array_sum($NOTE) / count($NOTE);
    echo "Media aritmetică a clasei (varianta 2): $average\n";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    //5
    echo "ex5 : ";
    $N = 1000; // Numărul de aruncări ale zarului
    $zar = [];

    for ($i = 0; $i < $N; $i++) {
        $randFace = rand(1, 6); // Generează o față aleatoare a zarului (de la 1 la 6)
        $zar[] = $randFace;
    }

    // Calcularea frecvenței fețelor zarului
    $faceFrequencies = array_count_values($zar);
    echo "<br>";

    echo "Frecvența fețelor zarului după $N aruncări:\n";
    for ($i = 1; $i <= 6; $i++) {
        $frequency = $faceFrequencies[$i] ?? 0; // Utilizăm ?? pentru a trata cazul în care o față nu apare deloc
        echo "Fața $i a apărut de $frequency ori\n";
    }

    ?>



</body>

</html>