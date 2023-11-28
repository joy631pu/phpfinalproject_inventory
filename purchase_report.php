<?php
    include "header.php";
    include "db_conn.php";
    $t=0;
if (isset($_POST['submit'])) 
{
    $starttime=$_POST['starttime'];
    $endtime=$_POST['endtime'];

$sql = "SELECT * FROM purchase where created_at>='$starttime' && created_at<'$endtime'";
$res = $conn -> query ($sql);
}

?>

<?php include "views/purchase_report.view.php" ?>
<?php require "modal/purchase_report.modal.php" ?>
<?php include "views/purchase_reportbottom.view.php" ?>
