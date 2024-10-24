<?php
session_start();

if (isset($_POST['submit'])) { 

    $_SESSION['name'] = $_POST['emri'];
    $_SESSION['user'] = $_POST['useri'] ;
        echo $_POST['emri'];
    }

?>