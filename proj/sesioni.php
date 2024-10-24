<?php
session_start();
$conn = mysqli_connect('localhost','root','','login');
$name ='';
$email = '';
$username = '';
if(!$conn){
    echo "no conection with db";
    die;
}

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
}
$sql = "INSERT INTO user (name, email, username) VALUES ('$name', '$email', '$username')";

if (mysqli_query($conn, $sql)) {
    // include 'sesi.php';
    $_SESSION['name'] = $name;
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
