

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
        
        $conn = mysqli_connect($servername, $username, $password);
        
        // If the connection fails, give error.
        if (!$conn) {
            die("Connection Failed: " . mysqli_error());
        }
        
        // Security formatting
        $landlord_name = stripcslashes($landlord_name);
        $landlord_name = mysqli_real_escape_string($conn, $landlord_name);
        $landlord_password = stripcslashes($landlord_password);
        $landlord_password = mysqli_real_escape_string($conn, $landlord_password);
        
        $selected_db = mysqli_select_db($conn, $database);
        
        $query_string = sprintf("SELECT * FROM User "
                . "WHERE COMPLEX_EMAIL = '%s' AND PASSWORD = '%s'",
                $landlord_name, $landlord_password);
        
        $query_for_login = mysqli_query($conn, $query_string);
        
        // Check to see if only one query was found.
        $rows = mysqli_num_rows($query_for_login);
        
        if ($rows == 1) {
            
            $_SESSION['login_user'] = $landlord_name;
            header("location: LandlordPage.php");
        }
        else {
            $error_message = "Invalid Login name or Password";
        }
        mysqli_close($conn);
        
    }
   
    ?>