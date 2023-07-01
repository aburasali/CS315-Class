<!-- /* Name: Mohammed Ibrahim
date: 11/6/2023
login file
*/ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Log in</title>
</head>

<body>
    <div class="main">
        <?php include('include/logoname.html') ?>

        <br><br>
        <h3>login</h3>
        <form action="index_post.php" class="form" method="post">

            <input type="text" name="usrnm" placeholder="username or email or phone"><br>
            <?php
            if (isset($err_usrnm))
                echo $err_usrnm;
            ?>
            <input type="password" name="psswrd" placeholder="password"><br>
            <?php
            if (isset($err_psswrd))
                echo $err_psswrd;
            ?>
            <div class=btn>
                <button type="submit" name="sbmt">Login Now</button><br>
                <!-- <input type="submit" name="login" value="Login Now"> -->

                <a href="reset.php">Forgot password?</a>
            </div>
        </form>
        <br>
        <h5>If have not account, <a href="register.php">Creat an account</a></h5>
    </div>
</body>

</html>