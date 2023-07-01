<!-- /* Name: Mohammed Ibrahim
date: 11/6/2023
The name file is expressive
*/ -->
<?php
include('functions.php');
include('global_data.php');


if (isset($_POST['sbmt'])) {
    //data validition: remove '/' for clean inputs of scribts and suitable data form prepare  
    $nm = ucfirst((stripcslashes(strtolower($_POST['nm']))));
    $usrnm = strtolower(stripcslashes($_POST['usrnm']));
    $psswrd = stripcslashes($_POST['psswrd']);
    $eml = strtolower(stripcslashes($_POST['eml']));
    $phn = (int)($_POST['phn']);
    $md5_pss = md5($psswrd);

    //نحن بحاجة للتحقق من شكل البيانات وصحتها قبل إرسالها لقاعدة البيانات
    if (empty($nm)) {
        $err_nm = "<p id='error'>Please enter your name</p>";
        $err = 1;
    } elseif (strlen($nm) < 1) {
        $err_nm = "<p id='error'>Name needs to have mimimum of 1 letters</p>";
        $err = 1;
    } elseif (strlen($nm) > 100) {
        $err_nm = "<p id='error'>Name needs to have maximum of 24 letters</p>";
        $err = 1;
    } elseif (contains_digit($nm)) {
        $err_nm = "<p id='error'>Name must not contains digits</p>";
        $err = 1;
    }




    if (empty($usrnm)) {
        $err_usrnm = "<p id='error'>Please enter username</p>";
        $err = 1;
    } elseif (strlen($usrnm) < 10) {
        $err_usrnm = "<p id='error'>Username needs to have mimimum of 10 letters</p>";
        $err = 1;
    } elseif (strlen($usrnm) > 15) {
        $err_usrnm = "<p id='error'>Username needs to have maximum of 15 letters</p>";
        $err = 1;
    } elseif (!ctype_alnum($usrnm)) {
        $err_usrnm = "<p id='error'>Username must is letters  digits or both</p>";
        $err = 1;
    }




    if (empty($eml)) {
        $err_eml = "<p id='error'>Please enter email</p>";
        $err = 1;
    } elseif (!filter_var($eml, FILTER_VALIDATE_EMAIL)) {
        $err_eml = "<p id='error'>Please enter currect email</p>";
        $err = 1;
    }




    if (empty($phn)) {
        $err_phn = "<p id='error'>Enter phone number</p>";
        $err = 1;
    } elseif (!ctype_digit($phn)) {
        $err_phn = "<p id='error'>phone not digits</p>";
        $err = 1;
    }



    if (key_exists($usrnm, $my_data)) {
        $err_usrnm = "<p id='error' >sorry not valid, username already exists</p> ";
        $err = 1;
        include('register.php');
        exit();
    }

    if (isset($err)) {
        include('register.php');
        exit();
    }



    if (empty($psswrd)) {
        $err_psswrd = "<p id='error' >please enter password</p><br/>";
        $err = 1;
    } elseif (strlen($psswrd) < 10) {
        $err_psswrd = "<p id='error'>The password must contain at least 10-14 characters.</p>";
        $err = 1;
    } elseif (strlen($psswrd) > 14) {
        $err_psswrd = "<p id='error'>The password must contain at max 10-14 characters.</p>";
        $err = 1;
    } elseif (!valid_password($psswrd)) {
        $err_psswrd = "<p id='error'>lowercase, uppercase, digits(0-9), and at least one unique character (e.g.,
        +/$#@%^&*<> ). </p>";
        $err = 1;
    } elseif (valid_password($psswrd)) {
        $my_data[$usrnm]=$psswrd;
        if (isset($_POST['sbmt'])) {
            print_r($my_data);
            show($nm, $usrnm, $eml, $phn, $psswrd);
        }
        include('index.php');
        header('refresh:6;url=index.php');
        // echo '<script>window.open("index.php");</script>';
        echo "<script>alert('Successfully registered, log in to start Expense Tracker')</script>";
        exit();
    }

    if (isset($err) ) {
        include('register.php');
        exit();
    }
}