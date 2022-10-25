<?php require_once('db-connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: 'Poppins', sans-serif;
        }

        .btn-warning .text-light:hover,
        .btn .text-light:focus {
            background-color:  #534340;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header text-light" style="background-color: #534340">
                        <h5 class="card-title" style="text-align:center">Herchel Vape and Ink Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">                   
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Full Name</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="phonenumber" class="control-label">Contact Number</label>
                                    <input type="phonenumber" class="form-control form-control-sm rounded-0" name="phonenumber" id="phonenumber" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description">Choose a Services:</label>
                                        <select name="description" id="description" required>
                                            <option value="Tattoo">Tattoo</option>
                                            <option value="Piercing">Piercing</option>
                                            <option value="Cosmetic Tattoo">Cosmetic Tattoo</option>
                                        </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Date of Appointment</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn-sm rounded-0" style="background-color:  #534340; color: white" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-warning border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0" >
                <div class="modal-header rounded-0" style="background-color: #534340">
                    <h5 class="modal-title" style="color: white" >Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid" style="color: #534340; font-size: 20px">
                        <dl>
                            <dt class="text-muted">Full Name</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>

                            <dt class="text-muted">Services</dt>
                            <dd id="description" class="fw-bold fs-4"></dd>

                            <dt class="text-muted">Date of Appointment</dt>
                            <dd id="start" class="fw-bold fs-4"></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

<?php 
$schedules = $con->query("SELECT * FROM `appointment`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($con)) $con->close();
?>
</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>

</html>