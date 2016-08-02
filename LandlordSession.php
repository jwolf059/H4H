<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";


$conn = mysqli_connect($servername, $username, $password);

$db = mysqli_select_db($conn, $database);
session_start();

$user_validation = $_SESSION['login_user'];

$query_string = sprintf("SELECT * FROM USER where COMPLEX_EMAIL='%s';", $user_validation);
$query_for_login = mysqli_query($conn, $query_string);

$row = mysqli_fetch_assoc($query_for_login);

$current_complex = $row['COMPLEX_NAME'];
$current_email = $row['COMPLEX_EMAIL'];
$current_phone = $row['PHONE_NUMBER'];
$current_street = $row['STREET_ADDRESS'];
$current_city = $row['CITY'];
$current_zip = $row['ZIP'];
$current_description = $row['DESCRIPTION'];

if (!isset($current_email)) {
    mysqli_close($conn); // Closing Connection
    header('Location: Homepage.html');
}
?>