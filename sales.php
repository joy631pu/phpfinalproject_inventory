<?php
    include "header.php";
    include "db_conn.php";
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

if (isset($_POST['submit'])) 
{
$id=$_POST['id'];
$name=$_POST['name'];
$des=$_POST['des'];
$unit=$_POST['unit'];
$unitprice=$_POST['unitprice'];
$unitsale=$_POST['unitsale'];
$totalprice=$unitprice*$unitsale;
$u_unit=$unit-$unitsale;

if($unit>=$unitsale)
{
  $insertsql = "INSERT INTO sales(name, sellunit, totalprice, productid) VALUES ('$name', '$unitsale', '$totalprice','$id')";

if ($conn->query($insertsql) === TRUE) 
{
  echo " Sell successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$update_quantity_query = "UPDATE `product` SET unit = '$u_unit'  WHERE id = '$id'";

if ($conn->query($update_quantity_query) === TRUE) 
{
  echo " Update successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header('location:sales.php');

}
else
{
  echo "Out Of Stock";
}



};




?>
<?php include "views/salestop.view.php" ?>
   
<?php include "modal/sales.modal.php" ?>
      

    
<?php include "views/salesbottom.view.php" ?>