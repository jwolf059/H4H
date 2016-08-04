
<?php
include('LandlordSession.php');
$unit_query_string = sprintf("SELECT * FROM UNIT WHERE COMPLEX_NAME='%s';", $current_complex);
//$string = "SELECT * FROM UNIT WHERE COMPLEX_NAME= 'Salmon Run';";

$result_for_units = mysqli_query($conn, $unit_query_string);
?>
<!DOCTYPE html>
<!--
Accessing the current logged in user variables:
current_complex
current_email
current_phone
current_street
current_zip
current_city
current_description

Use the php tags and an echo call before hand to access the variables.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Style3.css" media = "screen">
        <title>Housing4Health</title>
    </head> 

    <body>
        <div id ="wrapper">
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

            <div id = "content">
                <div id="profile">
                    <b id="welcome">Welcome : <i><?php echo $current_complex; ?></i></b>

                    <table width="100%" border="0" cellspacing="0" cellpadding="15">
                        <caption>Current Units</caption>
                        <tr>
                            <th>Number of Beds</th>
                            <th>Number of Baths</th>
                            <th>Sq ft</th>
                            <th>Rental Price</th>
                            <th>Date Avaliable</th>
                            <th>Lease Length</th>
                            <th>Deposit</th>
                            <th>Edit Unit</th>
                        </tr>


                        <?php
                        if ($result_for_units) {

                            while ($current_unit = mysqli_fetch_assoc($result_for_units)) {
                                ?>
                                <tr>
                                    <td> <?php echo $current_unit["NUM_BED"]; ?> </td>
                                    <td> <?php echo $current_unit["NUM_BATH"]; ?> </td>
                                    <td> <?php echo $current_unit["SQ_FT"]; ?> </td>
                                    <td> <?php echo $current_unit["PRICE"]; ?> </td>
                                    <td> <?php echo $current_unit["DATE_AVL"]; ?> </td>
                                    <td> <?php echo $current_unit["LEASE_TYPE"]; ?> </td>
                                    <td> <?php echo $current_unit["DEPOSITE"]; ?> </td>
                                    <td> Add Link </td>
                                </tr>

                                <?php
                            }
                        }
                        ?>

                    </table>
                    <form action="LandlordNewUnit.php">
                        <input type="submit" value="Add New Unit" />
                    </form>

                    <div class ="account_info">
                        <h4>Account Information</h4>
                        Complex Email: <?php echo $current_email; ?> <br>
                        Phone Number: <?php echo $current_phone; ?> <br>
                        Address: <?php echo $current_street; ?> <br>
                        City: <?php echo $current_city; ?> <br>
                        Zip: <?php echo $current_zip; ?> <br>
                        Complex Description: <?php echo $current_description; ?> <br>
                        <input type="submit" name ="submit" value="Edit Account Information" />
                    </div>
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
