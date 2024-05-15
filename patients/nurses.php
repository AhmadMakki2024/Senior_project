<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>


<!-- Search Result Start -->
<div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
<?php
$result = mysqli_query($con,"SELECT * FROM nurses");
if(mysqli_num_rows($result)>0){   
while($row = mysqli_fetch_array($result)){
?>
                <div class="col-lg-6 team-item">
                    <div class="row g-0 bg-light rounded overflow-hidden">
                        <div class="col-12 col-sm-4 h-200">
                            <img class="img-fluid h-100" src="../nurses-profile/<?php echo $row['profile'] ?>" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-8 h-100 d-flex flex-column">
                            <div class="mt-auto p-4">
                                <h3><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></h3>
                                <h6 class="fw-normal fst-italic text-primary mb-4"><?php echo $row['certificate'] ?> graduated from <?php echo $row['college'] ?></h6>
                                <p class="m-0"><?php echo $row['skills'] ?></p>
                                <a class="" href="nurse-details.php?id=<?php echo $row['nurseID'] ?>">
                                <i class="fa fa-arrow-right"></i> View Details</a>
                            </div>
                            <div class="d-flex mt-auto border-top p-2">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="bi bi-telephone"></i></a><?php echo $row['phone'] ?>
                            </div>
                            <div class="d-flex border-top p-2">
                                <a class="btn btn-s btn-primary me-2" href="request-appointment.php?id=<?php echo $row['nurseID'] ?>">Request Appointment</a>
                                <a class="btn btn-s btn-primary me-2" href="request-service.php?id=<?php echo $row['nurseID'] ?>">Request Service</a>
                            </div>
                        </div>
                    </div>
                </div>
<?php }} ?>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
