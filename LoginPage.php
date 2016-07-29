<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Housing4Health Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

                        <li><a class ="login" href="user_login.html">Login</a></li>
                    </ul>
                </nav>
            </div>
            
            
            
            <div class ="content">
                <div class ="form_box">
                    
                    <form class="form-control" action="login.php" method="POST">
                        <h4>Welcome to the Housing4Health Login Page</h4>
                        <p>Please enter your Email and Password or click register below to create an account.</p>
                        <input type="text" name="login_field"  placeholder="Complex Email" />
                        <input type="text" name="password_field"  placeholder="Password" />
                        <input type="submit" name ="submit" value="Login" />
                        <p>or</p>
                        <a href="register_form.html" type = "button"/>Register</a>
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
