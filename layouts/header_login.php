
<!-- This is ONLY for the login page. -->

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
    
    <!-- This is for the local CSS. Instead of the main CSS file, this connects to the other CSS file strictly used only by the login page. -->
    <link rel="stylesheet" href="libs/css/login.css" />

    <!-- This is for the 3rd Party CSS files using AJAX and Bootstrap -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  </head>
  <body>
  <?php  if ($session->isUserLoggedIn(true)): ?>
    <header id="header">
      <div class="logo pull-left"> 501st - PH Inventory</div>
      <div class="header-content">
      
      <!-- This is to get the date that shows up on the header. -->
      <div class="header-date pull-left">
        <strong><?php echo date("F j, Y, g:i a");?></strong>
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline">
              <span><?php echo remove_junk(ucfirst($user['name'])); ?> <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
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
