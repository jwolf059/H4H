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
            <div>         
                <h1 align="center"> Housing4Health New Unit </h1>
                <form action="NewUnitVerify.php" method="POST" >
                    <ul style="list-style-type: none">
                        <li>
                            <input type="text" name="bed_count"  placeholder="No. of Beds" />
                            <input type="text" name="bath_count" placeholder="No. of Bath" />  
                        </li>
                        <li>
                            <input type="text" name="sq_feet" placeholder="Sq. Feet" />
                            <input type="text" name="price" placeholder="Price" />
                        </li>
                        <li>
                            <input type="text" name="deposit" placeholder="Deposit Amount" />
                            <input type="text" name="app_fee" placeholder="App Fee" />
                        </li>
                        <li>
                            
                        </li>
                        <li>
                            <input type="submit" value="Submit"/>
                        </li>

                    </ul>

                </form></div>
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