<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .df{
            display: flex;
            justify-content : center;
        }
        .chessboard {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
            width: 400px;
            border: 1px solid black;
            transform: translateX(765px);
        }

        .cell {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .white {
            background-color: #fff;
        }

        .black {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>

<?php

//1 
$k = 3;
$n = 5;
echo "<br>";

for($i = 1 ; $i<=$n ; $i++){
    echo $k."  ";
}


//2 
echo '<div style="display: flex; flex-wrap: wrap">';

for ($i = 0; $i <= 10; $i++) {
    echo '<div style="flex: 1; margin: 5px;">';

    for ($k = 0; $k <= 10; $k++) {
        $sum = $i * $k;

        echo '
            <div style="margin: 5px; padding: 5px;text-align: center;">
                <p>' . $i . ' * ' . $k . ' = ' . $sum . '</p>
            </div>
        ';
    }

    echo '</div>';
}

echo '</div>';
echo "<br>";


//3
echo "<div class='chessboard'>";
$isWhite = true;
for ($row = 1; $row <= 8; $row++) {
    for ($col = 1; $col <= 8; $col++) {
        $class = $isWhite ? 'white' : 'black';
        echo "<div class='cell $class'></div>";
        $isWhite = !$isWhite;
    }
    $isWhite = !$isWhite; 
}
echo '</div>';
echo "<br>";


//4
$zi_nastere = 30;
$luna_nastere = 1;
$an_nastere = 2005;


$data_curenta = new DateTime();
$zi_curenta = $data_curenta->format('d');
$luna_curenta = $data_curenta->format('m');
$an_curent = $data_curenta->format('Y');

$an_diff = $an_curent - $an_nastere;
$luna_diff = $luna_curenta - $luna_nastere;
$zi_diff = $zi_curenta - $zi_nastere;


if ($zi_diff < 0) {
    $luna_diff -= 1;
    $zi_diff += (int)$data_curenta->format('t');
}


if ($luna_diff < 0) {
    $an_diff -= 1;
    $luna_diff += 12;
}

echo "Ai $an_diff ani, $luna_diff luni și $zi_diff zile.";
echo "<br>";
echo "<br>";

//5
for ($i = 1; $i <= 9; $i++) {
    $numar = '';
    for ($j = 1; $j <= $i; $j++) {
        $numar .= $j;
    }
    $rezultat = intval($numar) * 9 + $i + 1;
    echo "$numar * 9 + $i = $rezultat <br>";
}

echo "<br>";
echo "<br>";

//6
$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

?>

</body>
</html>