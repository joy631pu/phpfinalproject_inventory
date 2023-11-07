<!-- Purchase or add new product to the product table -->
<?php
include "nav.php";
include "connection.php";
include "views/purchase.view.php";
if (isset($_POST['submit'])) 
    {
    $name=$_POST['name'];
    $des=$_POST['des'];
    $unit=$_POST['unit'];
    $unitprice=$_POST['unitprice'];

    $insertsql = "INSERT INTO product(name, des, unit, unitprice) VALUES ('$name', '$des', '$unit','$unitprice')";

    $insertsql1 = "INSERT INTO purchase(name, des, unit, unitprice) VALUES ('$name', '$des', '$unit','$unitprice')";
    if ($conn->query($insertsql1) === TRUE) 
    {
      echo "";
    } else 
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    if ($conn->query($insertsql) === TRUE) 
    {
      echo "   New record created successfully";
    } else 
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    } 
?>
