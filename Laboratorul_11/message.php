<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_GET['order'])) {
    echo "<h1>Comanda dumneavoastra:</h1>";
    echo "<pre>" . htmlspecialchars($_GET['order']) . "</pre>";
} else {
    echo "<p>Nu a fost gasita informatia pentru comanda dumneavoastra.</p>";
}
?>
<a href="meniu.php">Go back</a>