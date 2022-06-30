<?php
require_once("connection.php");
$request = 1;
if (isset($_POST['request'])) {
    $request = $_POST['request'];
}

// DataTable data
if ($request == 1) {
    ## Read value
    $draw = $_POST['draw'];
    $row = $_POST['start'];
    $rowperpage = $_POST['length']; // Rows display per page
    $columnIndex = $_POST['order'][0]['column']; // Column index
    $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
    $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc

    $searchValue = mysqli_escape_string($con, $_POST['search']['value']); // Search value

    ## Search 
    $searchQuery = " ";
    if ($searchValue != '') {
        $searchQuery = " and (
            TaskName like '%" . $searchValue . "%' or
            Priority like '%" . $searchValue . "%' or
            Status like'%" . $searchValue . "%' ) ";
    }

    ## Total number of records without filtering
    $sel = mysqli_query($con, "select count(*) as allcount from empdata");
    $records = mysqli_fetch_assoc($sel);
    $totalRecords = $records['allcount'];

    ## Total number of records with filtering
    $sel = mysqli_query($con, "select count(*) as allcount from empdata WHERE 1 " . $searchQuery);
    $records = mysqli_fetch_assoc($sel);
    $totalRecordwithFilter = $records['allcount'];

    ## Fetch records
    // $empQuery = "select * from empdata WHERE 1 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
    // $empRecords = mysqli_query($con, $empQuery);
    $sql = "select * from empdata WHERE 1 " . $searchQuery . " limit " . $row . "," . $rowperpage;
    $result = mysqli_query($con, $sql);
    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {

        $EditButton = "<a class='btn btn-sm btn-success' href='edit.php?GetNo=" . $row['SlNo'] . "'>Edit</a>";
        $deleteButton = "<a class='btn btn-sm btn-danger' href='delete.php?GetNo=" . $row['SlNo'] . "'>Delete</a>";
        
        $action1 = $EditButton . " " . $deleteButton;
        $action2 = $EditButton;
        $action3 = "";

        // $actionRes = ($row['Status'] == "Not yet") ? $action1 : ($row['Status' == "InProgress"]) ? $action2 : $action3;
        // $actionRes = ($row['Status'] == "Not yet") ? $action1 : $action2;
        $actionRes = ($row['Status'] == "Not yet") ? $action1 : ($row['Status'] == "InProgress" ? $action2 : $action3);
// $actionRes = "";

//         if ($row['Status'] == "Not yet") {
//             $actionRes = $action1;
//         } elseif ($row['Status' == "InProgress"]) {
//             $actionRes = $action2;
//         } else{
//             $actionRes = $action3;
//         }


        // if ($t < "10") {
        //     echo "Have a good morning!";
        //   } elseif ($t < "20") {
        //     echo "Have a good day!";
        //   } else {
        //     echo "Have a good night!";
        //   }

        $data[] = array(
            "SNo" => $row['SlNo'],
            "taskName" => $row['TaskName'],
            "startDate" => $row['StartDate&Time'],
            "endDate" => $row['EndDate&Time'],
            "priority" => $row['Priority'],
            "status" => $row['Status'],
            "action" => $actionRes
        );
    }

    ## Response
    $response = array(
        "draw" => intval($draw),
        "iTotalRecords" => $totalRecords,
        "iTotalDisplayRecords" => $totalRecordwithFilter,
        "aaData" => $data
    );

    echo json_encode($response);
    exit;
}
