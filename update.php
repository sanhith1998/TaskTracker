<?php
require_once("connection.php");
if (isset($_POST['update'])) {
  $getNo = $_GET['Getno'];
  $TaskName = $_POST['task'];
  $SDate = $_POST['sdate'];
  $Edate = $_POST['edate'];
  $Priority = $_POST['priority'];
  $Status = $_POST['Status'];
  $sql =
    "UPDATE `empdata`
   SET `TaskName` = '" . $TaskName . "', 
  `StartDate&Time` = '" . $SDate . "', 
  `EndDate&Time` = '" . $Edate . "',
  `Priority` = '" . $Priority . "',
  `Status` = '" . $Status . "'
  WHERE `empdata`.`SlNo` = '" . $getNo . "'";
  if ($con->query($sql)) {
    header("location:table.php");
  } else {
    echo $con->error;
  }
} else {
  header("location:table.php");
}
