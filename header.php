<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php include "views/header.view.php" ?>

<?php 
} else{
     header("Location: index.php");
     exit();
}
 ?>