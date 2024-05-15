<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>
<?php
$reqid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM service_requests WHERE requestID='$reqid'");
$row = mysqli_fetch_array($result);
    $pid = $row['patientID'];
    $sid = $row['serviceID'];

    $resultp = mysqli_query($con,"SELECT * FROM patients WHERE patientID='$pid'");
    $rowp = mysqli_fetch_array($resultp);

    $result_s = mysqli_query($con,"SELECT * FROM services WHERE serviceID='$sid'");
    $row_s = mysqli_fetch_array($result_s);

    $price = $row_s['price'];
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
                <h3>Request Info</h3>
                    <table class="table table-hover" style="color:black">
                    <tr>
                        <th>Request ID</th>
                        <td><?php echo $row['requestID'] ?></td>
                    </tr>
                    <tr>
                        <th>Day</th>
                        <td><i class="bi bi-calendar3"></i> <?php echo $row['date'] ?></td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td><i class="fa fa-clock"></i> <?php echo $row['time'] ?></td>
                    </tr>
                    <tr>
                        <th>Service Name</th>
                        <td><i class="fa fa-medkit"></i> <?php echo $row_s['name'] ?></td>
                    </tr> 
                    <tr>
                        <th>Price</th>
                        <td><i class="bi bi-cash"></i> <?php echo $price ?> USD</td>
                    </tr>
                    <tr>
                        <?php if($row['status']==0){?>
                        <th></th>
                        <td><a href="accept-request.php?id=<?php echo $row['requestID'] ?>" class="btn btn-success btn-xs">
                            <i class="bi bi-check-circle-fill"></i> Accept</a>
                            <a href="reject-request.php?id=<?php echo $row['requestID'] ?>" class="btn btn-danger btn-xs">
                            <i class="bi bi-x-circle-fill"></i> Reject</a></td>
                        <?php } else if($row['status']==1){?>
                            <th>Request Status</th>
                            <td class="text-success"><i class="bi bi-check-circle-fill"></i> Accepted</a></td>  
                        <?php } else {?>
                            <th>Request Status</th>
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