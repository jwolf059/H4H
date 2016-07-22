<?php

$complex_name = filter_input(INPUT_POST, "complex_name");
$complex_email = filter_input(INPUT_POST, "complex_email", FILTER_VALIDATE_EMAIL);
$phone_number = filter_input(INPUT_POST, "phone_number",FILTER_SANITIZE_SPECIAL_CHARS);
$street_address = filter_input(INPUT_POST, "street_address");
$complex_city = filter_input(INPUT_POST, "complex_city");
$complex_zip = filter_input(INPUT_POST, "complex_zip");


if (isset($complex_name) and isset($complex_email) and
        isset($phone_number) and isset($street_address) and
        isset($complex_city) and isset($complex_zip)) {
    
    echo $phone_number;
    
}
?>

