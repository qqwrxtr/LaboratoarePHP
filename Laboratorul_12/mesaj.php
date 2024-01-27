<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mesaj</title>
</head>
<body>
    <div class="mainblock">
        <div class="title">
            <h2>Detaliile Comenzii:</h2>
        </div>
        <div class="content">
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = isset($_POST["nume"]) ? $_POST["nume"] : "";
    $numar = isset($_POST["numar"]) ? $_POST["numar"] : "";
    $pizza = isset($_POST["pizza"]) ? implode(", ", $_POST["pizza"]) : "";
    $sos = isset($_POST["sos"]) ? $_POST["sos"] : "";
    $adaos = isset($_POST["adaos"]) ? implode(", ", $_POST["adaos"]) : "";
    $instructiuni = isset($_POST["instructiuni"]) ? $_POST["instructiuni"] : "";

    echo "<p>Nume: $nume</p>";
    echo "<p>Numar: $numar</p>";
    echo "<p>Pizza: $pizza</p>";
    echo "<p>Sos: $sos</p>";
    echo "<p>Adaos: $adaos</p>";
    echo "<p>Instructiuni: $instructiuni</p>";
}
?>
        </div>
    </div>
    <div class="link">
        <a href="index.php">Go Back</a>
    </div>
</body>
</html>
