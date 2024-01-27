<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    //1
    echo "ex1 : ";
    $m = 5;
    $n = 10;

    if (($m % 2 == 0) && ($n % 2 == 0) || ($n % 2 == 1) && ($m % 2 == 1)) {
        echo "Adevărat";
    } else {
        echo "Fals";
    }

    echo "<br>";
    echo "<br>";

    //2
    echo "ex2 : ";
    $x = 5;
    $y = 6;

    if (abs($x - $y) == 1) {
        echo "Adevărat";
    } else {
        echo "Fals";
    }

    echo "<br>";
    echo "<br>";

    //3
    echo "ex3 : ";
    $a = 3;
    $b = 16;
    $c = 4.2;

    $temp = $a;
    $a = $b;
    $b = $c;
    $c = $temp;

    echo "a = $a, b = $b, c = $c";


    echo "<br>";
    echo "<br>";

    //4
    echo "ex4 : ";
    $n = 4;
    $suma = 0;

    for ($i = 2; $i <= 2 * $n; $i += 2) {
        $suma += $i;
    }

    echo "Suma primelor $n numere pare este $suma";

    echo "<br>";
    echo "<br>";

    //5
    echo "ex5 : ";
    $a = 5;
    $b = 6;
    $c = 7;

    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        $perimetru = $a + $b + $c;
        $s = sqrt(($perimetru / 2) * (($perimetru / 2) - $a) * (($perimetru / 2) - $b) * (($perimetru / 2) - $c));
        echo "Cele trei numere formează un triunghi. Perimetru: $perimetru, Arie: $s";
        echo ",";
        if ($a == $b && $b == $c) {
            echo "Triunghi echilateral";
        } elseif ($a == $b || $a == $c || $b == $c) {
            echo "Triunghi isoscel";
        } else {
            echo "Triunghi scalen";
        }
    } else {
        echo "Cele trei numere nu pot forma un triunghi.";
    }

    echo "<br>";
    echo "<br>";


    //6
    echo "ex6 : ";
    $a = 5;
    $b = 6;
    $c = 7;

    $perimetru = $a + $b + $c;
    $s = sqrt(($perimetru / 2) * (($perimetru / 2) - $a) * (($perimetru / 2) - $b) * (($perimetru / 2) - $c));

    echo "Perimetru: $perimetru, Arie: $s";

    echo "<br>";
    echo "<br>";

    //7
    echo "ex7 : ";
    $n = 127;
    $ultimaCifra = $n % 10;
    echo "Ultima cifră a numărului $n este $ultimaCifra";

    echo "<br>";
    echo "<br>";

    //8
    echo "ex8 : ";
    $n = 5;
    $suma = 0;
    $contor = 0;

    for ($i = -1; $i >= -$n; $i -= 2) {
        $suma += $i;
        $contor++;
    }

    if ($contor > 0) {
        $media = $suma / $contor;
        echo "Media aritmetică a numerelor negative impare mai mari decât -$n este $media";
    } else {
        echo "Nu există numere negative impare mai mari decât -$n.";
    }

    echo "<br>";
    echo "<br>";


    //9
    echo "ex9 : ";
    $a = 7;
    $b = 2;
    $c = 9;

    if ($a >= $b && $a >= $c) {
        if ($b >= $c) {
            echo "$a, $b, $c";
        } else {
            echo "$a, $c, $b";
        }
    } elseif ($b >= $a && $b >= $c) {
        if ($a >= $c) {
            echo "$b, $a, $c";
        } else {
            echo "$b, $c, $a";
        }
    } else {
        if ($a >= $b) {
            echo "$c, $a, $b";
        } else {
            echo "$c, $b, $a";
        }
    }

    echo "<br>";
    echo "<br>";

    //10
    echo "ex10 : ";
    $a = 10;
    $b = 30;
    $count = 0;

    for ($i = $a; $i <= $b; $i++) {
        if ($i % 3 == 0) {
            $count++;
        }
    }

    echo "Între $a și $b, sunt $count numere divizibile prin 3.";

    echo "<br>";
    echo "<br>";

    //11
    echo "ex11 : ";
    $a = 8;
    $b = 6;

    $perimetru = 2 * ($a + $b);
    $arie = $a * $b;
    $diagonala = sqrt($a * $a + $b * $b);

    echo "Perimetru: $perimetru, Arie: $arie, Lungime diagonala: $diagonala";

    echo "<br>";
    echo "<br>";


    //12
    echo "ex12 : ";
    $numar = -5;
    $modul = abs($numar);

    echo "Modulul numărului $numar este $modul";

    echo "<br>";
    echo "<br>";

    //13
    echo "ex13 : ";
    $an = 2024;

    if (($an % 4 == 0 && $an % 100 != 0) || $an % 400 == 0) {
        echo "$an este un an bisect.";
    } else {
        echo "$an nu este un an bisect.";
    }

    echo "<br>";
    echo "<br>";

    //14
    echo "ex14 : ";
    $n = 4;
    $suma = 0;
    $contor = 0;

    for ($i = 1; $contor < $n; $i += 2) {
        $suma += $i;
        $contor++;
    }

    echo "Suma primelor $n numere impare este $suma";

    echo "<br>";
    echo "<br>";

    //15
    echo "ex15 : ";
    $n = 42;

    if ($n >= 10 && $n <= 99) {
        echo "Da";
    } else {
        echo "Nu";
    }
    echo "<br>";
    echo "<br>";




    ?>

</body>

</html>