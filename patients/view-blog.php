<?php include "head.php"; ?>

<body>


<?php include "navbar.php"; ?>
<?php
$bid = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM blogs WHERE blogID='$bid'");
$row = mysqli_fetch_array($result);
?>
<!-- Blog Start -->
<div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="../blogs-img/<?php echo $row['image'] ?>" alt="">
                    <h1 class="mb-4"><?php echo $row['title'] ?></h1>
                    <p><?php echo $row['details'] ?></p>
                    <div class="d-flex justify-content-between bg-light rounded p-4 mt-4 mb-4">
                        <div class="d-flex align-items-center">
                    
                            <span>Admin</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="ms-3"><i class="far fa-calendar text-primary me-1"></i><?php echo $row['date_of_publish'] ?></span>
                            <span class="ms-3"><i class="far fa-heart text-primary me-1"></i><?php echo $row['category'] ?></span>
                        </div>
                    </div>
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 mb-4">Comments</h4>
                    <div class="d-flex mb-4">
                        <div class="ps-3">
<?php
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

                <!-- Comment Form Start -->
                <div class="bg-light rounded p-5">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-white mb-4">Leave a comment</h4>
                    <form action="save-comment.php?id=<?php echo $row['blogID'] ?>" method="POST">
                        <div class="row g-3">        
                            <div class="col-12">
                                <textarea name="comment" class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>
            </div>
            </div>
            </div></div>





<?php include "footer.php"; ?>