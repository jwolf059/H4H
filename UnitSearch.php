
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";


$conn = mysqli_connect($servername, $username, $password);

$db = mysqli_select_db($conn, $database);
session_start();

$selected_complex = $_POST["Select"];

if (isset($_SESSION['Bed_Count'])) {
    $bed_count = $_SESSION['Bed_Count'];
} else {
    $bed_count = 0;
}

if (isset($_SESSION['Bath_Count'])) {
    $bath_count = $_SESSION['Bath_Count'];
} else {
    $bath_count = 0;
}

if (isset($_SESSION['Min_Price'])) {
    $min_price = $_SESSION['Min_Price'];
} else {
    $min_price = 0;
}

if (isset($_SESSION['Max_Price'])) {
    $max_price = $_SESSION['Max_Price'];
} else {
    $max_price = 9000000; // Bad hard coded number, shame on me.
}



$unit_query_string = "SELECT * FROM UNIT WHERE COMPLEX_NAME='$selected_complex' "
        . "AND NUM_BED >= '$bed_count' AND NUM_BATH >='$bath_count' AND "
        . "PRICE >='$min_price' AND PRICE<='$max_price'";

$unit_result = mysqli_query($conn, $unit_query_string);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Style3.css" media = "screen">
        <title>Housing4Health</title>
    </head> 

    <body>
        <div id ="wrapper">
            <div class ="header">
                <div id="logo-wrap">
                    <img id = logoImg src ="./img/Header.png" alt ="theimage">
                </div>

                <div id="menu_wrap">
                    <nav>
                        <ul class="menu">
                            <li><a class="active" href="./Homepage.html">Home</a></li>
                            <li><a href="./HousingSearch.html">Affordable Housing Search</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropbtn">Tenant Resources</a>
                                <div class="dropdown-content">
                                    <a href="./AffordableHousing.html">What is Affordable housing?</a>
                                    <a href="./HousingResources.html">Housing Services</a>
                                    <a href="./AnotherPage.htlm">Something Else really important</a>

                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropbtn">Landlord Resources</a>
                                <div class="dropdown-content">
                                    <a href="./AffordableHousing.html">What is Affordable housing?</a>
                                    <a href="./WhyAffordableHousing.html">Why affordable housing?</a>
                                    <a href="./LandlordLiasonProgram.html">Landlord Liason Program</a>
                                </div>
                            </li>

                            <li><a class ="login" href="LandlordLogout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id = "content">
                <div id="profile">
                    <b id="welcome"> <i><?php echo $selected_complex; ?></i></b>

                    <table width="100%" border="0" cellspacing="0" cellpadding="15">
                        <caption>Current Units</caption>
                        <tr>
                            <th>Unit Number</th>
                            <th>Number of Beds</th>
                            <th>Number of Baths</th>
                            <th>Sq ft</th>
                            <th>Rental Price</th>
                            <th>Date Avaliable</th>
                            <th>Lease Length</th>
                            <th>Deposit</th>

                        </tr>


<?php
if ($unit_result) {

    while ($selected_complex = mysqli_fetch_assoc($unit_result)) {
        ?>
                                <tr>
                                    <td> <?php echo $selected_complex["UNIT_ID"]; ?> </td>
                                    <td> <?php echo $selected_complex["NUM_BED"]; ?> </td>
                                    <td> <?php echo $selected_complex["NUM_BATH"]; ?> </td>
                                    <td> <?php echo $selected_complex["SQ_FT"]; ?> </td>
                                    <td> <?php echo $selected_complex["PRICE"]; ?> </td>
                                    <td> <?php echo $selected_complex["DATE_AVL"]; ?> </td>
                                    <td> <?php echo $selected_complex["LEASE_TYPE"]; ?> </td>
                                    <td> <?php echo $selected_complex["DEPOSITE"]; ?> </td>


                                </tr>

        <?php
    }
}
?>

                    </table>

                </div>
            </div>

            <div id="footer">
                <div class="left_footer">
                    <ul class="footer_list">
                        <li><a href="./HousingResources.html">Housing Services</a></li>
                        <li><a href="./HousingSearch.html">Affordable Housing Search</a></li>
                    </ul>
                </div>
                <div class="right_footer">
                    <ul class="footer_list">
                        <li><a href="./WhyAffordableHousing.html">Why Affordable Housing?</a></li>
                        <li><a href="LandlordLiasonProgram.html">Landlord Liason Program</a></li>
                        <li><a href="OtherCommunityResources"> Community Resources</a></li>
                    </ul>
                </div>
                <ul class="footer_list">
                    <li><a href="AffordableHousing.html">What is Sub Housing</a></li>
                    <li><a href="copyrightpage.html">Copyright</a></li>
                    <li><a href = "sitemap.html">Sitemap</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
