<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator Medie</title>
</head>
<body>
    <div class="block">
        <div class="top_text">
            <div class="bold mid">
                <p>Media de concurs se calculeaza conform formulei :</p>
                <p>MC = 0,6 * MNDP + 0,4 * MNEA</p>
            </div>
            <div class="norm">
                <p>* MC - media de concurs ( calculata cu trunchiere pana la sutimi )</p>
                <p>* MNDP - media notelor anulalte la 4 disciplini de profil</p>
                <p>* MNEA - media notelor de la examenele de absolvire</p>
                <br>
                <p class="bold">Notele anuale la 4 disciplini de profil : </p>
            </div>
        </div>
        <form method="post" action="">
            <div class="inputs">
                <div class="text">
                    <p>Limba de instruire</p>
                    <p>Limba straina</p>
                    <p>Matematica</p>
                    <p>Informatica / Istoria</p>
                    <p>Media Notelor Examenelor de Absolvire ( MNEA )</p>
                </div>
                <div class="input">
                    <input type="number" name="nota1" id="1">
                    <input type="number" name="nota2" id="2">
                    <input type="number" name="nota3" id="3">
                    <input type="number" name="nota4" id="4">
                    <input type="number" name="mnea" id="5">
                </div>
            </div>
            <div class="calculate">
                <button type="submit">
                    Calculeaza
                </button>
            </div>
        </form>
        <div class="result">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Verifică dacă toate câmpurile au fost completate
                    if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3']) && isset($_POST['nota4']) && isset($_POST['mnea'])) {
                        // Obține valorile introduse de utilizator
                        $nota1 = floatval($_POST['nota1']);
                        $nota2 = floatval($_POST['nota2']);
                        $nota3 = floatval($_POST['nota3']);
                        $nota4 = floatval($_POST['nota4']);
                        $mnea = floatval($_POST['mnea']);

                        $sum = $nota1 + $nota2 + $nota3 + $nota4;
                        $media = $sum / 4;

                        // Calculează media conform formulei
                        $mediaConcurs = 0.6 * $media + 0.4 * $mnea;

                        // Afișează rezultatul
                        echo 'Media de concurs: ' . number_format($mediaConcurs, 2);
                    } else {
                        echo 'Te rog completează toate câmpurile.';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
