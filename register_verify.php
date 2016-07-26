        
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



    $complex_name = mysql_real_escape_string(filter_input(INPUT_POST, "complex_name"));
    $complex_email = mysql_real_escape_string(filter_input(INPUT_POST, "complex_email",
            FILTER_VALIDATE_EMAIL));
    $phone_number = mysql_real_escape_string(filter_input(INPUT_POST, "phone_number"));
    $street_address = mysql_real_escape_string(filter_input(INPUT_POST, "street_address"));
    $complex_city = mysql_real_escape_string(filter_input(INPUT_POST, "complex_city"));
    $complex_zip = mysql_real_escape_string(filter_input(INPUT_POST, "complex_zip"));
    $complex_password = mysql_real_escape_string(filter_input(INPUT_POST, "password"));


    if (isset($complex_name) and isset($complex_email) and
            isset($phone_number) and isset($street_address) and
            isset($complex_city) and isset($complex_zip)) {

// Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
// Insert new Complex information into table.
        $sql = "INSERT INTO User (ID, COMPLEX_NAME, COMPLEX_EMAIL, PHONE_NUMBER,
                STREET_ADDRESS, CITY, ZIP, DESCRIPTION, PASSWORD)
                VALUES (DEFAULT, '$complex_name', '$complex_email', '$phone_number', '$street_address',"
                . "'$complex_city', '$complex_zip', 'Default Description', '$complex_password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>


</html>




