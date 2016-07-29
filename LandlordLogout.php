<?php

session_start();
if (session_destroy()) { // Destroying All Sessions
    header("Location: Homepage.html"); // Redirecting To Home Page
}
?>