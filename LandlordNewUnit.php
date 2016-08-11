
<?php
include('LandlordSession.php');
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Affordable Housing New Unit</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Style3.css">
        <link rel="stylesheet" type="text/css" href="Style3.css" media = "screen">
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
                <div class ="Unit_form_box">         
                    <h1 align="center"> Housing4Health New Unit </h1>
                    <form class = "new_unit_form" action="NewUnitVerify.php" method="POST" >
                        <p class="word">Unit Number: <input class ="unit" size ="50" type="text" name="unit_id" placeholder="Unit number" /> </p>
                        <p class="word">Number of Bedrooms: <input class ="unit" size ="50" type="text" name="bed_count"  placeholder="No. of Beds" /></p>
                        <p class="word">Number of Bathrooms: <input class ="unit" size ="50" type="text" name="bath_count" placeholder="No. of Bath" />  </p>
                        <p class="word">Square Footage: <input class ="unit" size ="50" type="text" name="sq_feet" placeholder="Sq. Feet" /></p>
                        <p class="word">Rent Price: <input class ="unit" size ="50" type="text" name="price" placeholder="Price" /></p>
                        <p class="word">Lease Length:<input class ="unit" size ="50" type="text" name="lease_length" placeholder="Lease Length" /></p>
                        <p class="word">Deposit: <input class ="unit" size ="50" type="text" name="deposit" placeholder="Deposit Amount" /></p>
                        <p class="word">Application Fee:<input class ="unit" size ="50" type="text" name="app_fee" placeholder="App Fee" /></p>
                        <p class="word">Pets Allowed: <select class ="selection" name="pet_allowed">
                                <option value ="Yes">Yes</option>
                                <option value ="No">No</option>
                            </select></p>
                        <p class="word">Pet Restrictions: <input class ="unit" size ="50" type="text" name="pet_req" placeholder="Pet Requirments"/></p>
                        <p class="word">Laundry: <select class ="selection" name="laundry">
                                <option value ="Yes">Yes</option>
                                <option value ="No">No</option>
                            </select></p>
                        <p class="word">Section 8: <select class ="selection" name="sec_8">
                                <option value ="Yes">Yes</option>
                                <option value ="No">No</option>
                            </select></p>
                        <p class="word">HUD Voucher: <select class ="selection" name="hud_vouch">
                                <option value ="Yes">Yes</option>
                                <option value ="No">No</option>
                            </select></p>
                        <p class="word">USDA: <select class ="selection" name="usda">
                                <option value ="Yes">Yes</option>
                                <option value ="No">No</option>
                            </select></p>
                        <p class="word">Low Income: <select class ="selection" name="low_income">
                                <option value ="Yes">Yes</option>
                                <option value ="No">No</option>
                            </select></p>

                        <input type="submit" name="submit" value="Submit"/>
                    </form>
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
