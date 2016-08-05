        
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

    
        function imageUpload($input) {
    //file upload variables 
    $target_dir = "DatabaseIMG/";
    $Image_dir = sprintf("%s%s", $target_dir, $_FILES[$input]["name"]);
    $target_file = $target_dir . basename($_FILES[$input]["name"]);
    $uploadOK = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        //Verify the Image is a real image
   // if (isset($POST["submit"])) {
        $check = getimagesize($_FILES["Image_One"]["TEMP"]);
        if ($check !== false) {
            echo "File is an Image - " . $check["mime"] . " .";
            $uploadOK = 1;
        } else {
            echo "File is not an image.";
            $uploadOK = 0;
        }
   // }
        // Check file size
    if ($_FILES["Image_One"]["size"] > 500000) {
        echo "Your File is too Large, File size limit is 50mb";
        $uploadOK = 0;
    }

        //Check for File Format
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" &&
            $imageFileType != "gif") {
        echo "Only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOK = 0;
    }
    if ($uploadOK == 0) {
        echo "File upload unsuccessful";
    } else {
        if (move_uploaded_file($_FILES["Image_One"]["tmp_name"], $target_file)) {
            echo "The file has been uploaded";
        } else {
            echo " File upload unsuccessful";
        }
    }
    return $Image_dir;
    }
 

    $Image_One_dir = imageUpload('Image_One');

    $complex_name = mysql_real_escape_string(filter_input(INPUT_POST, "complex_name"));
    $complex_email = mysql_real_escape_string(filter_input(INPUT_POST, "complex_email", FILTER_VALIDATE_EMAIL));
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
                STREET_ADDRESS, CITY, ZIP, DESCRIPTION, PASSWORD, IMG_ONE, IMG_TWO)
                VALUES (DEFAULT, '$complex_name', '$complex_email', '$phone_number', '$street_address',"
                . "'$complex_city', '$complex_zip', 'Default Description', '$complex_password', "
                . "'$Image_One_dir', '$Image_two_dir')";

        if ($conn->query($sql) === TRUE) {
            header("location: LoginPage.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>
</html>




