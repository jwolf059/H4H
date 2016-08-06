<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";

if (isset($_POST['submit'])) {
    // Connect to Server
    $conn = mysqli_connect($servername, $username, $password);

    // Test connection.
    if (!$conn) {
        die("Connection Failed: " . mysqli_error());
    }

    // Select database
    $selected_db = mysqli_select_db($conn, $database);



    $query_string = sprintf("SELECT * FROM USER");

    $result_for_search = mysqli_query($conn, $query_string);
}
?>

