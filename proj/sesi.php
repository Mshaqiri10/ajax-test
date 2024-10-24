<?php
session_start();
if (empty($_SESSION['name'])) {
    // Redirect to login or registration page if not logged in
    header("Location: vlera.html"); // Change this to your login page
    exit();
}