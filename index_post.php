<!-- /* Name: Mohammed Ibrahim
date: 11/6/2023
backend login file

*/ -->
<?php
include('global_data.php');
session_start();
first:
if (isset($_POST['sbmt'])) {

    $usrnm = strtolower(stripcslashes($_POST['usrnm']));
    $psswrd = stripcslashes(($_POST['psswrd']));

    usrnm:
    if (empty($usrnm)) {
        $err_usrnm = "<p id='error'>Please insert username</p>";
    } elseif (!key_exists($usrnm, $my_data)) {
        $err_psswrd = "<p id='error'>Not Fuond username or wrong password11</p>";
    } //end if usrnm

    if (empty($psswrd)) {
        $err_psswrd = "<p id='error' >please insert password</p><br/>";
    }


    mid:
    if (isset($err_usrnm) or isset($err_psswrd)) {
        include('index.php');
    } elseif ($psswrd === $my_data[$usrnm]) {
        $_SESSION['username'] = $usrnm;
        $_SESSION['password'] = $psswrd;
        header("location:home/home.php"); //home page
        session_destroy();
        exit();
    } else {
        $err_psswrd = "<p id='error'>Not Fuond username or wrong password22</p>";
        include('index.php');
        exit();
    } //end mid if
} //end first if
?>