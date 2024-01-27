<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meniu.css">
    <title>Document</title>
</head>
<body>

    <div class="block">
        <div class="title">
            <h2>Alegeti meniul :</h2>
        </div>
        <div class="line">
            <hr>
        </div>
        <div class="menu">
            <?php
            // Check if the form is submitted
            if(isset($_POST['submit'])){
                // Check if at least one checkbox is selected or a message is provided
                if(isset($_POST['pizza']) || isset($_POST['suc']) || isset($_POST['inghetata']) || isset($_POST['cafea']) || !empty($_POST['msj'])) {
                    // Build the order message
                    $orderMessage = "Comanda dumneavoastră:\n";

                    // Add selected products to the message
                    if(isset($_POST['pizza'])) {
                        $orderMessage .= "- Pizza\n";
                    }
                    if(isset($_POST['suc'])) {
                        $orderMessage .= "- Suc\n";
                    }
                    if(isset($_POST['inghetata'])) {
                        $orderMessage .= "- Inghetata\n";
                    }
                    if(isset($_POST['cafea'])) {
                        $orderMessage .= "- Cafea\n";
                    }

                    // Add the message to the order message
                    if(!empty($_POST['msj'])) {
                        $message = htmlspecialchars($_POST['msj']);
                        $orderMessage .= "\nMesaj: $message";
                    }

                    // Redirect to message.php with the order message as a parameter
                    header("Location: message.php?order=" . urlencode($orderMessage));
                    exit();
                } else {
                    // If no checkbox is selected and no message is provided, display an error message
                    echo "<p>Nu ați selectat niciun produs sau nu ați lăsat un mesaj. Reîncercați!</p>";
                }
            }
            ?>
            <!-- Display the form -->
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Pizza</td>
                        <td><input type="checkbox" name="pizza" id="pizza"></td>
                    </tr>
                    <tr>
                        <td>Suc</td>
                        <td><input type="checkbox" name="suc" id="suc"></td>
                    </tr>
                    <tr>
                        <td>Inghetata</td>
                        <td><input type="checkbox" name="inghetata" id="inghetata"></td>
                    </tr>
                    <tr>
                        <td>Cafea</td>
                        <td><input type="checkbox" name="cafea" id="cafea"></td>
                    </tr>
                    <tr>
                        <td>Lasa un mesaj</td>
                        <td><textarea name="msj" id="msj" cols="20" rows="5"></textarea></td>
                    </tr>
                </table>
                <div class="submit">
                    <button type="submit" name="submit">
                        Trimite
                    </button>
                </div>
            </form>
        </div>
        <div class="line">
            <hr>
        </div>
    </div>

</body>
</html>
