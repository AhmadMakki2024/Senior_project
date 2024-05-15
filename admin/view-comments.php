<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>

<!-- Blog Start -->
<div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">

<!-- Comment List Start -->
<div class="mb-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Comments</h4>
                    <div class="d-flex mb-4">
                        <div class="ps-3">
<?php
$bid = $_GET['id'];
$resultc = mysqli_query($con,"SELECT * FROM comments WHERE blogID='$bid'");
if(mysqli_num_rows($resultc)>0){   
while($rowc = mysqli_fetch_array($resultc)){
    $patientid = $rowc["patientID"];

    $resultp = mysqli_query($con,"SELECT * FROM patients WHERE patientID='$patientid'");
    $rowp = mysqli_fetch_array($resultp);

?>
                            <h6><a href=""><?php echo $rowp["first_name"]?> <?php echo $rowp["last_name"]?></a>
                            <small><i> <?php echo $rowc["date"]?></i></small></h6>
                            
                            <p><?php echo $rowc["comment"]?></p>
                            <?php }} ?>
                        </div>
                    </div>
                <!-- Comment List End -->

                </div>
            </div></div>
            </div>
            </div></div>
<?php include "footer.php"; ?>