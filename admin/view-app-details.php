<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>
<?php
$appid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM nurse_applications WHERE applicationID='$appid'");
$row = mysqli_fetch_array($result);
?>
<!-- About Start -->
<div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="../nurses-profile/<?php echo $row['profile'] ?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                <table class="table table-hover" style="color:black">
                    <tr>
                        <th>Full Name</th>
                        <td><?php echo $row['first_name'] ?> <?php echo $row['last_name'] ?></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <?php if($row['gender']=="Male"){?>
                        <td><i class="fa fa-mars" style="color:blue"></i> <?php echo $row['gender'] ?></td>
                        <?php }else {?>
                        <td><i class="fa fa-venus" style="color:pink"></i> <?php echo $row['gender'] ?></td>
                        <?php } ?>
                    </tr> 
                    <tr>
                        <th>Birthdate</th>
                        <td><i class="fa fa-birthday-cake"></i> <?php echo $row['birthdate'] ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><i class="bi bi-geo-alt-fill"></i> <?php echo $row['address'] ?></td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td><i class="fa fa-envelope"></i> <?php echo $row['email'] ?></td>
                    </tr> 
                    <tr>
                        <th>Phone Number</th>
                        <td><i class="bi bi-telephone-fill"></i> +961 - <?php echo $row['phone'] ?></td>
                    </tr> 
                    <tr>
                        <th>Certificate</th>
                        <td><i class="bi bi-award"></i> <?php echo $row['certificate'] ?></td>
                    </tr>
                    <tr>
                        <th>College</th>
                        <td><i class="fa fa-university"></i> <?php echo $row['college'] ?></td>
                    </tr>
                    <tr>
                        <th>Years of Experience</th>
                        <td><i class="fa fa-briefcase"></i> <?php echo $row['years_of_experience'] ?> years</td>
                    </tr>
                    <tr>
                        <th>Skills</th>
                        <td><i class="bi bi-skills"></i> <?php echo $row['skills'] ?></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><a href="accept-nurse.php?id=<?php echo $row['applicationID'] ?>" class="btn btn-success btn-xs">
                            <i class="bi bi-check-circle-fill"></i> Accept</a>
                            <a href="reject-nurse.php?id=<?php echo $row['applicationID'] ?>" class="btn btn-danger btn-xs">
                            <i class="bi bi-x-circle-fill"></i> Reject</a></td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




<?php include "footer.php"; ?>