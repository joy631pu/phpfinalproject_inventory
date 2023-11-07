<!-- include index.php -->

<?php
SESSION_START();

if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']!=1)
   {
       header("location:index.php");
   }
}
else
{
   header("location:index.php");
}

include "nav.php";
include "views/stock.view.php";
?>
