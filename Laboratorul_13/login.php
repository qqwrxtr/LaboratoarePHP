<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div class="block">
        <div class="top">
            <h2>Please complete the form below</h2>
        </div>
        <div class="menu">
            <?php
            if(isset($_POST['submit'])){
                // Check if any field is empty
                $fields = ['username', 'password', 'retype_password', 'firstname', 'lastname', 'gender', 'date_of_birth', 'email'];
                $emptyFields = array_filter($fields, function($field) {
                    return empty($_POST[$field]);
                });

                // Check if passwords match
                $passwordMatch = ($_POST['password'] === $_POST['retype_password']);

                if(empty($emptyFields) && $passwordMatch){
                    // Redirect to mesaj.php with form data as parameters
                    $url = 'mesaj.php?' . http_build_query($_POST);
                    header("Location: $url");
                    exit();
                } else {
                    // Display an error message if any field is empty or passwords do not match
                    if (!$passwordMatch) {
                        echo "<p>Passwords do not match. Please re-enter your password.</p>";
                    } else {
                        echo "<p>Please complete all fields in the form.</p>";
                    }
                }
            }
            ?>
            <!-- Display the form -->
            <form action="" method="post">
                <div class="login">
                    <div class="title">
                        <h3>Login Details</h3>
                    </div>
                    <div class="table">
                        <table>
                            <tr>
                                <td>User Name</td>
                                <td><input type="text" name="username" id="username"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" id="password"></td>
                            </tr>
                            <tr>
                                <td>Retype Password</td>
                                <td><input type="password" name="retype_password" id="retype_password"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="user">
                    <div class="title">
                        <h3>User Details</h3>
                    </div>
                    <div class="table">
                        <table>
                            <tr>
                                <td>First Name</td>
                                <td><input type="text" name="firstname" id="firstname"></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><input type="text" name="lastname" id="lastname"></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <input type="radio" name="gender" id="male" value="Male">
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" id="female" value="Female">
                                    <label for="female">Female</label>
                                </td>
                            </tr>
                            <tr>
                                <td>Date of birth</td>
                                <td><input type="date" name="date_of_birth"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="register">
                    <button type="submit" name="submit">
                        <p>Register</p>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
