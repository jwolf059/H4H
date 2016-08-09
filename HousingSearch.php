<?php
$result_for_search = false;
include('Search.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Housing4Health Search</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

                        <li><a class ="login" href="user_login.html">Login</a></li>
                    </ul>
                </nav>
            </div>
            </div>
            <div id = "content">
                <div class ="filter">
                <form class ="filter-control" action="" method="POST">
                    <h4> Filter Results </h4> 
                    Bedrooms: <select name = "Bedrooms">
                        <option value ="0">0</option>
                        <option value ="1">1</option>
                        <option value ="2">2</option>
                        <option value ="3">3</option>
                        <option value ="4">4</option>
                        <option value ="5">5</option>
                        <option value ="6">6</option>
                    </select>
                    Bathrooms: <select name = "Bathrooms">
                        <option value ="0">0</option>
                        <option value ="1">1</option>
                        <option value ="2">2</option>
                        <option value ="3">3</option>
                        <option value ="4">4</option>
                        <option value ="5">5</option>
                        <option value ="6">6</option>
                    </select>
                    Min Price: <select name = "Min_Price">
                        <option value ="0">$0</option>
                        <option value ="50">$50</option>
                        <option value ="100">$100</option>
                        <option value ="150">$150</option>
                        <option value ="200">$200</option>
                        <option value ="250">$250</option>
                        <option value ="300">$300</option>
                        <option value ="350">$350</option>
                        <option value ="400">$400</option>
                        <option value ="450">$450</option>
                        <option value ="500">$500</option>
                        <option value ="550">$550</option>
                        <option value ="600">$600</option>
                        <option value ="650">$650</option>
                        <option value ="700">$700</option>
                        <option value ="850">$850</option>
                        <option value ="900">$900</option>
                        <option value ="950">$950</option>
                        <option value ="1000">$1000</option>
                        <option value ="1050">$1050</option>
                        <option value ="1100">$1100</option>
                        <option value ="1150">$1150</option>
                        <option value ="1200">$1200</option>
                        <option value ="1250">$1250</option>
                        <option value ="1300">$1300</option>
                        <option value ="1350">$1350</option>
                        <option value ="1400">$1400</option>
                        <option value ="1450">$1450</option>
                        <option value ="1500">$1500</option>
                        <option value ="1550">$1550</option>
                        <option value ="1600">$1600</option>
                        <option value ="1650">$1650</option>
                        <option value ="1700">$1700</option>
                        <option value ="1750">$1750</option>
                        <option value ="1800">$1800</option>
                        <option value ="1850">$1850</option>
                        <option value ="1900">$1900</option>
                        <option value ="1950">$1950</option>
                        <option value ="2000">$2000</option>
                    </select>
                    Max Price: <select name = "Max_Price">
                        <option value ="0">$0</option>
                        <option value ="50">$50</option>
                        <option value ="100">$100</option>
                        <option value ="150">$150</option>
                        <option value ="200">$200</option>
                        <option value ="250">$250</option>
                        <option value ="300">$300</option>
                        <option value ="350">$350</option>
                        <option value ="400">$400</option>
                        <option value ="450">$450</option>
                        <option value ="500">$500</option>
                        <option value ="550">$550</option>
                        <option value ="600">$600</option>
                        <option value ="650">$650</option>
                        <option value ="700">$700</option>
                        <option value ="850">$850</option>
                        <option value ="900">$900</option>
                        <option value ="950">$950</option>
                        <option value ="1000">$1000</option>
                        <option value ="1050">$1050</option>
                        <option value ="1100">$1100</option>
                        <option value ="1150">$1150</option>
                        <option value ="1200">$1200</option>
                        <option value ="1250">$1250</option>
                        <option value ="1300">$1300</option>
                        <option value ="1350">$1350</option>
                        <option value ="1400">$1400</option>
                        <option value ="1450">$1450</option>
                        <option value ="1500">$1500</option>
                        <option value ="1550">$1550</option>
                        <option value ="1600">$1600</option>
                        <option value ="1650">$1650</option>
                        <option value ="1700">$1700</option>
                        <option value ="1750">$1750</option>
                        <option value ="1800">$1800</option>
                        <option value ="1850">$1850</option>
                        <option value ="1900">$1900</option>
                        <option value ="1950">$1950</option>
                        <option value ="2000">$2000</option>
                    </select>
                    Laundry <input type ="checkbox" name ="Laundry">
                    Pets Allowed <input type ="checkbox" name="Pets">

                    <input type ="submit" name ="submit" value="Search">


                </form>
                </div>
                <div class = "results">


                        <?php
                        if ($result_for_search) {
                            $beds = $_POST['Bedrooms'];
                            $baths = $_POST['Bathrooms'];
                            $min_price = $_POST['Min_Price'];
                            $max_price = $_POST['Max_Price'];
                            

                            while ($complex = mysqli_fetch_assoc($result_for_search)) {
                                $name = $complex['COMPLEX_NAME'];
                                
                                $query_string = "SELECT * FROM UNIT WHERE COMPLEX_NAME='$name' "
                                        . "AND NUM_BED >= '$beds' AND NUM_BATH >='$baths' AND "
                                        . "PRICE >='$min_price' AND PRICE<='$max_price'";

                                $complex_query_result = mysqli_query($conn, $query_string);
                                       
                                if ($complex_query_result) {
                                    $rows = mysqli_num_rows($complex_query_result);
                                    if ($rows > 0) {
                                    ?>
                                <div class ="complexResult">
                                    
                                    <div class ="Image">
                                        <img src = "<?php echo $complex["IMG_ONE"]; ?>">
                                    </div>
                   
                                   <div class ="name">
                                        <?php echo $complex["COMPLEX_NAME"]; ?>
                                   </div>
                                   <div class ="phoneNumber">
                                        <?php echo $complex["PHONE_NUMBER"]; ?>
                                   </div>
                                    <div class ="bed_range">
                                        1 - 5 beds
                                    </div>
                                    <div class ="Price_range">
                                       $100 to $200
                                    </div>
                                    
                                </div>        
                                    
                                    
                                    <?php
                                    }
                                    
                                }
                            }
                            mysqli_close($conn);
                        }

                        ?>
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
