<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Page</title>
</head>
<body>

<div class="block">
    <div class="title">
        <h2>Your Registration Details:</h2>
    </div>
    <div class="content">
        <?php
        // Check if data is present in the URL
        if(isset($_GET) && !empty($_GET)){
            // Loop through the data and display it
            foreach ($_GET as $key => $value) {
                echo "<p><strong>$key:</strong> $value</p>";
            }
        } else {
            // Display a message if no data is present
            echo "<p>No registration details available.</p>";
        }
        ?>
    </div>
</div>

<div class="linkl">
    <a href="login.php">Go Back</a>
</div>

</body>
</html>
