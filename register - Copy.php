<!-- /* Name: Mohammed Ibrahim
date: 11/6/2023
The name file is expressive
*/ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>register</title>
</head>

<body>
    <div class="main">

        <?php include('include/logoname.html') ?>

        <br><br>
        <h3>Register</h3>


        <form action="register_post.php" method="POST">

            <input type="text" name="nm" placeholder="name"><br>
            <?php
            if (isset($err_nm)) {
                echo $err_nm;
            }
            ?>
            <input type="text" name="usrnm" placeholder="username"><br>
            <?php

            ?>
            <input type="number" name="phn" placeholder="phone"><br>
            <?php
            if (isset($err_phn)) {
                echo $err_phn;
            }
            ?>
            <input type="email" name="eml" placeholder="email"><br>
            <?php
            if (isset($err_eml)) {
                echo $err_eml;
            }
            ?>
            <input type="password" name="psswrd" placeholder="password" value="1234567890Ab#"><br>
            <?php
            if (isset($err_psswrd)) {
                echo $err_psswrd;
            }
            ?>
            <button type="submit" name="sbmt">Register</button>
            <!-- <input type="submit" name="sbmt" value="Register"> -->
        </form>
        <br>
        <h5>Do you have account? <a href="index.php">Log now</a> </h5>

    </div>
</body>

</html>