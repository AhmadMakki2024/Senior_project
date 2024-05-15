<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>
<?php
$appid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM appointments WHERE appointmentID='$appid'"); 
$row = mysqli_fetch_array($result);
    $pid = $row['patientID'];
    $aid = $row['availabilityID'];

    $resultp= mysqli_query($con,"SELECT * FROM patients WHERE patientID='$pid'");
    $rowp= mysqli_fetch_array($resultp);

    $resulta = mysqli_query($con,"SELECT * FROM availability WHERE availabilityID='$aid'");
    $rowa = mysqli_fetch_array($resulta);


    $time = $rowa['work_time'];
    $price = $rowa['price_per_hour'];
    $total_hours = 0;
        if($time == "Half Day (from 8:00 am to 2:00 pm)" || $time == "Half Day (from 2:00 pm to 8:00 pm)"){
            $total_hours = 6;  
       }
       else if($time == "Full Day (from 8:00 am to 6:00 pm)"){
        $total_hours = 10;
    }
    else if($time == "Night Shift (from 8:00 pm to 6:00 am)"){
        $total_hours = 10;
    }
    else if($time == "24 Hours"){
        $total_hours = 24;
    }
    $totalPrice = $total_hours * $price;
?>
<!-- About Start -->
<div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <h3>Patient Info</h3>
                    <table class="table table-hover" style="color:black">
                    <tr>
                        <th>Full Name</th>
                        <td><i class="fa fa-bed"></i> <?php echo $rowp['first_name'] ?> <?php echo $rowp['last_name'] ?></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <?php if($rowp['gender']=="Male"){?>
                        <td><i class="fa fa-mars" style="color:blue"></i> <?php echo $rowp['gender'] ?></td>
                        <?php }else{?>
                        <td><i class="fa fa-venus" style="color:pink"></i> <?php echo $rowp['gender'] ?></td>
                        <?php } ?>
                    </tr> 
                    <tr>
                        <th>Birthdate</th>
                        <td><i class="fa fa-birthday-cake"></i> <?php echo $rowp['birthdate'] ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><i class="bi bi-geo-alt-fill"></i> <?php echo $rowp['address'] ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td><i class="bi bi-telephone-fill"></i> +961 - <?php echo $rowp['phone'] ?></td>
                    </tr> 
                </table>


                    </div>
                </div>
                <div class="col-lg-6">
                <h3>Appointment Info</h3>
                    <table class="table table-hover" style="color:black">
                    <tr>
                        <th>Appointment ID</th>
                        <td><?php echo $row['appointmentID'] ?></td>
                    </tr>
                    <tr>
                        <th>Day</th>
                        <td><i class="bi bi-calendar-day-fill"></i> <?php echo $rowa['day'] ?>: <?php echo $row['date'] ?></td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td><i class="bi bi-calendar3"></i> <?php echo $row['date'] ?></td>
                    </tr>
                    <tr>
                        <th>Working Time</th>
                        <td><i class="fa fa-clock"></i> <?php echo $rowa['work_time'] ?></td>
                    </tr>
                    <tr>
                        <th>Coming Time</th>
                        <td><i class="bi bi-alarm-fill"></i> <?php echo $row['coming_time'] ?></td>
                    </tr>
                    <tr>
                        <th>Total Work Hours</th>
                        <td><?php echo $total_hours ?> hours</td>
                    </tr> 
                    <tr>
                        <th>Price per Hour</th>
                        <td><?php echo $price ?> USD</td>
                    </tr>
                    <tr>
                        <th>Total Work Hours</th>
                        <td><i class="bi bi-cash"></i> <?php echo $totalPrice ?> USD</td>
                    </tr>
                    <tr>
                        <?php if($row['status']==0){?>
                        <th></th>
                        <td><a href="accept-appointment.php?id=<?php echo $row['appointmentID'] ?>" class="btn btn-success btn-xs">
                            <i class="bi bi-check-circle-fill"></i> Accept</a>
                            <a href="reject-appointment.php?id=<?php echo $row['appointmentID'] ?>" class="btn btn-danger btn-xs">
                            <i class="bi bi-x-circle-fill"></i> Reject</a></td>
                        <?php } else if($row['status']==1){?>
                            <th>Appointment Status</th>
                            <td class="text-success"><i class="bi bi-check-circle-fill"></i> Accepted</a></td>  
                        <?php } else {?>
                            <th>Appointment Status</th>
                            <td class="text-danger"><i class="bi bi-x-circle-fill"></i> Rejected</a></td>  
                        <?php } ?>

                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




<?php include "footer.php"; ?>