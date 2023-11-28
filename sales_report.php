<?php
 include'header.php';
include'db_conn.php';
$t=0;
if (isset($_POST['submit'])) 
{
    $starttime=$_POST['starttime'];
    $endtime=$_POST['endtime'];

$sql = "SELECT * FROM sales where created_at>='$starttime' && created_at<'$endtime'";
$result = $conn -> query ($sql);
}
?>
<?php include "views/sales_report.view.php" ?>
<?php include "modal/sales_report.modal.php" ?>
<?php include "views/sales_reportbottom.view.php" ?>