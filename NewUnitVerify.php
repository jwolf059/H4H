
<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Style3.css" media = "screen">
        <title></title>
    </head>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";



    if (isset($complex_name) and isset($complex_email) and
            isset($phone_number) and isset($street_address) and
            isset($complex_city) and isset($complex_zip)) {

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        function checkInput($input) {
            $input = stripcslashes($input);
            $input = mysqli_real_escape_string($conn, $input);
            return $input;
        }

        $unit_beds = checkInput($_POST['bed_count']);
        $unit_bath = checkInput($_POST['bath_count']);
        $unit_size = checkInput($_POST['sq_feet']);
        $unit_deposit = checkInput($_POST['deposit']);
        $unit_free = checkInput($_POST['app_fee']);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
// Insert new Complex information into table.
        $sql = "INSERT INTO UNIT (ID, COMPLEX_NAME, COMPLEX_EMAIL, PHONE_NUMBER,
                STREET_ADDRESS, CITY, ZIP, DESCRIPTION, PASSWORD)
                VALUES (DEFAULT, '$complex_name', '$complex_email', '$phone_number', '$street_address',"
                . "'$complex_city', '$complex_zip', 'Default Description', '$complex_password')";

        if ($conn->query($sql) === TRUE) {
            header("location: LoginPage.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>


</html>




