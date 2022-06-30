<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Datatable CSS -->
  <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

  <!-- jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Datatable JS -->
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>

<body>
  <div>
    <button class="btn btn-primary" onclick="addRow()">Add Task</button>
    <div class='container'>

      <!-- Modal -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Delete row</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Do you really want to delete?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Delete</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Table -->
      <table id='userTable' class='display dataTable' width='100%'>
        <thead>
          <tr>
            <th>SLNo</th>
            <th>Task Name</th>
            <th>Start Date&time</th>
            <th>End Date&time</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>

    </div>
  </div>

  <script>
    $(document).ready(function() {
      $("#userTable").DataTable({
        "processing": true,
        "serverSide": true,
        "serverMethod": "post",
        "ajax": {
          "url": "ajaxFile.php"
        },
        "columns": [{
            data: "SNo"
          },
          {
            data: "taskName"
          },
          {
            data: "startDate"
          },
          {
            data: "endDate"
          },
          {
            data: "priority"
          },
          {
            data: "status"
          },
          {
            data: "action"
          },
        ]
      })
    });
  </script>

  <script>
    function addRow() {
      window.location.href = "index.php";
    }
  </script>

</body>

</html>