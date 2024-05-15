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
                <th>Patient Name</th>
				<th>Appointment Details</th>
				<th>Status</th>
				<th>Total Price</th>
                <th>View All Details</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM appointments WHERE nurseID='$nid' ORDER BY date desc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
    $pid = $row['patientID'];
    $aid = $row['availabilityID'];

    $resultn = mysqli_query($con,"SELECT * FROM patients WHERE patientID='$pid'");
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
                <td><?php echo $rown['first_name'] ?> <?php echo $rown['last_name'] ?></td>
                <td><?php echo $rowa['day'] ?>: <?php echo $row['date'] ?>
                    <br><?php echo $rowa['work_time'] ?>
                    <br>Coming Time: <?php echo $row['coming_time'] ?></td>
            
                <?php if($row['status'] == 0){ ?>
                    <td>Pending</td>
                <?php } else if($row['status'] == 1){ ?>
                    <td class="text-success">Accepted</td>
                <?php } else { ?>
                    <td class="text-danger">Rejected</td>
                <?php } ?>
                <td><?php echo $totalPrice ?>$</td>
                <td><a href="appointment-details.php?id=<?php echo $row['appointmentID'] ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
			</tr>
                <?php $n++; }} else {echo "No Appointments Found";}?>	
		    </table>
            </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
 
    <?php include "footer.php"; ?>