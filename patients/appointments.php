<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointments</h5>
                        <h1 class="display-4">Your Appointments</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
                <th>Nurse Name</th>
				<th>Appointment Details</th>
                <th>Coming Time</th>
				<th>Status</th>
                <th>Bill Details</th>
				<th>Total Price</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM appointments WHERE patientID='$pid' ORDER BY date desc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
    $nid = $row['nurseID'];
    $aid = $row['availabilityID'];

    $resultn = mysqli_query($con,"SELECT * FROM nurses WHERE nurseID='$nid'");
    $rown = mysqli_fetch_array($resultn);

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
				<td><?php echo $n ?></td>
                <td><i class="fa fa-user-md"></i> <?php echo $rown['first_name'] ?> <?php echo $rown['last_name'] ?></td>
                <td><i class="bi bi-calendar3"></i> <?php echo $rowa['day'] ?>: <?php echo $row['date'] ?>
                    <br><?php echo $rowa['work_time'] ?></td>
                <td><i class="bi bi-alarm-fill"></i> <?php echo $row['coming_time'] ?></td>

                <?php if($row['status'] == 0){ ?>
                    <td>Pending</td>
                <?php } else if($row['status'] == 1){ ?>
                    <td class="text-success"><i class="bi bi-check-circle-fill"></i> Accepted</td>
                <?php } else { ?>
                    <td class="text-danger"><i class="bi bi-x-circle-fill"></i> Rejected</td>
                <?php } ?>
                <td>Total Number of Hours: <?php echo $total_hours?> hours<br> Price per Hour: <?php echo $price ?>$</td>
                <td><i class="bi bi-cash"></i> <?php echo $totalPrice ?>$</td>
			</tr>
                <?php $n++; }} else {echo "No Appointments Found";}?>	
		    </table>
            </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
 
    <?php include "footer.php"; ?>