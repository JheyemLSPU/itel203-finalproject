
<!-- This entire header goes to almost all of the main PHP files that aren't just used for 'includes' and are generally the main pages. -->

<!-- This is to let the page know the currently logged in user -->
<?php $user = current_user(); ?>

<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>
      <?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "501st - Inventory System";
      ?>
    </title>
    
    <!-- This is for the local CSS. Here, it connects to the main CSS file and not the initial CSS that was used for the login. -->
    <link rel="stylesheet" href="libs/css/main.css" />

    <!-- This is for the 3rd Party CSS files using AJAX and Bootstrap -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  </head>

  <body style="background-color:#152238">
  <?php  if ($session->isUserLoggedIn(true)): ?>
    <header id="header">

      <!-- This is the top-left portion of the page, the left portion of the header that shows the logo and name of the organization. -->
      <div class="logo pull-left">501-st <img src="libs/images/Logo.png" width="40px"> Legion</div>
      <div class="header-content">
      
      <!-- This is to get the date and text that displays on the header. -->
      <div class="header-date pull-left">
        <strong>
          <img src="libs/images/Flag.png" width="25px">
          <?php echo str_repeat('&nbsp;', 2);?>
          <?php echo "PH Garrisson ";?>
          <?php echo str_repeat('&nbsp;', 7);?>
          <?php echo "|";?>
          <?php echo str_repeat('&nbsp;', 7);?>
          <?php echo "Online Inventory System ";?>
          <?php echo str_repeat('&nbsp;', 7);?>
          <?php echo "|";?>
          <?php echo str_repeat('&nbsp;', 7);?>
          <?php echo "Date & Time: ";?>
          <?php echo date("F j, Y, g:i a");?>
        </strong>
      </div>
      <div class="pull-right clearfix">

      <!-- This has the the rest of the header, including the user's Name display. -->
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline">
              <span>
                <?php echo str_repeat('&nbsp;', 1);?>
                <?php echo remove_junk(ucfirst($user['name'])); ?> <i class="caret"></i>
                <?php echo str_repeat('&nbsp;', 1);?>
              </span>
            </a>
            <ul class="dropdown-menu">
            <li class="last">
                 <a href="home.php">
                     <i class="glyphicon glyphicon-home"></i>
                     Home
                 </a>
             </li>
             <li class="last">
                 <a href="logout.php">
                     <i class="glyphicon glyphicon-off"></i>
                     Logout
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
     </div>
    </header>
    
    <div class="sidebar">
      <?php if($user['user_level'] === '1'): ?>
      
      <!-- This is the main window you get put into after logging in -->
      <?php include_once('admin_menu.php');?>
      <?php endif;?>

   </div>
<?php endif;?>

<div class="page">
  <div class="container-fluid">
