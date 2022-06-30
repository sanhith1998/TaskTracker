<?php
require_once("connection.php");
$getNo = $_GET['GetNo'];
if (isset($_POST['button2'])) {
    $sql = "DELETE FROM `empdata` WHERE SlNo='" . $getNo . "'";
    $delete = mysqli_query($con, $sql);
    if ($delete) {
        header("location:table.php");
    } else {
        echo "Please check the query";
    }
}
if (isset($_POST['button1'])) {
    header("location:table.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <button hidden class="btn btn-warning" id="myInput" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="checkModal()">click</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you really want to delete data?
                </div>
                <div class="modal-footer">
                    <form method="post">
                        <input type="submit" class="btn btn-secondary" value="No" name="button1" />
                        <input type="submit" class="btn btn-primary" name="button2" value="Yes" data-bs-dismiss="modal" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            let myInput = document.getElementById('myInput')
            myInput.click()
            //  myInput.focus()
            console.log("ready!");
        });
    </script>
</body>

</html>