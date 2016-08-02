
<?php
include('LandlordSession.php');

$unit_query_string = sprintf("SELECT * FROM UNITS where COMPLEX_NAME='%s'", $current_complex);

$query_for_units = mysqli_query($conn, $unit_query_string);
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
        <title>Landlord Property Management</title>
   
    </head> 
    
    <body>
        <h1> <b>Landlord Property Management</b></h1>
        <div id="profile">
            <b id="welcome">Welcome : <i><?php echo $current_complex; ?></i></b>
            <p id="UnitTable"> <?php
                while ($row == mysqli_fetch_assoc($query_for_units)) {
                         printf("%s, %s", $row['COMPLEX_NAME'], $row['PRICE']);
                        }?>
                <b id="logout"><a href="LandlordLogout.php">Log Out</a></b>

        </div>
    </body>
</html>
