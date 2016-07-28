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
            <form action="login.php" method="POST">
                <ul class="searchbar_allign">
                    <li>
                        <input type="text" name="login_field"  placeholder="Complex Email" />
                        <input type="text" name="password_field"  placeholder="Password" />
                        <input type="submit" name ="submit" value="Login" />
                    </li>
                </ul>
                <?php include 'login.php'; ?>
            </form>
        </div>
    </body>
</html>
