
<!DOCTYPE html>

<html>
    <head>
        <title></title>
    </head>
<?php

session_start();


 if (isset($_POST['submit'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";



    $conn = mysqli_connect($servername, $username, $password);

    // If the connection fails, give error.
    if (!$conn) {
        die("Connection Failed: " . mysqli_error());
    }

   
    function checkInput($input, $conn) {
        $input = stripcslashes($input);
        $input = mysqli_real_escape_string($conn, $input);
        return $input;
    }

    $unit_pet_req = '';
    $unit_complex = $_SESSION['complex_name'];
    $unit_id = checkInput($_POST['unit_id'], $conn);
    $unit_bed_count = checkInput($_POST['bed_count'], $conn);
    $unit_bath_count = checkInput($_POST['bath_count'], $conn);
    $unit_size = checkInput($_POST['sq_feet'], $conn);
    $unit_price = checkInput($_POST['price'], $conn);
    $unit_date_available = checkInput($_POST['date_available'], $conn);
    $unit_lease_length = checkInput($_POST['lease_length'], $conn);
    $unit_deposit = checkInput($_POST['deposit'], $conn);
    $unit_app_fee = checkInput($_POST['app_fee'], $conn);
    $unit_pet_req = checkInput($_POST['pet_req'], $conn);   
    $unit_pet_allowed = $_POST['pet_allowed'];
    $unit_laundry = $_POST['laundry'];
    $unit_sec_8 = $_POST['sec_8'];
    $unit_hud_voucher = $_POST['hud_vouch'];
    $unit_usda = $_POST['usda'];
    $unit_low_income = $_POST['low_income'];


    



    $selected_db = mysqli_select_db($conn, $database);

    
    $query_string = sprintf("INSERT INTO UNIT (idUNIT, COMPLEX_NAME, NUM_BED, NUM_BATH,
                SQ_FT, PRICE, DATE_AVL, LEASE_TYPE, DEPOSITE, APP_FEE, PET_ALLOWED,
                PET_REQ, LAUNDRY, SEC_8, HUD_VOCH, USDA, LOW_INCOME, UNIT_ID) 
                VALUES (DEFAULT, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s',
                '%s', '%s', '%s', '%s', '%s', '%s', '%s')", $unit_complex, $unit_bed_count, 
            $unit_bath_count, $unit_size, $unit_price, $unit_date_available, 
            $unit_lease_length, $unit_deposit, $unit_app_fee, $unit_pet_allowed, 
            $unit_pet_req, $unit_laundry, $unit_sec_8, $unit_hud_voucher, 
            $unit_usda, $unit_low_income, $unit_id);

    
    if (mysqli_query($conn, $query_string)) {
        header("location: LandlordPage.php");
    } else {
        echo "Error: " . $query_string . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

</html>




