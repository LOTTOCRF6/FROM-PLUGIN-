<?php include 'server.php' ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./view.js"></script>
</head>
<body>
    <div id="form">
        <!-- login and signup form  -->
        <ul class="tabs">
        <li id="tab1" class="tab"><a href="index.php" class="activate">Log In</a></li>
        <li id="tab2" class="tab"><a href="#signup">Sign Up</a></li>
        </ul>
    <div id="signup" class="">
            <form action="signup.php" method="post">
                <?php include('errors.php') ?>
            <h1 class="text-center">Sign Up For Free</h1>
            <div class="wrap-field float-left">
                <input type="text" name="firstname" value="<?php echo $firstname; ?>" id="f_name" />
            </div>
            <div class="wrap-field float-right">
                <label for="f_name">Last Name<span class="req">*</span></label>
                <input type="text" name="lastname" value="<?php echo $lastname; ?>" id="l_name" required />
            </div>
            <div class="wrap-field" style="clear: both">
                <label for="e-mail">Email<span class="req">*</span></label>
                <input type="email" name="email" value="<?php echo $email; ?>" id="e-mail" required />
            </div>
            <div class="wrap-field">
                <label for="pass">Password<span class="req">*</span></label>
                <input type="password" name="password" id="pass" required />
            </div>
            <div class="wrap-field">
                <label for="pass2">Comfirm Password<span class="req">*</span></label>
                <input type="password" name="password2" id="pass2" required />
            </div>
            <button type="submit" name="register">SIGN UP</button>
            </form>
        </div>
        <!-- #signup  -->
</body>
</html>