

<?php
session_start();
$error_message = '';

if (isset($_POST['submit']) && (empty($_POST['bed_count']) || empty($_POST['bath_count']) ||
            empty($_POST['sq_feet']) || empty($_POST['price']) ||
            empty($_POST['date_available']) || empty($_POST['lease_Length']) ||
            empty($_POST['deposit']) || empty($_POST['app_fee']))) {

        $error_message = "All text fields required.";
    
}

else if (isset($_POST['submit'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";



    $conn = mysqli_connect($servername, $username, $password);

    // If the connection fails, give error.
    if (!$conn) {
        die("Connection Failed: " . mysqli_error());
    }
    
    function checkInput($input) {
        $input = stripcslashes($input);
        $input = mysqli_real_escape_string($conn, $input);
        return $input;
    }
    
    $unit_pet_req = '';
    $unit_complex = $_SESSION['complex_name'];
    $unit_bed_count = checkInput($_POST['bed_count']);
    $unit_bath_count = checkInput($_POST['bath_count']);
    $unit_size = checkInput($_POST['sq_feet']);
    $unit_price = checkInput($_POST['price']);
    $unit_date_available = checkInput($_POST['date_available']);
    $unit_lease_length = checkInput($_POST['lease_length']);
    $unit_deposit = checkInput($_POST['deposit']);
    $unit_app_fee = checkInput($_POST['app_fee']);
    $unit_pet_req = checkInput($_POST['pet_req']);
    
    
    
    

    $selected_db = mysqli_select_db($conn, $database);

    $query_string = sprintf("INSERT INTO UNIT (ID, COMPLEX_NAME, NUM_BED, NUM_BATH,
                SQ_FEET, PRICE, DATE_AVL, LEASE_TYPE, DEPOSITE, APP_FEE, PET_ALLOWED,
                PET_REQ, LAUNDRY, SEC_8, HUD_VOCH, USDA, LOW_INCOME, UNIT_ID) 
                VALUES (DEFAULT, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s,
                %s, %s, %s, %s, %s, %s, %s)", $unit_complex, $unit_bed_count,
            $unit_bath_count, $unit_size, $unit_price, $unit_date_available,
            $unit_lease_length, $unit_deposit, $unit_app_fee, $_POST['pet_allowed'],
            $unit_pet_req, $_POST["laundry"], $_POST['sec_8'], $_POST['hud_voucher'],
            $_POST['usda'], $_POST['low_income']);

    if (mysqli_query($conn, $sql)) {
    header("location: LandlordPage.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    mysqli_close($conn);
}
?>




