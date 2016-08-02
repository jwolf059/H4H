
<?php
include('LandlordSession.php');

$unit_query_string = sprintf("SELECT * FROM UNIT where COMPLEX_NAME='%s'", $current_complex);
$query_for_units = mysqli_query($conn, $unit_query_string);

$allRows = array();
while ($row = mysqli_fetch_array($query_for_units, MYSQLI_NUM)) {
    $allRows[] = $row;
}
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
                        <?php
                        foreach ($allRows as $row) {
                            ?>
                            <tr>
                                <td width="19%" valign="top"><?php echo $row['Num_Bed']; ?>" width="142" height="188" alt="<?php echo $row['PRICE']; ?>" /><br />
                                    etc.
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
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

    </body>
</html>
