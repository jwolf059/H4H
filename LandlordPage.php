
<?php
include('LandlordSession.php');
$unit_query_string = sprintf("SELECT * FROM UNIT WHERE COMPLEX_NAME='%s';", $current_complex);

$$unit_result = mysqli_query($conn, $unit_query_string);
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
                    <b id="welcome">Welcome : <i><?php echo $current_complex; ?></i></b>

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
                            <th>Edit Unit</th>
                        </tr>


                        <?php
                        if ($$unit_result) {

                            while ($current_unit = mysqli_fetch_assoc($$unit_result)) {
                                ?>
                                <tr>
                                    <td> <?php echo $current_unit["UNIT_ID"]; ?> </td>
                                    <td> <?php echo $current_unit["NUM_BED"]; ?> </td>
                                    <td> <?php echo $current_unit["NUM_BATH"]; ?> </td>
                                    <td> <?php echo $current_unit["SQ_FT"]; ?> </td>
                                    <td> <?php echo $current_unit["PRICE"]; ?> </td>
                                    <td> <?php echo $current_unit["DATE_AVL"]; ?> </td>
                                    <td> <?php echo $current_unit["LEASE_TYPE"]; ?> </td>
                                    <td> <?php echo $current_unit["DEPOSITE"]; ?> </td>
                                    <td> Edit Unit </td>
                                </tr>

                                <?php
                            }
                        }
                        ?>

                    </table>
                </div>
                <div class="lower_box">
                    <form action="LandlordNewUnit.php">
                        <input type="submit" value="Add New Unit" />
                    </form>
                    <div class ="account_box">
                        <div class ="account_info">
                            <h4>Account Information</h4> <br>
                            <p class ="account">Complex Email: <?php echo $current_email; ?> </p>
                            <p class ="account">Phone Number: <?php echo $current_phone; ?> </p>
                            <p class ="account">Address: <?php echo $current_street; ?> </p>
                            <p class ="account">City: <?php echo $current_city; ?> </p>
                            <p class ="account">Zip: <?php echo $current_zip; ?> </p>
                            Complex Description: <?php echo $current_description; ?> <br>
                            <input type="submit" name ="submit" value="Edit Account Information" />
                        </div>
                    </div>  
                    <div class ="Picture_box">
                        <form action="uploadPic.php">
                        <img src = "<?php echo $current_IMG_ONE; ?>" >
                        <div class="pic_upload">
                        <input type ="file" name ="Image_One" accept ="Images/*"> 
                        <input type="submit" name ="submit" value="Upload Selected Image" />
                        </form>
                        <div>
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
