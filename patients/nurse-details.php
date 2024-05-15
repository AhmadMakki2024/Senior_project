<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>
<?php
$nid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM nurses WHERE nurseID='$nid'");
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
                        <?php }else{?>
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
                </table>
               
            
            <div class="row g-3 pt-3">
                <h3>Services Offered</h3>
<?php
$result = mysqli_query($con,"SELECT * FROM services WHERE nurseID='$nid'");
if(mysqli_num_rows($result)>0){ $n=1;
while($row = mysqli_fetch_array($result)){
?>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <h1 class="text-primary"><?php echo $n ?></h1>
                                <h5 class="mb-1"><?php echo $row['name'] ?></h5>
                                <h6 class="mb-3"><?php echo $row['price'] ?>$</h6>
                            </div>
                        </div>
                        <?php $n++;}} else {echo 'No services available';}?>
        </div></div> </div></div> </div>
    </div>
    <!-- About End -->




<?php include "footer.php"; ?>