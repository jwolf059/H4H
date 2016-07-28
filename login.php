

    <?php
    session_start();
    $error_message = '';
    
    if (isset($_POST['submit'])) {
        
        if (empty($_POST['login_field']) || empty($_POST['password_field'])) {
            $error_message = "Invalid Login name or Password";
        }
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mydb";
        
        $landlord_name = $_POST['login_field'];
        $landlord_password = $_POST['password_field'];
        
        $conn = mysql_connect($servername, $username, $password);
        
        // If the connection fails, give error.
        if (!$conn) {
            die("Connection Failed: " . mysql_error());
        }
        
        // Security formatting
        $landlord_name = stripcslashes($landlord_name);
        $landlord_name = mysql_real_escape_string($landlord_name);
        $landlord_password = stripcslashes($landlord_password);
        $landlord_password = mysql_real_escape_string($landlord_password);
        
        $selected_db = mysql_select_db($database, $conn);
        
        $query_string = sprintf("SELECT * FROM User "
                . "WHERE COMPLEX_EMAIL = '%s' AND PASSWORD = '%s'",
                $landlord_name, $landlord_password);
        
        $query_for_login =  mysql_query($query_string);
        
        // Check to see if only one query was found.
        $rows = mysql_num_rows($query_for_login);
        
        if ($rows == 1) {
            
            $_SESSION['login_user'] = $landlord_name;
            header("location: LandlordPage.php");
        }
        else {
            $error_message = "Invalid Login name or Password";
        }
        mysql_close($conn);
        
    }
    
    
// Only connects to server after POST method has been sent.
/*
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
        while ($row = mysql_fetch_assoc($result)) {
            echo $row['COMPLEX_NAME'];
            echo $row['PASSWORD'];
        }

         if (!mysql_num_rows($result) == 0) {

          header("Location: AnotherPage.html");
          exit;
          } else {
          echo "Login record not Found!";
          } 
        mysql_close($conn);
    }
    */
    ?>