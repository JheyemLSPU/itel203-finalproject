<?php
  require_once('includes/load.php');
?>
<?php
  $categorie = find_by_id('categories',(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","Missing Category id.");
    redirect('categorie.php');
  }
?>
<?php
  $delete_id = delete_by_id('categories',(int)$categorie['id']);
  if($delete_id){
      $session->msg("s","Category deleted.");
      redirect('categorie.php');
  } else {
      $session->msg("d","Category deletion failed.");
      redirect('categorie.php');
  }
?>
