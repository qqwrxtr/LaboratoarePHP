<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="mainblock">
        <div class="title">
            <h2>Livrare Pizza</h2>
        </div>
        <div class="second">
            <form action="mesaj.php" method="post">
                <div class="name align">
                    <div class="txt">
                        <p>Numele Dvs.</p>
                    </div>
                    <div class="input">
                        <input type="text" name="nume">
                    </div>
                </div>
                <div class="number align">
                    <div class="txt">
                        <p>Numarul Dvs.</p>
                    </div>
                    <div class="input">
                        <input type="text" name="numar">
                    </div>
                </div>
                <div class="type align">
                    <div class="txt">
                        <p>Alege pizza</p>
                    </div>
                    <div class="checkbox1">
                        <div class="df">
                            <input type="checkbox" name="pizza[]" value="Peperoni">
                            <label for="checkbox">
                                <p>Peperoni</p>
                            </label>
                        </div>

                        <div class="df">
                            <input type="checkbox" name="pizza[]" value="Vegetariana">
                            <label for="checkbox">
                                <p>Vegetariana</p>
                            </label>
                        </div>

                        <div class="df">
                            <input type="checkbox" name="pizza[]" value="Rancho">
                            <label for="checkbox">
                                <p>Rancho</p>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="souce align">
                    <div class="txt">
                        <p>Sos pentru pizza</p>
                    </div>
                    <div class="select">
                        <select name="sos">
                            <option value="1">Secret Souce</option>
                            <option value="2">Secret Souce</option>
                            <option value="3">Secret Souce</option>
                        </select>
                    </div>
                </div>
                <div class="adaos align">
                    <div class="txt">
                        <p>Adaos Adaugator</p>
                    </div>
                    <div class="checkbox">
                        <div class="df">
                            <input type="checkbox" name="adaos[]" value="Extra Cheese">
                            <label for="checkbox">
                                <p>Extra Cheese</p>
                            </label>
                        </div>

                        <div class="df">
                            <input type="checkbox" name="adaos[]" value="Gluten Free Base">
                            <label for="checkbox">
                                <p>Gluten Free Base</p>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="livrare align">
                    <div class="txt">
                        <p>Instructiuni pentru livrare</p>
                    </div>
                    <div class="text">
                        <textarea name="instructiuni" id="instructiuni" cols="50" rows="10"></textarea>
                    </div>
                </div>
                <div class="submit">
                    <button type="submit" name="submit">
                        Trimite
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
