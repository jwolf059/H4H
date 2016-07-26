<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    
    
    <head>
        <title>Housing4Health Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>

        <div>

            <h1 align="center"> Affordable Housing Login </h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <ul class="searchbar_allign">
                    <li>
                        <input type="text" name="login_field"  placeholder="Complex Email" />
                        <input type="text" name="password_field"  placeholder="Password" />
                        <input type="submit" value="Login" />

                    </li>

                </ul>

            </form>

        </div>

        <?php
        // Only connects to server after POST method has been sent.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
                    $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "mydb";

            $login_email = filter_input(INPUT_POST, $_POST["login_field"]);
            $login_password = filter_input(INPUT_POST, $_POST["password_field"]);


            if (isset($login_email) and isset($login_password)) {
                $conn = new mysqli($servername, $username, $password, $database);

                if ($conn->connect_error) {
                    die("Connection Failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM User"
                        . "WHERE COMPLEX_EMAIL = $login_email"
                        . "AND PASSWORD = $login_password";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "Login record Found";
                } else {
                    echo "Login record not Found!";
                }
                $conn->close();
            }
        }
        ?>
    </body>

    
    
</html>