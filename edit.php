<!DOCTYPE html>
<?php
require_once("connection.php");
$getNo = $_GET['GetNo'];
$sql = "select * from empdata where SlNo='" . $getNo . "'";
$result = mysqli_query($con, $sql);
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Manager</title>
  <link rel="stylesheet" href="./index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container mt-5">
    <h1>Update-Task</h1>
    <form class="row g-3" action="update.php?Getno=<?php echo $getNo  ?>" method="post">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {

      ?>

        <div class="col-md-6">
          <label for="taskName" class="form-label">Task Name</label>
          <input type="text" name="task" placeholder="Task Name" value=<?php echo $row['TaskName'] ?> class="form-control" id="taskName">
        </div>
        <div class="col-md-6">
          <label class="form-label">Start Date & time</label>
          <div class='input-group date' id='datetimepicker1'>
            <input type='date' class="form-control" placeholder="Start Date & time" value=<?php echo $row['StartDate&Time'] ?> name="sdate" />
          </div>
        </div>
        <div class="col-md-6">
          <label class="form-label">End Date & time</label>
          <div class='input-group date' id='datetimepicker2'>
            <input type='date' class="form-control" format="YYYY-MM-DD hh:mm:00 a" placeholder="End Date & time" value=<?php echo $row['EndDate&Time'] ?> name="edate" />
          </div>
        </div>
        <div class="col-md-6">
          <label class="form-label">Priority</label>
          <select name="priority" class="form-select form-control">
            <option selected class="text-danger"><?php echo $row["Priority"]; ?></option>
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
          </select>
        </div>
        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select name="Status" class="form-select form-control">
            <option selected class="text-danger"><?php echo $row["Status"]; ?></option>
            <option value="Not Yet">Not yet</option>
            <option value="InProgress">InProgress</option>
            <option value="Completed">Completed</option>
          </select>
        </div>
        <div class="col-md-12">
          <button type="submit" name="update" class="btn btn-primary">Update</button>
        </div>
      <?php
      }
      ?>
    </form>
  </div>
  <script type="text/javascript">
    // $(function() {
    //   $('#datetimepicker1').datetimepicker();
    // });
    // $(function() {
    //   $('#datetimepicker2').datetimepicker();
    // });
  </script>



</body>

</html>