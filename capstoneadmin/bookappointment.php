<?php
require_once('appointment/db-connect.php');
session_start();

$shopID = $_SESSION["shopid"];
$shopName = $_SESSION["name_"];

include('includes/header.php');
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="appointment/css/bootstrap.min.css">
    <link rel="stylesheet" href="appointment/fullcalendar/lib/main.min.css">
    <script src="appointment/js/jquery-3.6.0.min.js"></script>
    <script src="appointment/js/bootstrap.min.js"></script>
    <script src="appointment/fullcalendar/lib/main.min.js"></script>
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
            background-color: #534340;
        }

        table,
        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }

        .cal-row-container {
            display: flex;
            /* width: 100%; */
            flex-direction: row;
            /* justify-content: space-between; */
        }

        .cal-date-container {
            user-select: none;
            min-height: 120px;
            padding: 15px;
            /* background-color: #eeeeee; */
            /* border-radius: 3px; */
            border: solid 1px #c7c7c7;
            display: flex;
            /* width: 150px; */
            flex: 1;
            flex-direction: column;
        }

        .cal-appointments {
            font-size: 10pt;
            /* background-color: #03a9f4; */
            /* padding: 5px 10px; */
            /* color: white; */
        }

        .book-date {
            padding: 1px 5px;
            background-color: #03a9f4;
            margin-bottom: 2px;
            border-radius: 3px;
            color: white;
            cursor: pointer;
        }

        .book-date:hover {
            background-color: white;
            color: #826f66;
        }

        .cal-opt {
            display: flex;
            flex-direction: row;
            column-gap: 5px;
            margin-bottom: 10px;
        }

        .cal-opt select {
            border-radius: 3px;
            border: solid 1px #b9b9b9;
            padding: 5px 10px;
            font-weight: bold;
            background-color: #efefef;
        }

        .navbar {
            position: fixed !important;
        }

        .py-5 {
            padding-top: 6rem !important;
        }

        span.day-num {
            font-size: 20pt;
        }

        span.day-name {
            font-size: 10pt;
        }

        .cal-date-container:hover:not(.cal-date-container-selected) {
            background-color: #e2e2e2;
            cursor: pointer;

        }

        .cal-date-container-selected {
            background-color: #826f66;
            /* pointer-events: none; */
            color: white !important;
            border-color: transparent;
        }

        button:disabled {
            background-color: #e2e2e2 !important;
            color: grey !important;
        }

        #btn-book {
            border: none;
            width: 100%;
            background-color: #4caf50;
            padding: 10px 0;
            color: white;
        }

        #btn-book:hover {
            background-color: #149d19;
            cursor: pointer;
        }

        #bg-mod {
            height: 100%;
            width: 100%;
            position: fixed;
            background-color: #00000080;
            z-index: 99;
            display: flex;
            align-items: center;
            justify-content: center;
            display: none;
        }

        .mod-body {
            background-color: white;
            height: auto;
            min-width: 300px;
            padding: 20px;
            border-radius: 3px;
            display: flex;
            flex-direction: column;
        }

        #btn-close {
            align-self: flex-end;
            background: none;
            border: none;
            font-size: 20pt;
            padding: 0 15px;
            color: #ff6262;
            cursor: pointer;
            /* border-radius: 3px; */
            margin-top: -20px;
            margin-right: -20px;
        }

        #btn-close:hover {
            background: #ff6262;
            color: white;
        }

        .mod-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-content: flex-start;
            row-gap: 10px;
        }

        .mod-content div {
            display: flex;
            flex-direction: column;
        }

        .mod-content div span {
            margin-left: 15px;
        }

        #btn-cancelappoi {
            cursor: pointer;
            font-size: 12pt;
            border: none;
            background-color: #ff6262;
            color: white;
            padding: 5px 0;
            border-radius: 3px;
        }

        #btn-cancelappoi:hover {
            background-color: #d14e4e;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .time-range {
            font-size: 7pt;
            text-align: right;
        }

        .cal-details {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</head>

<body class="bg-light">
    <div id="bg-mod">
        <div class="mod-body">
            <button id="btn-close">&times;</button>
            <div class="mod-content">
                <div class="-service">
                    <strong>Service</strong>
                    <span></span>
                </div>
                <div class="-time">
                    <strong>Time of Appointment</strong>
                    <span></span>
                </div>
                <div id="btnplace"></div>
            </div>
        </div>
    </div>

    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="cal-opt">
                <select class="date-opt" id="sel-month">
                    <?php
                        $ms = date('m');
                        $mths = array(
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                            "August",
                            "September",
                            "October",
                            "November",
                            "December"
                        );
                        $c = count($mths);

                        print_r($c);

                        for ($m = 0; $m < $c; $m++) {
                            $r = $m + 1;
                            echo '<option value="' . ($r) . '" ' . ($ms == $r ? "selected" : "") . '>' . $mths[$m] . '</option>';
                        }
                    ?>
                </select>
                <select class="date-opt" id="sel-year">
                    <?php
                    $y = date('Y');
                    for ($i = $y; $i <= 2030; $i++) {
                        echo '<option value="' . $i . '" ' . ($i == $y ? "selected" : "") . '>' . $i . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-9">
                <?php
                $dayName = array(
                    "Sun",
                    "Mon",
                    "Tue",
                    "Wed",
                    "Thu",
                    "Fri",
                    "Sat"
                );
                $dayCount = count($dayName);
                $html = '';
                $always = false;
                $o = false;
                for ($cal_row = 1; $cal_row <= 6; $cal_row++) {
                    $html .= '<div id="cal-row-' . $cal_row . '" class="cal-row-container">';
                    for ($cal_day = 0; $cal_day < $dayCount; $cal_day++) {
                        $dayNum = $cal_day + 1;

                        $resss = $con->query("SELECT day_,time_format(from_,'%h:%i %p') as from_,time_format(to_,'%h:%i %p') as to_,void FROM `schedule` where shopid=" . $shopID . " and day_='" . $dayNum . "'");
                        $ru = $resss->fetch_assoc();
                        $v = "";
                        $available = mysqli_num_rows($resss) > 0;
                        if ($available) {
                            $gh = "";
                            $v = $ru["void"];
                            if ($v == "0") {
                                if ($ru["day_"] == "0") {
                                    if ($ru["from_"] == "" && $ru["to_"] == "") {
                                        $gh = "Closed";
                                    }else{
                                        $gh = "Open";
                                    }
                                } else {
                                    $gh = $ru["from_"] . " - " . $ru["to_"];
                                }
                            } else {
                                $gh = "Closed";
                            }
                        }

                        if($available) {
                            $ev = 'SelectDate(this,`' . $cal_row . '`,`' . $dayNum . '`)';
                        } else {
                            if($v != "1"){
                                $ev = 'SelectDate(this,`' . $cal_row . '`,`' . $dayNum . '`)';
                            }
                        }

                        $html .= '<div onclick="'.$ev.'" id="cal-daywk-' . $cal_row . '-' . $dayNum . '" data-daynum="' . $dayNum . '" data-date="" class="cal-date-container" style="visibility: hidden;">
                            <div class="cal-details" ' . ($dayNum == 1 ? "style='color:red'" : "") . '>
                                <span class="day-num"></span>
                                <span class="day-name">' . $dayName[$cal_day] . '</span>
                                <span class="time-range" style="margin:0;"> </span>
                            </div>
                            <div class="cal-appointments">
                            </div>
                        </div>';
                    }
                    $html .= '</div>';
                }
                echo $html;

                ?>
            </div>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header text-light" style="background-color: #534340">
                        <h5 class="card-title" style="text-align:center"><?php echo $shopName; ?> Schedule Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="appointsched.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <?php 
                                        if(!isset($_SESSION['fullname'])) {
                                            echo '<div class="alert alert-warning">You need to login to access the form.</div>';
                                        }else {
                                            echo '<label for="title" class="control-label">Full Name</label>';
                                            echo '<input type="text" id="in-fullname" class="form-control form-control-sm rounded-0" name="title" id="title" value="'.$_SESSION["fullname"].'" data-userid="'.$_SESSION["userId"].'" data-shopid="'.$shopID.'" required disabled>';
                                            echo '<input type="text" style="display:none;" name="userid" value="'.$_SESSION["userId"].'">';
                                            echo '<input type="text" style="display:none;" name="shopid" value="'.$shopID.'">';
                                            echo '<input type="text" style="display:none;" name="name_" value="'.$shopName.'">';
                                            echo ' <div class="form-group mb-2">
                                            <label for="phonenumber" class="control-label">Contact Number</label>
                                            <input type="phonenumber" class="form-control form-control-sm rounded-0" name="phonenumber" id="phonenumber" name="phonenumber" value="'.$_SESSION["contact"].'" required disabled>
                                            </div>';
                                        }
                                    ?>
                                </div>
                                <div class="form-group mb-2">
                                <label for="description">Choose service:</label>
                                <?php 
                                    if(!isset($_SESSION['fullname'])) {
                                        echo '<select name="service" id="select-service" disabled>';
                                    }else {
                                        echo '<select name="service" id="select-service" required>';
                                    }
                                ?>
                                    <?php
                                        $res = $con->query("SELECT *,s.id as servid FROM services s left join tattoo_products t on s.id=t.serviceid where s.shopid=" . $shopID . " and s.void=0 and t.id is not null");
                                        $opt = "";
                                        while ($i = mysqli_fetch_array($res)) {
                                            $opt .= '<option value="' . $i["servid"] . '">' . $i["type_services"] . '</option>';
                                        }
                                        echo $opt;
                                    ?>
                                </select>
                                </div>
                                <?php 
                                    if(!isset($_SESSION['fullname'])) {
                                        echo '<div class="form-group mb-2">
                                        <label for="start_datetime" class="control-label">Time of Appointment</label>
                                            <input type="time" id="in-dateappointment" onchange="SelectTime()" class="form-control form-control-sm rounded-0" name="date_" id="start_datetime" disabled>
                                        </div>';
                                    }else {
                                        echo '<div class="form-group mb-2">
                                            <label for="start_datetime" class="control-label">Time of Appointment</label>
                                            <input type="time" id="in-dateappointment" onchange="SelectTime()" class="form-control form-control-sm rounded-0" name="date_" id="start_datetime" required>
                                        </div>';
                                    }
                                ?>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button id="btn-book" type="submit" disabled><i class="fa fa-save"></i>Book</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0" style="background-color: #534340">
                    <h5 class="modal-title" style="color: white">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid" style="color: #534340; font-size: 20px">
                        <dl>
                            <dt class="text-muted">Service</dt>
                            <dd id="description" class="fw-bold fs-4"></dd>

                            <dt class="text-muted">Date of Appointment</dt>
                            <dd id="start" class="fw-bold fs-4"></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="" data-userid="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <script src="./bookappointment.js"></script>
    <!-- <script src="appointment/js/script.js"></script> -->

</html>