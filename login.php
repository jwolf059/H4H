<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<HTML>
    <HEAD>
        <TITLE></TITLE>

    </HEAD>

    <?php
// Only connects to server after POST method has been sent.

    if (isset($_POST['submit'])) {


        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mydb";

        //$login_email = mysql_real_escape_string(filter_input(INPUT_POST, $_POST["login_field"]));
        //$login_password = mysql_real_escape_string(filter_input(INPUT_POST, $_POST["password_field"]));
        $login_email = $_POST['login_field'];
        $login_password = $_POST['password_field'];

        $conn = mysql_connect($servername, $username, $password);

        if (!$conn) {
            die("Connection Failed: " . mysql_error());
        }

        if (!mysql_select_db($database)) {
            die('Could not select database: ' . mysql_error());
        }

        // $sql = "SELECT * FROM User WHERE COMPLEX_EMAIL = \"StoneBridge@gmail.com\" AND PASSWORD = \"secret\"";
        $sql = Sprintf("SELECT * FROM User WHERE COMPLEX_EMAIL = '%s' AND PASSWORD = '%s'",
                mysql_real_escape_string($login_email), mysql_real_escape_string($login_password));
        $result = mysql_query($sql);

        if (!$result) {
            die('Could not query:' . mysql_error());
        }
        /*while ($row = mysql_fetch_assoc($result)) {
            echo $row['COMPLEX_NAME'];
            echo $row['PASSWORD'];
        }*/

         if (!mysql_num_rows($result) == 0) {

          header("Location: AnotherPage.html");
          exit;
          } else {
          echo "Login record not Found!";
          } 
        mysql_close($conn);
    }
    ?>


</HTML>