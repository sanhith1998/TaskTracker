<?php
require_once("connection.php");
if(isset($_POST['submit']))
{
$TaskName = $_POST['task'];
$SDate = $_POST['sdate'];
$Edate = $_POST['edate'];
$Priority = $_POST['priority'];

echo $TaskName."<br>";
echo $SDate."<br>";
echo $Edate."<br>";
echo $Priority."<br>";
// $sql="INSERT INTO `empdata` (`SlNo`, `TaskName`, `StartDate&Time`, `EndDate&Time`, `Priority`, `Status`) VALUES (NULL, '$TaskName', '$SDate', '$Edate', '$Priority', null)";
$sql="INSERT INTO `empdata`( `TaskName`, `StartDate&Time`, `EndDate&Time`, `Priority`) VALUES ('$TaskName','$SDate','$Edate','$Priority')";

echo $sql."<br>";
if($con->query($sql)){
    header("location:table.php");
}else{
    echo $con->error;
}
}
else{
    header("Location:/Tasktracker/");
}
?>
