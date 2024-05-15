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

                

            </div>
            </div>
            </div>
            </div></div>





<?php include "footer.php"; ?>