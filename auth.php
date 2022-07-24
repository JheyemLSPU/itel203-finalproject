<?php include_once('includes/load.php'); ?>

<!-- This file is in charge of authenticating the login sequence.
This also redirects the user and shows the welcome message OR shows
an error message in case of an unsuccessful login. -->

<?php
$req_fields = array('username','password' );
validate_fields($req_fields);
$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']);

if(empty($errors)){
  $user_id = authenticate($username, $password);
  if($user_id){
     $session->login($user_id);
     updateLastLogIn($user_id);
     $session->msg("s", "Glory to the 501st Legion!");
     redirect('home.php',false);

  } else {
    $session->msg("d", "Invalid Credentials. Please Try Again.");
    redirect('index.php',false);
  }

} else {
   $session->msg("d", $errors);
   redirect('index.php',false);
}

?>
