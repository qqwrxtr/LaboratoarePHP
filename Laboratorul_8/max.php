<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="max.css">
    <title>Document</title>
    <script>
        function clearResult() {
            document.getElementById("result").innerHTML = "";
        }
    </script>
</head>
<body>

    <div class="block">
        <div class="title">
            <h3>Elementul maxim dintre trei numere:</h3>
        </div>
        <div class="form">
            <form action="" method="post">
                <div class="flex">
                    <div class="col text">
                        <div class="num1">
                            <p>Numarul 1 = </p>
                        </div>
                        <div class="num2">
                            <p>Numarul 2 = </p>
                        </div>
                        <div class="num3">
                            <p>Numarul 3 = </p>
                        </div>
                    </div>
                    <div class="col input">
                        <div class="num1">
                            <input type="number" name="num1" id="num1" required>
                        </div>
                        <div class="num2">
                            <input type="number" name="num2" id="num2" required>
                        </div>
                        <div class="num3">
                            <input type="number" name="num3" id="num3" required>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <div class="submit">
                        <button type="submit" name="submit">
                            <p>Determina</p>
                        </button>
                    </div>
                    <div class="reset">
                        <button type="button" name="reset" onclick="clearResult();">
                            <p>Sterge</p>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="answer" id="result">
            <?php
                if(isset($_POST['submit'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];
                    $max = max($num1, $num2, $num3);
                    echo "<p>Maximal() = $max</p>";
                }
            ?>
        </div>
    </div>

</body>
</html>
