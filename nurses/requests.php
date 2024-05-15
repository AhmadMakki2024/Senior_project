<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Appointment Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Requests</h5>
                        <h1 class="display-4">Your Service Requests</h1>
                    </div>
                    <table class="table table-hover" style="color:black">
			<tr>
				<th>No.</th>
                <th>Patient Name</th>
                <th>Date & Time</th>
				<th>Service Name</th>
				<th>Status</th>
				<th>Price</th>
                <th>View All Details</th>
			</tr>
<?php
$result = mysqli_query($con,"SELECT * FROM service_requests WHERE nurseID='$nid' ORDER BY date desc");
if(mysqli_num_rows($result)>0){  $n=1;  
while($row = mysqli_fetch_array($result)){
    $pid = $row['patientID'];
    $sid = $row['serviceID'];

    $resultn = mysqli_query($con,"SELECT * FROM patients WHERE patientID='$pid'");
    $rown = mysqli_fetch_array($resultn);

    $result_s = mysqli_query($con,"SELECT * FROM services WHERE serviceID='$sid'");
    $row_s = mysqli_fetch_array($result_s);

    $price = $row_s['price'];
?>
				<td><?php echo $n ?></td>
                <td><?php echo $rown['first_name'] ?> <?php echo $rown['last_name'] ?></td>
                <td>Date: <?php echo $row['date'] ?>
                <br>Time: <?php echo $row['time'] ?></td>
                <td><?php echo $row_s['name'] ?></td>
            
                <?php if($row['status'] == 0){ ?>
                    <td>Pending</td>
                <?php } else if($row['status'] == 1){ ?>
                    <td class="text-success"><i class="bi bi-check-circle-fill"></i> Accepted</td>
                <?php } else { ?>
                    <td class="text-danger"><i class="bi bi-x-circle-fill"></i> Rejected</td>
                <?php } ?>
                <td><?php echo $price ?>$</td>
                <td><a href="request-details.php?id=<?php echo $row['requestID'] ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
			</tr>
                <?php $n++; }} else {echo "No Requests Found";}?>	
		    </table>
            </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
 
    <?php include "footer.php"; ?>