<?php
    include "header.php";
    include "db_conn.php";

$sql = "SELECT * FROM product";
$result = $conn -> query ($sql);


if(isset($_POST['update_btn'])){
  $update_id = $_POST['update_id'];
  $name = $_POST['update_name'];
  $des = $_POST['update_des'];
  $unit = $_POST['update_unit'];
  $unitprice = $_POST['update_unitprice'];
  
  $update_query = mysqli_query($conn, "UPDATE `product` SET unitprice = '$unitprice' , name='$name' , des='$des' ,unit='$unit'  WHERE id = '$update_id'");
  if($update_query){
     header('location:home.php');
  };
};

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($conn, "DELETE FROM `product` WHERE id = '$remove_id'");
  header('location:home.php');
};


?>

<?php include "views/hometop.view.php" ?>
   
<?php require "modal/home.modal.php" ?>
      
<?php include "views/homebottom.view.php" ?>
    
  