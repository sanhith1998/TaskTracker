<!DOCTYPE html>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
    <div class="container mt-5">
  <h1>Task Tracker</h1>
<form class="row g-3"action="insert.php" method="post">

    <div class="col-md-6">
<label for="taskName" class="form-label">Task Name</label>
<input type="text" name="task" placeholder="Task Name" class="form-control" id="taskName">
    </div>
    <div class="col-md-6">
        <label  class="form-label">Start Date & time</label>
        <div class='input-group date' id='datetimepicker1'>
            <input type='date' class="form-control" placeholder="Start Date & time" name="sdate" />
        </div>
    </div>
        <div class="col-md-6">
            <label  class="form-label">End Date & time</label>
            <div class='input-group date' id='datetimepicker2'>
                <input type='date' class="form-control" placeholder="End Date & time" name="edate" />
            </div>    
            </div>
            <div class="col-md-6">
                <label  class="form-label">Priority</label>
                <select name="priority" class="form-select form-control">
                 <option value="Low" >Low</option>   
                 <option value="Medium">Medium</option>
                 <option value="High">High</option>
                </select>
                </div>
             <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-primary">Add Task</button> 
             </div>
</form>
</div>
<script type="text/javascript">
  // $(function(){
  //   $('#datetimepicker1').datetimepicker({format:'YYYY-MM-DD hh:mm:00 a'});
  // });
  // $(function(){
  //   $('#datetimepicker2').datetimepicker({format:'YYYY-MM-DD hh:mm:00 a'});
  // });
</script>
</body>
</html>
