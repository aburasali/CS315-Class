 <!-- Name: Mohammed Ibrahim
 date: 11/6/2023 

-->

 <?php
    if (isset($_POST['Signout'])) {
        header('Location:../register.php');
    }

    if (isset($_POST['Logout'])) {
        header('Location:../index.php');
    }