<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Rain Login Form</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div id="form">
    <!-- login and signup form  -->
    <ul class="tabs">
      <li id="tab1" class="tab"><a href="index.php" class="activate">Log In</a></li>
      <li id="tab2" class="tab"><a href="signup.php">Sign Up</a></li>
    </ul>
    <!-- .tabs (login and signup) -->
    <div id="tab_content">
      <div id="login" class="">
        <form action="" method="post">
          <h1 class="text-center">Welcome to Rain</h1>
          <div class="wrap-field">
            <label for="email">Email Address<span class="req">*</span></label>
            <input type="email" name="email" id="email" required />
          </div>
          <div class="wrap-field">
            <label for="password" Placeholder="Password" >Password<span class="req">*</span></label>
            <input type="password" name="password" id="password" required />
          </div>
          <a href="#" style="float: right;">Forgot Password?</a>
          <button type="submit" name="login">LOG IN</button>
        </form>
      </div>
     
    </div>
  </div>
</body>

</html>