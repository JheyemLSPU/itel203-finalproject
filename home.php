<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>

<!-- This shows the panels and the jumbotron along with the elements inside them
 that appear after you login and get redirected to the home.php page. -->

<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div>
      <div class="jumbotron text-center" style="background-color:#3c2c49;";>
         <img src="libs/images/banner.webp" class="banner">
         <h2 class="txth"><img src="libs/images/Logo_2.png" width="40px"> <b>| 501st Legion - PH Garrisson</b><br>Official Inventory System</h2>
         <hr class="introline">
         <p class="txthm">You are using the official inventory system of the 501st Legion's Philippine Garrisson.
          <br>The leading Star Wars costuming organization in the Philippines.
          <hr class="introline">
          <h3 style="color: white;"><b>May the Force be with You</b></h3></p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
