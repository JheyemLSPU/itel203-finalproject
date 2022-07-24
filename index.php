<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>

<!-- This is to include the header for this page. This specific header, however, is for the login page only. -->
<?php include_once('layouts/header_login.php'); ?>

<!-- The background and other non-Boobstrap and jQuery styles are in the login.css file,
which this file connects to through the 'header_login.php' file. -->

<center>
<img class="logo" src="libs/images/Logo.png">
<div class="login-page">
    <div class="text-center">
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="lbl">USERNAME</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="lbl">PASSWORD</label>
            <input type="password" name= "password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
                <button type="submit" class="button" style="border-radius:0%">Login</button>
        </div>
    </form>
</div>
</center>

<!-- This is to include the footer for this page. This will appear in almost every main PHP file in the project -->
<?php include_once('layouts/footer.php'); ?>
