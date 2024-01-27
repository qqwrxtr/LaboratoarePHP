<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <div class="block">
        <div class="title">
            <h2>Livrare Pizza</h2>
        </div>
        <div class="inputs">
            <form action="" method="post">
                <div class="name inpt">
                    <input type="text" placeholder="Numele dvs..." name="nume" id="1">
                </div>
                <div class="surname inpt">
                    <input type="text" placeholder="Prenumele dvs..." name="prenume" id="2">
                </div>
                <div class="type row">
                    <div class="type">
                        <input type="checkbox" name="peperoni" id="3">
                        <label for="peperoni">Peperoni</label>
                    </div>
                    <div class="type">
                        <input type="checkbox" name="vegetarian" id="4">
                        <label for="vegetarian">Vegetarian</label>
                    </div>
                    <div class="type">
                        <input type="checkbox" name="rancho" id="5">
                        <label for="rancho">Rancho</label>
                    </div>
                </div>
                <div class="souce inpt">
                    <select name="souce" id="1">
                        <option value="1">Secret Souce</option>
                        <option value="2">Souce</option>
                        <option value="3">TOP Secret Souce</option>
                        <option value="4">Souce Bun</option>
                    </select>
                </div>
                <div class="extra row">
                    <div class="option">
                        <input type="checkbox" name="extra_cheese" id="3">
                        <label for="extra_cheese">Extra Cheese</label>
                    </div>
                    <div class="option">
                        <input type="checkbox" name="gluten_free" id="4">
                        <label for="gluten_free">Gluten Free Base</label>
                    </div>
                </div>
                <div class="textarea">
                    <textarea name="instruction" id="1" cols="46" rows="5" placeholder="Instructiuni pentru livrare"></textarea>
                </div>
                <div class="submit">
                    <button type="submit">
                        Trimite Comanda
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Collect form data
            $nume = isset($_POST['nume']) ? $_POST['nume'] : '';
            $prenume = isset($_POST['prenume']) ? $_POST['prenume'] : '';
            $peperoni = isset($_POST['peperoni']) ? 'Peperoni' : '';
            $vegetarian = isset($_POST['vegetarian']) ? 'Vegetarian' : '';
            $rancho = isset($_POST['rancho']) ? 'Rancho' : '';
            $souce = isset($_POST['souce']) ? $_POST['souce'] : '';
            $extra_cheese = isset($_POST['extra_cheese']) ? 'Extra Cheese' : '';
            $gluten_free = isset($_POST['gluten_free']) ? 'Gluten Free Base' : '';
            $instruction = isset($_POST['instruction']) ? $_POST['instruction'] : '';

            // Create a string with the collected data
            $orderInfo = "Nume: $nume\nPrenume: $prenume\nPizza: $peperoni $vegetarian $rancho\nSos: $souce\nExtra: $extra_cheese $gluten_free\nInstructiuni: $instruction\n\n";

            // Append the data to the comanda_pizza.txt file
            file_put_contents('comanda_pizza.txt', $orderInfo, FILE_APPEND);

            // Display a success message or redirect to a thank you page
            echo 'Comanda a fost plasata cu succes! Va multumim!';
        }

    ?>

</body>
</html>