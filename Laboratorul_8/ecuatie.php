<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ecuatie.css">
    <title>Document</title>
</head>
<body>

    <div class="block">
        <div class="title">
            Rezolvarea ecuatiei de gradul doi:
        </div>
        <div class="ecuation">
            <form action="" method="post">
                <div class="align">
                    <div class="one flex">
                        <input type="number" name="first" id="first" value="<?php echo isset($_POST['first']) ? $_POST['first'] : 1; ?>">
                        <p>x<sup>2</sup></p>
                    </div>
                    <div class="second flex">
                        <input type="number" name="second" id="second" value="<?php echo isset($_POST['second']) ? $_POST['second'] : 1; ?>">
                        <p>x</p>
                    </div>
                    <div class="third flex">
                        <input type="number" name="third" id="third" value="<?php echo isset($_POST['third']) ? $_POST['third'] : 1; ?>" required>
                    </div>
                    <div class="zero flex">
                        <p> = 0</p>
                    </div>
                </div>
                <div class="send">
                    <button type="submit" name="submit">
                        <p>Rezolva</p>
                    </button>
                </div>
            </form>
        </div>
        <div class="answer">
            <?php
            if(isset($_POST['submit'])){
                $a = isset($_POST['first']) && $_POST['first'] !== '' ? $_POST['first'] : 1;
                $b = isset($_POST['second']) && $_POST['second'] !== '' ? $_POST['second'] : 1;
                $c = isset($_POST['third']) && $_POST['third'] !== '' ? $_POST['third'] : 1;

                $delta = $b * $b - 4 * $a * $c;

                if ($delta > 0) {
                    $x1 = (-$b + sqrt($delta)) / (2 * $a);
                    $x2 = (-$b - sqrt($delta)) / (2 * $a);
                    echo "<p>Solutiile sunt x1 = $x1 si x2 = $x2</p>";
                } elseif ($delta == 0) {
                    $x = -$b / (2 * $a);
                    echo "<p>Solutia unica este x = $x</p>";
                } else {
                    echo "<p>Ecuatia nu are solutii reale.</p>";
                }
            }
            ?>
        </div>
    </div>

</body>
</html>
