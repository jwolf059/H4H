<?php

//file upload variables 
$target_dir = "Upload/";
$uploadOK = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

//Verify the Image is a real image
if (isset($POST["submit"])) {
    $check = getimagesize($_FILES["Image_One"]["TEMP"]);
    if ($check !== false) {
        echo "File is an Image - " . $check["mime"] . " .";
        $uploadOK = 1;
    } else {
        echo "File is not an image.";
        $uploadOK = 0;
    }
}
// Check file size
if ($_FILES["Image_One"]["size"] > 500000) {
    echo "Your File is too Large, File size limit is 50mb";
    $uploadOK = 0;
}

//Check for File Format
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" &&
        $imageFileType != "gif") {
    echo "Only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOK = 0;
}
if ($uploadOK == 0) {
    echo "File upload unsuccessful";
} else {
    if (move_uploaded_file($_FILES["Image_One"]["tmp_name"], $target_file)) {
        echo "The file has been uploaded";
    } else {
        echo " File upload unsuccessful";
    }
}
?>



